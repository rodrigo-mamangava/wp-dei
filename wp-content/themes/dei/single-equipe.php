<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dei
 */

get_header('equipe'); 
get_sidebar();?>



		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'membro-equipe' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
