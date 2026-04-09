<?php
/**
 * Column (Text & Text) Block — Challenge / Solution
 *
 * ACF Fields (left column):
 *   - column_left_title       (text)
 *   - column_left_subtitle    (text)
 *   - column_left_description (textarea / wysiwyg)
 *
 * ACF Fields (right column):
 *   - column_right_title       (text)
 *   - column_right_subtitle    (text)
 *   - column_right_description (textarea / wysiwyg)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    /* --- Two-card side-by-side row --- */
    .col-txt-txt-block .content-block-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    /* --- Individual column cards --- */
    .col-txt-txt-block .content-block-row .content-block {
        background: #ffffff;
        padding: 60px 40px 40px 40px;
        box-sizing: border-box;
        border-radius: 5px;
    }

    /* Left card: shadow on left, top, bottom edges only */
    .col-txt-txt-block .content-block-row .content-block:first-child {
        box-shadow: -14px 0 28px -14px rgba(0, 0, 0, 0.22),
                    0 -14px 28px -14px rgba(0, 0, 0, 0.22),
                    0  14px 28px -14px rgba(0, 0, 0, 0.22);
    }

    /* Right card: shadow on right, top, bottom edges only */
    .col-txt-txt-block .content-block-row .content-block:last-child {
        box-shadow:  14px 0 28px -14px rgba(0, 0, 0, 0.22),
                    0 -14px 28px -14px rgba(0, 0, 0, 0.22),
                    0  14px 28px -14px rgba(0, 0, 0, 0.22);
    }

    /* --- Heading --- */
    .col-txt-txt-block .content-block h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
        margin-top: 0;
        margin-left: -5px;
    }

    .col-txt-txt-block .content-block h2::before {
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

    /* --- Subtitle --- */
    .col-txt-txt-block .content-block h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 25px;
        padding-left: 10px;
        box-decoration-break: clone;
        margin-top: 0;
    }

    .col-txt-txt-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
    }

    /* --- Body text --- */
    .col-txt-txt-block .col-text {
        margin: 0 -15px 0 -35px;
        padding: 0 15px 0 35px;
    }

    .col-txt-txt-block .col-text p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: justify;
    }

    /* --- Responsive --- */
    @media (max-width: 900px) {
        .col-txt-txt-block .content-block-row {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .col-txt-txt-block .content-block-row .content-block:first-child,
        .col-txt-txt-block .content-block-row .content-block:last-child {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22);
        }

        .col-txt-txt-block .content-block-row .content-block {
            padding: 44px 24px;
        }

        .col-txt-txt-block .content-block h2 {
            padding-left: 36px;
        }

        .col-txt-txt-block .content-block h2::before {
            width: 26px;
            height: 22px;
        }

        .col-txt-txt-block .col-text {
            margin: 0;
            padding: 0;
        }
    }

    @media (max-width: 600px) {
        .col-txt-txt-block .content-block-row .content-block {
            padding: 34px 18px;
        }
    }
</style>

<section class="col-txt-txt-block">
    <div class="content-block-row">

        <!-- Left column -->
        <div class="content-block">
            <?php if ( ! empty( $data['column_left_title'] ) ) : ?>
                <h2>
                    <span class="custom-highlight"><?php echo esc_html( $data['column_left_title'] ); ?></span>
                </h2>
            <?php endif; ?>

            <?php if ( ! empty( $data['column_left_subtitle'] ) ) : ?>
                <h3>
                    <span class="custom-highlight"><?php echo esc_html( $data['column_left_subtitle'] ); ?></span>
                </h3>
                <br>
            <?php endif; ?>

            <?php if ( ! empty( $data['column_left_description'] ) ) : ?>
                <div class="col-text">
                    <p><?php echo wp_kses_post( $data['column_left_description'] ); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Right column -->
        <div class="content-block">
            <?php if ( ! empty( $data['column_right_title'] ) ) : ?>
                <h2>
                    <span class="custom-highlight"><?php echo esc_html( $data['column_right_title'] ); ?></span>
                </h2>
            <?php endif; ?>

            <?php if ( ! empty( $data['column_right_subtitle'] ) ) : ?>
                <h3>
                    <span class="custom-highlight"><?php echo esc_html( $data['column_right_subtitle'] ); ?></span>
                </h3>
                <br>
            <?php endif; ?>

            <?php if ( ! empty( $data['column_right_description'] ) ) : ?>
                <div class="col-text">
                    <p><?php echo wp_kses_post( $data['column_right_description'] ); ?></p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>
