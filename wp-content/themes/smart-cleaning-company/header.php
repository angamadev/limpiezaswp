<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart Cleaning Company
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();} else { do_action( 'wp_body_open' ); } ?>
<?php if(get_theme_mod('smart_cleaning_preloader_hide','')){ ?>
    <?php if(get_theme_mod('smart_cleaning_preloader_type','Preloader 1') == 'Preloader 1'){ ?>
        <div class="loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    <?php } elseif(get_theme_mod('smart_cleaning_preloader_type','Preloader 2') == 'Preloader 2') {?>
        <div class="loading2">
            <div class="load">
                <hr/><hr/><hr/><hr/>
            </div>
        </div>
    <?php }?>
<?php } ?>

<?php $smart_cleaning_sticky_header = get_theme_mod('smart_cleaning_sticky_header');
    $data_sticky = "false";
    if ($smart_cleaning_sticky_header) {
        $data_sticky = "true";
 }
?>

<div id="page" class="site">
    <div class="<?php if(get_theme_mod('smart_cleaning_site_width_layout','Full Width') == 'Wide Width'){?>container-fluid<?php } elseif(get_theme_mod('smart_cleaning_site_width_layout','Full Width') == 'Container Width') {?>container<?php }?>">
        <a class="skip-link screen-reader-text" href="#skip-content"><?php esc_html_e('Skip to content', 'smart-cleaning-company'); ?></a>
        <header id="masthead" class="site-header shadow-sm navbar-dark bg-primary">
            <div class="socialmedia">
                <div class="main_header py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 align-self-center">
                                <?php if(get_theme_mod('smart_cleaning_topbar_email') != ''){ ?>
                                    <p class="mb-0"><i class="fas fa-envelope"></i> <span><?php esc_html_e('Email','smart-cleaning-company');?></span> : <a href="mailto:<?php echo esc_html(get_theme_mod('smart_cleaning_topbar_email','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_email','')); ?></a></p>
                                <?php }?>
                            </div>
                            <div class="col-lg-3 col-md-3 py-2 align-self-center">
                                <?php if(get_theme_mod('smart_cleaning_header_location') != ''){ ?>
                                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i> <span><?php esc_html_e('Location','smart-cleaning-company'); ?></span> : <?php echo esc_html(get_theme_mod('smart_cleaning_header_location','')); ?></p>
                                <?php }?>
                            </div>
                            <div class="col-lg-3 col-md-3 py-2 align-self-center">
                                <?php if(get_theme_mod('smart_cleaning_header_phone') != ''){ ?>
                                    <p class="mb-0 text-center"><i class="fas fa-phone"></i> <span><?php esc_html_e('Call Us','smart-cleaning-company'); ?></span> : <a href="tel:<?php echo esc_html(get_theme_mod('smart_cleaning_header_phone','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_header_phone','')); ?></a></p>
                                <?php }?>
                            </div>
                            <div class="col-lg-3 col-md-3 py-2 align-self-center">
                                <div class="social-link text-center text-lg-right text-md-right">
                                    <?php if(get_theme_mod('smart_cleaning_facebook_url') != ''){ ?>
                                        <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_facebook_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_facebook_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('smart_cleaning_twitter_url') != ''){ ?>
                                        <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_twitter_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_twitter_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('smart_cleaning_intagram_url') != ''){ ?>
                                        <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_intagram_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_intagram_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('smart_cleaning_linkedin_url') != ''){ ?>
                                        <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_linkedin_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_linkedin_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('smart_cleaning_pintrest_url') != ''){ ?>
                                        <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_pintrest_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_pintrest_icon') ); ?>"></i></a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-header" data-sticky="<?php echo esc_attr($data_sticky); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-9 align-self-center">
                                <div class="navbar-brand text-center text-md-left">
                                    <?php if ( has_custom_logo() ) : ?>
                                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                                    <?php endif; ?>
                                    <?php $smart_cleaning_company_blog_info = get_bloginfo( 'name' ); ?>
                                    <?php if ( ! empty( $smart_cleaning_company_blog_info ) ) : ?>
                                        <?php if ( is_front_page() && is_home() ) : ?>
                                          <?php if( get_theme_mod('smart_cleaning_logo_title',true) != ''){ ?>
                                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                          <?php }?>
                                        <?php else : ?>
                                          <?php if( get_theme_mod('smart_cleaning_logo_title',true) != ''){ ?>
                                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                          <?php } ?>
                                        <?php endif; ?>
                                        <?php
                                            $smart_cleaning_company_description = get_bloginfo( 'description', 'display' );
                                            if ( $smart_cleaning_company_description || is_customize_preview() ) :
                                        ?>
                                        <?php if( get_theme_mod('smart_cleaning_theme_description',false) != ''){ ?>
                                        <p class="site-description mb-0 text-center text-md-left"><?php echo esc_html($smart_cleaning_company_description); ?></p>
                                        <?php } ?>
                                      <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6 col-3 align-self-center">
                                <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
