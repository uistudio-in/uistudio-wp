<div class="home-banner">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="home-banner-wrapper">
            <div class="home-banner-img">
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
            </div>
            <div class="banner-overlay"></div>
        </div>
        <div class="home-banner-content">
            <h1 class="pb-4 text-shadow"><?php the_content(); ?></h1>
            <a href="<?php the_field( 'slider_link' ); ?>" class="btn-common btn--primary m-auto">
                <span class="text-green">Get Started</span>
            </a>
        </div>
    <?php endwhile; ?>
</div>