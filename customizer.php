  
<?php

//customize-register to create new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'kiwanis-background-colour' , array(
       'default'   => '#FAF8F0',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kiwanis-background-colour-control', array(
   	'label'      => __( 'Background Colour', 'kiwanis-theme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'kiwanis-background-colour',
   ) ) );

   // Header and Footer background Colour
    $wp_customize->add_setting( 'kiwanis-header-footer-colour' , array(
        'default'   => '#043353',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kiwanis-header-footer-colour-control', array(
    	'label'      => __( 'Header and Footer Background Colour', 'kiwanis-theme' ),
     'description' => 'Change the Header and Footer Background Colour',
    	'section'    => 'colors',
    	'settings'   => 'kiwanis-header-footer-colour',
    ) ) );


   // Footer Message
   $wp_customize->add_section( 'kiwanis-footer-section' , array(
       'title'      => __( 'Footer Text', 'kiwanis-theme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'kiwanis-footer-section-message' , array(
       'default'   => 'Copyright © Kiwanis NZSP 2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'kiwanis-footer-section-control', array(
     'label'      => __( 'Footer Text', 'kiwanis-theme' ),
     'section'    => 'kiwanis-footer-section',
     'settings'   => 'kiwanis-footer-section-message',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'kiwanis-title-text' , array(
       'title'      => __( 'Site Title Text', 'kiwanis-theme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'kiwanis-title-text' , array(
       'default'   => 'Kiwanis',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'kiwanis-title-text-control', array(
     'label'      => __( 'Site Title Text', 'kiwanis-theme' ),
     'section'    => 'kiwanis-title-text',
     'settings'   => 'kiwanis-title-text',
   ) ) );
   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('kiwanis-background-colour','#FAF8F0'); ?>!important;
         }
   .footer, .header-background{
             background-color: <?php echo get_theme_mod('kiwanis-header-footer-colour', '#043353'); ?>!important ;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
