<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nhbz
 */

?>

			<article>
				<div class="index_text_box">
				<h2><span><?php the_title( ) ?></span></h2>
				
				<div class="info_news">
					<?php if (has_post_thumbnail()) : ?>
						<img src="<?php the_post_thumbnail_url('full') ?>" alt="">
					<?php endif ; ?>
					<p><?php the_content() ?></p>
					
				</div>
					
				</div>
				
			</article>
			<div class="grup">
			<article>
				<h3>О нашей компании</h3>
				<div class="index_news">
					<div>
					Более 1500 штатных сотрудников
					</div>
					<div>
					Дилерская сеть в 4 странах
					</div>
					<div>
					Более 8 брендов в производстве
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


