<?php
/**
 * Template Name: About us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

    <section id="subpage_header">
        <?= !empty($img = get_field('header_afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'header_img']) : '' ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col_left">
                    <div class="white_shadow_box">
                        <?php if ($subtitle = get_field('subtitle')) : ?>
                            <p class="subtitle brown"><?php echo esc_html($subtitle); ?></p>
                        <?php endif; ?>
                        <?php if ($title = get_field('title')) : ?>
                            <h1 class="title blue"><?php echo esc_html($title); ?></h1>
                        <?php endif; ?>
                        <?php if ($content = get_field('content')) : ?>
                            <p class="gray"><?php echo $content; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 text-left text-lg-right col_right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fimg.png" alt="letter"
                         class="letter">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <?= !empty($img = get_field('image_2')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>

                </div>
                <div class="col-sm-12 col-lg-6 d-flex align-items-center">
                    <div class="content w-100">
                        <?php if ($accordion_title = get_field('accordion_title')) : ?>
                            <h3 class="subtitle brown mb-4"><?php echo esc_html($accordion_title); ?></h3>
                        <?php endif; ?>

                        <div class="accordion w-100">
                            <div class="js-accordion-body">
                                <?php if (have_rows('accordion')) : ?>
                                    <?php while (have_rows('accordion')) :
                                        the_row(); ?>
                                        <div class="js-accordion-item accordion__item">
                                            <div class="accordionButton accordion-header js-accordion-header accordion__caption"><?php the_sub_field('titel'); ?> </div>
                                            <div class="accordionContent accordion-body__contents accordion__content">
                                                <p>
                                                    <?php if ($omschrijving = get_sub_field('omschrijving')) : ?>
                                                        <?php echo $omschrijving; ?>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="second">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col_left">
                    <div class="gray_box">
                        <?php if ($s_subtitle = get_field('s_subtitle')) : ?>
                            <p class="subtitle brown"><?php echo esc_html($s_subtitle); ?></p>
                        <?php endif; ?>
                        <?php if ($s_title = get_field('s_title')) : ?>
                            <h2 class="title blue"><?php echo esc_html($s_title); ?></h2>
                        <?php endif; ?>
                        <?php if ($s_content = get_field('s_content')) : ?>
                            <?php echo $s_content; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6 col_right">
                    <?= !empty($img = get_field('s_image')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="team_slider">
                    <?php
                    $team = get_field('teamleden');
                    if ($team) : ?>
                        <?php foreach ($team as $teamlid) : ?>
                            <div class="team_slide">
                                <img src="<?php echo esc_url($teamlid['sizes']['large']); ?>"
                                     alt="<?php echo esc_attr($teamlid['alt']); ?>"/>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();


