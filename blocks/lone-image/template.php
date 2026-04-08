<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];
?>

<?php if ($data['image_url']) : ?>

<style>
    .lone-image-block {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 150%;
        max-width: 150%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin-bottom: 40px;
        box-sizing: border-box;
    }

    .lone-image-block img {
        display: block;
        width: 100%;
        max-width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 5px;
    }

    .lone-image-block figcaption {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        color: #555;
        margin-top: 8px;
        text-align: center;
    }

    @media (max-width: 900px) {
        .lone-image-block {
            width: 100%;
            max-width: 100%;
            left: 0;
            transform: none;
            margin: 0 auto 40px;
        }

        .lone-image-block img {
            height: min(52vw, 420px);
        }
    }
</style>

<figure class="lone-image-block">
    <img
        src="<?php echo esc_url($data['image_url']) ?>"
        alt="<?php echo $data['image_alt'] ? esc_attr($data['image_alt']) : '' ?>"
    >
    <?php if ($data['caption']) : ?>
        <figcaption>
            <?php echo esc_html($data['caption']) ?>
        </figcaption>
    <?php endif; ?>
</figure>

<?php endif; ?>
