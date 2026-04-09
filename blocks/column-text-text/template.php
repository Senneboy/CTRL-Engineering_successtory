<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];
?>

<style>
    .col-txt-txt-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 25px;
        box-sizing: border-box;
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
        -webkit-box-decoration-break: clone;
        margin-left: -5px;
        margin-top: 0;
    }

    .col-txt-txt-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        text-align: justify;
    }

    .col-txt-txt-block .col-text {
        margin: 0 -55px 0 -35px;
        padding: 0 55px 0 35px;
    }

    @media (max-width: 900px) {
        .col-txt-txt-block .text-section {
            width: calc(100% - 20px);
            left: 0;
            padding: 0 16px;
        }

        .col-txt-txt-block .text-section h2 {
            padding-left: 36px;
        }

        .col-txt-txt-block .text-section h2::before {
            width: 26px;
            height: 22px;
        }

        .col-txt-txt-block .flex-container-column-txt {
            display: block;
        }

        .col-txt-txt-block .col-left {
            padding-right: 0;
            padding-bottom: 20px;
            border-bottom: 1px solid #b3b3b3;
        }

        .col-txt-txt-block .col-right {
            padding-left: 0;
            padding-top: 20px;
        }
    }
</style>

<section class="col-txt-txt-block">
    <div class="text-section">
        <div class="flex-container-column-txt">
            <div class="col-left">
                <h2>
                    <?php echo $data['left_title'] ? esc_html($data['left_title']) : '' ?>
                </h2>
                <br><br>
                <h3>
                    <?php echo $data['left_subtitle'] ? esc_html($data['left_subtitle']) : '' ?>
                </h3>
                <br>
                <div class="col-text">
                    <p>
                        <?php echo $data['left_description'] ? wpautop($data['left_description']) : '' ?>
                    </p>
                </div>
            </div>
            <div class="col-right">
                <h2>
                    <?php echo $data['right_title'] ? esc_html($data['right_title']) : '' ?>
                </h2>
                <br><br>
                <h3>
                    <?php echo $data['right_subtitle'] ? esc_html($data['right_subtitle']) : '' ?>
                </h3>
                <br>
                <div class="col-text">
                    <p>
                        <?php echo $data['right_description'] ? wpautop($data['right_description']) : '' ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
