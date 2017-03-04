    </main>
    <footer>
        <a class="footer-logo" href="/">Chic</a>
        <nav class="footer-navs">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container'      => '',
                'menu_class'     => 'footer-navs-ul',
            ) ); ?>
        </nav>
        <div class="footer-social-media">
            <i class="fa social-media fa-facebook-square"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter-square"  style="font-size:30px"></i>
        </div>
        <p>&copy; CHIC RESTAURANT</p>
        <p><a href="https://eufracia.me">Make with <span>♥</span> by Eufracia</a></p>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>

