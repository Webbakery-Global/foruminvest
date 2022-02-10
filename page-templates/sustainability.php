<?php
/**
 * Template Name: Sustainability
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f-img-green.png" alt="letter"
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
                <div class="col-sm-12 col-lg-6 col_right d-flex align-items-center">
                    <div class="content w-100">
                        <?php if ($accordion_title = get_field('accordion_title')) : ?>
                            <h3 class="subtitle brown mb-4"><?php echo esc_html($accordion_title); ?></h3>
                        <?php endif; ?>
                        <div class="content">
                            <?php if ($content_2 = get_field('content_2')) : ?>
                                <?php echo $content_2; ?>
                            <?php endif; ?>
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
                    <?= !empty($img = get_field('s_image')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'image']) : '' ?>
                    <div class="logos text-right">
                        <?php
                        $logos = get_field('logos');
                        if ($logos) : ?>
                            <?php foreach ($logos as $image) : ?>

                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>


                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();


