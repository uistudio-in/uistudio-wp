<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="ui-header inner-pages">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-fluid uistudio-logo">
                </a>
                <div class="burger-menu not-active" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <?php
                    $args = [
                        // Location pickablein customizer
                        'theme_location' => 'main-menu',

                        // Assign a default menu to location
                        'menu'       => 'Main menu',
                        
                        // Main wrapper around the ul of posts
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'  =>  'navbarSupportedContent',
                        
                        // Wrapper for menu items - defaults to ul
                        'items_wrap'    =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'navbar-nav ms-auto',
                        'menu_id'         => 'uistudioMenu',
                        'add_li_class'  => 'nav-item',

                        // Add text before link text (outside a tag)
                        'before'    =>  '',
                        'after'     =>  '',

                        // Add text to link text (inside a tag)
                        'link_before'   =>  '',
                        'link_after'    =>  '',

                        // Dept of child nav items to show
                        'depth'     =>  0,

                        // Callback function if menu is not available
                        'fallback_cb'   =>  'wp_page_menu'
                    ];
                    
                    wp_nav_menu ( $args );
                ?>
                
                <!-- Mobile menu -->
                <div class="offcanvas offcanvas-end mobile-menu-notification d-xl-none" tabindex="-1" id="offcanvasRight">
                    <div class="container">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-fluid uistudio-logo-mobile">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="list-unstyled mobile-menu-list">
                                <li><a href="/">Home</a></li>
                                <li>
                                    <div class="accordion accordion-flush mobile-menu-accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Services</button>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul class="list-unstyled mobile-submenu-list">
                                                        <li><a href="/front-end-development/">HTML / CSS Development</a></li>
                                                        <li><a href="/react-development/">React Development</a></li>
                                                        <li><a href="/wordpress-development/">WordPress Development</a></li>
                                                        <li><a href="/woocommerce-development/">WooCommerce Development</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/about/">About</a></li>
                                <li><a href="/get-started/">Get Started</a></li>
                                <li><a href="/contact/">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu -->

            </div>
        </nav>
    </header>

    <div id="page" class="body-content">
        <div id="content" class="site-content">