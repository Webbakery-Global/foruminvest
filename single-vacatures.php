<?php
/**
 * Single Portfolio
 */
get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$id = get_the_ID();
?>

    <script>
        $(document).ready(function() {
            $("#wpforms-4788-field_1").val("<?= $id ?>").change();
        });
    </script>

    <section id="single_vacature_header" style="background-image: url(<?= $featured_img_url ?>)">

    </section>

    <section id="vacature_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-10">
                    <p class="date"><?php echo get_the_date('d-m-Y'); ?></p>
                    <h1 class="title mb-5"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <a href="#form" class="btn btn_trans_blue solliciteren"><?php the_field( 'vacature_button_tekst', 'options' ) ?></a>

                    <div id="form" class="vacature_form">
                        <?php
                        $form = get_field( 'form', 'options' );
                        if ( $form ) :
                            $post = $form;
                            setup_postdata( $post );
                            $content = get_the_ID(); ?>

                            <?php echo do_shortcode('[wpforms id="' . $content .'"]');?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    $(".solliciteren").click(function () {
        $(".vacature_form").toggleClass("active");
    });
</script>


<?php get_footer(); ?>