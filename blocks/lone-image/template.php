<?php
/**
 * Lone Image Block
 *
 * A single full-width responsive image with an optional caption.
 *
 * Expected $args['block']['data'] keys:
 *   image   (string) – image URL (required)
 *   alt     (string) – image alt text (default '')
 *   caption (string) – optional caption text shown below the image
 *
 * @var array $args
 */
$block   = $args['block'];
$data    = $block['data'] ?? [];

$image   = $data['image']   ?? '';
$alt     = $data['alt']     ?? '';
$caption = $data['caption'] ?? '';

if ( empty( $image ) ) {
    return;
}
?>

<div style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 150%;
    max-width: 150%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    margin-bottom: 40px;
    box-sizing: border-box;
">
    <img
        src="<?php echo esc_url( $image ); ?>"
        alt="<?php echo esc_attr( $alt ); ?>"
        style="
            display: block;
            width: 100%;
            max-width: 100%;
            height: 420px;
            object-fit: cover;
            border-radius: 5px;
        "
    >

    <?php if ( $caption ) : ?>
        <p style="
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: #555;
            margin-top: 8px;
            text-align: center;
        "><?php echo esc_html( $caption ); ?></p>
    <?php endif; ?>
</div>
