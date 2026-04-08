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
        padding-right: 40px;
        border-right: 1px solid #b3b3b3;
    }

    .col-txt-txt-block .col-right {
        flex: 1;
        padding-left: 40px;
        border-left: 1px solid #b3b3b3;
    }

    .col-txt-txt-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
    }

    .col-txt-txt-block .custom-highlight-sub {
        display: inline;
        background-color: #ece318;
        padding: 0 10px;
        font-family: 'Montserrat', sans-serif;
        font-size: 25px;
        box-decoration-break: clone;
        -webkit-box-decoration-break: clone;
    }

    .col-txt-txt-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
    }

    @media (max-width: 900px) {
        .col-txt-txt-block .text-section {
            width: calc(100% - 20px);
            left: 0;
            padding: 0 16px;
        }

        .col-txt-txt-block .flex-container-column-txt {
            display: block;
        }

        .col-txt-txt-block .col-left {
            padding-right: 0;
            padding-bottom: 20px;
            border-right: none;
            border-bottom: 1px solid #b3b3b3;
        }

        .col-txt-txt-block .col-right {
            border-left: none;
            padding-left: 0;
            padding-top: 20px;
        }
    }
</style>

<section class="col-txt-txt-block">
    <div class="text-section">
        <div class="flex-container-column-txt">
            <div class="col-left">
                <h2 class="custom-highlight">
                    <?php echo $data['left_title'] ? esc_html($data['left_title']) : '' ?>
                </h2>
                <br><br>
                <h3 class="custom-highlight-sub">
                    <?php echo $data['left_subtitle'] ? esc_html($data['left_subtitle']) : '' ?>
                </h3>
                <br><br>
                <p>
                    <?php echo $data['left_description'] ? wpautop($data['left_description']) : '' ?>
                </p>
            </div>
            <div class="col-right">
                <h2 class="custom-highlight">
                    <?php echo $data['right_title'] ? esc_html($data['right_title']) : '' ?>
                </h2>
                <br><br>
                <h3 class="custom-highlight-sub">
                    <?php echo $data['right_subtitle'] ? esc_html($data['right_subtitle']) : '' ?>
                </h3>
                <br><br>
                <p>
                    <?php echo $data['right_description'] ? wpautop($data['right_description']) : '' ?>
                </p>
            </div>
        </div>
    </div>
</section>
