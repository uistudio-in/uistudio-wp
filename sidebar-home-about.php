<?php
    $args = array (
        'post_type' => 'home_about',
        'order' => 'ASC',
    );

    $aboutquery = new WP_Query( $args );
?>

<section class="home-about section-primary-color section-padding section-text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if( $aboutquery->have_posts() ) : while ( $aboutquery->have_posts() ) : $aboutquery->the_post(); ?>
                    <h2 class="text-center text-shadow-2 pb-4"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <div class="mt-4 text-center">
                        <a href="<?php the_field( 'about_link' ); ?>" class="btn-common btn--secondary-outline font-16 m-auto">
                            <span class="text-green">More Details</span>
                        </a>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>