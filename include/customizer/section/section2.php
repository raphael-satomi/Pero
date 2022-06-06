<?php

    function rp_section2_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting('rp_titulo_section2', array('default' => 'Sobre'));
        $wp_customize->add_setting('rp_descricao_section2', array('default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'));
        
        // Sections
        $wp_customize->add_section('rp_section2_section', array(
            'title' => 'Seção 1',
            'priority' => '1',
            'panel' => 'secoes'
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_titulo_section2',
                array(
                    'label' => '',
                    'section' => 'rp_section2_section',
                    'settings' => 'rp_titulo_section2',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_descricao_section2',
                array(
                    'label' => '',
                    'section' => 'rp_section2_section',
                    'settings' => 'rp_descricao_section2',
                    'type' => 'textarea'
                )
            )
        );

    
    }




































