<?php

function iskills_pros_and_cons_options_default($theme = "iskillspc-theme-00", $buttonTheme = null)
{
    if ($buttonTheme == null) {
        $options = array(
            'membership_code' => 0,
            'use_theme' => 'default',
            'parent_theme' => $theme,
            'use_border' => 0,
            'use_outer_border' => 0,
            'use_round_corner' => 0,
            'border_outer_size' => 2,
            'border_color' => '#d4d4d4',
            'border_size' => 1,
            'use_border_shadow' => 0,
            'use_space_between_column' => 0,
            'heading_title_center' => 1,
            'heading_title_color' => '#ffffff',
            'heading_title_background' => '#00bf08',
            'heading_center' => 0,
            'heading_font_size' => '',
            'heading_color' => '#ffffff',
            'use_heading_icon' => 0,
            'heading_pros_icon' => 'icon icon-thumbs-o-up',
            'heading_cons_icon' => 'icon icon-thumbs-o-down',
            'heading_pros_icon_color' => '#095386',
            'heading_cons_icon_color' => '#c12f2d',
            'text_underline' => 0,
            'pros_heading_background' => '#00bf08',
            'cons_heading_background' => '#bf000a',
            'body_font_size' => '',
            'body_color' => '',
            'pros_background' => '',
            'cons_background' => '',
            'use_icons' => 1,
            'icon_top' => 8,
            'pros_icon' => 'icon icon-thumbs-o-up',
            'cons_icon' => 'icon icon-thumbs-o-down',
            'pros_icon_color' => '#00bf08',
            'cons_icon_color' => '#bf000a',
            'button_theme' => 'default',
            'button_icon' => 'icon icon-cart-1',
            'button_color' => '#00bf08',
            'button_gradient_color' => '#bf000a',
            'button_text_color' => '#ffffff',
            'button_radius' => 0,
            'button_radius_in_percent' => 0,
            'button_line_height' => '',
            'button_min_width' => 'auto',
            'button_class' => ''
        );
        $options['use_theme'] = $theme;
        $options['button_theme'] = $buttonTheme;


        switch ($theme) {
            case 'iskillspc-theme-01': //Shadow
                $options['use_border_shadow'] = 1;
                break;
            case 'iskillspc-theme-02':  //Background
                $options['pros_background'] = '#e9f5e9';
                $options['cons_background'] = '#f9dcdd';
                $options['pros_icon'] = 'icon icon-star-1';
                $options['cons_icon'] = 'icon icon-ban-7';
                $options['button_icon'] = 'icon icon-cart-3';
                break;
            case 'iskillspc-theme-03': //Bordered
                $options['use_border'] = 1;
                $options['pros_icon'] = 'icon icon-plus-thick';
                $options['cons_icon'] = 'icon icon-minus-thick';
                $options['button_icon'] = 'icon icon-cart-4';
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 25;
                $options['button_theme'] = 'iskillspc-btn-theme-01';
                break;
            case 'iskillspc-theme-04': //Underline
                $options['heading_title_background'] = '#2a3873';
                $options['pros_heading_background'] = '#2a3873';
                $options['cons_heading_background'] = '#ae3433';
                $options['pros_icon_color'] = '#2a3873';
                $options['cons_icon_color'] = '#ae3433';
                $options['pros_icon'] = 'icon icon-star-4';
                $options['cons_icon'] = 'icon icon-star-4';
                $options['heading_center'] = 1;
                $options['use_border'] = 1;
                $options['text_underline'] = 1;
                $options['button_icon'] = 'icon icon-cart-4';
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 25;
                $options['button_color'] = '#2a3873';
                $options['button_gradient_color'] = '#ae3433';
                break;
            case 'iskillspc-theme-05': //Spacer
                $options['use_space_between_column'] = 1;
                $options['pros_heading_background'] = '#10c9a8';
                $options['cons_heading_background'] = '#f62d33';
                $options['pros_icon_color'] = '#10c9a8';
                $options['cons_icon_color'] = '#f62d33';
                $options['pros_icon'] = 'icon icon-check-4';
                $options['cons_icon'] = 'icon icon-ban-1';
                $options['heading_title_background'] = '#10c9a8';
                $options['button_color'] = '#10c9a8';
                $options['button_gradient_color'] = '#f62d33';
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 35;
                break;
            case 'iskillspc-theme-06': // Head Icon
                $options['use_heading_icon'] = 1;
                $options['use_border'] = 1;
                $options['use_space_between_column'] = 1;
                $options['pros_icon_color'] = '#095386';
                $options['cons_icon_color'] = '#c12f2d';
                $options['pros_icon'] = 'icon icon-check-4';
                $options['cons_icon'] = 'icon icon-ban-3';
                $options['heading_title_background'] = '#095386';
                $options['button_color'] = '#095386';
                $options['button_gradient_color'] = '#c12f2d';
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 40;
                break;
            case 'iskillspc-theme-07':  // Full Header              
                $options['heading_center'] = 1;
                $options['use_outer_border'] = 1;
                $options['pros_heading_background'] = '#ffffff';
                $options['cons_heading_background'] = '#ffffff';
                $options['heading_color'] = '#469385';
                $options['pros_icon_color'] = '#469385';
                $options['cons_icon_color'] = '#f62d33';
                $options['pros_icon'] = 'icon icon-check-1';
                $options['cons_icon'] = 'icon icon-ban-5';
                $options['heading_title_background'] = '#469385';
                $options['button_color'] = '#469385';
                $options['button_gradient_color'] = '#f62d33';
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 30;
                break;
            case 'iskillspc-theme-08':  //Background
                $options['use_space_between_column'] = 1;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#058c09';
                $options['pros_background'] = '#058c09';
                $options['cons_background'] = '#f93b3b';
                $options['pros_heading_background'] = '#058c09';
                $options['cons_heading_background'] = '#f93b3b';
                $options['body_color'] = '#ffffff';
                $options['pros_icon'] = 'icon icon-minus-thin';
                $options['cons_icon'] = 'icon icon-minus-thin';
                $options['pros_icon_color'] = '#ffffff';
                $options['cons_icon_color'] = '#ffffff';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#058c09';
                $options['button_gradient_color'] = '#058c09';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                break;
            case 'iskillspc-theme-09':  //Round Corner
                $options['use_space_between_column'] = 1;
                $options['use_round_corner'] = 1;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-heart-4';
                $options['cons_icon'] = 'icon icon-heart-break-1';
                $options['pros_icon_color'] = '#6ea6af';
                $options['cons_icon_color'] = '#e25e2b';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = 'icon icon-trophy';
                $options['button_theme'] = 'iskillspc-btn-theme-00';
                break;

            case 'iskillspc-theme-10':
                $options['theme'] = 'iskillspc-theme-10';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = '';
                $options['cons_icon'] = '';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-11':
                $options['theme'] = 'iskillspc-theme-11';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = '';
                $options['cons_icon'] = '';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-11';
                break;

            case 'iskillspc-theme-12':
                $options['theme'] = 'iskillspc-theme-12';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = '';
                $options['cons_icon'] = '';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-13':
                $options['theme'] = 'iskillspc-theme-13';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'fa fa-plus-circle';
                $options['cons_icon'] = 'fa fa-minus-circle';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-14':
                $options['theme'] = 'iskillspc-theme-14';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = '';
                $options['cons_icon'] = '';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-15':
                $options['theme'] = 'iskillspc-theme-15';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-thumbs-up';
                $options['cons_icon'] = 'icon icon-thumbs-down';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-16':
                $options['theme'] = 'iskillspc-theme-16';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-thumbs-up';
                $options['cons_icon'] = 'icon icon-thumbs-down';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-17':
                $options['theme'] = 'iskillspc-theme-17';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'fa fa-check';
                $options['cons_icon'] = 'fa fa-times';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-18':
                $options['theme'] = 'iskillspc-theme-18';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = '';
                $options['cons_icon'] = '';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-19':
                $options['theme'] = 'iskillspc-theme-19';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-check-6';
                $options['cons_icon'] = 'icon icon-cancle-2';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-20':
                $options['theme'] = 'iskillspc-theme-20';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = '';
                $options['cons_icon'] = '';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-21':
                $options['theme'] = 'iskillspc-theme-21';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-check-4';
                $options['cons_icon'] = 'icon icon-cancle';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-22':
                $options['theme'] = 'iskillspc-theme-22';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-check-4';
                $options['cons_icon'] = 'icon icon-cancle';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;

            case 'iskillspc-theme-23':
                $options['theme'] = 'iskillspc-theme-23';
                $options['use_space_between_column'] = 0;
                $options['use_round_corner'] = 0;
                $options['heading_center'] = 1;
                $options['heading_title_background'] = '#6ea6af';
                $options['pros_heading_background'] = '#6ea6af';
                $options['cons_heading_background'] = '#e25e2b';
                $options['pros_icon'] = 'icon icon-check-6';
                $options['cons_icon'] = 'icon icon-cancle-2';
                $options['pros_icon_color'] = '#27ae60';
                $options['cons_icon_color'] = '#e74c3c';
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#355c63';
                $options['button_radius'] = 0;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 35;
                $options['button_min_width'] = 50;
                $options['button_icon'] = '';
                $options['button_theme'] = 'iskillspc-btn-theme-10';
                break;
        }
    } else {
        $options['button_theme'] = $buttonTheme;

        switch ($buttonTheme) {
            case 'iskillspc-btn-theme-00': //Default
                $options['button_text_color'] = '#333333';
                $options['button_color'] = '#ffec64';
                $options['button_gradient_color'] = '#ffab23';
                $options['button_radius'] = 6;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 35;
                $options['button_icon'] = 'icon icon-trophy';
                break;
            case 'iskillspc-btn-theme-01': // Bootstrap
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#469385';
                $options['button_gradient_color'] = '#3d8c96';
                $options['button_radius'] = 6;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 100;
                break;
            case 'iskillspc-btn-theme-02': // 3D Style
                $options['button_text_color'] = '#ffffff';
                $options['button_color'] = '#6ea6af';
                $options['button_gradient_color'] = '#096473';
                $options['button_radius'] = 4;
                $options['button_radius_in_percent'] = 0;
                $options['button_line_height'] = 30;
                $options['button_min_width'] = 50;
                break;
            case 'no-style': //No Style
                $options['button_text_color'] = '';
                $options['button_color'] = '';
                $options['button_gradient_color'] = '';
                $options['button_radius'] = '';
                $options['button_radius_in_percent'] = '';
                $options['button_line_height'] = '';
                $options['button_min_width'] = '';
                break;
        }
    }
    return $options;
}

