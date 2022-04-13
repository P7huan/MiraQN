<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miraquynhon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-3">
    <div class="sidebar">
        <div class="sidebar__news">
            <h5 class="sidebar__news-heading">
                TIN MỚI NHẤT
            </h5>
            <ul class="sidebar__news-list">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <li class="sidebar__news-list--item">
                    <a href="<?php the_permalink(); ?>" class="sidebar__news-item--link">
                        <img src="<?php echo $feat_image ?>" alt="<?php the_title();?>" class="sidebar__news-item--img">
                        <h4 class="sidebar__news-item--title">
                            <?php echo the_title(); ?>
                        </h4>
                    </a>
                </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="sidebar__category">
            <h5 class="sidebar__category-heading">
                CHUYÊN MỤC
            </h5>
            <ul class="sidebar__category-list">
                <?php $args = array( 
                'hide_empty' => 0,
                'taxonomy' => 'category',
                'orderby' => 'id',
                ); 
                $cates = get_categories( $args ); 
                foreach ( $cates as $cate ) {  ?>
                <li class="sidebar__category-item">
                    <a href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</aside><!-- #secondary -->