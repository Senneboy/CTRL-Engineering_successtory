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
        width: 150%;
        max-width: 150%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin: 40px 0 80px;
        box-sizing: border-box;
    }

    .video-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
        font-size: 28px;
        margin-bottom: 16px;
    }

    .video-block .video-section {
        display: flex;
        justify-content: center;
        margin-top: 16px;
    }

    .video-block .video-section iframe {
        display: block;
        width: 100%;
        max-width: 100%;
        height: 420px;
        border-radius: 5px;
    }

    .video-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        margin-top: 16px;
    }

    @media (max-width: 900px) {
        .video-block {
            width: 100%;
            max-width: 100%;
            left: 0;
            transform: none;
            margin: 0 auto 40px;
        }

        .video-block .video-section iframe {
            height: min(52vw, 420px);
        }
    }
</style>

<div class="video-block">
    <h2 class="custom-highlight">
        <?php echo $data['paragraph_title'] ? esc_html($data['paragraph_title']) : '' ?>
    </h2>
    <div class="video-section">
        <iframe
            src="<?php echo esc_url($data['embed_url']) ?>"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen
        ></iframe>
    </div>
    <p>
        <?php echo $data['paragraph_description'] ? wpautop($data['paragraph_description']) : '' ?>
    </p>
</div>

<?php endif; ?>
