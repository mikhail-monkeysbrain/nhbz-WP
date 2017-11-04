<?php
/**
	* Template name: Contacts page
 */
get_header(); ?>
<main>
	<section class="lab standart">
		<div class="middle">
			<article>
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
				
				<div class="content_contact">
				<h2><span><?php the_title(); ?></span></h2>
				<div class="content_consultant">
					<div class="content_pictures">
						<?php if (has_post_thumbnail()) : ?>
						<img src="<?php the_post_thumbnail_url('full') ?>" alt="">
						<?php endif ; ?>
					</div>
					<div class="content_consultant_text">
						<div>
							<?php the_post(); ?>
							<?php the_content(); ?>
						</div>
						<div class="content_consultant_button">
							<a href="">обратный звонок</a>
						</div>
					</div>
				</div>
				<div class="content_phone_list">
					<?php if(carbon_get_post_meta($post->ID, '_contacts_ks')) : ?>
						<div class="content_phone_list_box">
							<?php echo carbon_get_post_meta($post->ID, '_contacts_ks') ?>
						</div>
					<?php endif ; ?>
					<?php if(carbon_get_post_meta($post->ID, '_contacts_fo')) : ?>
						<div class="content_phone_list_box">
							<?php echo carbon_get_post_meta($post->ID, '_contacts_fo') ?>
						</div>
					<?php endif ; ?>
					<?php if(carbon_get_post_meta($post->ID, '_contacts_pr')) : ?>
						<div class="content_phone_list_box">
							<?php echo carbon_get_post_meta($post->ID, '_contacts_pr') ?>
						</div>
					<?php endif ; ?>
				</div>
				<div class="content_adress">
					<?php if(carbon_get_post_meta($post->ID, '_contacts_adr')) : ?>
							<?php echo carbon_get_post_meta($post->ID, '_contacts_adr') ?>
					<?php endif ; ?>
				</div>
				<div class="content_maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.583710568396!2d82.89608951613762!3d54.98039918035385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe6e6b250434d%3A0xb549bab75127ce2c!2z0L_Quy4g0JrQsNGA0LvQsCDQnNCw0YDQutGB0LAsIDcsINCd0L7QstC-0YHQuNCx0LjRgNGB0LosINCd0L7QstC-0YHQuNCx0LjRgNGB0LrQsNGPINC-0LHQuy4sIDYzMDA0OA!5e0!3m2!1sru!2sru!4v1509696042180"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
					<div role="form" class="wpcf7" id="wpcf7-f42-p35-o1" lang="ru-RU" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/kontakty/?preview_id=35&amp;preview_nonce=92cafac369&amp;_thumbnail_id=38&amp;preview=true#wpcf7-f42-p35-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="42">
<input type="hidden" name="_wpcf7_version" value="4.9.1">
<input type="hidden" name="_wpcf7_locale" value="ru_RU">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f42-p35-o1">
<input type="hidden" name="_wpcf7_container_post" value="35">
</div>
<p>Вы можете задать нам вопрос с помощью следующей формы:</p>
<div class="col">
<div>
<span class="wpcf7-form-control-wrap text-962"><input type="text" name="text-962" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="false" aria-invalid="false" placeholder="Имя"></span><br>
<span class="wpcf7-form-control-wrap email-305"><input type="email" name="email-305" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email"></span>
</div>
<textarea name="textarea-465" cols="45" rows="7" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></div>
<p><button class="click_form" type="submit">Отправить</button></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
				</div>
				
				
			</article>
			<div class="grup">
			<article>
				<h3>О нашей компании
</h3>
				<div class="index_news">
					<div>
					Болеe 1500 штатных сотрудников
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
			</div>
		</div>
	</section>
	
</main>
<?php get_footer(); ?>