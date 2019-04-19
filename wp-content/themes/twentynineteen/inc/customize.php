<?php
function mj_customize_register($wp_customize){

  $wp_customize->add_section( 'mj_custom_option' , array(
    'title'       => __( 'Custom Theme Options'),
    'priority'    => 30,
));

/* Text input */
$wp_customize->add_setting( 'mj_email_options' , array(
    'default'     => 'help@domain.com',
    'capability'  => 'edit_theme_options',
    'type'        => 'option',
));

$wp_customize->add_control('mj_email_options', array(
  'label'         => __( 'Enter Email'),
  'section'       => 'mj_custom_option',
  'settings'      => 'mj_email_options',
));

/*  Choice */
$wp_customize->add_setting('mj_address_options',array(
  'default'       => 'Ahmedabad',
  'capability'    => 'edit_theme_options',
  'type'          => 'option',
));

$wp_customize->add_control('mj_address_options',array(
  'label'         => __('Location'),
  'section'       => 'mj_custom_option',
  'setting'       => 'mj_address_options',
  'type'          => 'radio',
  'choices'       => array(
      'Ahmedabad'    => __('Ahmedabad'),
      'Mumbai'    => __('Mumbai'),
      'Delhi'    => __('Delhi'),
  ),
));

/* Selectbox */
$wp_customize->add_setting('mj_post_options',array(
  'default'       => 'Web Developer',
  'capability'    => 'edit_theme_options',
  'type'          => 'option',
  'transport'     => 'refresh',
));

$wp_customize->add_control('mj_post_options',array(
  'label'         => __('Select Something'),
  'section'       => 'mj_custom_option',
  'setting'       => 'mj_post_options',
  'type'          => 'select',
  'choices'       => array(
      'Web Developer'        => __('Web Developer'),
      'Frontend Developer'   => __('Frontend Developer'),
      'Graphic Designer'     => __('Graphic Designer'),
  ),
));

// Image Upload
$wp_customize->add_setting('mj_image_upload_options',array(
  'default'       => '',
  'capability'    => 'edit_theme_options',
  'type'          => 'option',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'mj_image_upload_options',array(
  'label'         => __('Image Upload'),
  'section'       => 'mj_custom_option',
  'setting'       => 'mj_image_upload_options',
)));

// File Upload
$wp_customize->add_setting('mj_file_upload_options',array(
  'default'       => '',
  'capability'    => 'edit_theme_options',
  'type'          => 'option',
));

$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'mj_file_upload_options',array(
  'label'         => __('File Upload'),
  'section'       => 'mj_custom_option',
  'setting'       => 'mj_file_upload_options',
)));

// Color Picker
$wp_customize->add_setting('mj_link_color',array(
  'default'           => '#000',
  'sanitize_callback' => 'sanitize_hex_color',
  'capability'        => 'edit_theme_options',
  'type'              => 'option',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'mj_link_color',array(
  'label'             => __('Link Color'),
  'section'           => 'mj_custom_option',
  'setting'           => 'mj_link_color',
)));
}
  add_action('customize_register', 'mj_customize_register');

 ?>
