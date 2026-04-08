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
        padding: 0 25px;
        box-sizing: border-box;
    }

    .result-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
        font-size: 28px;
    }

    .result-block p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        margin-top: 16px;
    }

    @media (max-width: 900px) {
        .result-block .text-section {
            width: calc(100% - 20px);
            left: 0;
            padding: 0 16px;
        }
    }
</style>

<section class="result-block">
    <div class="text-section">
        <h2 class="custom-highlight">
            <b>
                <?php echo $data['paragraph_title'] ? esc_html($data['paragraph_title']) : '' ?>
            </b>
        </h2>
        <p>
            <?php echo $data['paragraph_description'] ? wpautop($data['paragraph_description']) : '' ?>
        </p>
    </div>
</section>
