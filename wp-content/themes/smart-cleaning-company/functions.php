<?php
/**
 * Smart Cleaning Company functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smart Cleaning Company
 */

if ( ! defined( 'SMART_CLEANING_URL' ) ) {
    define( 'SMART_CLEANING_URL', esc_url( 'https://www.themagnifico.net/products/house-cleaning-wordpress-theme', 'smart-cleaning-company') );
}
if ( ! defined( 'SMART_CLEANING_TEXT' ) ) {
    define( 'SMART_CLEANING_TEXT', __( 'Cleaning Company Pro','smart-cleaning-company' ));
}
if ( ! defined( 'SMART_CLEANING_CONTACT_SUPPORT' ) ) {
define('SMART_CLEANING_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/smart-cleaning-company','smart-cleaning-company'));
}
if ( ! defined( 'SMART_CLEANING_REVIEW' ) ) {
define('SMART_CLEANING_REVIEW',__('https://wordpress.org/support/theme/smart-cleaning-company/reviews/#new-post','smart-cleaning-company'));
}
if ( ! defined( 'SMART_CLEANING_LIVE_DEMO' ) ) {
define('SMART_CLEANING_LIVE_DEMO',__('https://demo.themagnifico.net/cleaning-company/','smart-cleaning-company'));
}
if ( ! defined( 'SMART_CLEANING_GET_PREMIUM_PRO' ) ) {
define('SMART_CLEANING_GET_PREMIUM_PRO',__('https://www.themagnifico.net/products/house-cleaning-wordpress-theme','smart-cleaning-company'));
}
if ( ! defined( 'SMART_CLEANING_PRO_DOC' ) ) {
define('SMART_CLEANING_PRO_DOC',__('https://demo.themagnifico.net/eard/wathiqa/smart-cleaning-company-pro-doc/','smart-cleaning-company'));
}
if ( ! defined( 'SMART_CLEANING_BUY_TEXT' ) ) {
    define( 'SMART_CLEANING_BUY_TEXT', __( 'Buy Cleaning Company Pro','smart-cleaning-company' ));
}
if ( ! defined( 'SMART_CLEANING_FREE_DOC' ) ) {
define('SMART_CLEANING_FREE_DOC',__('https://demo.themagnifico.net/eard/wathiqa/smart-cleaning-company-free-doc/','smart-cleaning-company'));
}

function smart_cleaning_company_enqueue_styles() {
    wp_enqueue_style( 'flatly-css', esc_url(get_template_directory_uri()) . '/assets/css/flatly.css');
    $smart_cleaning_company_parentcss = 'smart-cleaning-style';
    $smart_cleaning_company_theme = wp_get_theme(); wp_enqueue_style( $smart_cleaning_company_parentcss, get_template_directory_uri() . '/style.css', array(), $smart_cleaning_company_theme->parent()->get('Version'));
    wp_enqueue_style( 'smart-cleaning-company-style', get_stylesheet_uri(), array( $smart_cleaning_company_parentcss ), $smart_cleaning_company_theme->get('Version'));

    require get_theme_file_path( '/custom-option.php' );
    wp_add_inline_style( 'smart-cleaning-company-style',$smart_cleaning_theme_css );
    require get_parent_theme_file_path( '/custom-option.php' );
    wp_add_inline_style( 'smart-cleaning-style',$smart_cleaning_theme_css );

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'smart_cleaning_company_enqueue_styles' );

function smart_cleaning_company_admin_scripts() {
    // demo CSS
    wp_enqueue_style( 'smart-cleaning-company-demo-css', get_theme_file_uri( 'assets/css/demo.css' ) );
}
add_action( 'admin_enqueue_scripts', 'smart_cleaning_company_admin_scripts' );

