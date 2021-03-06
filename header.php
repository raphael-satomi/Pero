<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title> Portfólio <?= get_theme_mod('rp_nome')? '| '.get_theme_mod('rp_nome') : false ?></title>
	<?php wp_head(); ?>
    <?php
        if( get_theme_mod('rp_shortIcon')): ?>
            <link rel="shortcut icon" href="<?php echo get_theme_mod('rp_shortIcon'); ?>" type="image/x-icon" /><?php
        endif; 
    ?>
</head>
<body class="rp_corfundo" <?php body_class(); ?>>
	<header>

        <div class="top_header rp_corprincipal container-pai">
            <div class="container">

                <div class="menu-primary" id="navbar">
                    <?php
                    if(has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'fallback_cb' => false,
                            'menu_class' => 'nav navbar-nav rp_cortexto'
                        ));
                    }
                    ?>
                </div>

            </div>
            <div class="open-menu mobile">
                <div class="icon-button">
                    <div class="rp_corfundo"></div>
                    <div class="rp_corfundo"></div>
                    <div class="rp_corfundo"></div>
                </div>
            </div>
        </div>
        
	</header>












