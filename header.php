<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
	<?php wp_head(); ?>
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
        </div>

        
	</header>












