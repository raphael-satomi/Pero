<?php get_header(); ?>

    <div class="main_content">
        <div class="container">
            <div class="left_side">
                <?php if( get_theme_mod('rp_fundoImage')): ?>
                    <img class="imagem_fundo" src="<?php echo get_theme_mod('rp_fundoImage'); ?>" alt=""/>
                <?php endif; ?>
            </div>
            <div class="right_side rp_corprincipal">
                <div class="content_inside">
                    <div class="logo">
                        <?php
                            if(has_custom_logo()) {
                                the_custom_logo();
                            }
                        ?>
                    </div>
                    <div class="info_pessoal">
                        <div class="destaque_nome rp_cortexto">
                            <?= get_theme_mod('rp_nome')? get_theme_mod('rp_nome') : 'Raphael Satomi' ?>
                        </div>
                        <div class="destaque_destaque rp_cortexto">
                            <?= get_theme_mod('rp_destaque')? get_theme_mod('rp_destaque') : 'Bacharel em Análise e Desenvolvimento de Sistemas' ?>
                        </div>
                        <div class="destaque_cidade rp_cortexto">
                            <?= get_theme_mod('rp_cidade')? get_theme_mod('rp_cidade') : 'São Paulo, SP' ?>
                        </div>
                    </div>

                    <div class="info_contato">
                        <div class="destaque_email rp_cortexto">
                            <?= get_theme_mod('rp_email')? get_theme_mod('rp_email') : 'email@gmail.com' ?>
                        </div>
                        <div class="destaque_celular rp_cortexto">
                            <?= get_theme_mod('rp_celular')? get_theme_mod('rp_celular') : '(XX) XXXXX-XXXX' ?>
                        </div>
                    </div>

                    <div class="info_socialicons">
                        <?php if( get_theme_mod('rp_facebook')): ?>
                            <a href="<?php echo get_theme_mod('rp_facebook'); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" />
                            </a>
                        <?php endif; ?>

                        <?php if( get_theme_mod('rp_linkedin')): ?>
                            <a href="<?php echo get_theme_mod('rp_linkedin'); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png" />
                            </a>
                        <?php endif; ?>

                        <?php if( get_theme_mod('rp_instagram')): ?>
                            <a href="<?php echo get_theme_mod('rp_instagram'); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" />
                            </a>
                        <?php endif; ?>

                        <?php if( get_theme_mod('rp_twitter')): ?>
                            <a href="<?php echo get_theme_mod('rp_twitter'); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" />
                            </a>
                        <?php endif; ?>

                        <?php if( get_theme_mod('rp_github')): ?>
                            <a href="<?php echo get_theme_mod('rp_github'); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" />
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="info_curriculo">
                        <?php if( get_theme_mod('rp_curriculo')): ?>
                            <a href="<?php echo get_theme_mod('rp_curriculo'); ?>" target="_blank">
                                Baixar curriculo
                            </a>
                        <?php endif; ?>
                    </div>

                </div>

            </div>


        </div>
    </div>










<?php get_footer(); ?>