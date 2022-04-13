<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miraquynhon
 */

?>
</div>
</div>
</div><!-- #content -->
	<footer id="page-footer" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-2">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="col-sm-6 col-md-2">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-sm-6 col-md-2">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
				<div class="col-sm-6 col-md-3">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
				<div class="col-sm-6 col-md-3">
					<?php dynamic_sidebar( 'footer-5' ); ?>
				</div>
				</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'miraquynhon' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'miraquynhon' ), 'WordPress' );
				?>
			</a>
			<!-- <span class="sep"> | </span> -->
				Copyright © 2021. Mira Quy Nhon Hotel
		</div><!-- .site-info -->
				</div>
			</div>
		</div>
		
			<a class="open-booking" href="#" >Book now</a>
	<a class="open-location" href="/how-to-arrive/" ><i class="fa fa-map-marker"></i></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
