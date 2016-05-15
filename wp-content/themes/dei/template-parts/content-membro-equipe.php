<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="professor-wrapper">
		<div class="col-md-offset-1 col-md-6 col-lg-offset-1 col-lg-6 professor-content">
			<a href="<?php echo get_post_type_archive_link( 'equipe' ); ?>"
				<span class="glyphicon glyphicon-remove close-symbol" aria-hidden="true"></span>
			</a>			
			<div class="professor-photo">
				<div id="photo"></div>
			</div>
			<div class="professor-nome">
				<span><?php echo get_post_meta(get_the_ID(), 'nome', true); ?></span>
			</div>
			<div class="professor-email">
				<span><?php echo get_post_meta(get_the_ID(), 'email', true); ?></span>
			</div>
			<div class="professor-descricao">
				<span><?php the_content(); ?></span>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
