<?php
/**
 * Single Portfolio
 */
get_header();
?>

<section id="project_header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'image')) ?>
            </div>
            <div class="col-sm-12 col-lg-6 details">
                <h1 class="title blue"><?php the_title(); ?></h1>
                <p class="title blue"><?php the_field('stad_project'); ?></p>

                <p class="project_title"><?php echo __('Project details', 'foruminvest'); ?></p>

                <div class="info">
                    <p class="detail">
                        <span class="detail_title"><?php echo __('Vierkante meters', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('vierkante_meters_project'); ?></span>
                    </p>
                    <p class="detail">
                        <span class="detail_title"><?php echo __('Appartementen', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('appartementen_project'); ?></span>
                    </p>
                    <p class="detail">
                        <span class="detail_title"><?php echo __('Woningen', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('woningen_project'); ?></span>
                    </p>
                    <p class="detail">
                        <span class="detail_title"><?php echo __('Parkeren', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('parkeren_project'); ?></span>
                    </p>
                    <p class="detail">
                        <span class="detail_title"><?php echo __('Architecten', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('architecten_proeject'); ?></span>
                    </p>
                    <p class="detail mt-3">
                        <span class="detail_title"><?php echo __('Land', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('land_project'); ?></span>
                    </p>
                    <p class="detail">
                        <span class="detail_title"><?php echo __('Status', 'foruminvest'); ?>:</span><span
                                class="value"><?php the_field('status_project'); ?></span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="project_slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="project_slider">
                    <?php
                    $project_galerij = get_field('project_galerij');
                    if ($project_galerij) : ?>

                        <?php foreach ($project_galerij as $image) : ?>
                            <div class="slide">
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>

                <div class="arrows">
                    <div class="prev_slide">
                        <svg width="15px" height="23px" viewBox="0 0 15 23" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Forum-invest-project-detail" transform="translate(-117.000000, -1455.000000)"
                                   fill="#CD8F80" fill-rule="nonzero">
                                    <polygon id="&gt;"
                                             transform="translate(124.500000, 1466.500000) scale(-1, 1) translate(-124.500000, -1466.500000) "
                                             points="117 1478 132 1468.7193 132 1464.32554 117 1455 117 1459.03509 129.50457 1466.52242 117 1473.96491"></polygon>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="next_slide">
                        <svg width="15px" height="23px" viewBox="0 0 15 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Forum-invest-project-detail" transform="translate(-159.000000, -1455.000000)" fill="#CD8F80" fill-rule="nonzero">
                                    <polygon id="&gt;" points="159 1478 174 1468.7193 174 1464.32554 159 1455 159 1459.03509 171.50457 1466.52242 159 1473.96491"></polygon>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="project_content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="content">
                    <p class="subtitle brown text-uppercase"><?php echo __('Omschrijving', 'foruminvest'); ?></p>
                   <?php the_content(); ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <?= !empty($img = get_field('afbeelding_onder_de_slider_1')) ? wp_get_attachment_image($img['id'], 'large', false, ['class' => 'top image']) : '' ?>
                <?= !empty($img = get_field('afbeelding_onder_de_slider_2')) ? wp_get_attachment_image($img['id'], 'large', false, ['class' => 'bottom image']) : '' ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>