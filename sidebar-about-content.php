<section class="section section-padding about-content-wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <h1><small><?php the_title(); ?></small> UiStudio</h1>
                    <?php the_content(); ?>
                </div>
                <div class="col-xl-5 text-center d-xl-block d-none">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>