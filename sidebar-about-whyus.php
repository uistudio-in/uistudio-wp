<section class="section about-whyus-wrapper position-relative">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
            $current_post_id = $post->ID;

            $about_whyus_img = get_post_meta( $current_post_id, 'about_why_image', true );
            $about_whyus_img_url = wp_get_attachment_url( $about_whyus_img );
        ?>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-5 order-xl-1 order-2">
                    <div class="about-whyus-content-wrapper">
                        <?php if( get_field('about_why_title') ): ?>
                            <h2><?php the_field( 'about_why_title' ); ?></h2>
                        <?php endif; ?>

                        <?php if( get_field('about_why_desc') ): ?>
                            <?php the_field( 'about_why_desc' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-1 order-xl-2">
                <div class="col-xl-6 order-xl-3 order-1">
                    <div class="about-whyus-img-wrapper position-static">
                        <img src="<?php echo $about_whyus_img_url; ?>" class="img-fluid position-absolute" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>