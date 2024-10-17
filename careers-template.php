<?php
    // Template Name: Careers Template
    // Template Post Type: page
?>

<?php get_header( ); ?>

<section class="careers-template section-padding">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 order-xl-1 order-2">
                    <div class="careers-content-wrapper">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-1">
                    <div class="careers-img-wrapper">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>

<?php get_footer(); ?>