function smart_cleaning_company_customize_register($wp_customize){

     // Pro Version
    class Smart_Cleaning_Company_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( SMART_CLEANING_BUY_TEXT,'smart-cleaning-company' ) .'<strong></a>';
            echo '</a>';
        }
    }

    //What we do Section
    $wp_customize->add_section('smart_cleaning_company_serivces',array(
        'title' => esc_html__('What we do Section','smart-cleaning-company'),
        'description' => esc_html__('Here you have to select category which will display perticular what we do in the home page.','smart-cleaning-company'),
    ));

    $wp_customize->add_setting('smart_cleaning_company_services_category_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('smart_cleaning_company_services_category_title', array(
        'label' => __('Section Title', 'smart-cleaning-company'),
        'section' => 'smart_cleaning_company_serivces',
        'priority' => 1,
        'type' => 'text',
    ));

    $smart_cleaning_company_categories = get_categories();
    $smart_cleaning_company_cat_post = array();
    $smart_cleaning_company_cat_post[]= 'select';
    $i = 0;
    foreach($smart_cleaning_company_categories as $smart_cleaning_company_category){
        if($i==0){
            $default = $smart_cleaning_company_category->slug;
            $i++;
        }
        $smart_cleaning_company_cat_post[$smart_cleaning_company_category->slug] = $smart_cleaning_company_category->name;
    }

    $wp_customize->add_setting('smart_cleaning_company_menu_items',array(
        'default'   => 'select',
        'sanitize_callback' => 'smart_cleaning_company_sanitize_select',
    ));
    $wp_customize->add_control('smart_cleaning_company_menu_items',array(
        'type'    => 'select',
        'choices' => $smart_cleaning_company_cat_post,
        'label' => __('Select Category to display Services','smart-cleaning-company'),
        'section' => 'smart_cleaning_company_serivces',
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_what_we_do_setting', array(
        'sanitize_callback' => 'Smart_Cleaning_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Smart_Cleaning_Company_Customize_Pro_Version ( $wp_customize,'pro_version_what_we_do_setting', array(
        'section'     => 'smart_cleaning_company_serivces',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'smart-cleaning-company' ),
        'description' => esc_url( SMART_CLEANING_URL ),
        'priority'    => 100
    )));
}
add_action('customize_register', 'smart_cleaning_company_customize_register');

if ( ! function_exists( 'smart_cleaning_company_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function smart_cleaning_company_setup() {

        add_theme_support( 'responsive-embeds' );

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

        add_image_size('smart-cleaning-company-featured-header-image', 2000, 660, true);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'smart_cleaning_custom_background_args', array(
            'default-color' => '',
            'default-image' => '',
        ) ) );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 50,
            'flex-width'  => true,
        ) );

        add_editor_style( array( '/editor-style.css' ) );

        add_theme_support( 'align-wide' );

        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'smart_cleaning_company_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smart_cleaning_company_widgets_init() {
        register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'smart-cleaning-company' ),
        'id'            => 'sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'smart-cleaning-company' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'smart_cleaning_company_widgets_init' );

function smart_cleaning_company_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_setting( 'smart_cleaning_topbar_text1' );
    $wp_customize->remove_control( 'smart_cleaning_topbar_text1' );

    $wp_customize->remove_setting( 'smart_cleaning_topbar_link1' );
    $wp_customize->remove_control( 'smart_cleaning_topbar_link1' );

    $wp_customize->remove_setting( 'smart_cleaning_topbar_text2' );
    $wp_customize->remove_control( 'smart_cleaning_topbar_text2' );

    $wp_customize->remove_setting( 'smart_cleaning_topbar_link2' );
    $wp_customize->remove_control( 'smart_cleaning_topbar_link2' );

    $wp_customize->remove_setting( 'smart_cleaning_topbar_text3' );
    $wp_customize->remove_control( 'smart_cleaning_topbar_text3' );

    $wp_customize->remove_setting( 'smart_cleaning_topbar_link3' );
    $wp_customize->remove_control( 'smart_cleaning_topbar_link3' );

    $wp_customize->remove_setting( 'smart_cleaning_slide_day' );
    $wp_customize->remove_control( 'smart_cleaning_slide_day' );

    $wp_customize->remove_setting( 'smart_cleaning_slide_time' );
    $wp_customize->remove_control( 'smart_cleaning_slide_time' );
}
add_action( 'customize_register', 'smart_cleaning_company_remove_customize_register', 11 );

function smart_cleaning_company_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
