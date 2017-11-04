<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nhbz
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title( ); ?></title>
	<meta content="width=device-width, initial-scale=0.8, user-scalable=no" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="middle">
		<div class="header_logo_box">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Картинка">
		</div>
		
		<div class="header_info_box">
			<div class="header_social">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/you.png" alt=""></a>
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/f.png" alt=""></a>
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/vk.png" alt=""></a>
			</div>
			<div class="header_phone">
				<img src="<?php bloginfo('template_url'); ?>/img/h_phone.png" alt=""><a href="tel:<?php echo str_replace(array("(",")","-"," "), '', carbon_get_theme_option('main-tel')); ?>"><?php echo carbon_get_theme_option('main-tel') ?></a>
			</div>
			<div class="header_price">
				<a href="#">оптовый прайс</a>
			</div>
		</div>
	</div>
</header>
<nav>
<button class="click"><img src="<?php bloginfo('template_url'); ?>/img/iconfindermenu.svg" alt=""></button>
	<?php wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'menu'            => '', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s middle">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				) ); ?>
<!-- 	<ul class="middle">
		<li><a href="#">Новости</a></li>
		<li><a href="#">О продукции</a></li>
		<li><a href="#">как мы работаем</a></li>
		<li><a href="#">тренинги/семинары</a></li>
		<li><a href="#">партнеры/агенты</a></li>
		<li><a href="#">контакты</a></li>
	</ul> -->
</nav>
