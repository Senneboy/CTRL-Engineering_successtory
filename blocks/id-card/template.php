<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];

// Sanitise block_id for use in HTML attributes and CSS selectors.
$block_id = isset($data['block_id'])
    ? preg_replace('/[^a-z0-9_-]/i', '-', $data['block_id'])
    : 'id-card';
?>

<style>
    #<?php echo esc_attr($block_id) ?> {
        font-family: 'Montserrat', sans-serif;
        width: 300px;
        height: auto;
        opacity: 0.93;
        background: #ece318;
        display: flex;
        overflow: hidden;
        transition: width 0.35s ease;
        position: sticky;
        top: 0;
        z-index: 5;
        border-bottom: #dfd51c 6px solid;
        border-right: #dfd51c 4px solid;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    #<?php echo esc_attr($block_id) ?>.id-collapsed {
        width: 55px;
    }

    #<?php echo esc_attr($block_id) ?>.id-collapsed .id-content {
        pointer-events: none;
        opacity: 0;
        transition: opacity 0s 0.35s;
    }

    #<?php echo esc_attr($block_id) ?>.id-collapsed .arrow-icon { display: none; }
    #<?php echo esc_attr($block_id) ?>.id-collapsed .arrow-text { display: block; }

    #<?php echo esc_attr($block_id) ?> .id-content {
        padding: 15px 15px 15px 20px;
        flex: 1;
        opacity: 1;
        transform: translateX(0);
        min-width: 235px;
    }

    #<?php echo esc_attr($block_id) ?> .id-title {
        display: block;
        margin: -15px -15px 0 -20px;
        padding: 15px 20px;
        width: auto;
        background-color: #000;
        color: #ece318;
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        border-right: 3px solid #2c2c2c;
        border-bottom: 3px solid #2c2c2c;
        border-radius: 0;
        position: relative;
        z-index: 2;
    }

    /* Hexagon outline: outer yellow shape */
    #<?php echo esc_attr($block_id) ?> .id-title::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 180px;
        aspect-ratio: 1 / cos(30deg);
        clip-path: polygon(
            25% 40%,
            75% 40%,
            82% 50%,
            75% 60%,
            25% 60%,
            17% 50%
        );
        background: #ece318;
        z-index: -2;
        pointer-events: none;
    }

    /* Hexagon outline: inner black shape (creates the outline effect) */
    #<?php echo esc_attr($block_id) ?> .id-title::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 180px;
        aspect-ratio: 1 / cos(30deg);
        clip-path: polygon(
            25% 42%,
            75% 42%,
            80% 50%,
            75% 58%,
            25% 58%,
            19% 50%
        );
        background: #000;
        z-index: -1;
        pointer-events: none;
    }

    #<?php echo esc_attr($block_id) ?> .id-content p {
        display: block;
        margin: -15px -15px 15px -20px;
        padding: 15px 20px;
        width: calc(100% - 5px);
        color: #202020;
        border: 1px solid #000;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        position: relative;
        top: 15px;
        box-sizing: border-box;
    }

    #<?php echo esc_attr($block_id) ?> .id-content p.first { background-color: #fff89a; border-top: 2px solid #000; }
    #<?php echo esc_attr($block_id) ?> .id-content p.odd   { background-color: #fff89a; }
    #<?php echo esc_attr($block_id) ?> .id-content p.even  { background-color: #fffbc1; }
    #<?php echo esc_attr($block_id) ?> .id-content p.last  { background-color: #fffbc1; border-bottom: 2px solid #000; }

    #<?php echo esc_attr($block_id) ?> .id-content b {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        display: block;
        margin: 0;
        top: 15px;
        position: absolute;
    }

    #<?php echo esc_attr($block_id) ?> .id-content p {
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        margin-bottom: 15px;
        top: 15px;
        position: relative;
    }

    #<?php echo esc_attr($block_id) ?> .toggle-arrow {
        width: 35px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: margin-left 0.35s ease;
        background: #ece318;
        z-index: 10;
        position: relative;
        cursor: pointer;
    }

    #<?php echo esc_attr($block_id) ?> .toggle-arrow:hover { background: rgba(0,0,0,0.1); }

    #<?php echo esc_attr($block_id) ?> .arrow-icon {
        font-family: 'Montserrat', sans-serif;
        font-size: 30px;
        font-weight: 900;
        color: #000;
        transform: none;
        transform-origin: center;
        white-space: nowrap;
    }

    #<?php echo esc_attr($block_id) ?> .arrow-text {
        display: none;
        font-family: 'Montserrat', sans-serif;
        font-size: 19px;
        font-weight: 1000;
        color: #000;
        transform: rotate(90deg);
        transform-origin: center;
        white-space: nowrap;
        letter-spacing: 0.6em;
    }

    @media (max-width: 600px) {
        #<?php echo esc_attr($block_id) ?> {
            width: min(380px, calc(100vw - 8px));
            max-width: calc(100vw - 8px);
        }

        #<?php echo esc_attr($block_id) ?>.id-collapsed { width: 38px; }

        #<?php echo esc_attr($block_id) ?> h3 {
            font-size: 20px;
        }

        #<?php echo esc_attr($block_id) ?> .id-content b {
            font-size: 17px;
        }

        #<?php echo esc_attr($block_id) ?> .id-content p {
            font-size: 16px;
        }

        #<?php echo esc_attr($block_id) ?> .id-content {
            min-width: 0;
            padding: 18px 18px 18px 24px;
        }

        #<?php echo esc_attr($block_id) ?> .toggle-arrow {
            width: 40px;
        }

        #<?php echo esc_attr($block_id) ?> .arrow-icon {
            font-size: 34px;
        }

        #<?php echo esc_attr($block_id) ?> .arrow-text {
            font-size: 20px;
            letter-spacing: 0.45em;
        }
    }
