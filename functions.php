<?php
add_action( 'after_setup_theme', 'broucek_setup' );
function broucek_setup() {
load_theme_textdomain( 'broucek', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'broucek' ) ) );
}
add_action( 'wp_enqueue_scripts', 'broucek_load_scripts' );
function broucek_load_scripts() {
wp_enqueue_style( 'broucek-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'broucek_footer_scripts' );
function broucek_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'broucek_document_title_separator' );
function broucek_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'broucek_title' );
function broucek_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'broucek_read_more_link' );
function broucek_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'broucek_excerpt_read_more_link' );
function broucek_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'broucek_image_insert_override' );
function broucek_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'broucek_widgets_init' );
function broucek_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'broucek' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'broucek_pingback_header' );
function broucek_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'broucek_enqueue_comment_reply_script' );
function broucek_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function broucek_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'broucek_comment_count', 0 );
function broucek_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


/* add CSS and JS */
function add_theme_scripts() {

    /* CSS */
    wp_enqueue_style( 'bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
    wp_enqueue_style( 'swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.10/swiper-bundle.min.css');

    wp_enqueue_style( 'animatecss', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

  /* JS */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script( 'bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js');
    wp_enqueue_script( 'swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.10/swiper-bundle.min.js');
    wp_enqueue_script( 'wowjs', '//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');
    wp_enqueue_script( 'matchHeight', '//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/* Register Custom Navigation Walker - https://github.com/wp-bootstrap/wp-bootstrap-navwalker */
/* help diagnose version */
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
/* //end Register Custom Navigation Walker */
