    </div><!-- #content -->
        </div><!-- #page -->

        <footer class="ui-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <?php dynamic_sidebar ( 'footer-quick-link' ); ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php dynamic_sidebar ( 'footer-services-link' ); ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php dynamic_sidebar ( 'footer-getintouch-link' ); ?>
                        <section class="contact-details footer-links">
                            <ul>
                                <li><a class="nav-link" href="tel:+918778704248"><i class="bi bi-phone"></i> +91 87787 04248</a></li>
                                <li><a class="nav-link" href="mailto:info@uistudio.in"><i class="bi bi-envelope-open"></i> info@uistudio.in</a></li>
                                <li><a class="nav-link" href="skype:live:.cid.ce56a89c79eeef95?chat"><i class="bi bi-skype"></i> uistudio</a></li>
                            </ul>
                        </section>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright">
                            © Copyright <?php echo date('Y'); ?> uistudio.in
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>