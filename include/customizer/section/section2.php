<?php

    function rp_section2_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting('rp_titulo_formacao', array('default' => 'Formação'));
        $wp_customize->add_setting('rp_descricao_formacao', array('default' => ''));

        $wp_customize->add_setting('rp_titulo_experiencia', array('default' => 'Experiência'));
        $wp_customize->add_setting('rp_descricao_experiencia', array('default' => ''));
        
        // Sections
        $wp_customize->add_section('rp_section2_section', array(
            'title' => 'Seção 2',
            'priority' => '2',
            'panel' => 'secoes'
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_titulo_formacao',
                array(
                    'label' => '',
                    'section' => 'rp_section2_section',
                    'settings' => 'rp_titulo_formacao',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_descricao_formacao',
                array(
                    'label' => '',
                    'section' => 'rp_section2_section',
                    'settings' => 'rp_descricao_formacao',
                    'type' => 'textarea'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_titulo_experiencia',
                array(
                    'label' => '',
                    'section' => 'rp_section2_section',
                    'settings' => 'rp_titulo_experiencia',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_descricao_experiencia',
                array(
                    'label' => '',
                    'section' => 'rp_section2_section',
                    'settings' => 'rp_descricao_experiencia',
                    'type' => 'textarea'
                )
            )
        );

    
    }




































