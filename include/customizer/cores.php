<?php

    function rp_cores_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting('rp_corprincipal', array('default' => '#181818'));
        $wp_customize->add_setting('rp_corfundo', array('default' => '#e0e0e1'));
        $wp_customize->add_setting('rp_cortitulo', array('default' => '#FFF'));
        
        // Sections
        $wp_customize->add_section('rp_cores_section', array(
            'title' => 'Cores',
            'priority' => '2',
            'panel' => 'opcoes'
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'rp_corfundo',
                array(
                    'label' => 'Cor Fundo',
                    'section' => 'rp_cores_section',
                    'settings' => 'rp_corfundo'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'rp_corprincipal',
                array(
                    'label' => 'Cor Principal',
                    'section' => 'rp_cores_section',
                    'settings' => 'rp_corprincipal'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'rp_cortitulo',
                array(
                    'label' => 'Cor Titulo',
                    'section' => 'rp_cores_section',
                    'settings' => 'rp_cortitulo'
                )
            )
        );

    
    }




































