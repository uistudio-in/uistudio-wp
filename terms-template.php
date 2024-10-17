<?php
    // Template Name: Terms Template
    // Template Post Type: page
?>

<?php get_header( ); ?>

<section class="terms-template section-padding">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>

<?php get_footer(); ?>