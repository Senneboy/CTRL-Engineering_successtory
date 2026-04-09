<?php
/**
 * Video Block
 *
 * ACF Fields:
 *   - video_url (url) — iframe-compatible embed URL (e.g. Vimeo player URL)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    /* --- Floating card (no padding — video fills edge to edge) --- */
    .video-block .content-block {
        background: #ffffff;
        padding: 0;
        box-sizing: border-box;
        border-radius: 5px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22);
        overflow: hidden;
    }

    /* --- iframe --- */
    .video-block .content-block iframe {
        display: block;
        width: 100%;
        height: 420px;
        border: none;
    }

    /* --- Responsive --- */
    @media (max-width: 900px) {
        .video-block .content-block iframe {
            height: min(52vw, 420px);
        }
    }
</style>

<section class="video-block">
    <?php if ( ! empty( $data['video_url'] ) ) : ?>
        <div class="content-block">
            <iframe
                src="<?php echo esc_url( $data['video_url'] ); ?>"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    <?php endif; ?>
</section>
