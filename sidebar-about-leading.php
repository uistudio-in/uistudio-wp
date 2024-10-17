<section class="section about-leading-wrapper position-relative">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
            $current_post_id = $post->ID;

            $about_leading_img = get_post_meta( $current_post_id, 'about_leading_image', true );
            $about_leading_img_url = wp_get_attachment_url( $about_leading_img );
        ?>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6">
                    <div class="about-leading-img-wrapper position-static">
                        <img src="<?php echo $about_leading_img_url; ?>" class="img-fluid position-absolute" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                    </div>
                </div>
                <div class="col-xl-1"></div>
                <div class="col-xl-5">
                    <div class="about-leading-content-wrapper">
                        <?php if( get_field('about_leading_title') ): ?>
                            <h2><?php the_field( 'about_leading_title' ); ?></h2>
                        <?php endif; ?>

                        <?php if( get_field('about_leading_content') ): ?>
                            <p><?php the_field( 'about_leading_content' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>