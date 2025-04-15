<?php
/**
 * Displays main header
 *
 * @package Smart Cleaning
 */
?>

<div class="main_header py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 align-self-center">
                <div class="navbar-brand">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <?php $smart_cleaning_blog_info = get_bloginfo( 'name' ); ?>
                    <?php if ( ! empty( $smart_cleaning_blog_info ) ) : ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                            <?php if( get_theme_mod('smart_cleaning_logo_title',true) != ''){ ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php }?>
                        <?php else : ?>
                            <?php if( get_theme_mod('smart_cleaning_logo_title',true) != ''){ ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php }?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 py-2 align-self-center">
                <?php if(get_theme_mod('smart_cleaning_header_location') != ''){ ?>
                    <p class="mb-0"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_header_location_icon') ); ?> "></i> <span><?php esc_html_e('Location','smart-cleaning'); ?></span> : <?php echo esc_html(get_theme_mod('smart_cleaning_header_location','')); ?></p>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-3 py-2 align-self-center">
                <?php if(get_theme_mod('smart_cleaning_header_phone') != ''){ ?>
                    <p class="mb-0 text-center"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_header_phone_icon') ); ?>"></i> <span><?php esc_html_e('Call Us','smart-cleaning'); ?></span> : <a href="tel:<?php echo esc_html(get_theme_mod('smart_cleaning_header_phone','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_header_phone','')); ?></a></p>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-3 py-2 align-self-center">
                <?php if(get_theme_mod('smart_cleaning_blog_social_icon_setting') != ''){ ?>
                <div class="social-link text-center text-lg-end text-md-end">
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
                 <?php }?>
            </div>
        </div>
    </div>
</div>
