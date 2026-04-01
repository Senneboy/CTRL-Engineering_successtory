<?php
/**
 * Carousel Block
 *
 * Image carousel with previous/next hexagon-button navigation and auto-play.
 *
 * Expected $args['block']['data'] keys:
 *   images        (array)  – list of image URLs, e.g. ['img1.jpg', 'img2.jpg']
 *   autoplay      (bool)   – enable 5-second auto-advance (default true)
 *   block_id      (string) – unique HTML id prefix (default 'carousel')
 *
 * @var array $args
 */
$block    = $args['block'];
$data     = $block['data'] ?? [];

$images   = $data['images']   ?? [];
$autoplay = $data['autoplay'] ?? true;
$block_id = $data['block_id'] ?? 'carousel';

// Sanitise the unique id so it is safe for use inside HTML attributes.
$block_id = preg_replace( '/[^a-z0-9_-]/i', '-', $block_id );
?>

<div class="ctrl-carousel-outer" style="
    position: relative;
    width: 100vw;
    left: 50%;
    transform: translateX(-50%);
    margin: 40px 0 50px;
">
    <div class="ctrl-carousel-wrapper" style="
        position: relative;
        width: 100%;
        max-width: 690px;
        margin: 0 auto;
    ">
        <!-- Viewport -->
        <div class="ctrl-carousel-window" style="
            width: 100%;
            max-width: 690px;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
        ">
            <div id="<?php echo esc_attr( $block_id ); ?>-track" style="
                display: flex;
                transition: transform 0.5s ease;
            ">
                <?php foreach ( $images as $image_url ) : ?>
                    <div style="
                        flex: 0 0 100%;
                        padding: 0 1px;
                        box-sizing: border-box;
                    ">
                        <img
                            src="<?php echo esc_url( $image_url ); ?>"
                            alt=""
                            style="
                                width: 90%;
                                height: 400px;
                                object-fit: cover;
                                border-radius: 5px;
                                display: block;
                            "
                        >
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Arrow layer -->
        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            pointer-events: none;
        ">
            <!-- Previous -->
            <div id="<?php echo esc_attr( $block_id ); ?>-prev" style="
                position: absolute;
                top: 50%;
                left: -80px;
                transform: translateY(-50%);
                pointer-events: auto;
                cursor: pointer;
            ">
                <svg width="70" height="70" viewBox="0 0 58 50">
                    <g transform="rotate(90 29 25)">
                        <polygon class="ctrl-hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13"
                            style="fill:transparent;stroke:#ece318;stroke-width:3;stroke-linejoin:round;" />
                    </g>
                    <text x="29" y="27"
                        style="fill:#000;font-size:28px;font-weight:bold;text-anchor:middle;dominant-baseline:middle;font-family:Arial;pointer-events:none;">&#8249;</text>
                </svg>
            </div>

            <!-- Next -->
            <div id="<?php echo esc_attr( $block_id ); ?>-next" style="
                position: absolute;
                top: 50%;
                right: -80px;
                transform: translateY(-50%);
                pointer-events: auto;
                cursor: pointer;
            ">
                <svg width="70" height="70" viewBox="0 0 58 50">
                    <g transform="rotate(90 29 25)">
                        <polygon class="ctrl-hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13"
                            style="fill:transparent;stroke:#ece318;stroke-width:3;stroke-linejoin:round;" />
                    </g>
                    <text x="29" y="27"
                        style="fill:#000;font-size:28px;font-weight:bold;text-anchor:middle;dominant-baseline:middle;font-family:Arial;pointer-events:none;">&#8250;</text>
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var trackId  = <?php echo wp_json_encode( $block_id . '-track' ); ?>;
    var prevId   = <?php echo wp_json_encode( $block_id . '-prev' ); ?>;
    var nextId   = <?php echo wp_json_encode( $block_id . '-next' ); ?>;
    var autoplay = <?php echo $autoplay ? 'true' : 'false'; ?>;

    var track = document.getElementById( trackId );
    if ( ! track ) { return; }

    var items = track.children;
    var total = items.length;
    var index = 0;

    function update() {
        track.style.transform = 'translateX(' + ( -index * 100 ) + '%)';
    }

    function goNext() {
        index = ( index + 1 ) % total;
        update();
    }

    function goPrev() {
        index = ( index - 1 + total ) % total;
        update();
    }

    document.getElementById( prevId ).addEventListener( 'click', goPrev );
    document.getElementById( nextId ).addEventListener( 'click', goNext );

    if ( autoplay ) {
        setInterval( goNext, 5000 );
    }

    update();
}());
</script>
