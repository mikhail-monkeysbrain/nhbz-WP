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
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
<!-- 				<div class="breadcrumbs">
					<p><a href="">Главная</a></p>
					<p><a href="">Каталог</a></p>
					<p><a href="">Стиральные порошки</a></p>
					<p><a href="">Стиральный порошок 'mr'</a></p>
				</div> -->
				
				<div class="content_carta">
					<div class="pictures_gallery">
						<img src="<?php the_post_thumbnail_url('full') ?>" alt="">
					</div>
					<div class="info_tovar">
						<h1>
							<?php the_title() ?>
						</h1>
						<h2><?php echo carbon_get_post_meta($post->ID, '_product_sub') ?></h2>
						
						<div class="text">
							<?php the_content() ?>
						</div>
						<a href="#" class="zvonok">обратный звонок</a>
					</div>
					<form action="">
						<p>Вы можете задать нам вопрос с помощью следующей формы:</p>
						<div class="col">
						<div>
						<input type="text" name="user" placeholder="Имя">
						<input type="text" name="mail" placeholder="Email">
						</div>
						<textarea rows="7" cols="45" name="text"></textarea>
						</div>
						<button class="click_form" type="submit">Отправить</button>
					</form>
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
			<a class="brend" href="">открыть бренды</a>


