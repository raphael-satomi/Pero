<?php get_header(); ?>

    <div class="main_content container-pai">
        <div class="container rp_corprincipal">
            <div class="left_side">
                <?= get_theme_mod('rp_fundoImage') ?>
                <?= get_theme_mod('rp_curriculo') ?>
                
                <?php if( get_theme_mod('rp_fundoImage')): ?>
                    <img class="imagem_fundo" src="<?php echo get_theme_mod('rp_fundoImage'); ?>" alt=""/>
                <?php endif; ?>
            </div>
            <div class="right_side">
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
                            <a href="<?= wp_get_attachment_url( get_theme_mod('rp_curriculo') ) ?>" target="_blank">
                                Baixar curriculo
                            </a>
                        <?php endif; ?>
                    </div>

                </div>

            </div>


        </div>
    </div>

    <section class="section1 container-pai" id="#sobre">
        <div class="container">
            <h1><?= get_theme_mod('rp_titulo_section1')? get_theme_mod('rp_titulo_section1') : 'Sobre' ?></h1>
            <p><?= get_theme_mod('rp_descricao_section1')? get_theme_mod('rp_descricao_section1') : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'?></p>
        </div>
    </section>








<?php get_footer(); ?>