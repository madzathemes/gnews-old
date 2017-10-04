<?php
function gnews_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'gnews'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'gnews'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'gnews'),
    'panel'  => 'colors_settings'
  ));



  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General', 'gnews'),
    'panel'  => 'colors_settings'
  ));





  $wp_customize->add_setting('gnews_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'gnews_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'gnews'),
      'section'  => 'general_style_settings',
      'settings' => 'gnews_theme_options[colors_default]',
    )));




  $wp_customize->add_setting('gnews_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'gnews_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'gnews'),
      'section'  => 'general_style_settings',
      'settings' => 'gnews_theme_options[colors_button]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header & Menu Colors', 'gnews'),
    'panel'  => 'colors_settings'
  ));




  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'gnews'),
    'panel'  => 'colors_settings'
  ));




  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'gnews'),
    'panel'  => 'colors_settings'
  ));


}

add_action('customize_register', 'gnews_customize_colors');

Kirki::add_field( 'gnews_theme_options[background_image]', array(
  'type'        => 'image',
  'settings'    => 'gnews_theme_options[background_image]',
  'label'       => esc_html__( 'Background Image', 'gnews' ),
  'section'     => 'background_settings',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 10,
) );

Kirki::add_field( 'gnews_theme_options[background_color]', array(
  'type'        => 'color',
  'settings'    => 'gnews_theme_options[background_color]',
  'label'       => esc_html__( 'Background Color', 'gnews' ),
  'section'     => 'background_settings',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 10,
) );

Kirki::add_field( 'zoom', array(
 'type'        => 'radio-buttonset',
 'settings'    => 'zoom',
 'label'       => esc_html__( 'Image Hover Zoom', 'gnews' ),
 'section'     => 'general_style_settings',
 'default'     => 'on',
 'priority'    => 1,
 'option_type'           => 'option',
 'choices'     => array(
   'on'   => esc_attr__( 'Zoom On', 'gnews' ),
   'off' => esc_attr__( 'Zoom Off', 'gnews' )
 ),
));

Kirki::add_field( 'mt_colors_default', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_default',
  'label'       => esc_attr__( 'Site Color', 'gnews' ),
  'section'     => 'general_style_settings',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'color'    => esc_attr__( 'Color', 'gnews' ),
      'textinbackground'   => esc_attr__( 'Text If Background', 'gnews' ),
  ),
  'default'     => array(
      'color'    => '',
      'textinbackground'    => '',
  ),
));

Kirki::add_field( 'mt_menu_full', array(
      'type'        => 'switch',
      'settings'    => 'mt_menu_full',
      'label'       => esc_attr__( 'Full Width', 'gnews' ),
      'section'     => 'colors_menu',
      'default'     => 'on',
      'priority'    => 1,
      'choices'     => array(
        'on'  => esc_attr__( 'ON', 'gnews' ),
        'off' => esc_attr__( 'OFF', 'gnews' ),
      ),
));

Kirki::add_field( 'mt_colors_header', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_header',
  'label'       => esc_attr__( 'Top Bar', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'gnews' ),
      'link'   => esc_attr__( 'Link', 'gnews' ),
      'hover'  => esc_attr__( 'Hover', 'gnews' ),
      'bold'  => esc_attr__( 'Bold', 'gnews' ),
  ),
  'default'     => array(
      'background'    => '',
      'link'    => '',
      'hover'    => '',
      'bold'    => ''
  ),
));


