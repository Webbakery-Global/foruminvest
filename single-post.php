<?php
/**
 * Single Portfolio
 */
get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

<section id="single_news_header" style="background-image: url(<?= $featured_img_url ?>)">

</section>

<section id="news_intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="white_shadow_box">
                    <p class="date"><?php echo get_the_date('d-m-Y'); ?></p>
                    <h1 class="title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news_content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <?= !empty($img = get_field( 'afbeelding_top' )) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'img_top']) : '' ?>
                <?= !empty($img = get_field( 'afbeelding_bottom' )) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'img_bottom']) : '' ?>
            </div>
            <div class="col-sm-12 col-lg-6">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>