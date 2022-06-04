<?php 

    require get_template_directory().'/include/customizer/social.php';
    require get_template_directory().'/include/customizer/dados.php';
    require get_template_directory().'/include/customizer/cores.php';

    function rp_customize_register( $wp_customize ) {

        $wp_customize->get_section('custom_css')->description = '';

        $wp_customize->add_panel('opcoes', array(
            'title' => 'Opções do Tema',
            'priority' => 1
        ));

        rp_social_customizer( $wp_customize );

        rp_dados_customizer( $wp_customize );

        rp_cores_customizer( $wp_customize );

        echo "<pre>";
        print_r( $wp_customize );
        echo "</pre>";
    }