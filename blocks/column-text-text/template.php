<?php
/**
 * Column – Text & Text Block
 *
 * Two-column layout with a text column on both sides, separated by a vertical
 * divider.  Collapses to a single stacked column on narrow viewports.
 *
 * Expected $args['block']['data'] keys:
 *   left_title     (string) – left heading (highlighted, optional)
 *   left_subtitle  (string) – left sub-heading (highlighted, optional)
 *   left_text      (string) – left body text (HTML allowed)
 *   right_title    (string) – right heading (highlighted, optional)
 *   right_subtitle (string) – right sub-heading (highlighted, optional)
 *   right_text     (string) – right body text (HTML allowed)
 *
 * @var array $args
 */
$block          = $args['block'];
$data           = $block['data'] ?? [];

$left_title     = $data['left_title']     ?? '';
$left_subtitle  = $data['left_subtitle']  ?? '';
$left_text      = $data['left_text']      ?? '';
$right_title    = $data['right_title']    ?? '';
$right_subtitle = $data['right_subtitle'] ?? '';
$right_text     = $data['right_text']     ?? '';
?>

<section style="
    font-family: 'Montserrat', sans-serif;
    width: 150%;
    position: relative;
    left: -160px;
    padding: 0 25px;
    box-sizing: border-box;
">
    <div style="
        display: flex;
        align-items: stretch;
        gap: 0;
    ">
        <!-- Left column -->
        <div style="
            flex: 1;
            padding-right: 40px;
            border-right: 1px solid #b3b3b3;
        ">
            <?php if ( $left_title ) : ?>
                <h2 style="
                    display: inline;
                    background-color: #ece318;
                    padding: 0 15px;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 28px;
                "><?php echo esc_html( $left_title ); ?></h2>
                <br><br>
            <?php endif; ?>

            <?php if ( $left_subtitle ) : ?>
                <h3 style="
                    display: inline;
                    background-color: #ece318;
                    padding: 0 10px;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 25px;
                    box-decoration-break: clone;
                    -webkit-box-decoration-break: clone;
                "><?php echo esc_html( $left_subtitle ); ?></h3>
                <br><br>
            <?php endif; ?>

            <div style="
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
            ">
                <?php echo wpautop( wp_kses_post( $left_text ) ); ?>
            </div>
        </div>

        <!-- Right column -->
        <div style="
            flex: 1;
            padding-left: 40px;
            border-left: 1px solid #b3b3b3;
        ">
            <?php if ( $right_title ) : ?>
                <h2 style="
                    display: inline;
                    background-color: #ece318;
                    padding: 0 15px;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 28px;
                "><?php echo esc_html( $right_title ); ?></h2>
                <br><br>
            <?php endif; ?>

            <?php if ( $right_subtitle ) : ?>
                <h3 style="
                    display: inline;
                    background-color: #ece318;
                    padding: 0 10px;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 25px;
                    box-decoration-break: clone;
                    -webkit-box-decoration-break: clone;
                "><?php echo esc_html( $right_subtitle ); ?></h3>
                <br><br>
            <?php endif; ?>

            <div style="
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
            ">
                <?php echo wpautop( wp_kses_post( $right_text ) ); ?>
            </div>
        </div>
    </div>
</section>
