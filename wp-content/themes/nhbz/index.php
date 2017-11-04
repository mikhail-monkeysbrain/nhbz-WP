<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nhbz
 */

get_header(); ?>
	<?php /* ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;


			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); */
<?php
/**
	* Template name: Home page
 */
get_header(); ?>
<main>
	<section class="index_list standart">
		<div class="middle">
			<article>
				
				<div class="index_text_box">
				<img src="<?php bloginfo('template_url'); ?>/img/gerl.png" alt="">
				<div>
					<h2><span>О компании</span></h2>
					<?php the_post(); ?>
					<?php the_content( ); ?>
					<a class="buttonNext" href="#">Читать дальше</a>
				</div>
					
				</div>
				
			</article>
			<?php 
				$args = array( 'post_type' => 'post','orderby'=> 'date', 'posts_per_page' => 4, 'order' => 'DESC');
				$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<article>
				<h3>Новости</h3>
				<div class="index_news">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div>
						<a href="<?php the_permalink() ?>">
							<div class="data"><?php the_time('d/m/Y') ?></div>
							<p><?php the_title( ); ?></p>
						</a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</article>
			<?php endif; ?>
		</div>
	</section>
	<section class="dop_list standart">
		<div class="middle">
			<article>
				
				<div class="dop_text_box">
				<img src="<?php bloginfo('template_url'); ?>/img/stiral.png" alt="">
				<div>
					<h2><span>Направление деятельности</span></h2>
					<p><?php echo carbon_get_post_meta($post->ID, '_home_activities') ?></p>
					<a class="buttonNext" href="#">Читать дальше</a>
				</div>
					
				</div>
				
			</article>
			<?php 
				$args = array( 'post_type' => 'training','orderby'=> 'date', 'posts_per_page' => 4, 'order' => 'DESC');
				$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<article>
				<h3>Ближайшии тренинги и семинары</h3>
				<div class="index_news">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div>
						<a href="<?php the_permalink() ?>">
							<div class="data"><?php the_time('d/m/Y'); ?></div>
							<p><?php the_title( ); ?></p>
						</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				</div>
			</article>
			<?php endif; ?>
		</div>
	</section>
	<section class="click_button">
		<div class="middle">
			<a class="green" href="#">О продукции</a>
			<a class="orange" href="#">Контакты</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
get_footer();
