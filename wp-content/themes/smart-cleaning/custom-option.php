<?php

    $smart_cleaning_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $smart_cleaning_scroll_position = get_theme_mod( 'smart_cleaning_scroll_top_position','Right');
    if($smart_cleaning_scroll_position == 'Right'){
        $smart_cleaning_theme_css .='#button{';
            $smart_cleaning_theme_css .='right: 20px;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_scroll_position == 'Left'){
        $smart_cleaning_theme_css .='#button{';
            $smart_cleaning_theme_css .='left: 20px;right: auto;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_scroll_position == 'Center'){
        $smart_cleaning_theme_css .='#button{';
            $smart_cleaning_theme_css .='right: auto;left: 50%; transform:translateX(-50%);';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Scroll To Top Border Radius -------------------*/

    $smart_cleaning_scroll_to_top_border_radius = get_theme_mod('smart_cleaning_scroll_to_top_border_radius');
    $smart_cleaning_scroll_bg_color = get_theme_mod('smart_cleaning_scroll_bg_color');
    $smart_cleaning_scroll_color = get_theme_mod('smart_cleaning_scroll_color');
    $smart_cleaning_scroll_font_size = get_theme_mod('smart_cleaning_scroll_font_size');
    if($smart_cleaning_scroll_to_top_border_radius != false || $smart_cleaning_scroll_bg_color != false || $smart_cleaning_scroll_color != false || $smart_cleaning_scroll_font_size != false){
        $smart_cleaning_theme_css .='#colophon a#button{';
            $smart_cleaning_theme_css .='border-radius: '.esc_attr($smart_cleaning_scroll_to_top_border_radius).'px; background-color: '.esc_attr($smart_cleaning_scroll_bg_color).'; color: '.esc_attr($smart_cleaning_scroll_color).' !important; font-size: '.esc_attr($smart_cleaning_scroll_font_size).'px;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/
    $smart_cleaning_slider_opacity_setting = get_theme_mod( 'smart_cleaning_slider_opacity_setting',true);
    $smart_cleaning_image_opacity_color = get_theme_mod( 'smart_cleaning_image_opacity_color');
    $smart_cleaning_slider_opacity = get_theme_mod( 'smart_cleaning_slider_opacity');
    if( $smart_cleaning_slider_opacity_setting != false) {
        $smart_cleaning_theme_css .='#top-slider .slider-box img{';
            $smart_cleaning_theme_css .='opacity: '. $smart_cleaning_slider_opacity. ';';
        $smart_cleaning_theme_css .='}';
        if( $smart_cleaning_image_opacity_color != '') {
            $smart_cleaning_theme_css .='#top-slider .slider-box {';
                $smart_cleaning_theme_css .='background-color: '. $smart_cleaning_image_opacity_color. ';';
            $smart_cleaning_theme_css .='}';
        }
    } else {
        $smart_cleaning_theme_css .='#top-slider .slider-box img{';
            $smart_cleaning_theme_css .='opacity: 1;';
        $smart_cleaning_theme_css .='}';
    }

    /*---------------------------Slider Height ------------*/

    $smart_cleaning_slider_img_height = get_theme_mod('smart_cleaning_slider_img_height');
    if($smart_cleaning_slider_img_height != false){
        $smart_cleaning_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $smart_cleaning_theme_css .='height: '.esc_attr($smart_cleaning_slider_img_height).';';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Post Page Image Box Shadow -------------------*/

    $smart_cleaning_post_page_image_box_shadow = get_theme_mod('smart_cleaning_post_page_image_box_shadow',0);
    if($smart_cleaning_post_page_image_box_shadow != false){
        $smart_cleaning_theme_css .='.article-box img{';
            $smart_cleaning_theme_css .='box-shadow: '.esc_attr($smart_cleaning_post_page_image_box_shadow).'px '.esc_attr($smart_cleaning_post_page_image_box_shadow).'px '.esc_attr($smart_cleaning_post_page_image_box_shadow).'px #cccccc;';
        $smart_cleaning_theme_css .='}';
    }

    /*---------------- Single post Settings ------------------*/

    $smart_cleaning_single_post_navigation_show_hide = get_theme_mod('smart_cleaning_single_post_navigation_show_hide',true);
    if($smart_cleaning_single_post_navigation_show_hide != true){
        $smart_cleaning_theme_css .='.nav-links{';
            $smart_cleaning_theme_css .='display: none;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Product Image Box Shadow -------------------*/

    $smart_cleaning_woo_product_image_box_shadow = get_theme_mod('smart_cleaning_woo_product_image_box_shadow',0);
    if($smart_cleaning_woo_product_image_box_shadow != false){
        $smart_cleaning_theme_css .='.woocommerce ul.products li.product a img{';
            $smart_cleaning_theme_css .='box-shadow: '.esc_attr($smart_cleaning_woo_product_image_box_shadow).'px '.esc_attr($smart_cleaning_woo_product_image_box_shadow).'px '.esc_attr($smart_cleaning_woo_product_image_box_shadow).'px #cccccc;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Woocommerce Sale Product Border Radius -------------------*/

    $smart_cleaning_woo_product_sale_border_radius = get_theme_mod('smart_cleaning_woo_product_sale_border_radius');
    if($smart_cleaning_woo_product_sale_border_radius != false){
        $smart_cleaning_theme_css .='.woocommerce ul.products li.product .onsale{';
            $smart_cleaning_theme_css .='border-radius: '.esc_attr($smart_cleaning_woo_product_sale_border_radius).'px;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Woocommerce Related Products -------------------*/

    $smart_cleaning_woocommerce_related_product_show_hide = get_theme_mod('smart_cleaning_woocommerce_related_product_show_hide',true);
    if($smart_cleaning_woocommerce_related_product_show_hide != true){
        $smart_cleaning_theme_css .='.related.products{';
            $smart_cleaning_theme_css .='display: none;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Footer Background Color -------------------*/

    $smart_cleaning_footer_background_color = get_theme_mod('smart_cleaning_footer_background_color');
    if($smart_cleaning_footer_background_color != false){
        $smart_cleaning_theme_css .='.footer-widgets{';
            $smart_cleaning_theme_css .='background-color: '.esc_attr($smart_cleaning_footer_background_color).' !important;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $smart_cleaning_footer_bg_image = get_theme_mod('smart_cleaning_footer_bg_image');
    if($smart_cleaning_footer_bg_image != false){
        $smart_cleaning_theme_css .='#colophon{';
            $smart_cleaning_theme_css .='background: url('.esc_attr($smart_cleaning_footer_bg_image).')!important;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Single Post Page Image Box Shadow -------------------*/

    $smart_cleaning_single_post_page_image_box_shadow = get_theme_mod('smart_cleaning_single_post_page_image_box_shadow',0);
    if($smart_cleaning_single_post_page_image_box_shadow != false){
        $smart_cleaning_theme_css .='.single-post .entry-header img{';
            $smart_cleaning_theme_css .='box-shadow: '.esc_attr($smart_cleaning_single_post_page_image_box_shadow).'px '.esc_attr($smart_cleaning_single_post_page_image_box_shadow).'px '.esc_attr($smart_cleaning_single_post_page_image_box_shadow).'px #cccccc;';
        $smart_cleaning_theme_css .='}';
    }

     /*--------------------------- Single Post Page Image Border Radius -------------------*/

    $smart_cleaning_single_post_page_image_border_radius = get_theme_mod('smart_cleaning_single_post_page_image_border_radius', 0);
    if($smart_cleaning_single_post_page_image_border_radius != false){
        $smart_cleaning_theme_css .='.single-post .entry-header img{';
            $smart_cleaning_theme_css .='border-radius: '.esc_attr($smart_cleaning_single_post_page_image_border_radius).'px;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Footer Background Image Position -------------------*/

    $smart_cleaning_footer_bg_image_position = get_theme_mod( 'smart_cleaning_footer_bg_image_position','scroll');
    if($smart_cleaning_footer_bg_image_position == 'fixed'){
        $smart_cleaning_theme_css .='#colophon{';
            $smart_cleaning_theme_css .='background-attachment: fixed !important; background-position: center !important;';
        $smart_cleaning_theme_css .='}';
    }elseif ($smart_cleaning_footer_bg_image_position == 'scroll'){
        $smart_cleaning_theme_css .='#colophon{';
            $smart_cleaning_theme_css .='background-attachment: scroll !important; background-position: center !important;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Footer Widget Heading Alignment -------------------*/

    $smart_cleaning_footer_widget_heading_alignment = get_theme_mod( 'smart_cleaning_footer_widget_heading_alignment','Left');
    if($smart_cleaning_footer_widget_heading_alignment == 'Left'){
        $smart_cleaning_theme_css .='#colophon h5, h5.footer-column-widget-title{';
        $smart_cleaning_theme_css .='text-align: left;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_footer_widget_heading_alignment == 'Center'){
        $smart_cleaning_theme_css .='#colophon h5, h5.footer-column-widget-title{';
            $smart_cleaning_theme_css .='text-align: center;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_footer_widget_heading_alignment == 'Right'){
        $smart_cleaning_theme_css .='#colophon h5, h5.footer-column-widget-title{';
            $smart_cleaning_theme_css .='text-align: right;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Copyright Background Color -------------------*/

    $smart_cleaning_copyright_background_color = get_theme_mod('smart_cleaning_copyright_background_color');
    if($smart_cleaning_copyright_background_color != false){
        $smart_cleaning_theme_css .='.footer_info{';
            $smart_cleaning_theme_css .='background-color: '.esc_attr($smart_cleaning_copyright_background_color).' !important;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Featured Image Border Radius -------------------*/

    $smart_cleaning_post_page_image_border_radius = get_theme_mod('smart_cleaning_post_page_image_border_radius', 0);
    if($smart_cleaning_post_page_image_border_radius != false){
        $smart_cleaning_theme_css .='.article-box img{';
            $smart_cleaning_theme_css .='border-radius: '.esc_attr($smart_cleaning_post_page_image_border_radius).'px;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Site Title And Tagline Color -------------------*/

    $smart_cleaning_logo_title_color = get_theme_mod('smart_cleaning_logo_title_color');
    if($smart_cleaning_logo_title_color != false){
        $smart_cleaning_theme_css .='p.site-title a, .navbar-brand a{';
            $smart_cleaning_theme_css .='color: '.esc_attr($smart_cleaning_logo_title_color).' !important;';
        $smart_cleaning_theme_css .='}';
    }

    $smart_cleaning_logo_tagline_color = get_theme_mod('smart_cleaning_logo_tagline_color');
    if($smart_cleaning_logo_tagline_color != false){
        $smart_cleaning_theme_css .='p.site-description{';
            $smart_cleaning_theme_css .='color: '.esc_attr($smart_cleaning_logo_tagline_color).'  !important;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Footer Widget Content Alignment -------------------*/

    $smart_cleaning_footer_widget_content_alignment = get_theme_mod( 'smart_cleaning_footer_widget_content_alignment','Left');
    if($smart_cleaning_footer_widget_content_alignment == 'Left'){
        $smart_cleaning_theme_css .='#colophon ul, #colophon p, .tagcloud, .widget{';
        $smart_cleaning_theme_css .='text-align: left;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_footer_widget_content_alignment == 'Center'){
        $smart_cleaning_theme_css .='#colophon ul, #colophon p, .tagcloud, .widget{';
            $smart_cleaning_theme_css .='text-align: center;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_footer_widget_content_alignment == 'Right'){
        $smart_cleaning_theme_css .='#colophon ul, #colophon p, .tagcloud, .widget{';
            $smart_cleaning_theme_css .='text-align: right;';
        $smart_cleaning_theme_css .='}';
    }

    /*--------------------------- Copyright Content Alignment -------------------*/

    $smart_cleaning_copyright_content_alignment = get_theme_mod( 'smart_cleaning_copyright_content_alignment','Right');
    if($smart_cleaning_copyright_content_alignment == 'Left'){
        $smart_cleaning_theme_css .='.footer-menu-left{';
        $smart_cleaning_theme_css .='text-align: left;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_copyright_content_alignment == 'Center'){
        $smart_cleaning_theme_css .='.footer-menu-left{';
            $smart_cleaning_theme_css .='text-align: center;';
        $smart_cleaning_theme_css .='}';
    }else if($smart_cleaning_copyright_content_alignment == 'Right'){
        $smart_cleaning_theme_css .='.footer-menu-left{';
            $smart_cleaning_theme_css .='text-align: right;';
        $smart_cleaning_theme_css .='}';
    }

    /*------------------ Nav Menus -------------------*/

    $smart_cleaning_nav_menu = get_theme_mod( 'smart_cleaning_nav_menu_text_transform','Capitalize');
    if($smart_cleaning_nav_menu == 'Capitalize'){
        $smart_cleaning_theme_css .='.main-navigation .menu > li > a{';
            $smart_cleaning_theme_css .='text-transform:Capitalize;';
        $smart_cleaning_theme_css .='}';
    }
    if($smart_cleaning_nav_menu == 'Lowercase'){
        $smart_cleaning_theme_css .='.main-navigation .menu > li > a{';
            $smart_cleaning_theme_css .='text-transform:Lowercase;';
        $smart_cleaning_theme_css .='}';
    }
    if($smart_cleaning_nav_menu == 'Uppercase'){
        $smart_cleaning_theme_css .='.main-navigation .menu > li > a{';
            $smart_cleaning_theme_css .='text-transform:Uppercase;';
        $smart_cleaning_theme_css .='}';
    }

    $smart_cleaning_menu_font_size = get_theme_mod( 'smart_cleaning_menu_font_size');
    if($smart_cleaning_menu_font_size != ''){
        $smart_cleaning_theme_css .='.main-navigation .menu > li > a{';
            $smart_cleaning_theme_css .='font-size: '.esc_attr($smart_cleaning_menu_font_size).'px;';
        $smart_cleaning_theme_css .='}';
    }

    $smart_cleaning_nav_menu_font_weight = get_theme_mod( 'smart_cleaning_nav_menu_font_weight',400);
    if($smart_cleaning_menu_font_size != ''){
        $smart_cleaning_theme_css .='.main-navigation .menu > li > a{';
            $smart_cleaning_theme_css .='font-weight: '.esc_attr($smart_cleaning_nav_menu_font_weight).';';
        $smart_cleaning_theme_css .='}';
    }

    /*------------------ Slider CSS -------------------*/

    $smart_cleaning_slider_content_layout = get_theme_mod( 'smart_cleaning_slider_content_layout','Left');
    if($smart_cleaning_slider_content_layout == 'Left'){
        $smart_cleaning_theme_css .='.slider-inner-box, #top-slider .slider-inner-box p{';
            $smart_cleaning_theme_css .='text-align : left;';
        $smart_cleaning_theme_css .='}';
    }
    if($smart_cleaning_slider_content_layout == 'Center'){
        $smart_cleaning_theme_css .='.slider-inner-box, #top-slider .slider-inner-box p{';
            $smart_cleaning_theme_css .='text-align : center;';
        $smart_cleaning_theme_css .='}';
    }
    if($smart_cleaning_slider_content_layout == 'Right'){
        $smart_cleaning_theme_css .='.slider-inner-box, #top-slider .slider-inner-box p{';
            $smart_cleaning_theme_css .='text-align : right;';
        $smart_cleaning_theme_css .='}';
    }