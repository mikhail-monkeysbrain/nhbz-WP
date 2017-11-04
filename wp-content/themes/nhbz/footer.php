<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nhbz
 */

?>

<footer>
	<div class="middle">
		<div class="footer_logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logo_f.png" alt="Pictures">
		</div>
		<div class="footer_navi">
			<ul>
				<li><a href="#">Правовая информация</a></li>
				<li><a href="#">Разработчики</a></li>
				<li><a href="#">Счетчики</a></li>
			</ul>
			<div class="cop">
				Все права защищены.© 2017
			</div>
		</div>
		<div class="footer_info_box">
			<div class="phone"><img src="<?php bloginfo('template_url'); ?>/img/phone_footer.png" alt=""><a href="#">8-800-2000-600</a></div>
			<div class="mail"><img src="<?php bloginfo('template_url'); ?>/img/mail.png" alt=""><a href="#">d.zvereva@nzbh-nsk.ru</a></div>
			<div class="mapi">
			<img src="<?php bloginfo('template_url'); ?>/img/map.png" alt="">
			<p>
				г. Новосибирск, <br>
пл.Карла Маркса, д.7, оф. 1914
		</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