Kirki::add_field( 'mt_colors_menu_bg', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_bg',
  'label'       => esc_attr__( 'Menu Background', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'in'    => esc_attr__( 'Background', 'gnews' ),
  ),
  'default'     => array(
      'in'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_link', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_link',
  'label'       => esc_attr__( 'Menu Links', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'text'    => esc_attr__( 'Links', 'gnews' ),
      'text_hover'   => esc_attr__( 'Hover', 'gnews' ),
      'border'  => esc_attr__( 'Background', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
      'border'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_link_sub', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_link_sub',
  'label'       => esc_attr__( 'Menu Sub Links', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'text'    => esc_attr__( 'Lines', 'gnews' ),
      'text_hover'   => esc_attr__( 'Hover', 'gnews' ),
      'background'  => esc_attr__( 'Background', 'gnews' ),
      'background_hover'  => esc_attr__( 'Hover', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_button', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_button',
  'label'       => esc_attr__( 'Menu Smart Button', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'text'    => esc_attr__( 'Lines', 'gnews' ),
      'text_hover'   => esc_attr__( 'Hover', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_menu_search', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_search',
  'label'       => esc_attr__( 'Menu Search', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 1,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'gnews' ),
      'text_hover'   => esc_attr__( 'Hover', 'gnews' ),
      'background'  => esc_attr__( 'Background', 'gnews' ),
      'background_hover'  => esc_attr__( 'Hover', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));


Kirki::add_field( 'mt_colors_menu_smart', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_menu_smart',
  'label'       => esc_attr__( 'Smart Menu', 'gnews' ),
  'section'     => 'colors_menu',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'gnews' ),
      'link'   => esc_attr__( 'Link', 'gnews' ),
      'hover'  => esc_attr__( 'Hover', 'gnews' ),
      'out'  => esc_attr__( 'Out', 'gnews' ),
  ),
  'default'     => array(
      'background'    => '',
      'link'    => '',
      'hover'    => '',
      'out'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_social', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_social',
  'label'       => esc_attr__( 'Footer Social Icons', 'gnews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'icon'    => esc_attr__( 'Icon', 'gnews' ),
      'hover'   => esc_attr__( 'Hover', 'gnews' ),
      'background'   => esc_attr__( 'Background', 'gnews' ),
      'background_hover'  => esc_attr__( 'Hover', 'gnews' ),
  ),
  'default'     => array(
      'icon'    => '',
      'hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_bottom', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_bottom',
  'label'       => esc_attr__( 'Footer Colors', 'gnews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'gnews' ),
      'text'   => esc_attr__( 'Text', 'gnews' ),
      'link'  => esc_attr__( 'Link', 'gnews' ),
      'hover'  => esc_attr__( 'Hover', 'gnews' ),
  ),
  'default'     => array(
      'background'    => '',
      'text'    => '',
      'link'    => '',
      'hover'    => '',
  ),
));

Kirki::add_field( 'colors_post_share', array(
  'type'        => 'multicolor',
  'settings'    => 'colors_post_share',
  'label'       => esc_attr__( 'Post Share Count', 'gnews' ),
  'section'     => 'colors_other',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'gnews' ),
      'text_dark'   => esc_attr__( 'Photo bg', 'gnews' ),
      'icon'   => esc_attr__( 'Icon', 'gnews' ),
      'icon_dark'   => esc_attr__( 'Photo bg', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_dark'    => '',
      'icon'    => '',
      'icon_dark'    => '',
  ),
));
Kirki::add_field( 'colors_post_view', array(
  'type'        => 'multicolor',
  'settings'    => 'colors_post_view',
  'label'       => esc_attr__( 'Post View Count', 'gnews' ),
  'section'     => 'colors_other',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'gnews' ),
      'text_dark'   => esc_attr__( 'Photo bg', 'gnews' ),
      'icon'   => esc_attr__( 'Icon', 'gnews' ),
      'icon_dark'   => esc_attr__( 'Photo bg', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_dark'    => '',
      'icon'    => '',
      'icon_dark'    => '',
  ),
));

Kirki::add_field( 'mt_colors_cat', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_cat',
  'label'       => esc_attr__( 'Post List Category', 'gnews' ),
  'section'     => 'colors_other',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'gnews' ),
      'background'   => esc_attr__( 'Background', 'gnews' ),
  ),
  'default'     => array(
      'text'    => '',
      'background'    => '',
  ),
));
?>
