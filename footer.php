<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webtheme
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4 logo_col mt-5 mt-lg-0">
                <svg id="forum_footer_logo" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 386.37 43.45"
                     xml:space="preserve">
                    <g id="Layer_1">
                        <g>
                            <path class="st0" d="M49.86,41.44c-11.56,0-19.45-9.27-19.45-19.58c0-10.31,7.88-19.64,19.45-19.64c11.5,0,19.25,9.2,19.25,19.58
                        C69.11,31.92,61.43,41.44,49.86,41.44z M49.86,8.14c-6.9,0-11.89,5.78-11.89,13.66c0,7.89,4.99,13.74,11.89,13.74
                        c6.9,0,11.7-6.05,11.7-13.74C61.56,14.24,56.76,8.14,49.86,8.14z"/>
                            <path class="st0" d="M94.77,40.66c-3.94-5.59-6.24-9.13-9.72-15.25h-2.83v15.25h-6.9V3.2c3.75-0.26,7.49-0.52,11.23-0.52
                        c7.88,0,14.19,3.22,14.19,11.3c0,5.06-3.35,9.13-7.95,10.51c3.35,5.72,6.04,9.86,10.91,16.17H94.77z M85.63,8.73l-3.42,0.07v10.84
                        h3.48c5.91,0,7.56-2.17,7.56-5.85C93.25,10.43,90.89,8.59,85.63,8.73z"/>
                            <path class="st0" d="M123.74,41.31c-7.75,0-15.04-4.47-15.04-12.68V3.01h6.9v24.05c0,6.71,4.73,8.35,8.34,8.35
                        c4.34,0,8.87-1.71,8.87-8.41V3.01h6.9v24.25C139.71,37.04,133.01,41.31,123.74,41.31z"/>
                            <path class="st0" d="M183.73,40.66l-1.77-27.93L168.1,39.51l-11.63-26.65l-2.1,27.79h-6.57l2.82-37.65h7.75
                        c3.94,8.61,7.09,14.67,10.51,23.01c3.88-8.41,7.49-14.67,11.57-23.01h6.96l2.89,37.65H183.73z"/>
                        </g>
                        <g>
                            <polygon class="st0" points="2.35,32.06 2.35,40.6 9.34,40.6 9.34,25.06 		"/>
                            <polygon class="st0" points="9.57,24.82 22.92,24.83 22.92,18.83 15.56,18.83 		"/>
                            <polygon class="st0" points="2.35,3.52 2.35,9.5 23.67,9.5 29.7,3.51 		"/>
                        </g>
                        <path class="st1" d="M8.12,20.54c0,1.88-1.52,3.4-3.4,3.4c-1.88,0-3.4-1.53-3.4-3.4c0-1.88,1.52-3.4,3.4-3.4
                    C6.6,17.13,8.12,18.66,8.12,20.54z"/>
                        <g>
                            <path class="st2" d="M199.76,41.8V1.98h4.73V41.8H199.76z"/>
                            <path class="st2"
                                  d="M243.07,41.8L220,8.51V41.8h-4.45V1.98h5.35l23.21,33.43V1.91h4.45v39.9H243.07z"/>
                            <path class="st2"
                                  d="M271.26,42.18l-17.61-40.2h5l12.72,30.01l11.96-30.01h4.66L271.26,42.18z"/>
                            <path class="st2"
                                  d="M293.71,41.8V1.98h22.73v4.1h-18v13.41h15.71v4.1h-15.71V37.7h19.32v4.1H293.71z"/>
                            <path class="st2" d="M336.03,42.63c-4.45,0-7.65-0.63-10.77-2.08l0.7-4.8c3.13,1.88,5.77,2.78,9.8,2.78c4.1,0,7.58-2.78,7.58-6.67
                        c0-3.96-3.89-5.49-7.58-7.71c-4.93-2.99-10.36-5.7-10.36-11.82c0-6.19,4.52-11.05,11.96-11.05c5.21,0,7.51,0.63,10.7,1.95
                        l-0.35,4.8c-3.4-2.08-6.12-2.64-10.08-2.64c-4.52,0-6.81,3.41-6.81,6.53c0,4.24,4.03,5.84,7.85,8.13
                        c4.87,2.92,9.94,5.49,9.94,11.26C348.61,38.81,342.15,42.63,336.03,42.63z"/>
                            <path class="st2" d="M370.51,6.01V41.8h-4.73V6.01h-13v-4.1h30.72v4.1H370.51z"/>
                        </g>
                    </g>
                    <g id="Layer_2">
                    </g>
            </svg>

                <p class="white mt-5 mb-0"><?php echo date("Y"); ?> © Foruminvest | All Rights reserved</p>
            </div>
            <div class="col-sm-12 col-lg-4 mt-5 mt-lg-0">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'container_class' => '',
                        'container_id' => 'footer_menu',
                        'menu_class' => '',
                        'fallback_cb' => '',
                        'menu_id' => '',
                        'depth' => 3,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>

            </div>
            <div class="col-sm-12 col-lg-4 information mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="icon_box ">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:<?php the_field('telefoonnummer', 'options'); ?>">
                                <span><?php the_field('telefoonnummer', 'options'); ?></span>
                            </a>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="icon_box">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:<?php the_field('emailadres', 'options'); ?>">
                                <span><?php the_field('emailadres', 'options'); ?></span>
                            </a>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 mt-4">
                        <div class="icon_box">
                            <i class="fa-solid fa-location-dot"></i>
                            <span><?php the_field('adres', 'options'); ?></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                        <?php if ($linkedin = get_field('linkedin', 'options')) : ?>
                            <div class="icon_box ">
                                <a href="<?php echo $linkedin ?>" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<?php wp_footer(); ?>
</div>
</body>

</html>

