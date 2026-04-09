<?php
/**
 * Column (Text & Text) Block
 *
 * ACF Fields (left column):
 *   - left_title    (text)
 *   - left_subtitle (text)
 *   - left_text     (textarea / wysiwyg)
 *
 * ACF Fields (right column):
 *   - right_title    (text)
 *   - right_subtitle (text)
 *   - right_text     (textarea / wysiwyg)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    .col-txt-txt-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 30px;
        box-sizing: border-box;
    }

    .col-txt-txt-block .text-section > * {
        width: 100%;
        margin-left: 0;
        box-sizing: border-box;
    }

    .col-txt-txt-block .text-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
    }

    .col-txt-txt-block .text-section h2::before {
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

    .col-txt-txt-block .text-section h3 {
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

    .col-txt-txt-block .flex-container-column-txt {
        display: flex;
        align-items: stretch;
        gap: 0;
    }

    .col-txt-txt-block .col-left {
        flex: 1;
        padding-right: 8px;
    }

    .col-txt-txt-block .col-right {
        flex: 1;
        padding-left: 8px;
        border-left: 1px solid #b3b3b3;
    }

    .col-txt-txt-block .col-left p,
    .col-txt-txt-block .col-right p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: justify;
    }

    @media (max-width: 900px) {
        .col-txt-txt-block .text-section {
            width: calc(100% - 20px);
            max-width: calc(100vw - 20px);
            left: 0;
            margin-left: auto;
            margin-right: 0;
            padding: 0 16px;
        }

        .col-txt-txt-block .text-section > * {
            width: 100%;
            max-width: 100%;
            margin-left: 0;
        }

        .col-txt-txt-block .text-section h2 {
            padding-left: 36px;
        }

        .col-txt-txt-block .text-section h2::before {
            width: 26px;
            height: 22px;
            left: 0;
        }

        .col-txt-txt-block .flex-container-column-txt {
            display: block;
            text-align: left;
            width: 100%;
            max-width: 100%;
        }

        .col-txt-txt-block .col-left {
            padding-right: 0;
            border-bottom: 1px solid #b3b3b3;
        }

        .col-txt-txt-block .col-right {
            border-left: none;
            padding-left: 0;
            padding-top: 20px;
        }
    }

    @media (min-width: 1500px) {
        .col-txt-txt-block .text-section {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
            left: -130px;
            padding: 0 20px;
        }
    }
</style>

<section class="col-txt-txt-block">
    <div class="text-section">
        <div class="flex-container-column-txt">
            <div class="col-left">
                <?php if ( ! empty( $data['left_title'] ) ) : ?>
                    <h2>
                        <span class="custom-highlight"><?php echo esc_html( $data['left_title'] ); ?></span>
                    </h2>
                <?php endif; ?>

                <?php if ( ! empty( $data['left_subtitle'] ) ) : ?>
                    <h3>
                        <span class="custom-highlight"><?php echo esc_html( $data['left_subtitle'] ); ?></span>
                    </h3>
                <?php endif; ?>

                <?php if ( ! empty( $data['left_text'] ) ) : ?>
                    <p><?php echo wp_kses_post( $data['left_text'] ); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-right">
                <?php if ( ! empty( $data['right_title'] ) ) : ?>
                    <h2>
                        <span class="custom-highlight"><?php echo esc_html( $data['right_title'] ); ?></span>
                    </h2>
                <?php endif; ?>

                <?php if ( ! empty( $data['right_subtitle'] ) ) : ?>
                    <h3>
                        <span class="custom-highlight"><?php echo esc_html( $data['right_subtitle'] ); ?></span>
                    </h3>
                <?php endif; ?>

                <?php if ( ! empty( $data['right_text'] ) ) : ?>
                    <p><?php echo wp_kses_post( $data['right_text'] ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
