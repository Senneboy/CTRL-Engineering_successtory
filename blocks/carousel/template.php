<?php
/**
 * @var array $args
 */
$block = $args['block'];
$data = $block['data'] ?? [];

// Sanitise block_id for use in HTML attributes and CSS selectors.
$block_id = isset($data['block_id'])
    ? preg_replace('/[^a-z0-9_-]/i', '-', $data['block_id'])
    : 'carousel';
?>

<style>
    .carousel-block {
        position: relative;
        width: 100vw;
        left: 50%;
        transform: translateX(-50%);
        margin: 40px 0 50px;
    }

    .carousel-block .wrapper {
        position: relative;
        width: 100%;
        max-width: 690px;
        margin: 0 auto;
    }

    .carousel-block .window {
        width: 100%;
        max-width: 690px;
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: center;
    }

    .carousel-block .track {
        display: flex;
        transition: transform 0.5s ease;
    }

    .carousel-block .item {
        flex: 0 0 100%;
        padding: 0 1px;
        box-sizing: border-box;
    }

    .carousel-block .item img {
        width: 90%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        display: block;
    }

    .carousel-block .arrow-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        pointer-events: none;
    }

    .carousel-block .control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: auto;
        cursor: pointer;
    }

    .carousel-block #<?php echo esc_attr($block_id) ?>-prev { left: -80px; }
    .carousel-block #<?php echo esc_attr($block_id) ?>-next { right: -80px; }

    .carousel-block .hexagon {
        fill: transparent;
        stroke: #ece318;
        stroke-width: 3;
        stroke-linejoin: round;
    }

    .carousel-block .control:hover .hexagon {
        fill: #ece318;
    }

    .carousel-block .arrow-text {
        fill: #000;
        font-size: 28px;
        font-weight: bold;
        text-anchor: middle;
        dominant-baseline: middle;
        font-family: Arial;
        pointer-events: none;
    }

    @media (max-width: 800px) {
        .carousel-block #<?php echo esc_attr($block_id) ?>-prev { left: 10px; }
        .carousel-block #<?php echo esc_attr($block_id) ?>-next { right: 10px; }

        .carousel-block .wrapper,
        .carousel-block .window { max-width: 100%; }

        .carousel-block .item {
            display: flex;
            justify-content: center;
        }

        .carousel-block .item img {
            width: 80vw;
            max-height: 40vh;
            height: auto;
            max-width: 100%;
        }

        .carousel-block .hexagon { fill: #ece118d0; }
    }
</style>

<div class="carousel-block">
    <div class="wrapper">
        <div class="window">
            <div id="<?php echo esc_attr($block_id) ?>-track" class="track">
                <?php foreach (($data['images'] ?? []) as $image_url) : ?>
                    <div class="item">
                        <img src="<?php echo esc_url($image_url) ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="arrow-layer">
            <div id="<?php echo esc_attr($block_id) ?>-prev" class="control">
                <svg width="70" height="70" viewBox="0 0 58 50">
                    <g transform="rotate(90 29 25)">
                        <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                    </g>
                    <text x="29" y="27" class="arrow-text">&#8249;</text>
                </svg>
            </div>
            <div id="<?php echo esc_attr($block_id) ?>-next" class="control">
                <svg width="70" height="70" viewBox="0 0 58 50">
                    <g transform="rotate(90 29 25)">
                        <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                    </g>
                    <text x="29" y="27" class="arrow-text">&#8250;</text>
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var blockId  = <?php echo wp_json_encode($block_id) ?>;
    var autoplay = <?php echo !empty($data['autoplay']) ? 'true' : 'false' ?>;

    var track = document.getElementById(blockId + '-track');
    if (!track) { return; }

    var total = track.children.length;
    var index = 0;

    function update() {
        track.style.transform = 'translateX(' + (-index * 100) + '%)';
    }

    function goNext() {
        index = (index + 1) % total;
        update();
    }

    function goPrev() {
        index = (index - 1 + total) % total;
        update();
    }

    document.getElementById(blockId + '-prev').addEventListener('click', goPrev);
    document.getElementById(blockId + '-next').addEventListener('click', goNext);

    if (autoplay) {
        setInterval(goNext, 5000);
    }

    update();
}());
</script>
