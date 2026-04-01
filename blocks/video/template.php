<?php
/**
 * Video Block
 *
 * Renders a full-width responsive iframe embed (e.g. Vimeo, YouTube) with an
 * optional title and description.  The block is skipped entirely when no embed
 * URL is provided.
 *
 * Expected $args['block']['data'] keys:
 *   embed_url   (string) – iframe src URL (required – block hidden when empty)
 *   title       (string) – optional heading shown above the video
 *   description (string) – optional body text shown below the video (HTML allowed)
 *
 * @var array $args
 */
$block       = $args['block'];
$data        = $block['data'] ?? [];

$embed_url   = $data['embed_url']   ?? '';
$title       = $data['title']       ?? '';
$description = $data['description'] ?? '';

// Nothing to render without a URL.
if ( empty( $embed_url ) ) {
    return;
}
?>

<div style="
    font-family: 'Montserrat', sans-serif;
    width: 150%;
    max-width: 150%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    margin: 40px 0 80px;
    box-sizing: border-box;
">
    <?php if ( $title ) : ?>
        <h2 style="
            display: inline;
            background-color: #ece318;
            padding: 0 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
            margin-bottom: 16px;
        "><?php echo esc_html( $title ); ?></h2>
    <?php endif; ?>

    <iframe
        src="<?php echo esc_url( $embed_url ); ?>"
        frameborder="0"
        allow="autoplay; fullscreen; picture-in-picture"
        allowfullscreen
        style="
            display: block;
            width: 100%;
            max-width: 100%;
            height: 420px;
            border-radius: 5px;
        "
    ></iframe>

    <?php if ( $description ) : ?>
        <div style="
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            margin-top: 16px;
        ">
            <?php echo wpautop( wp_kses_post( $description ) ); ?>
        </div>
    <?php endif; ?>
</div>
