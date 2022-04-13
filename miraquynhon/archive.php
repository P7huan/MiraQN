<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miraquynhon
 */

get_header();
// get_sidebar();
?>
<div id="content" class="site-content">
			<div class="container">
				<div class="row">

<?php
get_sidebar();

?>

	<main id="primary" class="site-main content-area col-md-9">
		 <div id="main">
		 
		 		
		<?php if ( have_posts() ) : ?>
		<?php  $posttype = get_post_type(); ?>


			<header class="page-header-top">
				<?php
				if( $posttype == "phong" ){ ?>
<div class="page-header-top">
			<div class="subhead">Thông tin các phòng</div>
			<div class="partial-share">
				<ul>
					<li>Share</li>
					<?php //echo sharethis_inline_buttons(); ?>
				</ul>
			</div>
		</div>


		<h1 class="entry-title"><?php 
		$tax = $wp_query->get_queried_object();
		echo $tax->name; ?></h1>
		<div class="room-des"><?php echo $tax->description ?></div>
			<?php	}else{
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				// echo get_the_archive_title();
				// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
<div class="page-header-top">
			<div class="subhead">Cẩm nang du lịch Quy Nhơn</div>
			<div class="partial-share">
				<ul>
					<li>Share</li>
					<?php //echo sharethis_inline_buttons(); ?>
				</ul>
			</div>
		</div>


		<h1 class="entry-title"><?php 
		$tax = $wp_query->get_queried_object();
		echo $tax->name; ?></h1>
		<div class="room-des"><?php echo $tax->description ?></div>
				<?php
			}
				?>
			</header><!-- .page-header -->
		
		<div class="list-post-type">
			<div class="row">
				
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );
				if ($posttype == "phong") {
					 
					get_template_part( 'template-parts/content', get_post_type() );
				}else{ ?> 

				<article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
					<div class="row">
						
					<div class="col-md-4">
						<?php miraquynhon_post_thumbnail(); ?>
					</div>
					<div class="col-md-8">
							
							<header class="entry-header">
								<?php
								if ( is_singular() ) :
									the_title( '<h1 class="entry-title">', '</h1>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) :
									?>
									<div class="entry-meta">
										<?php
										miraquynhon_posted_on();
										miraquynhon_posted_by();
										?>
									</div><!-- .entry-meta -->
								<?php endif; ?>
							</header><!-- .entry-header -->

							

							<div class="entry-content">
								<?php
								the_excerpt();
								?>
							</div><!-- .entry-content -->
						</div>

					</div>
				 
			</article><!-- #post-<?php the_ID(); ?> -->

		 
			
			

			<?	}

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
		 	</div>
 
	</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
