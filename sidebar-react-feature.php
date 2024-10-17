<?php
    $args = array (
        'post_type' => 'react_features_intro',
        'order' => 'ASC',
    );

    $featureintroquery = new WP_Query( $args );
?>

<?php
    $args = array (
        'post_type' => 'react_features',
        'order' => 'ASC',
    );

    $featurequery = new WP_Query( $args );
?>

<section class="home-sevices section-secondary-color section-padding section-text-white">
    <div class="home-sevices-intro text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php if( $featureintroquery->have_posts() ) : while ( $featureintroquery->have_posts() ) : $featureintroquery->the_post(); ?>
                        <h2 class="pb-3"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="home-services-list">
        <div class="container">
            <div class="row">
                <?php if( $featurequery->have_posts() ) : while ( $featurequery->have_posts() ) : $featurequery->the_post(); ?>
                    <div class="col-lg-4">
                        <div class="promise-wrapper">
                            <div class="d-flex justify-content-start">
                                <div class="pe-3">
                                    <i class="<?php the_field( 'feature_icon' ); ?>"></i>
                                </div>
                                <div>
                                    <h4 class="pb-2"><?php the_title(); ?></h4>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>