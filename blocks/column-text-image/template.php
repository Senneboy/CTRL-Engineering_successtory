<?php
/**
 * Column – Text & Image Block
 *
 * Two-column layout: text on the left, image on the right.
 *
 * Expected $args['block']['data'] keys:
 *   title      (string) – section heading (highlighted)
 *   text       (string) – body text (HTML allowed)
 *   image      (string) – image URL
 *   image_alt  (string) – image alt text (default '')
 *
 * @var array $args
 */
$block     = $args['block'];
$data      = $block['data'] ?? [];

$title     = $data['title']     ?? '';
$text      = $data['text']      ?? '';
$image     = $data['image']     ?? '';
$image_alt = $data['image_alt'] ?? '';
?>

<section style="
    font-family: 'Montserrat', sans-serif;
    width: 150%;
    position: relative;
    left: -160px;
    padding: 0 25px;
    box-sizing: border-box;
">
    <?php if ( $title ) : ?>
        <h2 style="
            display: inline;
            background-color: #ece318;
            padding: 0 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
        "><?php echo esc_html( $title ); ?></h2>
    <?php endif; ?>

    <div style="
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        padding-bottom: 100px;
        margin-top: 16px;
    ">
        <!-- Text column -->
        <div style="flex: 1;">
            <div style="
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
            ">
                <?php echo wpautop( wp_kses_post( $text ) ); ?>
            </div>
        </div>

        <!-- Image column -->
        <?php if ( $image ) : ?>
            <div style="
                flex: 1.4;
                display: flex;
                justify-content: center;
                align-items: center;
            ">
                <img
                    src="<?php echo esc_url( $image ); ?>"
                    alt="<?php echo esc_attr( $image_alt ); ?>"
                    style="
                        max-width: 100%;
                        width: 100%;
                        height: auto;
                        display: block;
                        box-shadow: 5px 5px 10px #353535;
                    "
                >
            </div>
        <?php endif; ?>
    </div>
</section>
