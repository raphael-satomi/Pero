<?php

    function rp_section3_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting('rp_titulo_habilidades', array('default' => 'Habilidades e Idiomas'));
        $wp_customize->add_setting('rp_descricao_habilidades', array('default' => ''));

        $wp_customize->add_setting('rp_descricao_idiomas', array('default' => ''));
        
        // Sections
        $wp_customize->add_section('rp_section3_section', array(
            'title' => 'Seção 3',
            'priority' => '3',
            'panel' => 'secoes'
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_titulo_habilidades',
                array(
                    'label' => '',
                    'section' => 'rp_section3_section',
                    'settings' => 'rp_titulo_habilidades',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_descricao_habilidades',
                array(
                    'label' => '',
                    'section' => 'rp_section3_section',
                    'settings' => 'rp_descricao_habilidades',
                    'type' => 'textarea'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_descricao_idiomas',
                array(
                    'label' => '',
                    'section' => 'rp_section3_section',
                    'settings' => 'rp_descricao_idiomas',
                    'type' => 'textarea'
                )
            )
        );

    
    }




































