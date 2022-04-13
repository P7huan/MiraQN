<?php
/**
 * miraquynhon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package miraquynhon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function miraquynhon_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on miraquynhon, use a find and replace
		* to change 'miraquynhon' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'miraquynhon', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'miraquynhon' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'miraquynhon_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'miraquynhon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function miraquynhon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'miraquynhon_content_width', 640 );
}
add_action( 'after_setup_theme', 'miraquynhon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function miraquynhon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'miraquynhon' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'miraquynhon' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'miraquynhon' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'miraquynhon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'miraquynhon' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'miraquynhon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'miraquynhon' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'miraquynhon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'miraquynhon' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'miraquynhon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 5', 'miraquynhon' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'miraquynhon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'miraquynhon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function miraquynhon_scripts() {
	wp_enqueue_style( 'miraquynhon-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'miraquynhon-style-boostrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), _S_VERSION );
	wp_style_add_data( 'miraquynhon-style', 'rtl', 'replace' );
	wp_enqueue_style( 'miraquynhon-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'awesome-style', get_stylesheet_directory_uri().'/css/font-awesome.css' );
	wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'carousel-default-style', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css' );
	wp_enqueue_script( 'hotel-jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );

	wp_enqueue_script( 'miraquynhon-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'miraquynhon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'hotel-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hotel-scrolltofixed', get_template_directory_uri() . '/js/jquery-scrolltofixed-min.js', array(), '20151215', true );
	// wp_enqueue_script( 'hotel-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hotel-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'miraquynhon_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function custom_post_type_rooms() {

	$labels = array(
		'name'                => _x( 'Rooms', 'Post Type General Name', 'hotel' ),
		'singular_name'       => _x( 'Room', 'Post Type Singular Name', 'hotel' ),
		'menu_name'           => __( 'Rooms', 'hotel' ),
		'parent_item_colon'   => __( 'Parent Room', 'hotel' ),
		'all_items'           => __( 'All Rooms', 'hotel' ),
		'view_item'           => __( 'View Room', 'hotel' ),
		'add_new_item'        => __( 'Add New Room', 'hotel' ),
		'add_new'             => __( 'Add New', 'hotel' ),
		'edit_item'           => __( 'Edit Room', 'hotel' ),
		'update_item'         => __( 'Update Room', 'hotel' ),
		'search_items'        => __( 'Search Room', 'hotel' ),
		'not_found'           => __( 'Not Found', 'hotel' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'hotel' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'phong', 'hotel' ),
		'description'         => __( 'Service news and reviews', 'hotel' ),
		'labels'              => $labels,
        // Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),         
		'hierarchical'        => true, 
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'phong', $args );

}

add_action( 'init', 'custom_post_type_rooms', 0 );

function themes_taxonomy() {  

	register_taxonomy(  
		'taxanomy-room',  
		'phong',        
		array(  
			'hierarchical' => true,  
			'label' => 'loại phòng',  
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'loai-phong', 
				'with_front' => false 
			)
		)  
	);    
}  
add_action( 'init', 'themes_taxonomy');



function home_rooms(){
	?>
<style type="text/css" media="screen">
.nav-tabs .nav-link {
    color: #fff;
}

.wrap-modal-slider {
    padding: 0 30px;
    opacity: 0;
    transition: all 0.3s;
}

.wrap-modal-slider.open {
    opacity: 1;
}

.your-class {
    width: 726px;
    margin: 0 auto;
    position: relative;
}

/* Arrows */
.slick-prev,
.slick-next {
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}

.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus {
    color: transparent;
    outline: none;
    background: transparent;
}

.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before {
    opacity: 1;
}

.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before {
    opacity: .25;
}

.slick-prev:before,
.slick-next:before {
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev {
    left: -25px;
}

[dir='rtl'] .slick-prev {
    right: -25px;
    left: auto;
}

.slick-prev:before {
    content: '←';
}

[dir='rtl'] .slick-prev:before {
    content: '→';
}

.slick-next {
    right: -25px;
}

[dir='rtl'] .slick-next {
    right: auto;
    left: -25px;
}

.slick-next:before {
    content: '→';
}

[dir='rtl'] .slick-next:before {
    content: '←';
}

/* Dots */
.slick-dotted.slick-slider {
    margin-bottom: 30px;
}

.slick-dots {
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}

.slick-dots li {
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}

.slick-dots li button {
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}

.slick-dots li button:hover,
.slick-dots li button:focus {
    outline: none;
}

.slick-dots li button:hover:before,
.slick-dots li button:focus:before {
    opacity: 1;
}

.slick-dots li button:before {
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '•';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-dots li.slick-active button:before {
    opacity: .75;
    color: black;
}
</style>
<script>
$(document).ready(function() {
    $('.your-class').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
});

// Fix slick slider using multitabs

$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    $('.your-class').slick('refresh');
})
</script>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">New</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Popular</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Recommend</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="your-class">
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="your-class">
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
        </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="your-class">
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
            <div><img src="http://via.placeholder.com/242x300/000000/ffffff" alt=""></div>
        </div>
    </div>
