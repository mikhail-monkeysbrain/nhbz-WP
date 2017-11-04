<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nhbz
 */

get_header(); ?>

<main>
	<section class="lab standart">
		<div class="middle">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );



		endwhile; // End of the loop.
		?>

		</div>
			
	</article>
</main>

<?php
get_footer();
