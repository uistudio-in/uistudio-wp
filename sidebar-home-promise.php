<?php
    $args = array (
        'post_type' => 'home_promise_intro',
        'order' => 'ASC',
    );

    $promiseintroquery = new WP_Query( $args );
?>

<?php
    $args = array (
        'post_type' => 'home_promise',
        'order' => 'ASC',
    );

    $promisequery = new WP_Query( $args );
?>

<section class="home-sevices section section-padding">
    <div class="home-sevices-intro text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php if( $promiseintroquery->have_posts() ) : while ( $promiseintroquery->have_posts() ) : $promiseintroquery->the_post(); ?>
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
                <?php if( $promisequery->have_posts() ) : while ( $promisequery->have_posts() ) : $promisequery->the_post(); ?>
                    <div class="col-lg-4">
                        <div class="promise-wrapper">
                            <div class="d-flex justify-content-start">
                                <div class="pe-3">
                                    <i class="<?php the_field( 'promise_icon' ); ?>"></i>
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