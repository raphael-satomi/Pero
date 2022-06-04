<?php 
    // Include 
    require get_template_directory().'/include/setup.php';
    require get_template_directory().'/include/customizer/theme-customizer.php';

    // Hooks 
    add_action( "wp_enqueue_scripts", "rp_theme_styles" );
    add_action( "after_setup_theme", "rp_after_setup" );
    add_action( "widgets_init", "rp_widgets" );

    add_action( "customize_register", "rp_customize_register" );