</div>



<?php
}

add_shortcode( 'home-rooms', 'home_rooms' );

function homerooms_mira(){
	 
	ob_start ();
	$parent_terms = get_terms( 'taxanomy-room', array( 'hide_empty' => false, 'parent' => 0 )); ?>
<div class="list-post-type">
    <div class="row">
        <?php // foreach($parent_terms as $parent_term ) { ?>
        <div class="col-sm-6 col-md-8">
            <div class="llist-room-cat">
                <div class="list-room-cat-image">
                    <a href="<?php echo  get_category_link($parent_terms[0]->term_id) ?>">
                        <?php $image = get_field('image', $parent_terms[0]); ?>
                        <img src="<?php echo $image ?>" alt="">
                    </a>
                </div>

            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="list-room-cat-title">
                <a class="title"
                    href="<?php echo  get_category_link($parent_terms[0]->term_id) ?>"><?php echo $parent_terms[0]->name; ?></a>
                <div class="info">
                    <div class="excerpt">
                        <?php echo $parent_terms[0]->description; ?>
                        <p>
                            Các phòng và suite có kiểu trang trí cổ điển, ánh sáng mặt trời ấm áp và sự hài hòa giữa
                            không gian trong nhà-ngoài trời. Thư giãn trong khu vực sinh hoạt hoặc ngả lưng trên đi-văng
                            ban công, lựa chọn tầm nhìn ra vườn hoặc dòng sông.
                        </p>
                        <ul>
                            <li>36 – 42 mét vuông </li>
                            <li>Tầm nhìn ra khu vườn hoặc dòng sông</li>
                            <li>Ban công hoặc sân hiên với đi văng</li>
                            <li>WiFi tốc độ cao miễn phí</li>
                        </ul>
                    </div>
                    <a class="more" href="<?php echo  get_category_link($parent_terms[0]->term_id) ?>">Xem tất cả chổ
                        ở</a>
                </div>
            </div>
        </div>

        <?php // } ?>
    </div>
</div>
<?php $list_items2 = ob_get_contents();
	ob_end_clean();
	return $list_items2;
	?>

<?php
}
add_shortcode( 'homemira', 'homerooms_mira' );
function homerooms_baixep(){
	ob_start ();
	$parent_terms = get_terms( 'taxanomy-room', array( 'hide_empty' => false, 'parent' => 0 )); ?>
<div class="list-post-type">
    <div class="row">
        <?php // foreach($parent_terms as $parent_term ) { ?>
        <div class="col-sm-6 col-md-8">
            <div class="list-room-cat">
                <div class="list-room-cat-image">
                    <a href="<?php echo  get_category_link($parent_terms[1]->term_id) ?>">
                        <?php $image = get_field('image', $parent_terms[1]); ?>
                        <img src="<?php echo $image ?>" alt="">
                    </a>
                </div>

            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="list-room-cat-title">
                <a class="title"
                    href="<?php echo  get_category_link($parent_terms[1]->term_id) ?>"><?php echo $parent_terms[1]->name; ?></a>
                <div class="info">
                    <div class="excerpt">
                        <?php echo $parent_terms[1]->description; ?>
                        <p>
                            Các phòng và suite có kiểu trang trí cổ điển, ánh sáng mặt trời ấm áp và sự hài hòa giữa
                            không gian trong nhà-ngoài trời. Thư giãn trong khu vực sinh hoạt hoặc ngả lưng trên đi-văng
                            ban công, lựa chọn tầm nhìn ra vườn hoặc dòng sông.
                        </p>
                        <ul>
                            <li>36 – 42 mét vuông </li>
                            <li>Tầm nhìn ra khu vườn hoặc dòng sông</li>
                            <li>Ban công hoặc sân hiên với đi văng</li>
                            <li>WiFi tốc độ cao miễn phí</li>
                        </ul>
                    </div>
                    <a class="more btn btn " href="<?php echo  get_category_link($parent_terms[1]->term_id) ?>">Xem tất
                        cả chổ ở</a>
                </div>
            </div>
        </div>

        <?php // } ?>
    </div>
</div>
<?php $list_items2 = ob_get_contents();
	ob_end_clean();
	return $list_items2;
	?>

<?php
}
add_shortcode( 'homebaixep', 'homerooms_baixep' );



// function change_my_title( $title ){
//     if ( $title == "Archives: Projects" ) $title = "Viewing All Offices";
//     return $title;
// }
// add_filter( "get_the_archive_title", "change_my_title" );
function teaser($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'[...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'...';
}