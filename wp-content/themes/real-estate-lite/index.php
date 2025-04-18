<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-estate-lite
 */

get_header(); ?>

	<div id="primary" class="content-area  blog">
		<main id="main" class="site-main grid" role="main">


		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			<?php			
				echo '<!-- tung-lv: show posts by categories on homepage -->';
 				$categories = get_categories();				
 				foreach ($categories as $cat) {
					$category_ids = $cat->term_id;
 					$category_num = $cat->category_count;
 					$category_link = get_category_link( $category_ids);
 					if ($category_num >=0) {
 						echo '<div style="text-align:center"><a style="color:orange; font-size: 25px" href="'.esc_url( $category_link ).'">'.$cat->cat_name.'</a></div>';
						echo '<hr width="50%" style="background-color: orange; height: 1.2px">';
 						$args=array('category__in' => $category_ids,'showposts'=>9);
         				$my_query = new wp_query($args); 
                		while ($my_query->have_posts()){	
                     		$my_query->the_post(); 	
							if ($cat->cat_name == "TIN TỨC - SỰ KIỆN") {
								echo '<div class="col-4-12 post-item">';								
			    					get_template_part( 'template-parts/content-preview-2', get_post_format() );
								echo '</div>' ;	
							}
							else{
								echo '<div class="col-4-12 post-item">';								
			    					get_template_part( 'template-parts/content-preview', get_post_format() );
								echo '</div>' ;	
							}													
 						}
						if ($category_num > 9){
							echo '<div style="clear:left"></div>';
							echo '<div style="text-align:right; margin-right: 57px;"><a style="color:orange;font-size:15px;font-style:italic" href="'.esc_url( $category_link ).'">Xem tiếp >></a></div>';
						}
 						echo '<div style="clear:left"></div>';	    			
 					}
 				}?>			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	

		</main><!-- #main -->
			
	</div><!-- #primary -->

<?php get_footer(); ?>
