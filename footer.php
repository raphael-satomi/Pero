        <footer class="rp_corprincipal rp_cortexto">
            © 2022 Desenvolvido por <a target="_blank" href="https://github.com/raphael-satomi">Raphael Satomi</a> com Wordpress
        </footer>
        <?php wp_footer(); ?>
        <style>
            .rp_corfundo {
                background-color: <?= get_theme_mod('rp_corfundo') ? get_theme_mod('rp_corfundo') : '#e0e0e1'?>
            }
            .rp_corprincipal {
                background-color: <?= get_theme_mod('rp_corprincipal') ? get_theme_mod('rp_corprincipal') : '#181818'?>
            }
            .rp_cortexto,
            .rp_cortexto a {
                color: <?= get_theme_mod('rp_cortexto') ? get_theme_mod('rp_cortexto') : '#FFF'?>
            }
        </style>
    </body>
</html>