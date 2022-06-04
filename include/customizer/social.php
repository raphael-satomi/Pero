<?php

    function rp_social_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting('rp_linkedin', array('default' => ''));
        $wp_customize->add_setting('rp_facebook', array('default' => ''));
        $wp_customize->add_setting('rp_instagram', array('default' => ''));
        $wp_customize->add_setting('rp_twitter', array('default' => ''));
        $wp_customize->add_setting('rp_github', array('default' => ''));
        
        // Sections
        $wp_customize->add_section('rp_social_section', array(
            'title' => 'Redes Sociais',
            'priority' => '1',
            'panel' => 'opcoes'
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_linkedin',
                array(
                    'label' => 'Link do Linkedin',
                    'section' => 'rp_social_section',
                    'settings' => 'rp_linkedin',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_facebook',
                array(
                    'label' => 'Link do Facebook',
                    'section' => 'rp_social_section',
                    'settings' => 'rp_facebook',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_instagram',
                array(
                    'label' => 'Link do Instagram',
                    'section' => 'rp_social_section',
                    'settings' => 'rp_instagram',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_twitter',
                array(
                    'label' => 'Link do Twitter',
                    'section' => 'rp_social_section',
                    'settings' => 'rp_twitter',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_github',
                array(
                    'label' => 'Link do Github',
                    'section' => 'rp_social_section',
                    'settings' => 'rp_github',
                    'type' => 'text'
                )
            )
        );

    
    }




































