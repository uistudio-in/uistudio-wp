<?php
    $args = array (
        'post_type' => 'home_services_intro',
        'order' => 'ASC',
    );

    $serviceintroquery = new WP_Query( $args );
?>

<?php
    $args = array (
        'post_type' => 'home_services',
        'order' => 'ASC',
    );

    $servicesquery = new WP_Query( $args );
?>

<section class="home-sevices section section-padding">
    <div class="home-sevices-intro text-center">
        <div class="container">
            <div data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-once="true">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php if( $serviceintroquery->have_posts() ) : while ( $serviceintroquery->have_posts() ) : $serviceintroquery->the_post(); ?>
                            <h2 class="pb-4"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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