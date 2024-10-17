<?php
    $args = array (
        'post_type' => 'woocommerce_sliders',
        'order' => 'ASC',
    );

    $sliderquery = new WP_Query( $args );
?>

<div class="home-banner html-banner">
    <?php if( $sliderquery->have_posts() ) : while ( $sliderquery->have_posts() ) : $sliderquery->the_post(); ?>
    <div class="inner-banner-wrapper section-primary-color"></div>
    <div class="home-banner-content inner-banner text-start section-text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="pb-4 text-shadow"><?php the_title(); ?></h1>
                    <div class="font-18 pb-5"><?php the_content(); ?></div>
                    <a href="<?php the_field( 'woocommerce_link' ); ?>" class="btn-common btn--secondary-outline">
                        <span class="text-green">Get Started</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</div>