<?php
function mytheme_customize_register( $wp_customize ) {
 $wp_customize->add_section( 'starter_new_section_name' , array(
        'title'    => __( 'Visible Section Name', 'starter' ),
        'priority' => 30
    ) );   

    $wp_customize->add_setting( 'primary_site_color' , array(
        'default'   => '0e3330',
        'transport' => 'refresh',
    ) );
	
	$wp_customize->add_setting( 'primary_site_content_color' , array(
        'default'   => 'f7fcfd',
        'transport' => 'refresh',
    ) );
	
	$wp_customize->add_setting( 'background_image' , array(
        'default'   => get_template_directory_uri().'/img/coverphoto.jpg',
        'transport' => 'refresh',
    ) );
	
	$wp_customize->add_setting( 'cover_photo' , array(
        'default'   => get_template_directory_uri().'/img/portrait02.jpg',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Color', 'starter' ),
        'section'  => 'colors',
        'settings' => 'primary_site_color',
    ) ) );
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_content_color', array(
        'label'    => __( 'Primary Content Color', 'starter' ),
        'section'  => 'colors',
        'settings' => 'primary_site_content_color',
    ) ) );

	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'background',
           array(
               'label'      => __( 'Upload a background photo', 'starter' ),
               'section'    => 'colors',
               'settings'   => 'background_image'
           )
       )
   );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'cover',
           array(
               'label'      => __( 'Upload a cover photo', 'starter' ),
               'section'    => 'colors',
               'settings'   => 'cover_photo'
           )
       )
   );
}

function cove_customize_css()
{
    ?>
         <style type="text/css">
             body { 
				 color: <?php echo get_theme_mod('primary_site_content_color', 'f7fcfd');?>;
				background-color: <?php echo get_theme_mod('primary_site_color', '0e3330');?>; 
			 }
			 footer { 
				background-image: url('<?php echo get_theme_mod('background_image');?>'); 
			 }
			 .portrait { 
				background-image: url('<?php echo get_theme_mod('cover_photo');?>'); 
			 }
         </style>
    <?php
}

?>