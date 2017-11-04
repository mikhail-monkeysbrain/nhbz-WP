<?php
/**
	* Template name: Training page
 */
get_header(); ?>
<main id="site-main">
	<section class="lab standart">
		<div class="middle">
			<article>
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
				<div class="index_text_box">
				<h2><span><?php the_title( ); ?></span></h2>
				
				
					<?php 
						$args = array( 'post_type' => 'training','orderby'=> 'date', 'order' => 'DESC');
						$the_query = new WP_Query( $args ); 
						$GLOBALS['wp_query'] = $the_query;	
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<div class="news_box">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="news_list">
								<?php if (has_post_thumbnail()) : ?>
									<div class="pictures">
										<img src="<?php the_post_thumbnail_url('full') ?>" alt="">
									</div>
								<?php endif ; ?>
								<h3><?php the_title( ); ?></h3>
								<?php the_excerpt(); ?>
								<div class="button_link">
									<a href="<?php the_permalink() ?>">Читать дальше</a>
								</div>
							</div>
						<?php endwhile; ?>
						
						

						<?php if (  $wp_query->max_num_pages > 1 ) : ?>
							<script>
							var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
							var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
							var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
							var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
							</script>
							<a style="display:block;max-width:200px;text-align: center;margin-left: auto;margin-right: auto;" class="next_list" id="true_loadmore">Смотреть еще</a>
						<?php endif; ?>

						</div>

						
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>			
				
				<!-- <a class="next_list" href="">Смотреть еще</a> -->
					
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
				$args = array( 'post_type' => 'training','orderby'=> 'date', 'posts_per_page' => 4, 'order' => 'DESC');
				$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<article>
				<h3>БЛИЖАЙШИИ ТРЕНИНГИ И СЕМИНАРЫ</h3>
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
		</div>
	</section>
	
</main>
<?php get_footer(); ?>