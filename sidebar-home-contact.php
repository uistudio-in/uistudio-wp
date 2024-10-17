<?php
    $args = array (
        'post_type' => 'home_contact',
        'order' => 'ASC',
    );

    $getstartedquery = new WP_Query( $args );
?>

<section class="home-contact section-secondary-color section-padding section-text-white">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <?php if( $getstartedquery->have_posts() ) : while ( $getstartedquery->have_posts() ) : $getstartedquery->the_post(); ?>
                    <h2 class="text-center text-shadow-2 pb-4"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <div class="mt-4 text-center">
                        <a href="<?php the_field( 'link_contact' ); ?>" class="btn-common btn--primary-outline font-16 m-auto">
                            <span class="text-green">Get Started</span>
                        </a>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>