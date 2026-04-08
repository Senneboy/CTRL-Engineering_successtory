<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];
?>

<style>
    .col-txt-img-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 25px;
        box-sizing: border-box;
    }

    .col-txt-img-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
        font-size: 28px;
    }

    .col-txt-img-block .flex-container-img {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        padding-bottom: 100px;
        margin-top: 16px;
    }

    .col-txt-img-block .textFlex {
        flex: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
    }

    .col-txt-img-block .imageFlex {
        flex: 1.4;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .col-txt-img-block .imageFlex img {
        max-width: 100%;
        width: 100%;
        height: auto;
        display: block;
        box-shadow: 5px 5px 10px #353535;
    }

    @media (max-width: 900px) {
        .col-txt-img-block .text-section {
            width: calc(100% - 20px);
            left: 0;
            padding: 0 16px;
        }

        .col-txt-img-block .flex-container-img {
            display: block;
        }

        .col-txt-img-block .textFlex,
        .col-txt-img-block .imageFlex {
            width: 100%;
            max-width: 100%;
        }
    }
</style>

<section class="col-txt-img-block">
    <div class="text-section">
        <h2 class="custom-highlight">
            <?php echo $data['paragraph_title'] ? esc_html($data['paragraph_title']) : '' ?>
        </h2>
        <div class="flex-container-img">
            <div class="textFlex">
                <p>
                    <?php echo $data['paragraph_description'] ? wpautop($data['paragraph_description']) : '' ?>
                </p>
            </div>
            <div class="imageFlex">
                <img
                    src="<?php echo $data['image_url'] ? esc_url($data['image_url']) : '' ?>"
                    alt="<?php echo $data['image_alt'] ? esc_attr($data['image_alt']) : '' ?>"
                >
            </div>
        </div>
    </div>
</section>
