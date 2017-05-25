<?php
$title = '';

global $wp_my_timeline_url;
global $wp_my_v_timeline_styles;
$wp_my_v_timeline_styles = array(
    'default' => __("Default", 'my_vertical_content_timeline'),
    'montgomery' => __("Montgomery", "my_vertical_content_timeline"),
    'boston' => __("Boston", "my_vertical_content_timeline"),
    'springfield' => __("Springfield", "my_vertical_content_timeline"),
    'phoenix' => __("Phoenix", 'my_vertical_content_timeline'),
    'dover' => __("Dover", 'my_vertical_content_timeline'),
    'sacramento' => __("Sacramento", 'my_vertical_content_timeline'),
    'denver' => __("Denver", 'my_vertical_content_timeline'),
    'jackson' => __("Jackson", 'my_vertical_content_timeline'),
    'atlanta' => __("Atlanta", 'my_vertical_content_timeline'),
    'santafe' => __("SantaFe", 'my_vertical_content_timeline'),
    'nashville' => __("Nashville", 'my_vertical_content_timeline'),
    'austin' => __("Austin", 'my_vertical_content_timeline'),
    'orange' => __("Flat", 'my_vertical_content_timeline'),
    'style_1' => __("Style 1", 'my_vertical_content_timeline'),
    'style_2' => __("Style 2", 'my_vertical_content_timeline'),
    'style_3' => __("Style 3", 'my_vertical_content_timeline'),
    'style_4' => __("Style 4", 'my_vertical_content_timeline')
);


$settings = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'num-of-years' => '9',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '240',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '360',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'fast-forward-backward' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'sharp',
    'button-color' => '#1986ac',
    'button-hover-color' => '#1986ac',
    'node-desc-color' => '#1986ac',
    'item-open-scroll-color' => '#1986ac',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => false,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#ffffff',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '5',
    'item-image-border-color' => '#1986ac',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '5',
    'item-open-image-border-color' => '#1986ac',

    // item fonts
    'item-header-line-height' => '24',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#2d2d2d',
    'item-text-line-height' => '12',
    'item-text-font-size' => '12',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#4d4d4d',

    // item open fonts
    'item-open-header-line-height' => '24',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#2d2d2d',
    'item-open-text-line-height' => '12',
    'item-open-text-font-size' => '12',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#4d4d4d',
    /**
     * Added new options by dragan
     */
    'node-line-color' => '#1986ac',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#1986ac',
    'node-line-1-color' => '#1986ac',
);
global $wp_my_v_timeline_styles_values;
$wp_my_v_timeline_styles_values['austin'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '260',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '400',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'whole-item',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat_dark',
    'shdow' => 'on-hover',
    'button-type' => 'sharp',
    'button-color' => '#1986ac',
    'button-hover-color' => '#1986ac',
    'node-desc-color' => '#1986ac',
    'item-open-scroll-color' => '#1986ac',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => false,
    'item-back-color' => '',
    'item-text-align' => 'center',
    'item-background' => $wp_my_timeline_url . 'images/background-gray.png',
    'item-open-back-color' => '#ffffff',
    'item-open-background' => $wp_my_timeline_url . 'images/background-blue.jpg',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#222222',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '5',
    'item-open-image-border-color' => '#1986ac',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '26',
    'item-text-font-size' => '16',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#808080',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#ffffff',
    'item-open-text-line-height' => '26',
    'item-open-text-font-size' => '16',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#ffffff',
    /**
     * Added new options by dragan
     */
    'node-line-color' => '#1986ac',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#1986ac',
    'node-line-1-color' => '#1986ac',
);
$wp_my_v_timeline_styles_values['nashville'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '240',
    'item-open-width' => '490',
    'item-margin' => '10',
    'item-height' => '380',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'sharp',
    'button-color' => '#1986ac',
    'button-hover-color' => '#1986ac',
    'node-desc-color' => '#1986ac',
    'item-open-scroll-color' => '#1868a5',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => false,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#ffffff',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '5',
    'item-image-border-color' => '#1986ac',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '5',
    'item-open-image-border-color' => '#1986ac',

    // item fonts
    'item-header-line-height' => '30',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#2d2d2d',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#808080',

    // item open fonts
    'item-open-header-line-height' => '30',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#2d2d2d',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    /**
     * Added new options by dragan
     */
    'node-line-color' => '#1986ac',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#1986ac',
    'node-line-1-color' => '#1986ac',
);
$wp_my_v_timeline_styles_values['default'] = $settings;
$wp_my_v_timeline_styles_values['orange'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '350',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '500',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#dd5555',
    'button-hover-color' => '#dd5555',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#dd5555',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#eaeaea',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => '#eaeaea',
    'item-open-background' => '',
    'item-image-height' => '350',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dd5555',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dd5555',

    // item fonts
    'item-header-line-height' => '24',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#dd5555',
    'item-text-line-height' => '12',
    'item-text-font-size' => '12',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#70747d',

    // item open fonts
    'item-open-header-line-height' => '24',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#dd5555',
    'item-open-text-line-height' => '12',
    'item-open-text-font-size' => '12',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#70747d',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',
);
$wp_my_v_timeline_styles_values['santafe'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '350',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '460',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#dd5555',
    'button-hover-color' => '#dd8282',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#dd5555',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#f5f5f5',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => '#f5f5f5',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dd5555',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dd5555',

    // item fonts
    'item-header-line-height' => '34',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#dd5555',
    'item-text-line-height' => '26',
    'item-text-font-size' => '16',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#70747d',

    // item open fonts
    'item-open-header-line-height' => '34',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#dd5555',
    'item-open-text-line-height' => '26',
    'item-open-text-font-size' => '16',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#70747d',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',
);
$wp_my_v_timeline_styles_values['montgomery'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '570',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'hide',
    'button-type' => 'flat',
    'button-color' => '#dc5552',
    'button-hover-color' => '#dc5552',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#dc5552',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => ' #f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dc5552',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dc5552',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['boston'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => true,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '400',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '610',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#a77d57',
    'button-hover-color' => '#a77d57',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#a77d57',
    // item & open item

    'show-date' => true,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-show-date' => true,
    'item-open-background' => '',
    'item-image-height' => '260',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#a77d57',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#a77d57',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#212121',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#212121',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',
);

