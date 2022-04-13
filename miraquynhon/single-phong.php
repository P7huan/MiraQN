<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package miraquynhon
 */

get_header();
?>
	
<div id="content" class="site-content">
			<div class="container">
				<div class="row">

<?php
get_sidebar();

?>

	<main id="primary" class="site-main content-area col-sm-9">
		 <div id="main">
		 	
		<?php
		while ( have_posts() ) :
			the_post();
			//the_post_navigation();?>
			

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="page-header-top">
						<div class="subhead">Mira Quy Nhơn</div>
						<div class="partial-share">
								<ul>
									<li>Share</li>
									<?php // echo sharethis_inline_buttons(); ?>
								</ul>
							</div>
						</div>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</header><!-- .entry-header -->

				<?php // miraquynhon_post_thumbnail(); ?>

					<div class="entry-content">

						<?php
						  $post_slug = $post->post_name;

						the_content();

					
						?>
						<?php  
					if ( is_singular('phong')) { ?>
						<div class="booking">
							<div class="row">
								<div class="col-sm-6">
									<table>
										<?php if( get_field('number') ): ?>
											<tr>
												<td>Số Người</td>
												<td><?php the_field('number') ?></td>
											</tr>
										<?php endif; ?>
										<?php if( get_field('type_of_rooms') ): ?>
											<tr>
												<td>Loại phòng</td>
												<td><?php the_field('type_of_rooms') ?></td>
											</tr>
										<?php endif; ?>
										<?php if( get_field('max_occupancy') ): ?>
											<tr>
												<td>Số giường</td>
												<td><?php the_field('max_occupancy') ?></td>
											</tr>
										<?php endif; ?>
										<?php if( get_field('numbe_of_rooms') ): ?>
											<tr>
												<td>Số phòng</td>
												<td><?php the_field('numbe_of_rooms') ?></td>
											</tr>
										<?php endif; ?>
										<?php if( get_field('room_surface') ): ?>
											<tr>
												<td>Diện tích</td>
												<td><?php the_field('room_surface') ?></td>
											</tr>
										<?php endif; ?>
										<?php if( get_field('view') ): ?>
											<tr>
												<td>View</td>
												<td><?php the_field('view') ?></td>
											</tr>
										<?php endif; ?>
										<?php if( get_field('balcony') ): ?>
											<tr>
												<td>Ban công</td>
												<td><?php the_field('balcony') ?></td>
											</tr>
										<?php endif; ?>
									</table>
								</div>
								<div class="col-sm-6">
									<div class="booking-right">
										

										<!-- Trigger the modal with a button -->
										<!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Booking Now</button> -->
										<button type="button" class="btn btn-info" > <a target="_blank" style="color:white;text-decoration: none" href="http://miraquynhon.com/lien-he/"> Booking Now</a> </button>
									</div>
								</div>
							</div>

							<!-- Modal -->
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title subhead">Mira Quy Nhon</h4>
										</div>
										<div class="modal-body">
											<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true tabindex=49]' ) ?>
										</div>
										<div class="modal-footer">

										</div>
									</div>

								</div>
							</div>

						</div>
					<?php }
						wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hotel' ),
									'after'  => '</div>',
									) );
					   ?>

					</div><!-- .entry-content -->



					<footer class="entry-footer">
						<?php miraquynhon_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<section class="room-features tabs-section">
				<h2><span class="">Thông tin </span> Phòng</h2>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <a href="#" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mô tả Phòng</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a href="#" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dịch vụ & Tiện ích</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a href="#" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Thông tin khác</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<div>
				  		<table>
							<?php if( get_field('number') ): ?>
								<tr>
									<td>Số người</td>
									<td><?php the_field('number') ?></td>
								</tr>
							<?php endif; ?>
							<?php if( get_field('type_of_rooms') ): ?>
								<tr>
									<td>Loại phòng</td>
									<td><?php the_field('type_of_rooms') ?></td>
								</tr>
							<?php endif; ?>
							<?php if( get_field('max_occupancy') ): ?>
								<tr>
									<td>Số giường</td>
									<td><?php the_field('max_occupancy') ?></td>
								</tr>
							<?php endif; ?>
							<?php if( get_field('numbe_of_rooms') ): ?>
								<tr>
									<td>Số phòng</td>
									<td><?php the_field('numbe_of_rooms') ?></td>
								</tr>
							<?php endif; ?>
							<?php if( get_field('room_surface') ): ?>
								<tr>
									<td>Diện tích</td>
									<td><?php the_field('room_surface') ?></td>
								</tr>
							<?php endif; ?>
							<?php if( get_field('view') ): ?>
								<tr>
									<td>View</td>
									<td><?php the_field('view') ?></td>
								</tr>
							<?php endif; ?>
							<?php if( get_field('balcony') ): ?>
								<tr>
									<td>Ban công</td>
									<td><?php the_field('balcony') ?></td>
								</tr>
							<?php endif; ?>
						</table>
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<div>
				  		<?php the_field('services_&_amenities') ?>
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  <?php the_field('room_conditions') ?>
				  	
				  </div>
				</div>
			</section>

			

			 
<?php
		endwhile; // End of the loop.
		?>

		 </div>
		 <!-- end #main -->
	</main><!-- #main -->

<?php
get_footer();
