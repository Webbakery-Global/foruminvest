<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

    <section id="homepage_header">
        <div class="row">
            <div class="col-sm-12">
                <div class="header_slider">
                    <?php if (have_rows('slider')) : ?>
                        <?php while (have_rows('slider')) :
                            the_row(); ?>
                            <?= !empty($img = get_sub_field('slide')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'slide_img']) : '' ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12">
                <?php if (have_rows('words')) : ?>
                    <div class="words">
                        <?php while (have_rows('words')) :
                            the_row(); ?>
                            <?php if ($word = get_sub_field('word')) : ?>
                            <p class="word"><?php echo esc_html($word); ?></p>
                        <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-5 col_left">
                    <?php if ($subtitle = get_field('subtitle')) : ?>
                        <p class="subtitle brown"><?php echo esc_html($subtitle); ?></p>
                    <?php endif; ?>
                    <?php if ($title = get_field('title')) : ?>
                        <h2 class="title blue"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if ($content = get_field('content')) : ?>
                        <p class="content"> <?php echo $content; ?></p>
                    <?php endif; ?>

                    <div class="row info_row">
                        <div class="col-4 col-sm-4 col-lg-2-5 info_col">
                            <?php if ($countries = get_field('countries')) : ?>
                                <span class="number" data-count="<?php echo $countries; ?>">0</span>
                                <span class="word"><?php echo __('countries', 'foruminvest'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-2-5 info_col">
                            <?php if ($apartments = get_field('apartments')) : ?>
                                <div class="d-flex justify-content-center">
                                    <span class="number" data-count="<?php echo $apartments; ?>">0</span><span
                                            class="number">+</span>
                                </div>
                                <span class="word"><?php echo __('apartments', 'foruminvest'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-4  col-sm-4 col-lg-2-5 info_col">
                            <?php if ($retail_space = get_field('retail_space')) : ?>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="number" data-count="<?php echo $retail_space; ?>">0</span>
                                    <span class="number">K</span>
                                </div>
                                <span class="word"><?php echo __('retail space', 'foruminvest'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-4  col-sm-4 col-lg-2-5 info_col">
                            <?php if ($management = get_field('management')) : ?>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="number" data-count="<?php echo $management; ?>">0</span>
                                    <span class="number">bn+</span>
                                </div>
                                <span class="word"><?php echo __('management', 'foruminvest'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-4  col-sm-4 col-lg-2-5 info_col">
                            <?php if ($awards = get_field('awards')) : ?>
                                <span class="number" data-count="<?php echo $awards; ?>">0</span>
                                <span class="word"><?php echo __('awards', 'foruminvest'); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="buttons">
                    <?php
                    $url = get_field('button_link');
                    if ($url) : ?>
                        <a class="btn btn_trans_blue"
                           href="<?php echo esc_url($url); ?>"><?php the_field('button_tekst'); ?></a>
                    <?php endif; ?>
                    <?php
                    $url = get_field('button_link_2');
                    if ($url) : ?>
                        <a class="btn btn_trans_blue"
                           href="<?php echo esc_url($url); ?>"><?php the_field('button_tekst_2'); ?></a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 offset-lg-1 col_right">
                    <?php
                    $intro_img = get_field('intro_img');
                    if ($intro_img) : ?>
                        <img src="<?php echo esc_url($intro_img['url']); ?>"
                             alt="<?php echo esc_attr($intro_img['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="whatwedo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php if ($w_title = get_field('w_title')) : ?>
                        <h2 class="subtitle brown"><?php echo esc_html($w_title); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if (have_rows('what_we_do')) : ?>
                    <?php while (have_rows('what_we_do')) :
                        the_row(); ?>
                        <div class="col-sm-12 col-lg-4 block">
                            <?= !empty($img = get_sub_field('image')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'img']) : '' ?>
                            <?php
                            if ($titel = get_sub_field('titel')) : ?>
                                <h3 class="title"><?php echo esc_html($titel); ?></h3>
                            <?php
                            endif;
                            if ($content = get_sub_field('content')) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function () {
            document.addEventListener('scroll', function () {
                var top = window.pageYOffset + window.innerHeight,
                    isVisible = top > document.querySelector('#intro').offsetTop;

                if (isVisible) {

                    $('.number').each(function () {
                        var $this = $(this),
                            countTo = $this.attr('data-count');

                        $({countNum: $this.text()}).animate({
                                countNum: countTo
                            },

                            {

                                duration: 4000,
                                easing: 'linear',
                                step: function () {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function () {
                                    $this.text(this.countNum);
                                    //alert('finished');
                                }

                            });


                    });
                }
            });
        });

    </script>

<?php
get_footer();