$wp_my_v_timeline_styles_values['springfield'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '540',
    'item-margin' => '20',
    'item-height' => '720',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat_dark',
    'shdow' => 'on-hover',
    'button-type' => 'flat',
    'button-color' => '#f62d4c',
    'button-hover-color' => '#f4929f',
    'node-desc-color' => '#f62d4c',
    'item-open-scroll-color' => '#f62d4c',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#333333',
    'item-text-align' => 'center',
    'item-background' => $wp_my_timeline_url . 'images/background9.jpg',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '300',
    'item-content-padding' => '30',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#f62d4c',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#f62d4c',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#808080',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#f62d4c',
    'node-arrows-color' => '#808080',
    'node-dot-color' => '#f62d4c',
    'node-line-1-color' => '#f62d4c',
);
$wp_my_v_timeline_styles_values['phoenix'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '800',
    'item-open-width' => '600',
    'item-margin' => '0',
    'item-height' => '500',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => true,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'hide',
    'button-type' => 'flat',
    'button-color' => '#dc5552',
    'button-hover-color' => '#dc5552',
    'node-desc-color' => '#8e44ad',
    'item-open-scroll-color' => '#ffffff',
    // item & open item
    'item-open-show-date' => true,
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dc5552',
    'item-open-image-height' => '200',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dc5552',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#8e44ad',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#8e44ad',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['dover'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '500',
    'item-open-width' => '500',
    'item-margin' => '20',
    'item-height' => '500',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'on-hover',
    'button-type' => 'flat',
    'button-color' => '#f1c40f',
    'button-hover-color' => '#f2e19f',
    'node-desc-color' => '#f1c40f',
    'item-open-scroll-color' => '#ffffff',
    'item-open-show-date' => false,
    // item & open item
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => ' #f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#f1c40f',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#f1c40f',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#f1c40f',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#f1c40f',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['sacramento'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '540',
    'item-margin' => '20',
    'item-height' => '670',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'on-hover',
    'button-type' => 'flat',
    'button-color' => '#a77d57',
    'button-hover-color' => '#a77d57',
    'node-desc-color' => '#808080',
    'item-open-scroll-color' => '#a77d57',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '280',
    'item-content-padding' => '30',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#a77d57',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#a77d57',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#212121',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#212121',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#808080',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#808080',
    'node-line-1-color' => '#dd5555',
);
$wp_my_v_timeline_styles_values['denver'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '720',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => true,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'on-hover',
    'button-type' => 'flat',
    'button-color' => '#a77d57',
    'button-hover-color' => '#a77d57',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#a77d57',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '330',
    'item-content-padding' => '30',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#a77d57',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#a77d57',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#212121',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#808080',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',
);
$wp_my_v_timeline_styles_values['jackson'] = array(
    'autoplay' => true,
    'autoplay-step' => '2500',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '1050',
    'item-open-width' => '800',
    'item-margin' => '0',
    'item-height' => '570',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => true,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#f1c40f',
    'button-hover-color' => '#f2d665',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#ffffff',
    'item-open-show-date' => false,
    // item & open item
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => ' #f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dc5552',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dc5552',

    // item fonts
    'item-header-line-height' => '36',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#f1c40f',
    'item-text-line-height' => '28',
    'item-text-font-size' => '16',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['atlanta'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '600',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '320',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'light',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#dc5552',
    'button-hover-color' => '#dc5552',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#ffffff',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dc5552',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dc5552',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['style_1'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '570',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#dc5552',
    'button-hover-color' => '#dc5552',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#ffffff',
    'item-open-show-date' => false,
    // item & open item
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => ' #f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dc5552',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dc5552',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['style_2'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '350',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '500',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'show',
    'button-type' => 'flat',
    'button-color' => '#dc5552',
    'button-hover-color' => '#dc5552',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#ffffff',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '',
    'item-text-align' => 'left',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '150',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#dc5552',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#dc5552',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#ffffff',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#ffffff',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',

);
$wp_my_v_timeline_styles_values['style_3'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '540',
    'item-margin' => '20',
    'item-height' => '720',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'on-hover',
    'button-type' => 'flat',
    'button-color' => '#a77d57',
    'button-hover-color' => '#a77d57',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#a77d57',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '390',
    'item-content-padding' => '30',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#a77d57',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#a77d57',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#212121',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#212121',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',
);
$wp_my_v_timeline_styles_values['style_4'] = array(
    'autoplay' => false,
    'autoplay-step' => '10000',
    'scroll-speed' => '500',
    'easing' => 'easeOutSine',
    'hide-years' => false,
    'item-transition-close' => false,
    'cat-type' => 'months',
    'number-of-posts' => '30',

    // style
    'line-width' => '920',
    'item-width' => '390',
    'item-open-width' => '490',
    'item-margin' => '20',
    'item-height' => '720',
    'activate-search' => false,
    'hide-show-search' => 'visible',
    'search-bar-position' => 'top',
    'align-start-item' => 'center',
    'read-more' => 'button',
    'more-text' => 'Read more',
    'close-text' => 'Close',
    'hide-line' => false,
    'line-style' => 'flat',
    'hide-nav' => false,
    'fast-forward-backward' => false,
    'nav-style' => 'flat',
    'shdow' => 'on-hover',
    'button-type' => 'flat',
    'button-color' => '#a77d57',
    'button-hover-color' => '#a77d57',
    'node-desc-color' => '#dd5555',
    'item-open-scroll-color' => '#a77d57',
    // item & open item
    'item-open-show-date' => false,
    'show-date' => true,
    'item-back-color' => '#ffffff',
    'item-text-align' => 'center',
    'item-background' => '',
    'item-open-back-color' => '#f2f2f2',
    'item-open-background' => '',
    'item-image-height' => '390',
    'item-content-padding' => '20',
    'item-image-border-width' => '0',
    'item-image-border-color' => '#a77d57',
    'item-open-image-height' => '150',
    'item-open-content-padding' => '20',
    'item-open-image-border-width' => '0',
    'item-open-image-border-color' => '#a77d57',

    // item fonts
    'item-header-line-height' => '32',
    'item-header-font-size' => '24',
    'item-header-font-type' => 'regular',
    'item-header-font-color' => '#212121',
    'item-text-line-height' => '24',
    'item-text-font-size' => '14',
    'item-text-font-type' => 'regular',
    'item-text-font-color' => '#212121',

    // item open fonts
    'item-open-header-line-height' => '32',
    'item-open-header-font-size' => '24',
    'item-open-header-font-type' => 'regular',
    'item-open-header-font-color' => '#222222',
    'item-open-text-line-height' => '24',
    'item-open-text-font-size' => '14',
    'item-open-text-font-type' => 'regular',
    'item-open-text-font-color' => '#808080',
    'node-line-color' => '#dd5555',
    'node-arrows-color' => '#b7b6b6',
    'node-dot-color' => '#dd5555',
    'node-line-1-color' => '#dd5555',
);
global $wp_timeline_12_options;
/**
 * izmene
 */

$wp_timeline_12_options ['responsive_settings'] = array(
    'responsive-years' => array(
        'type' => 'checkbox',
        'title' => __("Disable node text:", 'my_vertical_content_timeline'),
        'tooltip' => __("Disable node text on small resolutions", 'my_vertical_content_timeline'),
        'default' => 0,
    ),
);
$wp_timeline_12_options ['search_settings'] = array(
    'activate-search' => array(
        'type' => 'checkbox',
        'title' => __("Activate search bar:", 'my_vertical_content_timeline'),
        'tooltip' => __("Activate/disable search bar", 'my_vertical_content_timeline'),
        'default' => 0,
    ),
    'hide-show-search' => array( // old
        'type' => 'select',
        'title' => __("Style:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose style for search bar", 'my_vertical_content_timeline'),
        'default' => $settings ['hide-show-search'],
        'values' => array(
            'visible' => __("Visible", 'my_vertical_content_timeline'),
            'hidden' => __("Hidden", 'my_vertical_content_timeline')
        )
    ),
    'search-bar-position' => array(
        'type' => 'select',
        'title' => __("Search bar position", 'my_vertical_content_timeline'),
        'default' => $settings ['search-bar-position'],
        'tooltip' => __("Choose position for search bar"),
        'values' => array(
            'top' => __("Top", 'my_vertical_content_timeline'),
            'center' => __("Center", 'my_vertical_content_timeline'),
            'bottom' => __("Bottom", 'my_vertical_content_timeline')
        )
    ),
);

/**
 * izmene
 */

$wp_timeline_12_options ['vertical_settings'] = array(
    'my-vertical-margin-top' => array(
        'type' => 'text',
        'title' => __("Margin top", 'my_vertical_content_timeline'),
        'tooltip' => __("Adjust first column margin top.Default value is -20px", 'my_vertical_content_timeline'),
        'default' => '-20',
        'size' => 10,
        'unit' => 'px',
    ),
    'my-vertical-second-margin' => array(
        'type' => 'text',
        'title' => __("Margin top second", 'my_vertical_content_timeline'),
        'tooltip' => __("Adjust second column margin top.Default value is -20px", 'my_vertical_content_timeline'),
        'default' => '165',
        'size' => 10,
        'unit' => 'px',
    ),
    'my-vertical-line-position' => array(
        'type' => 'text',
        'title' => __("Line position", 'my_vertical_content_timeline'),
        'tooltip' => __("Adjust line position. Default Value is 35px", 'my_vertical_content_timeline'),
        'default' => '35',
        'size' => 10,
        'unit' => 'px',
    ),
    'my-vertical-limit' => array(
        'type' => 'checkbox',
        'title' => __("Limit height", 'my_vertical_content_timeline'),
        'tooltip' => __("When you choose this option height of vertical timeline will be limitted.", 'my_vertical_content_timeline'),
        'default' => '',
    ),
    'my-vertical-count' => array(
        'type' => 'text',
        'size' => 10,
        'title' => __("Show elements", 'my_vertical_content_timeline'),
        'tooltip' => __("Adjust viewable elements in the slider .Default value is 6", 'my_vertical_content_timeline'),
        'default' => '6',
    ),
    'my-vertical-count-small' => array(
        'type' => 'text',
        'size' => 10,
        'title' => __("Show elements small", 'my_vertical_content_timeline'),
        'tooltip' => __("Adjust viewable elements in the slider .Default value is 1", 'my_vertical_content_timeline'),
        'default' => '1',
    ),
    'my-vertical-line-color' => array(
        'type' => 'color',
        'title' => __("Line color", 'my_vertical_content_timeline'),
        'tooltip' => __("Adjust adjust line color", 'my_vertical_content_timeline'),

        'default' => '#dcdedd'
    )

);
$wp_timeline_12_options ['button_settings'] = array(
    'button-type' => array(
        'type' => 'select',
        'title' => __("Button Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Button Desing.", 'my_vertical_content_timeline'),
        'default' => $settings ['button-type'],
        'values' => array(
            'flat' => __("Flat", 'my_vertical_content_timeline'),
            'flat-wide' => __("Flat wide", 'my_vertical_content_timeline'),
            'sharp' => __("Sharp", 'my_vertical_content_timeline')
        )
    ),
    'more-text' => array(
        'type' => 'text',
        'title' => __("Text:", 'my_vertical_content_timeline'),
        'tooltip' => __("Read more text.", 'my_vertical_content_timeline'),
        'default' => $settings ['more-text'],

    ),
    'close-text' => array(
        'type' => 'text',
        'title' => __("Close Text:", 'my_vertical_content_timeline'),
        'tooltip' => __("Close  Text.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-text'],

    ),
    'button-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Background color of 'Read More' and 'Close' buttons.", 'my_vertical_content_timeline'),
        'default' => $settings ['button-color']
    ),
    'button-hover-color' => array(
        'type' => 'color',
        'title' => __("Hover Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Hover color of 'Read More' and 'Close' buttons.", 'my_vertical_content_timeline'),
        'default' => $settings ['button-hover-color']
    ),

);
$my_font_type = array(
    "regular" => __("Regular", 'my_vertical_content_timeline'),
    "thick" => __("Thick", 'my_vertical_content_timeline'),
    "bold" => __("Bold", 'my_vertical_content_timeline'),
    "bold-italic" => __("Bold Italic", 'my_vertical_content_timeline'),
    "italic" => __("Italic", 'my_vertical_content_timeline')

);
$my_font_align = array(
    "left" => __("Left", 'my_vertical_content_timeline'),
    "right" => __("Right", 'my_vertical_content_timeline'),
    "center" => __("Center", 'my_vertical_content_timeline'),
);
$wp_timeline_12_options ['text_settings'] = array(
    'my_line_1' => array(
        'type' => 'my_line_1',
        'title' => __("TITLE:", 'my_vertical_content_timeline')        //shindiri studio
    ),
    "item-header-line-height" => array(
        'type' => 'text',
        'title' => __("Line Height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Line Height.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-header-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-header-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-header-font-color']
    ),
    'my_line_2' => array(
        'type' => 'my_line',
        'title' => __("TEXT:", 'my_vertical_content_timeline') //shindiri studio
    ),
    'item-text-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-text-font-size'],
        'unit' => 'px',
        'size' => 5

    ),
    "item-text-line-height" => array(
        'type' => 'text',
        'title' => __("Line Height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Text Line Height.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-text-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    "item-text-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Text Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['item-text-font-type'],
        'values' => $my_font_type
    ),
    'item-text-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-text-font-color']
    ),
    /*'my_line_3'=>array(
				'type' => 'my_line',
				'title' => __ ( "", 'my_vertical_content_timeline' )
		),*/
    "item-text-align" => array(
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),
        'tooltip' => __("Text Aligment.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-text-align'],
        'values' => $my_font_align

    ),
    'my_line_5' => array(
        'type' => 'my_line',
        'title' => __("OPEN TITLE:", 'my_vertical_content_timeline') //shindiri studio
    ),
    'item-open-header-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-header-font-size'],
        'unit' => 'px',
        'size' => 5

    ),
    "item-open-header-line-height" => array(
        'type' => 'text',
        'title' => __("Line Height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Line Height.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-header-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    "item-open-header-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['item-open-header-font-type'],
        'values' => $my_font_type
    ),
    'item-open-header-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-header-font-color']
    ),
    'my_line_6' => array(
        'type' => 'my_line',
        'title' => __("OPEN TEXT", 'my_vertical_content_timeline') //shindiri studio
    ),
    'item-open-text-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-text-font-size'],
        'unit' => 'px',
        'size' => 5

    ),
    "item-open-text-line-height" => array(
        'type' => 'text',
        'title' => __("Line Height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Text Line Height.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-text-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    "item-open-text-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Text Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['item-open-text-font-type'],
        'values' => $my_font_type
    ),
    'item-open-text-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Text Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-text-font-color']
    ),
    'my_line_7' => array(
        'type' => 'my_line',
        'title' => __("TITLE:", 'my_vertical_content_timeline') //shindiri studio
    ),
    "title-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['title-font-type'],
        'values' => $my_font_type
    ),
    'title-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['title-font-color']
    ),
    'title-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['title-font-size'],
        'unit' => 'px',
        'size' => 5
    ),
    'title-line-height' => array(
        'type' => 'text',
        'title' => __("Line height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title Line height.", 'my_vertical_content_timeline'),
        'default' => $settings ['title-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'title-font-wight' => array(
        'type' => 'text',
        'title' => __("Font weight:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title font weight.", 'my_vertical_content_timeline'),
        'default' => $settings ['title-font-weight'],
        'unit' => 'px',
        'size' => 5
    ),
    'title-line-spacing' => array(
        'type' => 'text',
        'title' => __("Line spacing:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title line spacing.", 'my_vertical_content_timeline'),
        'default' => $settings ['title-line-spacing'],
        'unit' => 'px',
        'size' => 5
    ),
    "title-position" => array(
        'type' => 'select',
        'title' => __("Position:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title position.", 'my_vertical_content_timeline'),
        'default' => $settings['title-position'],
        'values' => array(/*shindiri studio*/
            'image' => __("Image", 'my_vertical_content_timeline'),
            "field" => __("Field", 'my_vertical_content_timeline'),
        )
    ),
    "title-alignment" => array(
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),
        'tooltip' => __("Title alignment.", 'my_vertical_content_timeline'),
        'default' => $settings['title-alignment'],
        'values' => array(/*shindiri studio*/
            'left' => __("Left", 'my_vertical_content_timeline'),
            "center" => __("Center", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
    'my_line_8' => array(
        'type' => 'my_line',
        'title' => __("SUBTITLE:", 'my_vertical_content_timeline') //shindiri studio
    ),
    "subtitle-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['subtitle-font-type'],
        'values' => $my_font_type
    ),
    'subtitle-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-font-color']
    ),
    'subtitle-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-font-size'],
        'unit' => 'px',
        'size' => 5
    ),
    'subtitle-line-height' => array(
        'type' => 'text',
        'title' => __("Line height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle Line height.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'subtitle-font-wight' => array(
        'type' => 'text',
        'title' => __("Font weight:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle font weight.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-font-weight'],
        'unit' => 'px',
        'size' => 5
    ),
    'subtitle-line-spacing' => array(
        'type' => 'text',
        'title' => __("Line spacing:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle line spacing.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-line-spacing'],
        'unit' => 'px',
        'size' => 5
    ),
    "subtitle-position" => array(
        'type' => 'select',
        'title' => __("Position:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle position.", 'my_vertical_content_timeline'),
        'default' => $settings['subtitle-position'],
        'values' => array(/*shindiri studio*/
            'image' => __("Image", 'my_vertical_content_timeline'),
            "field" => __("Field", 'my_vertical_content_timeline'),
        )
    ),
    "subtitle-alignment" => array(
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle alignment.", 'my_vertical_content_timeline'),
        'default' => $settings['subtitle-alignment'],
        'values' => array(/*shindiri studio*/
            'left' => __("Left", 'my_vertical_content_timeline'),
            "center" => __("Center", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
    'my_line_9' => array(
        'type' => 'my_line',
        'title' => __("EXCERPT:", 'my_vertical_content_timeline') //shindiri studio
    ),
    "excerpt-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Excerpt Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['excerpt-font-type'],
        'values' => $my_font_type
    ),
    'excerpt-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Excerpt Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['excerpt-font-color']
    ),
    'excerpt-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Excerpt Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['excerpt-font-size'],
        'unit' => 'px',
        'size' => 5
    ),
    'excerpt-line-height' => array(
        'type' => 'text',
        'title' => __("Line height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Excerpt Line height.", 'my_vertical_content_timeline'),
        'default' => $settings ['excerpt-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'subtitle-font-wight' => array(
        'type' => 'text',
        'title' => __("Font weight:", 'my_vertical_content_timeline'),
        'tooltip' => __("Subtitle font weight.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-font-weight'],
        'unit' => 'px',
        'size' => 5
    ),
    'excerpt-line-spacing' => array(
        'type' => 'text',
        'title' => __("Line spacing:", 'my_vertical_content_timeline'),
        'tooltip' => __("Excerpt line spacing.", 'my_vertical_content_timeline'),
        'default' => $settings ['excerpt-line-spacing'],
        'unit' => 'px',
        'size' => 5
    ),
    "excerpt-alignment" => array(
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),
        'tooltip' => __("Excerpt alignment.", 'my_vertical_content_timeline'),
        'default' => $settings['excerpt-alignment'],
        'values' => array(/*shindiri studio*/
            'left' => __("Left", 'my_vertical_content_timeline'),
            "center" => __("Center", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
    'my_line_10' => array(
        'type' => 'my_line',
        'title' => __("FULL TEXT:", 'my_vertical_content_timeline') //shindiri studio
    ),
    "fulltext-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['fulltext-font-type'],
        'values' => $my_font_type
    ),
    'fulltext-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['fulltext-font-color']
    ),
    'fulltext-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['fulltext-font-size'],
        'unit' => 'px',
        'size' => 5
    ),
    'fulltext-line-height' => array(
        'type' => 'text',
        'title' => __("Line height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text Line height.", 'my_vertical_content_timeline'),
        'default' => $settings ['fulltext-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'fulltext-font-wight' => array(
        'type' => 'text',
        'title' => __("Font weight:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text font weight.", 'my_vertical_content_timeline'),
        'default' => $settings ['fulltext-font-weight'],
        'unit' => 'px',
        'size' => 5
    ),
    'fulltext-line-spacing' => array(
        'type' => 'text',
        'title' => __("Line spacing:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text line spacing.", 'my_vertical_content_timeline'),
        'default' => $settings ['fulltext-line-spacing'],
        'unit' => 'px',
        'size' => 5
    ),
    "fulltext-alignment" => array(
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),
        'tooltip' => __("Full Text alignment.", 'my_vertical_content_timeline'),
        'default' => $settings['fulltext-alignment'],
        'values' => array(/*shindiri studio*/
            'left' => __("Left", 'my_vertical_content_timeline'),
            "center" => __("Center", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
    'my_line_11' => array(
        'type' => 'my_line',
        'title' => __("DATE:", 'my_vertical_content_timeline') //shindiri studio
    ),
    "date-font-type" => array(
        'type' => 'select',
        'title' => __("Font Type:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date Font Type.", 'my_vertical_content_timeline'),
        'default' => $settings['date-font-type'],
        'values' => $my_font_type
    ),
    'subtitle-font-color' => array(
        'type' => 'color',
        'title' => __("Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date Font Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['date-font-color']
    ),
    'date-font-size' => array(
        'type' => 'text',
        'title' => __("Font size:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date Font size.", 'my_vertical_content_timeline'),
        'default' => $settings ['date-font-size'],
        'unit' => 'px',
        'size' => 5
    ),
    'date-line-height' => array(
        'type' => 'text',
        'title' => __("Line height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date Line height.", 'my_vertical_content_timeline'),
        'default' => $settings ['date-line-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'date-font-wight' => array(
        'type' => 'text',
        'title' => __("Font weight:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date font weight.", 'my_vertical_content_timeline'),
        'default' => $settings ['date-font-weight'],
        'unit' => 'px',
        'size' => 5
    ),
    'date-line-spacing' => array(
        'type' => 'text',
        'title' => __("Line spacing:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date line spacing.", 'my_vertical_content_timeline'),
        'default' => $settings ['date-line-spacing'],
        'unit' => 'px',
        'size' => 5
    ),
    "date-alignment" => array(
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),
        'tooltip' => __("Date alignment.", 'my_vertical_content_timeline'),
        'default' => $settings['date-alignment'],
        'values' => array(/*shindiri studio*/
            'left' => __("Left", 'my_vertical_content_timeline'),
            "center" => __("Center", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
);
$wp_timeline_12_options ['card_settings'] = array(
    'my_line_1' => array(
        'type' => 'my_line_1',
        'title' => __("DEFAULT VIEW:", 'my_vertical_content_timeline') //shindiri studio
    )
,
    'item-width' => array(
        'type' => 'text',
        'title' => __("Card Width:", 'my_vertical_content_timeline'),
        'tooltip' => __("Card width (default 240px)", 'my_vertical_content_timeline'),
        'default' => $settings ['item-width'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-content-padding' => array(
        'type' => 'text',
        'title' => __("Content Padding:", 'my_vertical_content_timeline'),
        'tooltip' => __("Padding of items content.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-content-padding'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-image-height' => array(
        'type' => 'text',
        'title' => __("Image Height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Height of images (Width is strached to element width).", 'my_vertical_content_timeline'),
        'default' => $settings ['item-image-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-image-border-width' => array(
        'type' => 'text',
        'title' => __("Image Border Width:", 'my_vertical_content_timeline'),
        'tooltip' => __("Image Border Width", 'my_vertical_content_timeline'),
        'default' => $settings ['item-image-border-width'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-image-border-color' => array(
        'type' => 'color',
        'title' => __("Image Border Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Image Border Color", 'my_vertical_content_timeline'),
        'default' => $settings ['item-image-border-color']
    ),
    'image-position' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Image Position:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Position image on card.", 'my_vertical_content_timeline'),
        'default' => $settings ['image-position'],
        'values' => array(/*shindiri studio*/
            'top' => __("Top", 'my_vertical_content_timeline'),
            "left" => __("Left", 'my_vertical_content_timeline'),
        )
    ),
    'image-shape' => array( // added new option to shape image
        'type' => 'select',
        'title' => __("Image Shape:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Choose shape of image.", 'my_vertical_content_timeline'),
        'default' => $settings ['image-shape'],
        'values' => array(/*shindiri studio*/
            'square' => __("Square", 'my_vertical_content_timeline'),
            "circle" => __("Circle", 'my_vertical_content_timeline'),
            "angled" => __("Angled", 'my_vertical_content_timeline'),
        )
    ),
    'show-date' => array( // added new option to shape image
        'type' => 'select',
        'title' => __("Date:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Choose date view.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-date'],
        'values' => array(/*shindiri studio*/
            'text' => __("Text", 'my_vertical_content_timeline'),
            "circle" => __("Circle", 'my_vertical_content_timeline'),
            "none" => __("None", 'my_vertical_content_timeline'),
        )
    ),
    'subtitle-category' => array(
        'type' => 'checkbox',
        'title' => __("Subtitle/Category:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide subtitle/category.", 'my_vertical_content_timeline'),
        'default' => $settings ['subtitle-category']
    ),
    'show-title' => array(
        'type' => 'checkbox',
        'title' => __("Title:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide title.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-title']
    ),
    'show-image' => array(
        'type' => 'checkbox',
        'title' => __("Image:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide image.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-image']
    ),
    'show-excerpt' => array(
        'type' => 'checkbox',
        'title' => __("Excerpt:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide excerpt.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-excerpt']
    ),
    'show-like' => array(
        'type' => 'checkbox',
        'title' => __("Like:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide like button.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-like']
    ),
    'show-share' => array(
        'type' => 'checkbox',
        'title' => __("Share:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide share button.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-share']
    ),
    'show-comments' => array(
        'type' => 'checkbox',
        'title' => __("Comments:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show or hide comments.", 'my_vertical_content_timeline'),
        'default' => $settings ['show-comments']
    ),
    "hover-title-color" => array(
        'type' => 'color',
        'title' => __("Hover Title Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Select color for title hover.", 'my_vertical_content_timeline'),
        'default' => $settings ['hover-title-color']
    ),
    "item-back-color" => array(
        'type' => 'color',
        'title' => __("Background Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Background Color", 'my_vertical_content_timeline'),
        'default' => $settings ['item-back-color']
    ),
    "item-background" => array(
        'type' => 'image',
        'title' => __("Background Image:", 'my_vertical_content_timeline'),
        'tooltip' => __("Background Image", 'my_vertical_content_timeline')
        // 'default'=>$settings['item-back-color'],
    )

,
    'my_line_2' => array(
        'type' => 'my_line',
        'title' => __("ACTIVE VIEW:", 'my_vertical_content_timeline') //shindiri studio
    ),
    "item-open-content-padding" => array(
        'type' => 'text',
        'title' => __("Content Padding:", 'my_vertical_content_timeline'),
        'tooltip' => __("Padding of open items content", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-content-padding'],
        'unit' => 'px',
        'size' => 5
    ),
    "item-open-image-height" => array(
        'type' => 'text',
        'title' => __("Image Height:", 'my_vertical_content_timeline'),
        'tooltip' => __("Height of images (Width is strached to element width).", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-image-height'],
        'unit' => 'px',
        'size' => 5
    ),
    "item-open-image-border-width" => array(
        'type' => 'text',
        'title' => __("Image Border Width:", 'my_vertical_content_timeline'),
        'tooltip' => __("Image Border Width", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-image-border-width'],
        'unit' => 'px',
        'size' => 5
    ),
    "item-open-show-date" => array(
        'type' => 'checkbox',
        'title' => __("Show Date:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show date.", 'my_vertical_content_timeline'),
        'default' => 0  // $settings['item-open-width'],
    ),
    "item-open-image-border-color" => array(
        'type' => 'color',
        'title' => __("Border Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Border Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-image-border-color'],
        'size' => 5
    ),
    "item-open-back-color" => array(
        'type' => 'color',
        'title' => __("Background Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Background Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-back-color'],
        /*'unit'=>'px',
			'size'=>5*/
    ),
    "item-open-scroll-color" => array(
        'type' => 'color',
        'title' => __("Scroller Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Scroller Color.", 'my_vertical_content_timeline'),
        'default' => $settings ['item-open-scroll-color'],
        /*'unit'=>'px',
					'size'=>5*/
    ),
    "item-open-background" => array(
        'type' => 'image',
        'title' => __("Background Image:", 'my_vertical_content_timeline'),
        'tooltip' => __("Background Image.", 'my_vertical_content_timeline')

    ),
    'close-button' => array( // added new option to shape image
        'type' => 'select',
        'title' => __("Close Button:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select style for close button.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button'],
        'values' => array(/*shindiri studio*/
            'x' => __("'X'", 'my_vertical_content_timeline'),
            "circle" => __("Text", 'my_vertical_content_timeline'),
            "none" => __("None", 'my_vertical_content_timeline'),
        )
    ),
    "close-button-background-color" => array(
        'type' => 'color',
        'title' => __("Close Button Background Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for close button background.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button-background-color'],
    ),
    "close-button-background-hover-color" => array(
        'type' => 'color',
        'title' => __("Close Button Background Hover Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for close button background hover.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button-background-hover-color'],
    ),
    "close-button-color" => array(
        'type' => 'color',
        'title' => __("Close Button Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for close button.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button-color'],
    ),
    "close-button-hover-color" => array(
        'type' => 'color',
        'title' => __("Close Button Hover Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for close button hover.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button-hover-color'],
    ),
    'close-button-position' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Close Button Position:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select position of close button.", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button position'],
        'values' => array(/*shindiri studio*/
            'left' => __("Left", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
    "close-button-text" => array(
        'type' => 'text',
        'title' => __("Close Button Text:", 'my_vertical_content_timeline'),
        'tooltip' => __("Input text for close button", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button-text'],
    ),
);
$wp_timeline_12_options ['timeline_category_settings'] = array(
    'display-category' => array(
        'type' => 'checkbox',
        'title' => __("Display:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show/hide category.", 'my_vertical_content_timeline'),
        'default' => $settings ['display-category']
    ),
    'category-type' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Type:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select type of category.", 'my_vertical_content_timeline'),
        'default' => $settings ['category-type'],
        'values' => array(/*shindiri studio*/
            'years' => __("Years", 'my_vertical_content_timeline'),
            "months" => __("Months", 'my_vertical_content_timeline'),
            "categories" => __("Categories", 'my_vertical_content_timeline'),
        )
    ),
    'category-position' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Position:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select position of category.", 'my_vertical_content_timeline'),
        'default' => $settings ['category-position'],
        'values' => array(/*shindiri studio*/
            'topcenter' => __("Top Center", 'my_vertical_content_timeline'),
            "topleft" => __("Top Left", 'my_vertical_content_timeline'),
            "topright" => __("Top Right", 'my_vertical_content_timeline'),
            'leftside' => __("Left Side", 'my_vertical_content_timeline'),
            "rightside" => __("Right Side", 'my_vertical_content_timeline'),
        )
    ),
    'category-alignment' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Alignment:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select alignment of category.", 'my_vertical_content_timeline'),
        'default' => $settings ['category-alignment'],
        'values' => array(/*shindiri studio*/
            'center' => __("Center", 'my_vertical_content_timeline'),
            "left" => __("Left", 'my_vertical_content_timeline'),
            "right" => __("Right", 'my_vertical_content_timeline'),
        )
    ),
    "number-of-items" => array(
        'type' => 'text',
        'title' => __("Number Of Items:", 'my_vertical_content_timeline'),
        'tooltip' => __("Set number of items for category to be viewed.", 'my_vertical_content_timeline'),
        'default' => $settings ['number-of-items'],
    ),
    "active-item-color" => array(
        'type' => 'color',
        'title' => __("Active Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for active item.", 'my_vertical_content_timeline'),
        'default' => $settings ['active-item-color'],
    ),
    "hover-item-color" => array(
        'type' => 'color',
        'title' => __("Hover Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for category item hover.", 'my_vertical_content_timeline'),
        'default' => $settings ['hover-item-color'],
    ),
    "arrow-color" => array(
        'type' => 'color',
        'title' => __("Arrow Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for arrow.", 'my_vertical_content_timeline'),
        'default' => $settings ['arrow-color'],
    ),
    "arrow-hover-color" => array(
        'type' => 'color',
        'title' => __("Arrow Hover Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for arrow hover.", 'my_vertical_content_timeline'),
        'default' => $settings ['arrow-hover-color'],
    ),


);
$wp_timeline_12_options ['line_node_settings'] = array(

    'display-line' => array(
        'type' => 'checkbox',
        'title' => __("Display Line:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show/hide line.", 'my_vertical_content_timeline'),
        'default' => $settings ['display-line']
    ),
    "line-color" => array(
        'type' => 'color',
        'title' => __("Line Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for line.", 'my_vertical_content_timeline'),
        'default' => $settings ['line-color'],
    ),
    'directional-line' => array(
        'type' => 'checkbox',
        'title' => __("Directional Line:", 'my_vertical_content_timeline'),
        'tooltip' => __("Show/hide directional line.", 'my_vertical_content_timeline'),
        'default' => $settings ['directional-line'],
    ),
    'node-text' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Node Text:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select position node text.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-text'],
        'values' => array(/*shindiri studio*/
            'centered' => __("Centered", 'my_vertical_content_timeline'),
            "directional" => __("Directional", 'my_vertical_content_timeline'),
            "none" => __("None", 'my_vertical_content_timeline'),
        )
    ),
    "node-text-color" => array(
        'type' => 'color',
        'title' => __("Node Text Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for node text.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-text-color'],
    ),
    'node-shape' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Node Shape:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Select shape of node.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-shape'],
        'values' => array(/*shindiri studio*/
            'square' => __("Square", 'my_vertical_content_timeline'),
            "circle" => __("Circle", 'my_vertical_content_timeline'),
            "none" => __("None", 'my_vertical_content_timeline'),
        )
    ),
    "node-color" => array(
        'type' => 'color',
        'title' => __("Node Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Choose color for node.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-color'],
    ),
    "close-button-text" => array(
        'type' => 'text',
        'title' => __("Close Button Text:", 'my_vertical_content_timeline'),
        'tooltip' => __("Input text for close button", 'my_vertical_content_timeline'),
        'default' => $settings ['close-button-text'],
    ),
    'space-around-node' => array( // old
        'type' => 'text',
        'title' => __("Space Around Node:", 'my_vertical_content_timeline'),
        'tooltip' => __("Set spacing around the node.", 'my_vertical_content_timeline'),
        'default' => $settings ['space-around-node'],
        'unit' => 'px',
        'size' => 5
    ),
);
$wp_timeline_12_options ['global_settings'] = array(

    'style' => array(
        'type' => 'select',
        'title' => __("Choose Timeline Style:", 'my_vertical_content_timeline'),
        'tooltip' => __("Set Global style options", 'my_vertical_content_timeline'),
        'values' => $wp_my_v_timeline_styles
    ),
    'disable_pretty_photo' => array(
        'type' => 'checkbox',
        'title' => __("Disable Pretty Photo:", 'my_vertical_content_timeline'),
        'tooltip' => __("Disable Pretty photo link to post images", 'my_vertical_content_timeline')

    ),
    'my-post-link' => array(
        'type' => 'checkbox',
        'title' => __("Read more link:", 'my_vertical_content_timeline'),
        'tooltip' => __("When users click read more open post in new tab with post link", 'my_vertical_content_timeline')

    ),
    'scroll-speed' => array( // old
        'type' => 'text',
        'title' => __("Scroll Speed:", 'my_vertical_content_timeline'),
        'tooltip' => __("Transition speed (default 500px)", 'my_vertical_content_timeline'),
        'unit' => 'ms',
        'default' => $settings ['scroll-speed'],
        'size' => 5
    )
,
    'easing' => array( // olsd
        'type' => 'select',
        'title' => __("Easing:", 'my_vertical_content_timeline'),
        'tooltip' => __("Transition easing function (default 'easeOutSine')", 'my_vertical_content_timeline'),
        'values' => array(
            'easeInQuad' => 'easeInQuad',
            'easeOutQuad' => 'easeOutQuad',
            'easeInOutQuad' => 'easeInOutQuad',
            'easeInCubic' => 'easeInCubic',
            'easeOutCubic' => 'easeOutCubic',
            'easeInOutCubic' => 'easeInOutCubic',
            'easeInQuart' => 'easeInQuart',
            'easeOutQuart' => 'easeOutQuart',
            'easeInOutQuart' => 'easeInOutQuart',
            'easeInQuint' => 'easeInQuint',
            'easeOutQuint' => 'easeOutQuint',
            'easeInOutQuint' => 'easeInOutQuint',
            'easeInSine' => 'easeInSine',
            'easeOutSine' => 'easeOutSine',
            'easeInOutSine' => 'easeInOutSine',
            'easeInExpo' => 'easeInExpo',
            'easeOutExpo' => 'easeOutExpo',
            'easeInOutExpo' => 'easeInOutExpo',
            'easeInCirc' => 'easeInCirc',
            'easeOutCirc' => 'easeOutCirc',
            'easeInOutCirc' => 'easeInOutCirc',
            'easeInElastic' => 'easeInElastic',
            'easeOutElastic' => 'easeOutElastic',
            'easeInOutElastic' => 'easeInOutElastic',
            'easeInBack' => 'easeInBack',
            'easeOutBack' => 'easeOutBack',
            'easeInOutBack' => 'easeInOutBack',
            'easeInBounce' => 'easeInBounce',
            'easeOutBounce' => 'easeOutBounce',
            'easeInOutBounce' => 'easeInOutBounce'
        ),
        'default' => $settings ['easing']
    )
,
    'item-transition-close' => array( // old
        'type' => 'checkbox',
        'title' => __("Close item on transition:", 'my_vertical_content_timeline'),
        'tooltip' => __("If this option is enabled, it closes the timeline item after the transition to the next element takes place (default 'false').", 'my_vertical_content_timeline'),
        'default' => $settings ['item-transition-close']
    ),
    'latest-post-start-item' => array(
        'type' => 'checkbox',
        'title' => __("Set Latest Post as Starting:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("If this option is enabled, start item will be latest post.", 'my_vertical_content_timeline'),
        'default' => 0
    ),
    'load-post-dynamic' => array(
        'type' => 'checkbox',
        'title' => __("Add posts dinamically:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("If this option is enabled, timeline will add posts dynamically to timeline, if new posts are publisshed.", 'my_vertical_content_timeline'),
        'default' => 0
    ),
    'switch-direction' => array(
        'type' => 'checkbox',
        'title' => __("Switch direction:", 'my_vertical_content_timeline'),
        'tooltip' => __("If this option is enabled, posts will be in incverse order", 'my_vertical_content_timeline'),
        'default' => 0
    ),
    'autoplay' => array(
        'type' => 'checkbox',
        'title' => __("Enable Autoplay:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("If this option is enabled, slider will autoplay", 'my_vertical_content_timeline'),
        'default' => 0
    ),
    'autoplay-mob' => array(
        'type' => 'checkbox',
        'title' => __("Enable Autoplay on Mobile:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("If this option is enabled, slider will autoplay for mobile devices", 'my_vertical_content_timeline'),
        'default' => 0
    ),
    'autoplay-step' => array(
        'type' => 'text',
        'title' => __("Autoplay Delay:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Autoplay will be triggered after this amount of time in miliseconds", 'my_vertical_content_timeline'),
        'default' => '10000',
        'size' => 5,
        'unit' => 'ms'
    ),
    'my_line' => array(
        'type' => 'my_line',
        'title' => __("CHRONOLOGICAL OPTIONS:", 'my_vertical_content_timeline')//shindiri studio
    ),
    'hide-years' => array( // old
        'type' => 'checkbox',
        'title' => __("Hide years:", 'my_vertical_content_timeline'),
        'tooltip' => __("If this option is enabled, year will be hidden", 'my_vertical_content_timeline'),
        'default' => $settings ['hide-years']
    ),
    'cat-type' => array( // old
        'type' => 'select',
        'title' => __("Choose Timeline Type:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Organize posts by date or some other criteria.", 'my_vertical_content_timeline'),
        'default' => $settings ['cat-type'],
        'values' => array(/*shindiri studio*/
            'months' => __("Group by Months", 'my_vertical_content_timeline'),
            "categories" => __("Group by Categories", 'my_vertical_content_timeline'),
            "years" => __("Group by Years", 'my_vertical_content_timeline'),
        )
    ),
    /*shindiri studio*/
    'num-of-years' => array(
        'type' => 'text',
        'title' => __("Years per line:", 'my_vertical_content_timeline'),
        'tooltip' => __("Set the number of years to be displayed per line", 'my_vertical_content_timeline'),
        'default' => '9',
        'size' => 5
    ),
    'my_line_1' => array(
        'type' => 'my_line',
        'title' => __("GLOBAL CARD SETTINGS:", 'my_vertical_content_timeline')//shindiri studio
    ),
    'read-more' => array( // old
        'type' => 'select',
        'title' => __("Read More Type:", 'my_vertical_content_timeline'),//shindiri studio
        'default' => $settings ['read-more'],
        'tooltip' => __("Read more button ('Button' : adds read more button, 'Whole Item' : makes the entire item clickable, 'None' : Items don't open).", "my_vertical_content_timeline"),
        'values' => array(
            'button' => __("Button", 'my_vertical_content_timeline'),
            'whole-item' => __("Whole Item", 'my_vertical_content_timeline'),
            'none' => __("None", 'my_vertical_content_timeline')
        )
    ),
    'line-width' => array( // old
        'type' => 'text',
        'title' => __("Timeline Width:", 'my_vertical_content_timeline'),
        'tooltip' => __("Width of the line element (default 920px).", 'my_vertical_content_timeline'),
        'default' => $settings ['line-width'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-margin' => array( // old
        'type' => 'text',
        'title' => __("Card Margin:", 'my_vertical_content_timeline'),//shindiri studio
        'tooltip' => __("Space between two items. If negative items overlap. (default 20px).", 'my_vertical_content_timeline'),
        'default' => $settings ['item-margin'],
        'unit' => 'px',
        'size' => 5
    ),
    'item-height' => array( // old
        'type' => 'text',
        'title' => __("Card Height:", 'my_vertical_content_timeline'),//shindiri studio
        'tooltip' => __("Height of Item and Open item elements (default 360px).", 'my_vertical_content_timeline'),
        'default' => $settings ['item-height'],
        'unit' => 'px',
        'size' => 5
    ),
    'align-start-item' => array( // old
        'type' => 'select',
        'title' => __("Start Item Alignment:", 'my_vertical_content_timeline'),
        'default' => $settings ['align-start-item'],
        'tooltip' => __("Choose alignment for Start Item."),
        'values' => array(
            'left' => __("Left", 'my_vertical_content_timeline'),
            'center' => __("Center", 'my_vertical_content_timeline'),
            'right' => __("Right", 'my_vertical_content_timeline')
        )
    ),
    'my_line_2' => array( // old
        'type' => 'my_line',
        'title' => __("TIMELINE SETTINGS:", 'my_vertical_content_timeline') //shindiri studio
    ),
    'hide-line' => array(
        'type' => 'checkbox',
        'title' => __("Hide Timeline:", 'my_vertical_content_timeline'),
        'tooltip' => __("Hide Timeline", 'my_vertical_content_timeline'),
        'default' => $settings ['hide-line']
    ),
    'hide-nav' => array(
        'type' => 'checkbox',
        'title' => __("Hide Navigation:", 'my_vertical_content_timeline'),
        'tooltip' => __("Hide Navigation", 'my_vertical_content_timeline'),
        'default' => $settings ['hide-nav']
    ),
    'fast-forward-backward' => array(
        'type' => 'checkbox',
        'title' => __("Fast forward/backward:", 'my_vertical_content_timeline'),
        'tooltip' => __("Enable icons to quickly move from first to last item and backwards", 'my_vertical_content_timeline'),
        'default' => $settings ['fast-forward-backward']
    ),
    'tim-align' => array( // added new option to align timeline
        'type' => 'select',
        'title' => __("Timeline Items Alignment:", 'my_vertical_content_timeline'),/*shindiri studio*/
        'tooltip' => __("Align timeline items.", 'my_vertical_content_timeline'),
        'default' => $settings ['tim-align'],
        'values' => array(/*shindiri studio*/
            'all-left' => __("All Left", 'my_vertical_content_timeline'),
            "all-right" => __("All Right", 'my_vertical_content_timeline'),
            "left-right" => __("Left-Right", 'my_vertical_content_timeline'),
            "right-left" => __("Right-Left", 'my_vertical_content_timeline'),
        )
    ),
    'line-style' => array(
        'type' => 'select',
        'title' => __(" Choose Line Style:", 'my_vertical_content_timeline'), //shindiri studio
        'tooltip' => __("Color scheme of timeline element (default 'Light').", 'my_vertical_content_timeline'),
        'default' => $settings ['line-style'],
        'values' => array(
            'flat' => __("Flat", 'my_vertical_content_timeline'),
            'light' => __("Light", 'my_vertical_content_timeline'),
            'dark' => __("Dark", 'my_vertical_content_timeline'),

        )

    ),
    'nav-style' => array(
        'type' => 'select',
        'title' => __("Choose Navigation Style:", 'my_vertical_content_timeline'), //shindiri studio
        'tooltip' => __("Color scheme of nav elements (default 'Light').", 'my_vertical_content_timeline'),
        'default' => $settings ['nav-style'],
        'values' => array(
            'flat' => __("Flat", 'my_vertical_content_timeline'),
            'light' => __("Light", 'my_vertical_content_timeline'),
            'dark' => __("Dark", 'my_vertical_content_timeline'),
            'flat_dark' => __("Flat Dark", 'my_vertical_content_timeline')
        )

    ),

    'shadow' => array(
        'type' => 'select',
        'title' => __("Choose Shadow Option:", 'my_vertical_content_timeline'), // shindiri studio
        'tooltip' => __("Shadow under elements (default 'show').", 'my_vertical_content_timeline'),
        'default' => $settings ['shdow'],
        'values' => array(
            'show' => __("Show", 'my_vertical_content_timeline'),
            'on-hover' => __("Show on hover", 'my_vertical_content_timeline'),
            'hide' => __("Hide", 'my_vertical_content_timeline')
        )

    ),
    "node-desc-color" => array(
        'type' => 'color',
        'title' => __("Node description color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Color of description bar that appears when you hover date on the timeline.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-desc-color']
    ),
    "node-line-color" => array(
        'type' => 'color',
        'title' => __("Node line color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Color of line.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-line-color']
    ),
    "node-arrows-color" => array(
        'type' => 'color',
        'title' => __("Node Arrows Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Color of line arrows.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-arrows-color']
    ),
    "node-dot-color" => array(
        'type' => 'color',
        'title' => __("Node Dot Color:", 'my_vertical_content_timeline'),
        'tooltip' => __("Color of line dots.", 'my_vertical_content_timeline'),
        'default' => $settings ['node-dot-color']
    ),
    /*'node-line-1-color'=>array(
				'type' => 'color',
				'title' => __ ( "Color of month separate line", 'my_vertical_content_timeline' ),
				'tooltip' => __ ( "Color of line seperate month.", 'my_vertical_content_timeline' ),
				'default' => $settings ['node-line-1-color']
		) */
);