</style>

<div id="<?php echo esc_attr($block_id) ?>">

    <div class="id-content">
        <h3 class="id-title">
            <?php echo esc_html($data['title'] ?? 'ID CARD') ?>
        </h3>

        <p class="first">
            <b>CUSTOMER</b>
            <?php echo esc_html($data['customer'] ?? '') ?>
        </p>
        <p class="even">
            <b>INDUSTRY</b>
            <?php echo esc_html($data['industry'] ?? '') ?>
        </p>
        <p class="odd">
            <b>PRICE RANGE</b>
            <?php echo esc_html($data['price_range'] ?? '') ?>
        </p>
        <p class="even">
            <b>COMPETENCE</b>
            <?php echo esc_html($data['competence'] ?? '') ?>
        </p>
        <p class="odd">
            <b>PROJECT TYPE</b>
            <?php echo esc_html($data['project_type'] ?? '') ?>
        </p>
        <p class="last">
            <b>TIME PERIOD</b>
            <?php echo esc_html($data['time_period'] ?? '') ?>
        </p>
    </div>

    <div class="toggle-arrow" id="<?php echo esc_attr($block_id) ?>-toggle">
        <span class="arrow-icon">&#8249;</span>
        <span class="arrow-text">ID CARD</span>
    </div>

</div>

<script>
(function () {
    var cardId = <?php echo wp_json_encode($block_id) ?>;
    var card   = document.getElementById(cardId);
    var btn    = document.getElementById(cardId + '-toggle');
    if (!card || !btn) { return; }

    function syncHeight() {
        var title  = card.querySelector('.id-title');
        var items  = Array.from(card.querySelectorAll('.id-content > p'));
        var titleH = title ? title.offsetHeight : 0;
        var itemsH = items.reduce(function (sum, el) { return sum + el.offsetHeight; }, 0);
        var contentPadding = 15 + 20; /* top/bottom + left/right from CSS */
        card.style.height = (titleH + itemsH + contentPadding + (-36)) + 'px';
    }

    function syncState() {
        if (window.innerWidth < 900)  { card.classList.add('id-collapsed'); }
        if (window.innerWidth >= 1380){ card.classList.remove('id-collapsed'); }
        syncHeight();
    }

    btn.addEventListener('click', function () {
        card.classList.toggle('id-collapsed');
        syncHeight();
    });

    window.addEventListener('load',   syncState);
    window.addEventListener('resize', syncState);
    syncState();
}());
</script>
