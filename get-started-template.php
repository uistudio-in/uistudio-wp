<?php
    // Template Name: Get Started Template
    // Template Post Type: page
?>

<?php get_header( ); ?>

<section class="get-started-template section-padding">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="get-started-content-wrapper">
                        <?php if( get_field('get_started_heading') ): ?>
                            <h1><?php the_field( 'get_started_heading' ); ?></h1>
                        <?php endif; ?>
                        <?php if( get_field('get_started_content') ): ?>
                            <?php the_field( 'get_started_content' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="get-started-form-wrapper">
                        <?php the_content(); ?>
                        <?php if( get_field('form_terms') ): ?>
                            <?php the_field( 'form_terms' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>

<?php get_footer(); ?>