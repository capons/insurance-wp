<?php
/* Template name: news_post */

get_header(); ?>



<?php if(have_posts()): while(have_posts()):the_post();?>
    <?php the_content(); ?>
    <?php
    $args=array(
        'category_name' => 'news',
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        echo 'ВСЕ НОВОСТИ';
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
            <?php
            the_excerpt();
        endwhile;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
    ?>

<?php endwhile; endif; ?>

<?php
get_footer();

