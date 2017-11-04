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
					<a class="buttonNext" href="/about">Читать дальше</a>
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
			<a class="green" href="/about">О продукции</a>
			<a class="orange" href="/contacts">Контакты</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>