<?php
/**
 * Column (Text & Image) Block
 *
 * ACF Fields:
 *   - title (text)        — heading for this section
 *   - description (textarea / wysiwyg)
 *   - image (image URL)   — ACF return format: Image URL
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    .col-txt-img-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 30px;
        box-sizing: border-box;
    }

    .col-txt-img-block .text-section > * {
        width: 100%;
        margin-left: 0;
        box-sizing: border-box;
    }

    .col-txt-img-block .text-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
    }

    .col-txt-img-block .text-section h2::before {
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

    .col-txt-img-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
    }

    .col-txt-img-block .flex-container-img {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0;
        margin: 0;
        padding: 0;
        margin-top: 16px;
    }

    .col-txt-img-block .textFlex {
        flex: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: justify;
        margin-left: 0;
    }

    .col-txt-img-block .imageFlex {
        flex: 1.4;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 40px;
        margin-right: -40px;
    }

    .col-txt-img-block .imageFlex img {
        max-width: 100%;
        width: 100%;
        height: auto;
        display: block;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 900px) {
        .col-txt-img-block .text-section {
            width: calc(100% - 20px);
            max-width: calc(100vw - 20px);
            left: 0;
            margin-left: auto;
            margin-right: 0;
            padding: 0 16px;
        }

        .col-txt-img-block .text-section > * {
            width: 100%;
            max-width: 100%;
            margin-left: 0;
        }

        .col-txt-img-block .text-section h2 {
            padding-left: 36px;
        }

        .col-txt-img-block .text-section h2::before {
            width: 26px;
            height: 22px;
            left: 0;
        }

        .col-txt-img-block .flex-container-img {
            display: block;
            text-align: left;
            width: 100%;
            max-width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .col-txt-img-block .textFlex,
        .col-txt-img-block .imageFlex {
            width: 100%;
            max-width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
    }

    @media (min-width: 1500px) {
        .col-txt-img-block .text-section {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
            left: -130px;
            padding: 0 20px;
        }
    }
</style>

<section class="col-txt-img-block">
    <div class="text-section">
        <?php if ( ! empty( $data['title'] ) ) : ?>
            <h2><span class="custom-highlight"><?php echo esc_html( $data['title'] ); ?></span></h2>
        <?php endif; ?>

        <div class="flex-container-img">
            <?php if ( ! empty( $data['description'] ) ) : ?>
                <div class="textFlex">
                    <p><?php echo wp_kses_post( $data['description'] ); ?></p>
                </div>
            <?php endif; ?>

            <?php if ( ! empty( $data['image'] ) ) : ?>
                <div class="imageFlex">
                    <img
                        src="<?php echo esc_url( $data['image'] ); ?>"
                        alt="<?php echo esc_attr( $data['title'] ?? '' ); ?>"
                    >
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
