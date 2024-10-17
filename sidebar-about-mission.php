<section class="section section-padding about-mission-wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 text-center">
                    <?php if( get_field('about_mission_icon') ): ?>
                        <i class="<?php the_field( 'about_mission_icon' ); ?>"></i>
                    <?php endif; ?>
                    <?php if( get_field('about_mission_title') ): ?>
                        <h3><?php the_field( 'about_mission_title' ); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('about_mission_desc') ): ?>
                        <?php the_field( 'about_mission_desc' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xl-6 text-center">
                    <?php if( get_field('about_vision_icon') ): ?>
                        <i class="<?php the_field( 'about_vision_icon' ); ?>"></i>
                    <?php endif; ?>
                    <?php if( get_field('about_vision_title') ): ?>
                        <h3><?php the_field( 'about_vision_title' ); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('about_vision_desc') ): ?>
                        <?php the_field( 'about_vision_desc' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>