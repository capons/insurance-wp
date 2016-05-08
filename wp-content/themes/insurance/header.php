<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package insurance
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>
		<?php
		/*
        * Print the <title> tag based on what is being viewed.
        */
		global $page, $paged;
		wp_title( '-&nbsp;', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
		?>
	</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Clear+Sans+Thin">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="<?php bloginfo("template_directory");?>/style/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!--Slider main JS file -->
	<script src="<?php bloginfo("template_directory");?>/js/sliderWD/jquery.mobile.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/sliderWD/wds.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/sliderWD/wds_frontend.js"></script>
	<!--logo slider -->
	<script src="<?php bloginfo("template_directory");?>/js/logo-slider/jquery.cycle.all.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/logo-slider/lgs_jquery.cycle2.js"></script>
	<?php// wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<section id="s-menu">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid navmenu">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>


					<div class="collapse navbar-collapse navmenu" id="bs-example-navbar-collapse-1">
						<!--
						<ul class="nav navbar-nav">
							<li><a href="index.php">Главная</a></li>
							<li><a href="second_layout.php">Полезная информация</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Отзывы</a></li>
						</ul>
						-->
						<?php
						wp_nav_menu( array(
								'menu' => 'main menu',
								//'depth' => 2,
								'container' => false,
								'menu_class' => 'nav navbar-nav',
								//Process nav menu using our custom nav walker
								'walker' => new wp_bootstrap_navwalker()) //libs/wp-bootstrap
						);
						?>
						<form style="margin-bottom: 0px" class="navbar-form navbar-right" role="search" action="<?php echo home_url( '/' ); ?>">
							<div class="h-m-block">
								<div class="form-group s-form">
									<input id="s-input-h" type="text" class="form-control" placeholder="Поиск">
								</div>
								<div class="form-group s-form">
									<button id="s-button" type="submit" class="btn btn-default"></button>
								</div>
							</div>
						</form>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</section>
	<section id="header-content">
		<div class="container">
			<div class="col-lg-3 h-content">
				<img id="h-logo" src="<?php bloginfo("template_directory");?>/image/logo.png" alt="alt">
			</div>
			<div class="col-lg-6 h-content">
				<p id="h-onmarket">НА РЫНКЕ СТРАХОВАНИЯ С 1997 года</p>
				<div id="h-content-info" class="col-xs-12 no-padding">
					<ul>
						<li>
							<p class="h-cont-p no-margin">ЧАСТНЫМ КЛИЕНТАМ</p>
						</li>
						<li>
							<p class="h-cont-p no-margin" >КОРПОРАТИВНЫМ КЛИЕНТАМ</p>
						</li>
						<li>
							<p class="h-cont-p no-margin" >ОБ АГЕНСТВЕ</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 h-content">
				<div id="h-cont-al-ds">
					<span id="d-sp-p">+7(473)</span><span id="d-sp">239 31 07</span>
				</div>
				<p class="office_n no-margin">+7 (906) 584 28 26</p>
				<p class="saleoffice no-margin">Офис продаж</p>
			</div>
		</div>
	</section>
</header>