function iskills_rating_box_options_default($rating_theme = "iskillsrb-box-01")
{
    $options = array(
        'parent_rating_theme' => $rating_theme,
        'qb_title' => 'Quality',
        'qb_percentage' => 50,
        'pb_title' => 'Price',
        'pb_percentage' => 50,
        'db_title' => 'Design',
        'db_percentage' => 50,
        'ub_title' => 'Usability',
        'ub_percentage'  => 50,
        'show_qb' => true,
        'show_db' => true,
        'show_pb' => true,
        'show_ub' => true,
    );
    $options['use_rating_theme'] = $rating_theme;

    switch ($rating_theme) {
        case 'iskillsrb-box-01': //Shadow
            $options['theme'] = 'iskillsrb-box-01';
            $options['circle_heading'] = 1;
            break;

        case 'iskillsrb-box-02': //Shadow
            $options['use_border_shadow'] = 1;
            $options['theme'] = 'iskillsrb-box-02';
            $options['circle_heading'] = 1;
            break;

        case 'iskillsrb-box-03': //Shadow
            $options['use_border_shadow'] = 1;
            $options['theme'] = 'iskillsrb-box-03';
            $options['circle_heading'] = 1;
            break;

        case 'iskillsrb-box-04': //Shadow
            $options['use_border_shadow'] = 1;
            $options['theme'] = 'iskillsrb-box-04';
            $options['circle_heading'] = 1;
            break;
    }
    return $options;
}

function iskills_price_box_options_default($price_theme = "iskillspb-box-01")
{   
    $options = array(
        'parent_price_theme' => $price_theme,
        'p1' => '',
        'p1_title' => 'Netgear Nighthawk X10',
        'p1_pkg' => 'Premium Pick',
        'p1_img' => 'C:\xampp74\htdocs\frontend-wp-affiliate-box\img',
        'p1_icon' => 'fa fa-check',
        'pb_button_icon1' => 'fa fa-shopping-cart',
        'pb_link_text1' => 'Check on Amazon',
        'pb_link1' => '#',
        'p2' => '',
        'p2_title' => 'Netgear Nighthawk X10',
        'p2_pkg' => 'Premium Pick',
        'p2_img' => 'C:\xampp74\htdocs\frontend-wp-affiliate-box\img',
        'p2_icon' => 'fa fa-check',
        'pb_button_icon2' => 'fa fa-shopping-cart',
        'pb_link_text2' => 'Check on Amazon',
        'pb_link2' => '#',
        'p3' => '',
        'p3_title' => 'Netgear Nighthawk X10',
        'p3_pkg' => 'Budget Pick',
        'p3_img' => 'C:\xampp74\htdocs\frontend-wp-affiliate-box\img',
        'p3_icon' => 'fa fa-check',
        'pb_button_icon3' => 'fa fa-shopping-cart',
        'pb_link_text3' => 'Check on Amazon',
        'pb_link3' => '#',
        
    );
    $options['use_price_theme'] = $price_theme;

    switch ($price_theme) {
        case 'iskillspb-box-01': //Shadow
            $options['theme'] = 'iskillspb-box-01';
            $options['use_icons'] = true;
            $options['p1_icon'] = 'fa fa-check';
            $options['p2_icon'] = 'fa fa-check';
            $options['p3_icon'] = 'fa fa-check';
            $options['pb_button_icon1'] = 'fa fa-shopping-cart';
            $options['pb_button_icon2'] = 'fa fa-shopping-cart';
            $options['pb_button_icon3'] = 'fa fa-shopping-cart';
            break;

        case 'iskillspb-box-02':
            $options['theme'] = 'iskillspb-box-02';
            $options['use_icons'] = true;
            $options['p1_icon'] = 'fa fa-check-circle';
            $options['p2_icon'] = 'fa fa-check-circle';
            $options['p3_icon'] = 'fa fa-check-circle';
            break;

        case 'iskillspb-box-03': //Shadow
            $options['theme'] = 'iskillspb-box-03';
            $options['use_icons'] = true;
            $options['p1_icon'] = 'fa fa-check-circle-o';
            $options['p2_icon'] = 'fa fa-check-circle-o';
            $options['p3_icon'] = 'fa fa-check-circle-o';
            break;
    }
    return $options;
}

