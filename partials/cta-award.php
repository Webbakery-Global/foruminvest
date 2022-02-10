<div class="col-sm-12" id="cta">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-2">
                <div class="content d-flex align-items-center justify-content-center">
                    <h3><?php the_field('titel'); ?></h3>
                    <?php
                    $urls = get_field( 'button_link' );
                    if ( $urls ) : ?>
                        <?php foreach( $urls as $url ) : ?>
                            <a href="<?php echo esc_url( $url ); ?>" ><?php the_field('button_tekst'); ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
