<?php

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>


    <div class="load-container">
        <div class="loading-screen"></div>
    </div>
    <main data-barba="container">
    <section id="header" class="single_portfolio">
        <div class="row">
            <div class="col-sm-10 col-lg-8 col_left"
                 style="background-image:url(<?= $featured_img_url ?>)">

            </div>
            <div class="col-sm-12 col-lg-4 col_right d-flex align-items-end ">
                <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="single_portfolio">
        <div class="row">
            <div class="col-sm-12 col-lg-8 col_left">

                <div class="row portfolio_images">
                    <?php if (have_rows('afbeeldingen')) : ?>
                        <?php while (have_rows('afbeeldingen')) :
                            the_row();
                            $afbeelding = get_sub_field( 'afbeelding' );
                        ?>

                            <?php if (get_sub_field('grootte') === true) : ?>
                            <div class="col-sm-12 portfolio_image full_image">
                                <a class="image-popup-vertical-fit" href="<?php echo esc_url( $afbeelding['url'] ); ?>">
                                <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                                </a>
                            </div>

                        <?php else: ?>
                            <div class="col-sm-12 col-lg-6 portfolio_image half_image">
                                <a class="image-popup-vertical-fit" href="<?php echo esc_url( $afbeelding['url'] ); ?>">
                                <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => '']) : '' ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col_right"></div>
        </div>
    </section>
    </main>

<script>
    $(document).ready(function(){
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery:{
                enabled:true
            },

            zoom: {
                enabled: true,

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                opener: function(openerElement) {

                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });

    });
</script>


<?php
get_footer();
