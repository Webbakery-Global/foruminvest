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
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'image')) ?>
                </div>
                <div class="col-sm-12 col-lg-6 details">
                    <h1 class="title blue"><?php the_title(); ?></h1>
                    <p class="title blue"><?php the_field('stad_project'); ?></p>

                    <p class="project_title"><?php echo __('Project details', 'foruminvest'); ?></p>

                    <div class="info">
                        <?php if ($bvo = get_field('bvo')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('GLA', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $bvo ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($apartments = get_field('apartments')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('Apartements', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $apartments ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($apartments_project = get_field('grondgebonden_woningen')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('Residences', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $apartments_project ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($rooms = get_field('hotelkamers')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('Hotel rooms', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $rooms ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($parking = get_field('parkeerplaatsen')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('Parking spaces', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $parking ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($architecten = get_field('architecten')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('Architects', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $architecten ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($country = get_field('locatie')) : ?>
                            <p class="detail mt-3">
                                <span class="detail_title"><?php echo __('Location', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $country ?></span>
                            </p>
                        <?php endif; ?>
                        <?php if ($status = get_field('status')) : ?>
                            <p class="detail">
                                <span class="detail_title"><?php echo __('Status', 'foruminvest'); ?>:</span><span
                                        class="value"><?= $status ?></span>
                            </p>
                        <?php endif; ?>
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
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                                </div>
                            <?php endforeach; ?>

                        <?php endif; ?>
                    </div>


                    <?php if ($project_galerij = get_field('project_galerij')) : ?>
                        <div class="arrows">
                            <div class="prev_slide">
                                <svg width="15px" height="23px" viewBox="0 0 15 23" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Forum-invest-project-detail"
                                           transform="translate(-117.000000, -1455.000000)"
                                           fill="#CD8F80" fill-rule="nonzero">
                                            <polygon id="&gt;"
                                                     transform="translate(124.500000, 1466.500000) scale(-1, 1) translate(-124.500000, -1466.500000) "
                                                     points="117 1478 132 1468.7193 132 1464.32554 117 1455 117 1459.03509 129.50457 1466.52242 117 1473.96491"></polygon>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="next_slide">
                                <svg width="15px" height="23px" viewBox="0 0 15 23" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Forum-invest-project-detail"
                                           transform="translate(-159.000000, -1455.000000)"
                                           fill="#CD8F80" fill-rule="nonzero">
                                            <polygon id="&gt;"
                                                     points="159 1478 174 1468.7193 174 1464.32554 159 1455 159 1459.03509 171.50457 1466.52242 159 1473.96491"></polygon>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>


    <section id="project_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="content">
                        <p class="subtitle brown text-uppercase"><?php echo __('Description', 'foruminvest'); ?></p>
                        <?php the_field('omschrijving'); ?>
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