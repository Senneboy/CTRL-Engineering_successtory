<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];
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

    .result-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        margin-top: 16px;
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

<style>
    /* --- CONTENT BLOCK CARD --- */
    .result-block {
        background: #fff;
        margin-bottom: 80px;
        padding: 85px 95px;
        box-sizing: border-box;
        overflow: visible;
        border-radius: 5px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22);
    }

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

    .result-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        margin-top: 16px;
        text-align: justify;
    }

    @media (max-width: 900px) {
        .result-block {
            margin-bottom: 30px;
            padding: 44px 24px;
        }

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

    @media (max-width: 600px) {
        .result-block {
            padding: 34px 18px;
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
        <h2>
            <b>
                <?php echo $data['paragraph_title'] ? esc_html($data['paragraph_title']) : '' ?>
            </b>
        </h2>
        <p>
            <?php echo $data['paragraph_description'] ? wpautop($data['paragraph_description']) : '' ?>
        </p>
    </div>
</section>
