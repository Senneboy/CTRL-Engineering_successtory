<?php
/**
 * Video Block
 *
 * ACF Fields:
 *   - title     (text)   — optional heading above the video
 *   - video_url (url)    — iframe-compatible embed URL (e.g. Vimeo player URL)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    .video-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 30px;
        box-sizing: border-box;
    }

    .video-block .text-section > * {
        width: 100%;
        margin-left: 0;
        box-sizing: border-box;
    }

    .video-block .text-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
    }

    .video-block .text-section h2::before {
        content: "";
        position: absolute;
        width: 34px;
        height: 30px;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 58 50'%3E%3Cpolygon points='14,1 44,1 57,25 44,49 14,49 1,25' fill='none' stroke='%23ece318' stroke-width='6' stroke-linejoin='round'/%3E%3C/svg%3E");
    }

    .video-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
    }

    .video-block .video-section {
        display: flex;
        justify-content: center;
        width: 150%;
        max-width: 150%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin: 40px 0 80px;
    }

    .video-block .video-section iframe {
        display: block;
        width: 100%;
        max-width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
        border: none;
    }

    @media (max-width: 900px) {
        .video-block .text-section {
            width: calc(100% - 20px);
            max-width: calc(100vw - 20px);
            left: 0;
            margin-left: auto;
            margin-right: 0;
            padding: 0 16px;
        }

        .video-block .text-section > * {
            width: 100%;
            max-width: 100%;
            margin-left: 0;
        }

        .video-block .text-section h2 {
            padding-left: 36px;
        }

        .video-block .text-section h2::before {
            width: 26px;
            height: 22px;
            left: 0;
        }

        .video-block .video-section {
            width: 100%;
            max-width: 100%;
            left: 0;
            transform: none;
            margin: 0 auto 40px;
            justify-content: center;
        }

        .video-block .video-section iframe {
            height: min(52vw, 420px);
        }
    }

    @media (min-width: 1500px) {
        .video-block .text-section {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
            left: -130px;
            padding: 0 20px;
        }

        .video-block .video-section {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
        }
    }
</style>

<section class="video-block">
    <?php if ( ! empty( $data['title'] ) ) : ?>
        <div class="text-section">
            <h2><span class="custom-highlight"><b><?php echo esc_html( $data['title'] ); ?></b></span></h2>
        </div>
    <?php endif; ?>

    <?php if ( ! empty( $data['video_url'] ) ) : ?>
        <div class="video-section">
            <iframe
                src="<?php echo esc_url( $data['video_url'] ); ?>"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    <?php endif; ?>
</section>
