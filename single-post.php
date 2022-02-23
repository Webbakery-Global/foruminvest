<?php
/**
 * Single Portfolio
 */
get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

<section id="single_news_header" style="background-image: url(<?= $featured_img_url ?>)">

</section>

<section id="vacature_content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-10">
                <p class="date"><?php echo get_the_date('d-m-Y'); ?></p>
                <h1 class="title mb-5"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>