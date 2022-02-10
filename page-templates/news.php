<?php
/**
 * Template Name: News
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="title blue mb-5"><?php the_title(); ?></h1>
                </div>


                <?php
                $args = array(
                    'post_type' => 'post',  // Sort post type
                    'posts_per_page' => -1, // Aantal posts
                    'order' => 'DESC',
                );

                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                    $loop->the_post(); ?>
                    <div class="news_post col-sm-12 px-0 mb-5">
                        <a class="row no-gutters" href="<?php the_permalink(); ?>">
                            <div class="col-sm-12 col-lg-5 col_left">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'thumbnail')) ?>
                            </div>
                            <div class="col-sm-12 col-lg-7 col_right">
                                <div class="content">
                                    <p class="date"><?php echo get_the_date('d-m-Y'); ?></p>
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <p class="content">
                                        <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                                    </p>
                                    <svg class="arrow" width="49px" height="49px" viewBox="0 0 49 49" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Forum-invest-project"
                                               transform="translate(-452.000000, -623.000000)">
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
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

<?php
get_footer();


