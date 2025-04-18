<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-estate-lite
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="grid bottom-border">

	<div class="<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>col-4-12 <?php else : ?>no-col<?php endif; ?>">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>

	<div class="<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>col-4-12 <?php else : ?>no-col<?php endif; ?>">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div>

	<!-- <div class="<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>col-4-12 <?php else : ?>no-col<?php endif; ?>"> 
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div> -->
	
	<div class="<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>col-4-12 <?php else : ?>no-col<?php endif; ?>"> 
		<?php dynamic_sidebar( 'footer-4' ); ?>
	</div>	
		
	</div><!--col center-->
	<div class="col-center site-info">
		<?php if( get_theme_mod('footer-credit') ):

			echo get_theme_mod('footer-credit');

			 else: ?>

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'real-estate-lite' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'real-estate-lite' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'real-estate-lite' ), 'Real Estate', '<a href="https://thepixeltribe.com/template/real-estate/" rel="designer">Pixel Tribe</a>' ); ?>
			<?php endif; ?>
	</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<!-- tung-lv 11/09/2019 -->
<div class="hotline">
	<span class="before-hotline">HOTLINE:</span>
	<span class="hotline-number">090 948 1994</span>
</div>
<style>
.mobile-hotline{
	display:none
}
.hotline {
	position: fixed;
    left: 10px;
    bottom: 27px;
    z-index: 9000;
    display: block;
    background: #32CD32;
    color: red;
    padding-top: 5px;
	padding-bottom: 5px; 
	padding-left: 12px; 
	padding-right: 12px;
    border-radius: 99px;
}
.hotline-number {
	font-size:25px; 
	color: white; 
	font-weight: bold
}
.hotline {
	font-size:20px; 
	color: white; 
	font-weight: bold
}
 
@media  (max-width: 767px) {
    .hotline{
        display :none;
	}}
</style>
</html>
