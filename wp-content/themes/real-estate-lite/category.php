<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-estate-lite
 */

get_header(); ?>

	<div id="primary" class="content-area blog">
		<main id="main" class="site-main grid" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
		<?php 		
			echo '<div style="text-align:center"><a style="color:orange; font-size: 25px" href="'.esc_url( $category_link ).'">'.get_the_category( $id )[0]->name.'</a></div>';
			echo '<hr width="50%" style="background-color: orange; height: 1.2px">';
			while ( have_posts() ) : the_post(); 
				if (get_the_category( $id )[0]->name == "TIN TỨC - SỰ KIỆN") {					
					echo '<div class="col-4-12 post-item" style="min-height: 390px;">';								
			    		get_template_part( 'template-parts/content-preview-2', get_post_format() );
					echo '</div>' ;	
				}
				else{
					echo '<div class="col-4-12 post-item" style="min-height: 390px;">';								
			    		get_template_part( 'template-parts/content-preview', get_post_format() );
					echo '</div>' ;	
				}								
			endwhile; 
		?>
			
		<div style="clear:left"></div> 
			
		<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<?php //get_sidebar(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
