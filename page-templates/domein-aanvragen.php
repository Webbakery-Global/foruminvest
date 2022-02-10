<?php
/**
 * Template Name: Domeinen Aanvragen
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$domain = $_POST['wpf16_5'];
?>

    <script>
        $(document).ready(function() {
            $("#wpforms-16-field_3").val("<?= $domain ?>").change();
        });
    </script>

    <section id="first-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-2 d-flex align-items-center justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <a class="back_button" href="javascript:history.back()"><i class="fas fa-chevron-left"></i> Terug </a>
                </div>
                <div class="col-sm-12 col-lg-8 d-flex align-items-center justify-content-center">
                    <h3 class="mb-0 text-uppercase"><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </section>

<section id="domain_request" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <?php if ( $content = get_field( 'content' ) ) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
                <div class="info black mb-3">
                    <?php if ($telefoonnummer = get_field('telefoonnummer', 'options')) : ?>
                        <a href="tel:<?php echo esc_html($telefoonnummer); ?>"><span
                                    class="letter">T</span><?php echo esc_html($telefoonnummer); ?></a>
                    <?php endif; ?>
                    <?php if ($email = get_field('email', 'options')) : ?>
                        <a href="mailto:<?php echo $email; ?>"><span class="letter">E</span><?php echo $email; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <?php if ( $formulier = get_field( 'formulier' ) ) : ?>
                    <?php echo $formulier; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


</section>
<?php
get_footer();


