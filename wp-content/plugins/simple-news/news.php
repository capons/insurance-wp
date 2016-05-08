<?php

/*
Plugin Name: Simple News
Plugin URI: <a href="http://www.hjemmesider.dk"<br />
Description:</a> Simple list of News - Wordpress Shortcode Options and a Widget view.
Version: 1.03
Author: Morten Andersen
Author URI: http://www.hjemmesider.dk.dk
*/

// Load the plugin's text domain

function hjemmesider_news_init() {
    load_plugin_textdomain('newsdomain', false, dirname(plugin_basename(__FILE__)) . '/translation');
}
add_action('plugins_loaded', 'hjemmesider_news_init');

// News Posttype

function hjemmesider_news_create_posttype() {

    register_post_type('news', array('labels' => array('name' => __('News', 'newsdomain'), 'singular_name' => __('News', 'newsdomain')), 'public' => true, 'menu_icon' => 'dashicons-calendar-alt', 'taxonomies' => array('category'), 'has_archive' => true, 'supports' => array('title', 'editor', 'excerpt', 'thumbnail'), 'rewrite' => array('slug' => 'news'),));
}

add_action('init', 'hjemmesider_news_create_posttype');

// Images

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('news_plugin_small', 80, 80, true);
}

// News Shortcode

add_shortcode('news', 'hjemmesider_news');
function hjemmesider_news($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(array('order' => 'date', 'number' => - 1, 'cat' => 'cat'), $atts));

    // define query parameters based on attributes
    $options = array('post_type' => 'news', 'post__not_in' => array($post->ID), 'order' => $order, 'orderby' => 'date', 'posts_per_page' => $number, 'cat' => array($cat));
    $query = new WP_Query($options);

    // run the loop based on the query
    if ($query->have_posts()) { ?>
        <ul class="news__list hjemmesider__liste">
            <?php
        while ($query->have_posts()):
            $query->the_post(); ?>
            <li><a href="<?php
            the_permalink(); ?>">
            <?php
            the_post_thumbnail('news_plugin_small'); ?>
            <h4><?php
            the_title(); ?></h4>
            <?php
            the_excerpt(); ?>
            </a></li>
            <?php
        endwhile;
        wp_reset_postdata(); ?>
        </ul>
    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}

// News style sheet

add_action('wp_enqueue_scripts', 'hjemmesider_news_register_plugin_styles');
function hjemmesider_news_register_plugin_styles() {
    wp_register_style('news', plugins_url('simple-news/css/news-min.css'));
    wp_enqueue_style('news');
}

// Widget



/**
 * Adds Hjemmesider_news_widget widget.
 */
class Hjemmesider_news_widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct('Hjemmesider_news_widget',

        // Base ID
        __('News', 'newsdomain'),

        // Name
        array('description' => __('List News', 'newsdomain'),)

        // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $query_args = array('post_type' => 'news', 'posts_per_page' => 5,);

        // The Query
        $the_query = new WP_Query($query_args);

        // The Loop
        if ($the_query->have_posts()) {
            echo "\r\n" . '<ul class="news__list">' . "\r\n";
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<li>' . '<a href="' . get_the_permalink() . '">' . get_the_post_thumbnail(get_the_ID(), 'news_plugin_small') . get_the_title() . '</a>' . '</li>' . "\r\n";
            }
            echo '</ul>' . "\r\n";
            echo '<p class="footer__link"><a href="' . get_bloginfo('url') . '/news">' . __('More News', 'newsdomain') . '</a></p>' . "\r\n";
        }
        else {

            echo "\r\n" . '<p><strong>' . __('No News found', 'newsdomain') . '</strong></p>' . "\r\n";
        }

        /* Restore original Post Data */
        wp_reset_postdata();

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('News', 'newsdomain');
?>
        <p>
        <label for="<?php
        echo $this->get_field_id('title'); ?>"><?php
        _e('Title:'); ?></label>
        <input class="widefat" id="<?php
        echo $this->get_field_id('title'); ?>" name="<?php
        echo $this->get_field_name('title'); ?>" type="text" value="<?php
        echo esc_attr($title); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
}

// register Hjemmesider_news_Widget widget
function register_Hjemmesider_news_widget() {
    register_widget('Hjemmesider_news_widget');
}
add_action('widgets_init', 'register_Hjemmesider_news_widget');
