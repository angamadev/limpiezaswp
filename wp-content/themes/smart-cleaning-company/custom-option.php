<?php

    $smart_cleaning_theme_css= "";

    /*--------------------------- Preloader color -------------------*/
    $smart_cleaning_preloader2_dot_color = get_theme_mod( 'smart_cleaning_preloader2_dot_color');
    if( $smart_cleaning_preloader2_dot_color != '') {
        $smart_cleaning_theme_css .='.load hr {';
            $smart_cleaning_theme_css .='background-color: '. $smart_cleaning_preloader2_dot_color. ';';
        $smart_cleaning_theme_css .='}';
    }