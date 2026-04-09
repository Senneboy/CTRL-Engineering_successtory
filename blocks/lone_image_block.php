<?php
/**
 * Lone Image Block
 *
 * ACF Fields:
 *   - image   (image URL) — ACF return format: Image URL
 *   - caption (text)      — optional caption below the image
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    /* --- Floating card (no padding — image fills edge to edge) --- */
    .lone-image-block .content-block {
        background: #ffffff;
        padding: 0;
        box-sizing: border-box;
        border-radius: 5px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22);
        overflow: hidden;
    }

    .lone-image-block .content-block img {
        display: block;
        width: 100%;
        height: 420px;
        object-fit: cover;
    }

    .lone-image-block .content-block figcaption {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        color: #555;
        text-align: center;
        padding: 8px 16px 16px;
    }

    /* --- Responsive --- */
    @media (max-width: 900px) {
        .lone-image-block .content-block img {
            height: min(52vw, 420px);
        }
    }
</style>

<div class="lone-image-block">
    <?php if ( ! empty( $data['image'] ) ) : ?>
        <figure class="content-block">
            <img
                src="<?php echo esc_url( $data['image'] ); ?>"
                alt="<?php echo ! empty( $data['caption'] ) ? esc_attr( $data['caption'] ) : ''; ?>"
            >
            <?php if ( ! empty( $data['caption'] ) ) : ?>
                <figcaption><?php echo esc_html( $data['caption'] ); ?></figcaption>
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</div>
