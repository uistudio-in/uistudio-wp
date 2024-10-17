<?php
    // Template Name: Contact Template
    // Template Post Type: page
?>

<?php get_header( ); ?>

<section class="contact-template">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php if( get_field('contact_map_link') ): ?>
            <section class="contact-map-wrapper position-relative">
                <iframe class="contact-map" loading="lazy" src="<?php the_field( 'contact_map_link' ); ?>" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <section class="contact-map-content-wrapper">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-5">
                        <div class="contact-form-wrapper">
                            <?php if( get_field('contact_form_title') ): ?>
                                <h3><?php the_field( 'contact_form_title' ); ?></h3>
                            <?php endif; ?>
                            
                            <?php the_content(); ?>

                            <?php if( get_field('form_terms') ): ?>
                                <?php the_field( 'form_terms' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <?php if( get_field('contact_text') ): ?>
                            <?php the_field( 'contact_text' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="visit-office-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="visit-office-title-wrapper text-center">
                            <?php if( get_field('contact_office_title') ): ?>
                                <h2><?php the_field( 'contact_office_title' ); ?></h2>
                            <?php endif; ?>
                            <?php if( get_field('contact_office_desc') ): ?>
                                <?php the_field( 'contact_office_desc' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="visit-office-details-wrapper">
                            <?php if( get_field('contact_address_icon') ): ?>
                                <i class="<?php the_field( 'contact_address_icon' ); ?>"></i>
                            <?php endif; ?>
                            <?php if( get_field('contact_address_title') ): ?>
                                <div class="visit-office-details-title"><?php the_field( 'contact_address_title' ); ?></div>
                            <?php endif; ?>
                            <?php if( get_field('contact_address') ): ?>
                                <?php the_field( 'contact_address' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visit-office-details-wrapper">
                            <?php if( get_field('contact_icon') ): ?>
                                <i class="<?php the_field( 'contact_icon' ); ?>"></i>
                            <?php endif; ?>
                            <?php if( get_field('contact_title') ): ?>
                                <div class="visit-office-details-title"><?php the_field( 'contact_title' ); ?></div>
                            <?php endif; ?>
                            <?php if( get_field('contact_phone_title') ): ?>
                                <p><?php the_field( 'contact_phone_title' ); ?> <a href="tel:<?php the_field( 'contact_phone_no_link' ); ?>"><?php the_field( 'contact_phone_number' ); ?></a></p>
                            <?php endif; ?>
                            <?php if( get_field('contact_wa_title') ): ?>
                                <p><?php the_field( 'contact_wa_title' ); ?> <a href="https://wa.me/<?php the_field( 'contact_wa_no_link' ); ?>" target="_blank"><?php the_field( 'contact_wa_text' ); ?></a></p>
                            <?php endif; ?>
                            <?php if( get_field('contact_email_title') ): ?>
                                <p><?php the_field( 'contact_email_title' ); ?> <a href="mailto:<?php the_field( 'contact_email_link' ); ?>"><?php the_field( 'contact_email' ); ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</section>

<?php get_sidebar( 'home-contact' ); ?>

<?php get_footer(); ?>