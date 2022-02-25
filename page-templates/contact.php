<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

    <section id="contact_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8 col_left">
                    <?= !empty($img = get_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'image']) : '' ?>
                </div>
                <div class="col-sm-12 col-lg-4 col_right pl-lg-5">
                    <h1 class="title blue"><?php the_title(); ?></h1>

                    <div class="details mb-2">
                        <p class="subtitle brown"><?php the_field('subtitle'); ?></p>
                        <p>
                            <span class="item col-5 px-0"><?php echo __('Adress', 'foruminvest'); ?></span><span class="adres"><?php the_field('adres', 'options'); ?></span>
                        </p>
                        <p>
                            <span class="item col-5 px-0"><?php echo __('E-mail address', 'foruminvest'); ?></span><span><?php the_field('emailadres', 'options'); ?></span>
                        </p>
                        <p>
                            <span class="item col-5 px-0"><?php echo __('Phone number', 'foruminvest'); ?></span><span><?php the_field('telefoonnummer', 'options'); ?></span>
                        </p>
                    </div>

                    <p class="subtitle brown mt-5"><?php the_field('vacature_title'); ?></p>
                    <?php
                    $url = get_field( 'button_link' );
                    if ( $url ) : ?>
                            <a class="btn btn_trans_blue mt-4" href="<?php echo esc_url( $url ); ?>" ><?php the_field('button_tekst'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<section id="contact_content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <p class="subtitle brown"><?php the_field('form_subtitle'); ?></p>
                <p class="title blue"><?php the_field('form_titel'); ?></p>

                <?php
                $form = get_field( 'form' );
                if ( $form ) :
                    $post = $form;
                    setup_postdata( $post );
                    $content = get_the_ID();

                     echo do_shortcode('[wpforms id="' . $content .'"]');

                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();


