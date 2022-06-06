<?php

    function rp_dados_customizer( $wp_customize ){

        // Settings
        $wp_customize->add_setting('rp_nome', array('default' => 'Raphael Satomi'));
        $wp_customize->add_setting('rp_destaque', array('default' => 'Bacharel em Administração'));
        $wp_customize->add_setting('rp_cidade', array('default' => 'São Paulo, SP'));
        $wp_customize->add_setting('rp_email', array('default' => 'email@gmail.com'));
        $wp_customize->add_setting('rp_telefone', array('default' => '(XX) XXXXX-XXXX'));
        $wp_customize->add_setting('rp_fundoImage', array('default' => ''));
        $wp_customize->add_setting('rp_fotoPerfil', array('default' => ''));
        $wp_customize->add_setting('rp_curriculo', array('default' => ''));
        
        // Sections
        $wp_customize->add_section('rp_dados_section', array(
            'title' => 'Dados Básicos',
            'priority' => 1
        ));
    
        // Controllers
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_nome',
                array(
                    'label' => 'Nome',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_nome',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_destaque',
                array(
                    'label' => 'Destaque',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_destaque',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_cidade',
                array(
                    'label' => 'Cidade',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_cidade',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_email',
                array(
                    'label' => 'Email',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_email',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'rp_celular',
                array(
                    'label' => 'Celular',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_celular',
                    'type' => 'text'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'rp_fotoPerfil',
                array(
                    'label' => 'Foto Perfil',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_fotoPerfil',
                    'type' => 'image'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'rp_fundoImage',
                array(
                    'label' => 'Imagem de Fundo',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_fundoImage',
                    'type' => 'image'
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'rp_curriculo',
                array(
                    'label' => 'Curriculo',
                    'section' => 'rp_dados_section',
                    'settings' => 'rp_curriculo',
                    'mime_type' => 'application/pdf'
                )
            )
        );

    
    }




































