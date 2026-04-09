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
    .lone-image-block .image-figure {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 150%;
        max-width: 150%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin: 0;
        padding: 0;
    }

    .lone-image-block .image-figure img {
        display: block;
        width: 100%;
        max-width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
    }

    .lone-image-block .image-figure figcaption {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        color: #555;
        text-align: center;
        margin-top: 8px;
    }

    @media (max-width: 900px) {
        .lone-image-block .image-figure {
            width: 100%;
            max-width: 100%;
            left: 0;
            transform: none;
            margin: 0 auto;
        }

        .lone-image-block .image-figure img {
            height: min(52vw, 420px);
        }
    }

    @media (min-width: 1500px) {
        .lone-image-block .image-figure {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
        }
    }
</style>

<div class="lone-image-block">
    <?php if ( ! empty( $data['image'] ) ) : ?>
        <figure class="image-figure">
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
