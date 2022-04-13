<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miraquynhon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'miraquynhon' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="page-header">
			<div class="container">
			 
			
				<!-- <div class="site-branding"> -->
					<?php
					the_custom_logo();
					?>
				<!-- </div> -->
				<!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'miraquynhon' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<!-- <a  href="#">Reservations</a> -->
			</div>
		</div>
		


		<?php  
			if (  is_singular('phong')   ) { 

				?>

				<div id="banner">
	 
					<div class="owl-carousel owl-theme">
							<?php while(has_sub_field('slider')):  ?>
								<div class="owl-slide d-flex align-items-center cover" style="background-image: url('<?php echo the_sub_field('image'); // the_sub_field('image')?>');">
								</div>
							<?php endwhile; ?>
							<?php 
							$post_id = 0;
							$queried_object = get_queried_object();
							if (isset($queried_object->term_id)) {
								$post_id = $queried_object->taxonomy.'_'.$queried_object->term_id;

							}
							// $post_id = get_the_ID();
							?>
							<!-- <img src="<?php the_field('image', $post_id)  ?>" alt=""> -->
						</div>


				</div>

			<?php } else{
				miraquynhon_post_thumbnail("full");
				// the_post_thumbnail( 'full' );      
				?>
				<div class="img-rom-arche">
					<?php 
					$post_id = 0;
					$queried_object = get_queried_object();
					if (isset($queried_object->term_id)) {
						$post_id = $queried_object->taxonomy.'_'.$queried_object->term_id;
					}
					
					?>
					<img src="<?php the_field('image', $post_id)  ?>" alt="">
				</div>
				<?php 
			} 
			?>
	</header><!-- #masthead -->



