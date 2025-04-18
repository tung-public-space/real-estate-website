<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-estate-lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class='post-thumb'>
				<a href="<?php the_permalink();?>" >
				<?php the_post_thumbnail('real_estate_lite_page_thumb'); ?>
				</a>
		</div>
	<header class="entry-header" >
		<?php the_title( sprintf( '<p style="margin: 0px; line-height: 1.7; font-weight: bold; font-size: 10.5pt"><a href="%s" rel="bookmark" style="color: black">', esc_url( get_permalink() ) ), '</a></p>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content" style="font-size: 9pt">
		<?php the_excerpt();?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
