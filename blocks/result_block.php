<?php
/**
 * Paragraph Block (used for "Result" and "Long story short")
 *
 * ACF Fields:
 *   - paragraph_title       (text)
 *   - paragraph_description (textarea / wysiwyg)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    /* --- Floating card --- */
    .result-block .content-block {
        background: #ffffff;
        padding: 85px 95px;
        box-sizing: border-box;
        border-radius: 5px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22);
    }

    /* --- Heading --- */
    .result-block .content-block h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
        margin-top: 0;
    }

    .result-block .content-block h2::before {
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

    /* --- Body text --- */
    .result-block .content-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: justify;
        margin-bottom: 0;
    }

    /* --- Responsive --- */
    @media (max-width: 900px) {
        .result-block .content-block {
            padding: 44px 24px;
        }

        .result-block .content-block h2 {
            padding-left: 36px;
        }

        .result-block .content-block h2::before {
            width: 26px;
            height: 22px;
        }
    }

    @media (max-width: 600px) {
        .result-block .content-block {
            padding: 34px 18px;
        }
    }
</style>

<section class="result-block">
    <div class="content-block">
        <?php if ( ! empty( $data['paragraph_title'] ) ) : ?>
            <h2><span class="custom-highlight"><b><?php echo esc_html( $data['paragraph_title'] ); ?></b></span></h2>
        <?php endif; ?>

        <?php if ( ! empty( $data['paragraph_description'] ) ) : ?>
            <p><?php echo wp_kses_post( $data['paragraph_description'] ); ?></p>
        <?php endif; ?>
    </div>
</section>
