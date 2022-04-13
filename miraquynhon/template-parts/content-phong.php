<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miraquynhon
 */

?>
 
				 		<div class="col-sm-2 col-md-4">
							<div class="list-post-type-item">
								<div class="list-post-type-image">
									<a  href="<?php the_permalink(); ?>">
										<?php 
										if( has_post_thumbnail( get_the_ID() ) ) {
											echo get_the_post_thumbnail( get_the_ID(), 'full' );
										}
										?>
									</a>
								</div>
								<div class="list-post-type-title">
									<a  class="title" href="<?php the_permalink(); ?>"><?php the_title();?></a>
									<div class="info">Diện tích: <?php the_field('room_surface') ?>m<sup>2</sup></div>
										<div class="list-price"> Chỉ từ <span><?php the_field('price_from') ?> Vnđ</span>/ Ngày </div>
										<a  class="more" href="<?php the_permalink(); ?>">Xem chi tiết</a>
									</div>

								</div>
							</div>
						
					 
			 