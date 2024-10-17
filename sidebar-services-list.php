<?php
    $args = array (
        'post_type' => 'home_services',
        'order' => 'ASC',
    );

    $servicesquery = new WP_Query( $args );
?>

<section class="home-sevices section section-padding">
    <div class="home-services-list">
        <div class="container">
            <div class="row">
                <?php if( $servicesquery->have_posts() ) : while ( $servicesquery->have_posts() ) : $servicesquery->the_post(); ?>
                    <div class="col-lg-6">
                        <div class="service-wrapper text-center">
                            <i class="<?php the_field( 'services_icon' ); ?>"></i>
                            <h4 class="py-4"><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                            <div class="mt-4">
                                <a href="<?php the_field( 'services_link' ); ?>" class="btn-common btn--primary font-16 m-auto">
                                    <span class="text-green">More Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>