<?php
/**
 * Template Name: Awards
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="title blue mb-5"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row portfolio_row">

                <?php
                $count = 0;
                $args = array(
                    'post_type' => 'awards',  // Sort post type
                    'order' => 'DESC',
                    'posts_per_page' => -1
                );

                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                $loop->the_post(); ?>
                <div class="col-sm-12 col-lg-4 portfolio_item mb-5">
                    <a href="<?php the_permalink(); ?>">
                        <div class="image_box award">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'project_thumbnail')) ?>
                            <?= !empty($img = get_field('hover_afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'project_thumbnail_hover']) : '' ?>
                            <?= !empty($img = get_field('logo')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'logo']) : '' ?>
                            <?php if (get_field('under_construction') === true) : ?>
                                <span class="label"><?php echo __('Under construction', 'foruminvest'); ?></span>
                            <?php endif; ?>
                            <?php if (get_field('under_development') === true) : ?>
                                <span class="label"><?php echo __('Under development', 'foruminvest'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="box">
                            <div class="info">
                                <p class="name"><?php the_title(); ?></p>
                                <p class="city"><?php the_field('prijs'); ?></p>
                            </div>
                            <svg class="arrow d-none" width="49px" height="49px" viewBox="0 0 49 49" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Forum-invest-project" transform="translate(-452.000000, -623.000000)">
                                        <g id="Group-5" transform="translate(120.000000, 304.000000)">
                                            <g id="Group-4" transform="translate(333.000000, 320.000000)">
                                                <rect id="Rectangle" stroke="#CD8F80" x="0" y="0" width="47"
                                                      height="47"></rect>
                                                <polygon id="arrow" fill="#CD8F80" fill-rule="nonzero"
                                                         points="16 35 31 25.7192982 31 21.3255361 16 12 16 16.0350877 28.5045704 23.5224172 16 30.9649123"></polygon>

                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                    </a>
                </div>
            </div>



            <?php $count++; ?>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>

            <div class="col-sm-12" id="cta">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-8 offset-lg-2">
                            <div class="content d-flex align-items-center justify-content-center">
                                <h3><?php the_field('titel', 'options'); ?></h3>
                                <?php
                                $url = get_field( 'button_link' );
                                if ( $url ) : ?>
                                    <a href="<?php echo esc_url( $url ); ?>" ><?php the_field('button_tekst'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

<?php
get_footer();


