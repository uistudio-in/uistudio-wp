<?php get_header( '404' ) ?>
    <!-- Page error -->
    <section class="page-error-wrapper d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="page-error-title">40<span>4</span></div>
                    <div class="page-error-text">Oops! It looks like you're lost.</div>
                    <p>The page you're looking for isn't available. Try to search again or use the go to.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button-primary m-auto">Go Back to Home page</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Page error -->
<?php get_footer( '404' ) ?>