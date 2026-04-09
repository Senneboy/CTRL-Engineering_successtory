<?php
/**
 * Result Block
 *
 * ACF Fields:
 *   - title (text) — e.g. "Result"
 *   - content (textarea / wysiwyg)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    .result-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 30px;
        box-sizing: border-box;
    }

    .result-block .text-section > * {
        width: 100%;
        margin-left: 0;
        box-sizing: border-box;
    }

    .result-block .text-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
    }

    .result-block .text-section h2::before {
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

    .result-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
    }

    .result-block .text-section p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: justify;
    }

    @media (max-width: 900px) {
        .result-block .text-section {
            width: calc(100% - 20px);
            max-width: calc(100vw - 20px);
            left: 0;
            margin-left: auto;
            margin-right: 0;
            padding: 0 16px;
        }

        .result-block .text-section > * {
            width: 100%;
            max-width: 100%;
            margin-left: 0;
        }

        .result-block .text-section h2 {
            padding-left: 36px;
        }

        .result-block .text-section h2::before {
            width: 26px;
            height: 22px;
            left: 0;
        }
    }

    @media (min-width: 1500px) {
        .result-block .text-section {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
            left: -130px;
            padding: 0 20px;
        }
    }
</style>

<section class="result-block">
    <div class="text-section">
        <?php if ( ! empty( $data['title'] ) ) : ?>
            <h2><span class="custom-highlight"><b><?php echo esc_html( $data['title'] ); ?></b></span></h2>
        <?php endif; ?>

        <?php if ( ! empty( $data['content'] ) ) : ?>
            <p><?php echo wp_kses_post( $data['content'] ); ?></p>
        <?php endif; ?>
    </div>
</section>
