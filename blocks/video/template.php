<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];
?>

<?php if ($data['embed_url']) : ?>

<style>
    .video-block {
        font-family: 'Montserrat', sans-serif;
        display: flex;
        justify-content: center;
        width: 150%;
        max-width: 150%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin: 40px 0 80px;
        box-sizing: border-box;
    }

    .video-block iframe {
        display: block;
        width: 100%;
        max-width: 100%;
        height: 420px;
        border-radius: 5px;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
        object-fit: cover;
    }

    @media (max-width: 900px) {
        .video-block {
            width: 100%;
            max-width: 100%;
            left: 0;
            transform: none;
            justify-content: center;
            margin: 0 auto 40px;
        }

        .video-block iframe {
            height: min(52vw, 420px);
        }
    }
</style>

<div class="video-block">
    <iframe
        src="<?php echo esc_url($data['embed_url']) ?>"
        frameborder="0"
        allow="autoplay; fullscreen; picture-in-picture"
        allowfullscreen
    ></iframe>
</div>

<?php endif; ?>