function iskills_comparison_table_options_default($comparison_theme = "iskillsct-table-01")
{
    $options = array(
        'use_comparison_theme' => $comparison_theme,
        'id' => 539,
    );
    if($comparison_theme !== "iskillsct-table-01"){
    }
    switch ($comparison_theme) {
        case 'iskillsct-table-01':
            $options['theme'] = 'iskillsct-table-01';
            break;
    }
    return $options;
}


class iskillsProsAndConsSettingsPage extends Custom_Table_Comparison_List_Table
{
    private $options;
    private $rating_options;
    private $price_options;
    private $comparison_options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action('admin_menu', array($this, 'iskills_affiliate_box_pages'));
        add_action('admin_init', array($this, 'iskills_pros_and_cons_page_init'));
        add_action('admin_init', array($this, 'iskills_rating_box_page_init'));
        add_action('admin_init', array($this, 'iskills_price_box_page_init'));
        add_action('admin_init', array($this, 'iskills_comparison_table_page_init'));
        add_action('admin_enqueue_scripts', array($this, 'iskills_pros_and_cons_add_color_picker'));
        $this->options = get_option('iskills_pros_and_cons', iskills_pros_and_cons_options_default());
        $this->rating_options = get_option('iskills_rating_box', iskills_rating_box_options_default());
        $this->price_options = get_option('iskills_price_box', iskills_price_box_options_default());
        $this->comparison_options = get_option('iskills_comparison_table', iskills_comparison_table_options_default());
    }

    public function iskills_pros_and_cons_add_color_picker()
    {
        if (is_admin()) {
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_style('iskills-pros-and-cons-fa-icons-style', plugins_url('../dist/fa-icons/css/fontawesome-iconpicker.min.css', __FILE__));
            wp_enqueue_style('iskills-pros-and-cons-custom-fonts-icons-style', plugins_url('../dist/fonts/styles.css', __FILE__));
            wp_enqueue_script('iskills-pros-and-cons-custom-js', plugins_url('../dist/js/scripts.js', __FILE__), array('jquery', 'wp-color-picker'), '', true);
            wp_enqueue_script('iskills-pros-and-cons-fa-icons-js', plugins_url('../dist/fa-icons/js/fontawesome-iconpicker.min.js', __FILE__), array('jquery'), '', true);
        }
    }

    public function iskills_affiliate_box_pages()
    {
        add_menu_page('iSkills Affiliate box', 'iSkills Affiliate box', 'manage_options', 'iskills_affiliate_box', array($this, 'iskills_pros_and_cons_settings_page'), 'dashicons-welcome-write-blog', 83);
        add_submenu_page('iskills_affiliate_box', 'iSkills Pros and Cons', 'iSkills Pros and Cons', 'manage_options', 'iskills_affiliate_box');
        add_submenu_page('iskills_affiliate_box', 'iSkills Comparison Table', 'iSkills Comparison Table', 'manage_options', 'iskills_comparison_table', array($this, 'iskills_comparison_table_settings_page'));
        add_submenu_page('iskills_affiliate_box', 'iSkills Top 3 Boxes', 'iSkills Top 3 Boxes', 'manage_options', 'iskills_price_box', array($this, 'iskills_price_box_settings_page'));
        add_submenu_page('iskills_affiliate_box', 'iSkills Rating Box', 'iSkills Rating Box', 'manage_options', 'iskills_rating_box', array($this, 'iskills_rating_box_settings_page'));
    }
    /**
     * Add options page
     */
    public function iskills_pros_and_cons_add_plugin_page()
    {
    }


    /**
     * Options page callback
     */
    public function iskills_pros_and_cons_settings_page()
    {   
?>
        <div id="iskillspc_setting" class="wrap iskills-pros-cons-icons">
            <div id="iskillspc_inner">
                <div class="iskillspc-top-head">
                    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
                </div>
                <?php settings_errors(); ?>

                <?php $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'global'; ?>
                <div class="nav-tab-wrapper">
                    <a href="?page=iskills_affiliate_box&tab=global" class="nav-tab <?php echo $active_tab == 'global' ? 'nav-tab-active' : ''; ?>"><?php _e('Global', 'iskills-pros-cons') ?></a>
                    <a href="?page=iskills_affiliate_box&tab=heading" class="nav-tab <?php echo $active_tab == 'heading' ? 'nav-tab-active' : ''; ?>"><?php _e('Heading', 'iskills-pros-cons') ?></a>
                    <a href="?page=iskills_affiliate_box&tab=section" class="nav-tab <?php echo $active_tab == 'section' ? 'nav-tab-active' : ''; ?>"><?php _e('Section', 'iskills-pros-cons') ?></a>
                    <a href="?page=iskills_affiliate_box&tab=icons" class="nav-tab <?php echo $active_tab == 'icons' ? 'nav-tab-active' : ''; ?>"><?php _e('Icons', 'iskills-pros-cons') ?></a>
                    <a href="?page=iskills_affiliate_box&tab=button" class="nav-tab <?php echo $active_tab == 'button' ? 'nav-tab-active' : ''; ?>"><?php _e('Button', 'iskills-pros-cons') ?></a>
                </div>
                <div class="form-wrapper">
                    <div class="iskills-form-body" style="display:flex;">
                        <div class="iskills-form-body-content">
                            <form method="post" action="options.php" autocomplete="off">
                                <?php
                                // This prints out all hidden setting fields
                                settings_fields('iskills_pros_and_cons');

                                // output setting sections based on tab selections
                                if ($active_tab == 'global') {
                                    do_settings_sections('iskills_pros_and_cons_default');
                                } else if ($active_tab == 'heading') {
                                    do_settings_sections('iskills_pros_and_cons_heading');
                                } else if ($active_tab == 'section') {
                                    do_settings_sections('iskills_pros_and_cons_body');
                                } else if ($active_tab == 'button') {
                                    do_settings_sections('iskills_pros_and_cons_button');
                                } else {
                                    do_settings_sections('iskills_pros_and_cons_icons');
                                }

                                submit_button();
                                //$check_domain = iskillsProsAndConsSettingsPage::testDomain();
                                ?>
                                <!-- <input type="hidden" id="base_url" value="<?php //echo payment_api_end_point; ?>" />
                                <input type="hidden" id="check_domain" value="<?php //if ($check_domain == false) echo "0";
                                                                               // else  echo "1"; ?>" /> -->
                            </form>
                        </div>
                        <div class="preview" style="margin:10px auto;">
                        </div>
                    </div>
                </div>
            <?php
        }


         /**
     * Options page callback
     */
    public function iskills_comparison_table_settings_page()
    {                
?>
        <div id="iskillsct_setting" class="wrap iskills-comparison-table-icons">
            <div id="iskillsct_inner">
                <div class="iskillsct-top-head">
                </div>
                <?php settings_errors(); ?>
                <?php $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'theme_selection'; ?>
                <div class="nav-tab-wrapper">
                    <a href="?page=iskills_comparison_table&tab=theme_selection"class="nav-tab <?php echo $active_tab == 'theme_selection' ? 'nav-tab-active' : ''; ?>"><?php _e('Theme Selection', 'iskills-comparison-table') ?></a>
                    <a href="?page=iskills_comparison_table&tab=all_tables" class="nav-tab <?php echo $active_tab == 'all_tables' ? 'nav-tab-active' : ''; ?>"><?php _e('All Tables', 'iskills-comparison-table') ?></a>
                    <a href="?page=iskills_comparison_table&tab=add_new" class="nav-tab <?php echo $active_tab == 'add_new' ? 'nav-tab-active' : ''; ?>"><?php _e('Add New', 'iskills-comparison-table') ?></a>
                    <a href="?page=iskills_comparison_table&tab=edit" class="nav-tab <?php echo $active_tab == 'edit' ? 'nav-tab-active' : ''; ?>" hidden><?php _e('Edit', 'iskills-comparison-table') ?></a>
                </div>
                <div class="form-wrapper">
                    <div class="iskills-form-body" style="display:flex;">
                        <div class="iskills-form-body-content">
                            <form method="post" action="options.php" autocomplete="off">
                                <?php
                                // This prints out all hidden setting fields
                                settings_fields('iskills_comparison_table');

                                // output setting sections based on tab selections
                                if ($active_tab == 'theme_selection') {
                                    do_settings_sections('iskills_comparison_table_default');
                                    submit_button();
                                }
                                else if ($active_tab == 'all_tables') {
                                    do_settings_sections('iskills_comparison_table_all_tables');
                                } else if ($active_tab == 'add_new') {
                                    do_settings_sections('iskills_comparison_table_add_new');
                                }else if ($active_tab == 'edit') {
                                    do_settings_sections('iskills_comparison_table_edit');
                                } 
                            ?>
                            </form>
                        </div>
                        <div class="preview" style="margin:10px auto;">
                        </div>
                    </div>
                </div>
            <?php
        }

        /**
         * Options page callback
         */
        public function iskills_rating_box_settings_page()
        {            
            ?>
                <div id="iskillsrb_setting" class="wrap iskills-rating_box-icons">
                    <div id="iskillsrb_inner">
                        <div class="iskillsrb-top-head">
                            <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
                        </div>
                        <?php settings_errors(); ?>
                        <?php $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'global'; ?>
                        <div class="nav-tab-wrapper">
                            <a href="?page=iskills_rating_box&tab=global" class="nav-tab <?php echo $active_tab == 'global' ? 'nav-tab-active' : ''; ?>"><?php _e('Global', 'iskills-rating-box') ?></a>
                        </div>
                        <div class="form-wrapper">
                            <div class="iskills-form-body" style="display:flex;">
                                <div class="iskills-form-body-content">
                                    <form method="post" action="options.php" autocomplete="off">
                                        <?php
                                        // This prints out all hidden setting fields
                                        settings_fields('iskills_rating_box');

                                        // output setting sections based on tab selections
                                        if ($active_tab == 'global') {
                                            do_settings_sections('iskills_rating_box_default');
                                        }


                                        submit_button();
                                        //$check_domain = iskillsProsAndConsSettingsPage::testDomain();
                                        ?>
                                    </form>
                                </div>
                                <div class="previewrb" style="margin:10px auto;">
                                </div>
                            </div>
                        </div>
                <?php
            }


            public function iskills_price_box_settings_page()
            {
            ?>
                <div id="iskillsrb_setting" class="wrap iskills-price_box-icons">
                    <div id="iskillsrb_inner">
                        <div class="iskillspb-top-head">
                            <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
                        </div>
                        <?php settings_errors(); ?>


                        <?php $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'global'; ?>
                        <div class="nav-tab-wrapper">
                            <a href="?page=iskills_price_box" class="nav-tab <?php echo $active_tab == 'global' ? 'nav-tab-active' : ''; ?>"><?php _e('Global', 'iskills-price-box') ?></a>
                        </div>
                        <div class="form-wrapper">
                            <div class="iskills-form-body" style="display:flex;">
                                <div class="iskills-form-body-content">
                                    <form method="post" action="options.php" autocomplete="off">
                                        <?php
                                        // This prints out all hidden setting fields
                                        settings_fields('iskills_price_box');

                                        // output setting sections based on tab selections
                                        if ($active_tab == 'global') {
                                            do_settings_sections('iskills_price_box_default');
                                        }


                                        submit_button();
                                        //$check_domain = iskillsProsAndConsSettingsPage::testDomain();
                                        ?>
                                        <!-- <input type="hidden" id="base_url" value="<?php // echo payment_api_end_point; ?>" />
                                        <input type="hidden" id="check_domain" value="<?php // if ($check_domain == false) echo "0";
                                                                                        // else  echo "1"; ?>" /> -->
                                    </form>
                                </div>
                                <div class="previewpb" style="margin:10px auto;">
                                </div>
                            </div>
                        </div>
                <?php
            }

            /**
             * Register and add settings for pros and cons
             */

            public function iskills_pros_and_cons_page_init()
            {
                $var =  register_setting(
                    'iskills_pros_and_cons', // Option group
                    'iskills_pros_and_cons', // Option name
                    array($this, 'sanitize') // Sanitize
                );

                add_settings_section(
                    'iskills_pros_and_cons_section_default', // ID
                    'Global Settings', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_pros_and_cons_default' // Page
                );


                add_settings_section(
                    'iskills_pros_and_cons_section_heading', // ID
                    'Heading Setting', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_pros_and_cons_heading' // Page
                );

                add_settings_section(
                    'iskills_pros_and_cons_section_body', // ID
                    'Section Setting', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_pros_and_cons_body' // Page
                );
                add_settings_section(
                    'iskills_pros_and_cons_section_icons', // ID
                    'Icons Setting', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_pros_and_cons_icons' // Page
                );
                add_settings_section(
                    'iskills_pros_and_cons_section_button', // ID
                    'Button Style', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_pros_and_cons_button' // Page
                );

                // global fields 

                add_settings_field(
                    'parent_theme',
                    __('Parent Theme', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_select_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'parent_theme', 'disabled' => 'disabled']
                );

                add_settings_field(
                    'use_theme',
                    __('Theme', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_select_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'use_theme']
                );

                // $check_domain = iskillsProsAndConsSettingsPage::testDomain();
                // if ($check_domain == false) {
                //     add_settings_field(
                //         'promocode',
                //         __('Early Access Promo Code', 'iskills-pros-and-cons'),
                //         array($this, 'iskills_pros_and_cons_callback_text_field'),
                //         'iskills_pros_and_cons_default',
                //         'iskills_pros_and_cons_section_default',
                //         ['id' => 'promocode', 'myclass' => 'promocodeInput', 'type' => 'text']
                //     );
                // }

                add_settings_field(
                    'use_outer_border',
                    __('Use Outer Border', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'use_outer_border']
                );

                add_settings_field(
                    'border_outer_size',
                    __('Outer Border Size', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'border_outer_size', 'size' => 4, 'helptext' => 'px', 'type' => 'number']
                );

                add_settings_field(
                    'use_border',
                    __('Use Inner Border', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'use_border']
                );

                add_settings_field(
                    'border_size',
                    __('Inner Border Size', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'border_size', 'size' => 4, 'helptext' => 'px', 'type' => 'number']
                );
                add_settings_field(
                    'border_color',
                    __('Border Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'border_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'use_border_shadow',
                    __('Separate with Border Shadow', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'use_border_shadow']
                );
                add_settings_field(
                    'use_space_between_column',
                    __('Use Space between Column', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'use_space_between_column']
                );
                add_settings_field(
                    'use_round_corner',
                    __('Use Round Corner', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_default',
                    'iskills_pros_and_cons_section_default',
                    ['id' => 'use_round_corner', 'helptext' => 'All element will be use round theme']
                );

                add_settings_field(
                    'heading_title_center',
                    __('Align Heading Title Text in center', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_title_center']
                );

                add_settings_field(
                    'heading_title_color',
                    __('Heading Title Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_title_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );

                add_settings_field(
                    'heading_title_background',
                    __('Heading Title Background', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_title_background', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'heading_saprater',
                    __('<hr />', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_saprater_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'Heading ']
                );
                //iskills_pros_and_cons_callback_saprater_field
                add_settings_field(
                    'heading_center',
                    __('Align Heading Text in center', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_center']
                );
                add_settings_field(
                    'heading_font_size',
                    __('Font Size', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_font_size', 'size' => 4, 'helptext' => 'px', 'type' => 'number']
                );
                add_settings_field(
                    'heading_color',
                    __('Text Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'pros_heading_background',
                    __('Pros Background Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'pros_heading_background', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'cons_heading_background',
                    __('Cons Background Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'cons_heading_background', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );


                add_settings_field(
                    'use_heading_icon',
                    __('Use Icon in Heading', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'use_heading_icon']
                );

                add_settings_field(
                    'heading_pros_icon',
                    __('Pros Icon', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_font_icon_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_pros_icon', 'myclass' => 'iskills-pros-cons-icons', 'type' => 'text']
                );
                add_settings_field(
                    'heading_pros_icon_color',
                    __('Pros Icon Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_pros_icon_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'heading_cons_icon',
                    __('Cons Icon', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_font_icon_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_cons_icon', 'myclass' => 'iskills-pros-cons-icons', 'type' => 'text']
                );
                add_settings_field(
                    'heading_cons_icon_color',
                    __('Cons Icon Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_heading',
                    'iskills_pros_and_cons_section_heading',
                    ['id' => 'heading_cons_icon_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );


                // end heading fields

                // body fields  
                add_settings_field(
                    'body_font_size',
                    __('Font Size', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_body',
                    'iskills_pros_and_cons_section_body',
                    ['id' => 'body_font_size', 'size' => 4, 'helptext' => 'px', 'type' => 'number']
                );
                add_settings_field(
                    'body_color',
                    __('Text Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_body',
                    'iskills_pros_and_cons_section_body',
                    ['id' => 'body_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'pros_background',
                    __('Pros Background Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_body',
                    'iskills_pros_and_cons_section_body',
                    ['id' => 'pros_background', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'cons_background',
                    __('Cons Background Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_body',
                    'iskills_pros_and_cons_section_body',
                    ['id' => 'cons_background', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'text_underline',
                    __('Text Underline', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_body',
                    'iskills_pros_and_cons_section_body',
                    ['id' => 'text_underline']
                );

                // end body fields
                // icons fields 
                add_settings_field(
                    'use_icons',
                    __('Use Icons', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_icons',
                    'iskills_pros_and_cons_section_icons',
                    ['id' => 'use_icons']
                );
                add_settings_field(
                    'icon_top',
                    __('Icons Start Position', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_icons',
                    'iskills_pros_and_cons_section_icons',
                    ['id' => 'icon_top', 'size' => 4, 'helptext' => 'px (from top to bottom)', 'type' => 'number']
                );

                add_settings_field(
                    'pros_icon',
                    __('Pros Icon', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_font_icon_field'),
                    'iskills_pros_and_cons_icons',
                    'iskills_pros_and_cons_section_icons',
                    ['id' => 'pros_icon', 'myclass' => 'iskills-pros-cons-icons', 'type' => 'text']
                );
                add_settings_field(
                    'pros_icon_color',
                    __('Pros Icon Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_icons',
                    'iskills_pros_and_cons_section_icons',
                    ['id' => 'pros_icon_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'cons_icon',
                    __('Cons Icon', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_font_icon_field'),
                    'iskills_pros_and_cons_icons',
                    'iskills_pros_and_cons_section_icons',
                    ['id' => 'cons_icon', 'myclass' => 'iskills-pros-cons-icons', 'type' => 'text']
                );
                add_settings_field(
                    'cons_icon_color',
                    __('Cons Icon Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_icons',
                    'iskills_pros_and_cons_section_icons',
                    ['id' => 'cons_icon_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );

                //end icons fields


                add_settings_field(
                    'button_theme',
                    __('Style', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_select_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_theme', 'array_name' => 'button']
                );
                add_settings_field(
                    'button_icon',
                    __('Icon', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_font_icon_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_icon', 'myclass' => 'iskills-pros-cons-icons', 'type' => 'text']
                );
                add_settings_field(
                    'button_text_color',
                    __('Text Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_text_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'button_color',
                    __('Background Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );
                add_settings_field(
                    'button_gradient_color',
                    __('Gradient / Hover Color', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_gradient_color', 'myclass' => 'iskills-pros-cons-color-picker', 'type' => 'text']
                );

                add_settings_field(
                    'button_radius',
                    __('Radious', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_radius', 'size' => 4, 'helptext' => 'px or % based on next options', 'type' => 'number']
                );
                add_settings_field(
                    'button_radius_in_percent',
                    __('Radious in %', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_checkbox_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_radius_in_percent']
                );

                add_settings_field(
                    'button_line_height',
                    __('Line Height', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_line_height', 'helptext' => 'px', 'type' => 'text']
                );
                add_settings_field(
                    'button_min_width',
                    __('Min Width', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_min_width', 'helptext' => '%', 'type' => 'text']
                );

                add_settings_field(
                    'button_class',
                    __('Custom Class', 'iskills-pros-and-cons'),
                    array($this, 'iskills_pros_and_cons_callback_text_field'),
                    'iskills_pros_and_cons_button',
                    'iskills_pros_and_cons_section_button',
                    ['id' => 'button_class', 'type' => 'text']
                );
            }

            public function iskills_comparison_table_page_init()
            {
                $var =  register_setting(
                    'iskills_comparison_table', // Option group
                    'iskills_comparison_table', // Option name
                    array($this, 'sanitize_comparison_table') // Sanitize
                );

                add_settings_section(
                    'iskills_comparison_table_section_default', // ID
                    '', // Title
                    array($this, 'comparison_section_info'), // Callback
                    'iskills_comparison_table_default' // Page
                );


                add_settings_section(
                    'iskills_comparison_table_section_all_tables', // ID
                    '', // Title
                    array($this, 'comparison_section_info'), // Callback
                    'iskills_comparison_table_all_tables' // Page
                );

                add_settings_section(
                    'iskills_comparison_table_section_add_new', // ID
                    '', // Title
                    array($this, 'comparison_section_info'), // Callback
                    'iskills_comparison_table_add_new' // Page
                );

                add_settings_section(
                    'iskills_comparison_table_section_edit', // ID
                    '', // Title
                    array($this, 'comparison_section_info'), // Callback
                    'iskills_comparison_table_edit' // Page
                );
        
                 // Theme Selection
                 add_settings_field(
                    'parent_comparison_theme',
                    __('Parent Comparison Table Theme', 'iskills-comparison-table'),
                    array($this, 'iskills_comparison_table_callback_select_field'),
                    'iskills_comparison_table_default',
                    'iskills_comparison_table_section_default',
                    ['id' => 'comparison_table_theme', 'disabled' => 'disabled']
                );

                add_settings_field(
                    'use_comparison_theme',
                    __('Comparison Table Theme', 'iskills-comparison-table'),
                    array($this, 'iskills_comparison_table_callback_select_field'),
                    'iskills_comparison_table_default',
                    'iskills_comparison_table_section_default',
                    ['id' => 'use_comparison_theme']
                );

                // All Tables 
                add_settings_field(
                    'all_tables_listing',
                    __('', 'iskills-comparison-table'),
                     'iskills_comparison_tables_handler',
                    'iskills_comparison_table_all_tables',
                    'iskills_comparison_table_section_all_tables'
                );

                // Add New
                add_settings_field(
                    'all_tables_listing',
                    __('', 'iskills-comparison-table'),
                     'iskills_comparisons_form_meta_box_handler',
                    'iskills_comparison_table_add_new',
                    'iskills_comparison_table_section_add_new'
                );

                // Edit
                add_settings_field(
                    'all_tables_listing',
                    __('', 'iskills-comparison-table'),
                     'iskills_comparisons_edit_form_meta_box_handler', // function
                    'iskills_comparison_table_edit',
                    'iskills_comparison_table_section_edit'
                );

            }

           

            public function iskills_rating_box_page_init()
            {
                $var =  register_setting(
                    'iskills_rating_box', // Option group
                    'iskills_rating_box', // Option name
                    array($this, 'sanitize_rating_box') // Sanitize
                );

                add_settings_section(
                    'iskills_rating_box_section_default', // ID
                    'Global Settings', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_rating_box_default' // Page
                );

                // global fields 

                add_settings_field(
                    'parent_rating_theme',
                    __('Parent Rating Box Theme', 'iskills-rating-box'),
                    array($this, 'iskills_rating_box_callback_select_field'),
                    'iskills_rating_box_default',
                    'iskills_rating_box_section_default',
                    ['id' => 'parent_rating_theme', 'disabled' => 'disabled']
                );

                add_settings_field(
                    'use_rating_theme',
                    __('Rating Box Theme', 'iskills-rating-box'),
                    array($this, 'iskills_rating_box_callback_select_field'),
                    'iskills_rating_box_default',
                    'iskills_rating_box_section_default',
                    ['id' => 'use_rating_theme']
                );


                // $check_domain = iskillsProsAndConsSettingsPage::testDomain();
                // if ($check_domain == false) {
                //     add_settings_field(
                //         'promocode',
                //         __('Early Access Promo Code', 'iskills-pros-and-cons'),
                //         array($this, 'iskills_pros_and_cons_callback_text_field'),
                //         'iskills_pros_and_cons_default',
                //         'iskills_pros_and_cons_section_default',
                //         ['id' => 'promocode', 'myclass' => 'promocodeInput', 'type' => 'text']
                //     );
                // }
            }


            public function iskills_price_box_page_init()
            {
                $var =  register_setting(
                    'iskills_price_box', // Option group
                    'iskills_price_box', // Option name
                    array($this, 'sanitize_price_box') // Sanitize
                );

                add_settings_section(
                    'iskills_price_box_section_default', // ID
                    'Global Settings', // Title
                    array($this, 'section_info'), // Callback
                    'iskills_price_box_default' // Page
                );

                // global fields 

                add_settings_field(
                    'parent_price_theme',
                    __('Parent Price Box Theme', 'iskills-price-box'),
                    array($this, 'iskills_price_box_callback_select_field'),
                    'iskills_price_box_default',
                    'iskills_price_box_section_default',
                    ['id' => 'parent_price_theme', 'disabled' => 'disabled']
                );

                add_settings_field(
                    'use_price_theme',
                    __('Price Box Theme', 'iskills-price-box'),
                    array($this, 'iskills_price_box_callback_select_field'),
                    'iskills_price_box_default',
                    'iskills_price_box_section_default',
                    ['id' => 'use_price_theme']
                );


                // $check_domain = iskillsProsAndConsSettingsPage::testDomain();
                // if ($check_domain == false) {
                //     add_settings_field(
                //         'promocode',
                //         __('Early Access Promo Code', 'iskills-pros-and-cons'),
                //         array($this, 'iskills_pros_and_cons_callback_text_field'),
                //         'iskills_pros_and_cons_default',
                //         'iskills_pros_and_cons_section_default',
                //         ['id' => 'promocode', 'myclass' => 'promocodeInput', 'type' => 'text']
                //     );
                // }
            }
            /**
             * Sanitize each setting field as needed
             *
             * @param array $input Contains all settings fields as array keys with their id's
             */

            // public static function testDomain()
            // {
            //     $host_name = $_SERVER['SERVER_NAME'];
            //     $base_url = payment_api_end_point;
            //     $fields = [
            //         'host' => $host_name,
            //     ];
            //     $fields_string = http_build_query($fields);
            //     $url = $base_url . 'api/code';
            //     $curl = curl_init($url);

            //     // set our url with curl_setopt()
            //     curl_setopt($curl, CURLOPT_URL, $url);
            //     curl_setopt($curl, CURLOPT_POST, 1);
            //     curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
            //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            //     $output = curl_exec($curl);
            //     $api_result = json_decode($output);
            //     // return $api_result->success;
            // }
            public function sanitize($input)
            {
                // $check_domain = iskillsProsAndConsSettingsPage::testDomain();
                // if ($input['use_theme'] != 'iskillspc-theme-00' && $check_domain == false) {
                //     if ($input['promocode'] == '') {
                //         add_settings_error('general', 'settings_updated', __('Please Enter The Promo Code'), 'error');
                //         set_transient('settings_errors', get_settings_errors(), 30);
                //         // Redirect back to the settings page that was submitted.
                //         $goback = add_query_arg('settings-updated', 'true', wp_get_referer());
                //         wp_redirect($goback);
                //         exit;
                //     } else {
                //         $promocode = $input['promocode'];
                //         $host_name = $_SERVER['SERVER_NAME'];
                //         $base_url = payment_api_end_point;
                //         $fields = [
                //             'code' => $promocode,
                //             'host' => $host_name,
                //         ];
                //         $fields_string = http_build_query($fields);
                //         $url = $base_url . 'api/host';
                //         $curl = curl_init($url);

                //         // set our url with curl_setopt()
                //         curl_setopt($curl, CURLOPT_URL, $url);
                //         curl_setopt($curl, CURLOPT_POST, 1);
                //         curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
                //         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                //         $output = curl_exec($curl);
                //         $api_result = json_decode($output);
                //         if ($api_result->success == false) {

                //             $error_message = $api_result->message;
                //             add_settings_error('general', 'settings_updated', __($error_message), 'error');
                //             set_transient('settings_errors', get_settings_errors(), 30);
                //             // Redirect back to the settings page that was submitted.
                //             $goback = add_query_arg('settings-updated', 'true', wp_get_referer());
                //             wp_redirect($goback);
                //             curl_close($curl);
                //             exit;
                //         }

                //         curl_close($curl);
                //         // close curl resource to free up system resources
                //         // (deletes the variable made by curl_init)
                //     }
                // }

                $selectedTheme =   isset($input['use_theme']) ? $input['use_theme'] : $this->options['use_theme'];
                if ($selectedTheme != $this->options['use_theme']) {
                    $selectedOption =  iskills_pros_and_cons_options_default($selectedTheme);
                    return $selectedOption;
                }

                $new_input = array_merge($this->options, array_filter($input));

                $new_input['use_theme'] = 'iskillspc-theme-1000';


                if (isset($input['use_theme'])) {
                    $new_input['use_round_corner'] = isset($input['use_round_corner']) ?   $input['use_round_corner']  : 0;
                    $new_input['use_outer_border'] = isset($input['use_outer_border']) ?   $input['use_outer_border']  : 0;
                    $new_input['use_border'] = isset($input['use_border']) ?   $input['use_border']  : 0;
                    $new_input['use_border_shadow'] = isset($input['use_border_shadow']) ?   $input['use_border_shadow']  : 0;
                    $new_input['use_space_between_column'] = isset($input['use_space_between_column']) ?   $input['use_space_between_column']  : 0;
                }
                if (isset($input['cons_icon_color'])) {
                    $new_input['use_icons'] = isset($input['use_icons']) ?   $input['use_icons']  : 0;
                }
                if (isset($input['body_font_size'])) {
                    $new_input['body_font_size'] =   $input['body_font_size'];
                }
                if (isset($input['heading_font_size'])) {
                    $new_input['heading_font_size'] =   $input['heading_font_size'];
                    $new_input['heading_title_center'] = isset($input['heading_title_center']) ?   $input['heading_title_center']  : 0;
                    $new_input['heading_center'] = isset($input['heading_center']) ?   $input['heading_center']  : 0;
                    $new_input['use_heading_icon'] = isset($input['use_heading_icon']) ?   $input['use_heading_icon']  : 0;
                }
                if (isset($input['body_color'])) {
                    $new_input['text_underline'] =   isset($input['text_underline']) ?   $input['text_underline']  : 0;
                }

                if (isset($input['button_theme'])) {
                    $new_input['button_radius_in_percent'] =   isset($input['button_radius_in_percent']) ?   $input['button_radius_in_percent']  : 0;
                    $new_input['button_class'] =   isset($input['button_class']) ?   $input['button_class']  : '';
                }
                return $new_input;
            }

            public function sanitize_comparison_table($input)
            {
                $selectedTheme =   isset($input['use_comparison_theme']) ? $input['use_comparison_theme'] : $this->comparison_options['use_comparison_theme'];
                if ($selectedTheme != $this->comparison_options['use_comparison_theme']) {
                    $selectedOption =  iskills_comparison_table_options_default($selectedTheme);
                    return $selectedOption;
                }

                $new_input = array_merge($this->comparison_options, array_filter($input));

                $new_input['use_comparison_theme'] = 'iskillsrb-theme-01';
                return $new_input;
            }

            public function sanitize_rating_box($input)
            {
                $selectedTheme =   isset($input['use_rating_theme']) ? $input['use_rating_theme'] : $this->rating_options['use_rating_theme'];
                if ($selectedTheme != $this->rating_options['use_rating_theme']) {
                    $selectedOption =  iskills_rating_box_options_default($selectedTheme);
                    return $selectedOption;
                }

                $new_input = array_merge($this->rating_options, array_filter($input));

                $new_input['use_rating_theme'] = 'iskillsrb-theme-1000';
                return $new_input;
            }
            public function sanitize_price_box($input)
            {
                $selectedTheme =   isset($input['use_price_theme']) ? $input['use_price_theme'] : $this->price_options['use_price_theme'];
                if ($selectedTheme != $this->price_options['use_price_theme']) {
                    $selectedOption =  iskills_price_box_options_default($selectedTheme);
                    return $selectedOption;
                }

                $new_input = array_merge($this->price_options, array_filter($input));

                $new_input['use_price_theme'] = 'iskillspb-theme-1000';
                return $new_input;
            }

            /** 
             * Print the Section text
             */
            public function print_section_info()
            {
                print 'Enter your settings below:';
            }

            /** 
             * Print the Section info
             */
            public function section_info()
            {
                print 'Choose your settings below:';
            }

            /** 
             * Print the Section info
             */
            public function comparison_section_info()
            {
                print '';
            }

            // callback: select field
            function iskills_comparison_table_callback_select_field($args)
            {
                $id    = isset($args['id'])    ? $args['id']    : '';
                $array_name    = isset($args['array_name'])    ? $args['array_name']    : '';
                $disabled    = isset($args['disabled'])    ? $args['disabled']    : '';

                $selected_option = isset($this->comparison_options[$id]) ? sanitize_text_field($this->comparison_options[$id]) : 'default';

                $select_options = $this->iskills_comparison_table_theme_select($array_name);
                echo '<select id="iskills_comparison_table_' . $id . '" name="iskills_comparison_table[' . $id . ']" ' . $disabled . '>';

                foreach ($select_options as $value => $option) {

                    $selected = selected($selected_option === $value, true, false);

                    echo '<option value="' . $value . '"' . $selected . '>' . $option . '</option>';
                }

                echo '</select>';
            }

            public function iskills_comparison_table_callback_textbox_head($args=null){
                ?>
                    <p style="margin-left:-210px; line-height:1.5rem; font-size:14px;">
                    This is a list of your tables. To insert a table into a post or page, copy its Shortcode Shortcode text for editor
                    <strong>[table id=ID /] </strong>
                    and paste it into a “Shortcode” block at the desired place in the block editor. Each table has a unique ID that needs to be adjusted in that Shortcode.
                    </p>
		        <?php
            }
            function iskills_pros_and_cons_callback_saprater_field($args)
            {
                echo '<hr />';
            }

            //callback: text field
            function iskills_pros_and_cons_callback_text_field($args)
            {

                $id    = isset($args['id'])    ? $args['id']    : '';
                $class = isset($args['myclass']) ? $args['myclass'] : '';
                $size = isset($args['size']) ? $args['size'] : '40';
                $helptext = isset($args['helptext']) ? $args['helptext'] : '';
                $type = isset($args['type']) ? $args['type'] : 'text';
                $value = isset($this->options[$id]) ? sanitize_text_field($this->options[$id]) : '';

                echo '<input id="iskills_pros_and_cons_' . $id . '" name="iskills_pros_and_cons[' . $id . ']" class="' . $class . '" type="' . $type . '" size="' . $size . '" value="' . $value . '" /> ' . $helptext;
            }
            
            function iskills_pros_and_cons_callback_font_icon_field($args)
            {

                $id    = isset($args['id'])    ? $args['id']    : '';
                $class = isset($args['myclass']) ? $args['myclass'] : '';
                $size = isset($args['size']) ? $args['size'] : '40';
                $helptext = isset($args['helptext']) ? $args['helptext'] : '';
                $value = isset($this->options[$id]) ? sanitize_text_field($this->options[$id]) : '';
                echo '<div class="form-group"><div class="input-group">';
                echo '<input data-placement="bottomLeft" id="iskills_pros_and_cons_' . $id . '" name="iskills_pros_and_cons[' . $id . ']" class="' . $class . '" type="text" size="' . $size . '" value="' . $value . '" /> ' . $helptext;
                echo ' <span class="input-group-addon"></span></div></div>';
            }

            // callback: checkbox field
            function iskills_pros_and_cons_callback_checkbox_field($args)
            {

                $id    = isset($args['id'])    ? $args['id']    : '';
                $checked = isset($this->options[$id]) ? checked($this->options[$id], 1, false) : '';

                echo '<input id="iskills_pros_and_cons_' . $id . '" name="iskills_pros_and_cons[' . $id . ']" type="checkbox" value="1"' . $checked . '/>';
            }

            // callback: select field
            function iskills_pros_and_cons_callback_select_field($args)
            {


                $id    = isset($args['id'])    ? $args['id']    : '';
                $array_name    = isset($args['array_name'])    ? $args['array_name']    : '';
                $disabled    = isset($args['disabled'])    ? $args['disabled']    : '';

                $selected_option = isset($this->options[$id]) ? sanitize_text_field($this->options[$id]) : 'default';

                $select_options = $this->iskills_pros_and_cons_theme_select($array_name);
                echo '<select id="iskills_pros_and_cons_' . $id . '" name="iskills_pros_and_cons[' . $id . ']" ' . $disabled . '>';

                foreach ($select_options as $value => $option) {

                    $selected = selected($selected_option === $value, true, false);

                    echo '<option value="' . $value . '"' . $selected . '>' . $option . '</option>';
                }

                echo '</select>';
            }

            function iskills_pros_and_cons_theme_select($array_name)
            {

                if ($array_name == "button") {
                    return array(

                        'iskillspc-btn-theme-00'   => esc_html__('Default',   'iskills-pros-and-cons'),
                        'iskillspc-btn-theme-01'      => esc_html__('Bootstrap',      'iskills-pros-and-cons'),
                        'iskillspc-btn-theme-02'      => esc_html__('3D Style',      'iskills-pros-and-cons'),
                        'no-style'   => esc_html__('No Style',   'iskills-pros-and-cons'),
                    );
                }
                return array(

                    'iskillspc-theme-00'      => esc_html__('Default',      'iskills-pros-and-cons'),
                    'iskillspc-theme-01'      => esc_html__('Shadow',       'iskills-pros-and-cons'),
                    'iskillspc-theme-02'      => esc_html__('Background',   'iskills-pros-and-cons'),
                    'iskillspc-theme-03'      => esc_html__('Bordered',     'iskills-pros-and-cons'),
                    'iskillspc-theme-04'      => esc_html__('Underline',    'iskills-pros-and-cons'),
                    'iskillspc-theme-05'      => esc_html__('Spacer',       'iskills-pros-and-cons'),
                    'iskillspc-theme-06'      => esc_html__('Head Icon',    'iskills-pros-and-cons'),
                    'iskillspc-theme-07'      => esc_html__('Full Header',  'iskills-pros-and-cons'),
                    'iskillspc-theme-08'      => esc_html__('Dark Green',   'iskills-pros-and-cons'),
                    'iskillspc-theme-09'      => esc_html__('Round Corner', 'iskills-pros-and-cons'),
                    'iskillspc-theme-10'      => esc_html__('Iskills Theme 1', 'iskills-pros-and-cons'),
                    'iskillspc-theme-11'      => esc_html__('Iskills Theme 2', 'iskills-pros-and-cons'),
                    'iskillspc-theme-12'      => esc_html__('Iskills Theme 3', 'iskills-pros-and-cons'),
                    'iskillspc-theme-13'      => esc_html__('Iskills Theme 4', 'iskills-pros-and-cons'),
                    'iskillspc-theme-14'      => esc_html__('Iskills Theme 5', 'iskills-pros-and-cons'),
                    'iskillspc-theme-14'      => esc_html__('Iskills Theme 5', 'iskills-pros-and-cons'),
                    'iskillspc-theme-15'      => esc_html__('Iskills Theme 6', 'iskills-pros-and-cons'),
                    'iskillspc-theme-16'      => esc_html__('Iskills Theme 7', 'iskills-pros-and-cons'),
                    'iskillspc-theme-17'      => esc_html__('Iskills Theme 8', 'iskills-pros-and-cons'),
                    'iskillspc-theme-18'      => esc_html__('Iskills Theme 9', 'iskills-pros-and-cons'),
                    'iskillspc-theme-19'      => esc_html__('Iskills Theme 10', 'iskills-pros-and-cons'),
                    'iskillspc-theme-20'      => esc_html__('Iskills Theme 11', 'iskills-pros-and-cons'),
                    'iskillspc-theme-21'      => esc_html__('Iskills Theme 12', 'iskills-pros-and-cons'),
                    'iskillspc-theme-22'      => esc_html__('Iskills Theme 13', 'iskills-pros-and-cons'),
                    'iskillspc-theme-23'      => esc_html__('Iskills Theme 14', 'iskills-pros-and-cons'),
                    'iskillspc-theme-1000'    => esc_html__('Custom',       'iskills-pros-and-cons')
                );
            }

            // callback: select field
            function iskills_rating_box_callback_select_field($args)
            {
                $id    = isset($args['id'])    ? $args['id']    : '';
                $array_name    = isset($args['array_name'])    ? $args['array_name']    : '';
                $disabled    = isset($args['disabled'])    ? $args['disabled']    : '';

                $selected_option = isset($this->rating_options[$id]) ? sanitize_text_field($this->rating_options[$id]) : 'default';

                $select_options = $this->iskills_rating_box_theme_select($array_name);
                echo '<select id="iskills_rating_box_' . $id . '" name="iskills_rating_box[' . $id . ']" ' . $disabled . '>';

                foreach ($select_options as $value => $option) {

                    $selected = selected($selected_option === $value, true, false);

                    echo '<option value="' . $value . '"' . $selected . '>' . $option . '</option>';
                }

                echo '</select>';
            }

            function iskills_price_box_callback_select_field($args)
            {
                $id    = isset($args['id'])    ? $args['id']    : '';
                $array_name    = isset($args['array_name'])    ? $args['array_name']    : '';
                $disabled    = isset($args['disabled'])    ? $args['disabled']    : '';

                $selected_option = isset($this->price_options[$id]) ? sanitize_text_field($this->price_options[$id]) : 'default';

                $select_options = $this->iskills_price_box_theme_select($array_name);
                echo '<select id="iskills_price_box_' . $id . '" name="iskills_price_box[' . $id . ']" ' . $disabled . '>';

                foreach ($select_options as $value => $option) {

                    $selected = selected($selected_option === $value, true, false);

                    echo '<option value="' . $value . '"' . $selected . '>' . $option . '</option>';
                }

                echo '</select>';
            }

            function iskills_rating_box_theme_select($array_name)
            {
                return array(

                    'iskillsrb-box-01'      => esc_html__('Rating Box 1',      'iskills-rating-box'),
                    'iskillsrb-box-02'      => esc_html__('Rating Box 2',      'iskills-rating-box'),
                    'iskillsrb-box-03'      => esc_html__('Rating Box 3',      'iskills-rating-box'),
                    'iskillsrb-box-04'      => esc_html__('Rating Box 4',      'iskills-rating-box'),

                );
            }
            function iskills_price_box_theme_select($array_name)
            {
                return array(
                    'iskillspb-box-01'      => esc_html__('Price Box 1',      'iskills-price-box'),
                    'iskillspb-box-02'      => esc_html__('Price Box 2',      'iskills-price-box'),
                    'iskillspb-box-03'      => esc_html__('Price Box 3',      'iskills-price-box'),
                );
            }

            function iskills_comparison_table_theme_select($array_name)
            {
                return array(

                    'iskillsct-table-01'      => esc_html__('Comparison Table 1',      'iskills-comparison-table'),
                );
            }
        }
        if (is_admin())
            $iskills_pros_and_cons_setting_page = new iskillsProsAndConsSettingsPage();
