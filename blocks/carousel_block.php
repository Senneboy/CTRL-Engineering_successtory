<?php
/**
 * Carousel Block
 *
 * ACF Fields:
 *   - images (repeater) — sub-field: image (image URL)
 *
 * @var array $args
 */
$block  = $args['block'];
$data   = $block['data'] ?? [];
$images = $data['images'] ?? [];
?>

<style>
    /* --- Floating card (no bottom padding — carousel visually fills to edge) --- */
    .carousel-block .content-block {
        background: #ffffff;
        padding: 85px 95px 0;
        box-sizing: border-box;
        overflow: visible;
        border-radius: 5px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22);
    }

    /* --- Carousel layout --- */
    .carousel-block .carousel-outer {
        position: relative;
        width: 100vw;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 0;
        margin-bottom: 50px;
        overflow: visible;
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
        overflow-x: hidden;
        overflow-y: visible;
        position: relative;
        display: flex;
        align-items: center;
        padding-bottom: 20px;
    }

    .carousel-block .track {
        display: flex;
        transition: transform 0.5s ease;
    }

    .carousel-block .item {
        flex: 0 0 100%;
        padding: 0 1px;
        box-sizing: border-box;
        transition: transform 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel-block .item img {
        width: 90%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
        transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    /* --- Hexagon arrow buttons --- */
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

    .carousel-block #prev { left: -80px; }
    .carousel-block #next { right: -80px; }

    .carousel-block .control svg { display: block; }

    .carousel-block .hexagon {
        fill: transparent;
        stroke: #ece318;
        stroke-width: 3;
        stroke-linejoin: round;
    }

    .carousel-block .arrow-svg {
        fill: #000000;
        font-size: 28px;
        font-weight: bold;
        text-anchor: middle;
        dominant-baseline: middle;
        font-family: Arial;
        pointer-events: none;
    }

    .carousel-block .control:hover .hexagon {
        fill: #ece318;
        stroke: #ece318;
    }

    /* --- Responsive --- */
    @media (max-width: 900px) {
        .carousel-block .content-block {
            padding: 44px 24px 0;
        }
    }

    @media (max-width: 800px) {
        .carousel-block #prev { left: 10px; }
        .carousel-block #next { right: 10px; }

        .carousel-block .wrapper,
        .carousel-block .window {
            width: 100%;
            max-width: 100%;
        }

        .carousel-block .item { justify-content: center; }

        .carousel-block .item img {
            width: 80vw;
            max-height: 40vh;
            height: auto;
        }

        .carousel-block .hexagon {
            fill: #ece318d0;
            stroke: #ece318;
        }

        .carousel-block .control:hover .hexagon {
            fill: #ece318;
            stroke: #ece318;
        }
    }

    @media (max-width: 600px) {
        .carousel-block .content-block {
            padding: 34px 18px 0;
        }
    }
</style>

<section class="carousel-block">
    <?php if ( ! empty( $images ) ) : ?>
        <div class="content-block">
            <div class="carousel-outer">
                <div class="wrapper">
                    <div class="window">
                        <div class="track">
                            <?php foreach ( $images as $item ) :
                                $url = esc_url( $item['image'] ?? '' );
                                if ( ! $url ) continue;
                            ?>
                                <div class="item">
                                    <img src="<?php echo $url; ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="arrow-layer">
                        <div class="control" id="prev">
                            <svg width="70" height="70" viewBox="0 0 58 50">
                                <g transform="rotate(90 29 25)">
                                    <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                                </g>
                                <text x="29" y="27" class="arrow-svg">&#8249;</text>
                            </svg>
                        </div>
                        <div class="control" id="next">
                            <svg width="70" height="70" viewBox="0 0 58 50">
                                <g transform="rotate(90 29 25)">
                                    <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                                </g>
                                <text x="29" y="27" class="arrow-svg">&#8250;</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function () {
                var index = 0;
                var track = document.querySelector('.carousel-block .track');
                var items = document.querySelectorAll('.carousel-block .item');
                var total = items.length;

                function update() {
                    track.style.transform = 'translateX(' + -(index * 100) + '%)';
                }

                function next() {
                    index = (index + 1) % total;
                    update();
                }

                function prev() {
                    index = (index - 1 + total) % total;
                    update();
                }

                document.querySelector('.carousel-block #next').onclick = next;
                document.querySelector('.carousel-block #prev').onclick = prev;
                setInterval(next, 5000);
                update();
            })();
        </script>
    <?php endif; ?>
</section>

<style>
    .carousel-block .text-section {
        font-family: 'Montserrat', sans-serif;
        width: 150%;
        position: relative;
        left: -160px;
        padding: 0 30px;
        box-sizing: border-box;
    }

    .carousel-block .text-section > * {
        width: 100%;
        margin-left: 0;
        box-sizing: border-box;
    }

    .carousel-block .text-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        position: relative;
        display: inline-block;
        padding-left: 48px;
    }

    .carousel-block .text-section h2::before {
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

    .carousel-block .custom-highlight {
        display: inline;
        background-color: #ece318;
        padding: 0 15px;
    }

    /* Carousel layout */
    .carousel-block .carousel-outer {
        position: relative;
        width: 100vw;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 40px;
        margin-bottom: 50px;
        overflow: visible;
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
        overflow-x: hidden;
        overflow-y: visible;
        position: relative;
        display: flex;
        align-items: center;
        padding-bottom: 20px;
    }

    .carousel-block .track {
        display: flex;
        transition: transform 0.5s ease;
    }

    .carousel-block .item {
        flex: 0 0 100%;
        padding: 0 1px;
        box-sizing: border-box;
        transition: transform 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel-block .item img {
        width: 90%;
        height: 400px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
        transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    /* Hexagon arrow buttons */
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
        align-self: center;
        cursor: pointer;
    }

    .carousel-block #prev { left: -80px; }
    .carousel-block #next { right: -80px; }

    .carousel-block .control svg { display: block; }

    .carousel-block .hexagon {
        fill: transparent;
        stroke: #ece318;
        stroke-width: 3;
        stroke-linejoin: round;
    }

    .carousel-block .arrow-svg {
        fill: #000000;
        font-size: 28px;
        font-weight: bold;
        text-anchor: middle;
        dominant-baseline: middle;
        font-family: Arial;
        pointer-events: none;
    }

    .carousel-block .control:hover .hexagon {
        fill: #ece318;
        stroke: #ece318;
    }

    @media (max-width: 900px) {
        .carousel-block .text-section {
            width: calc(100% - 20px);
            max-width: calc(100vw - 20px);
            left: 0;
            margin-left: auto;
            margin-right: 0;
            padding: 0 16px;
        }

        .carousel-block .text-section > * {
            width: 100%;
            max-width: 100%;
            margin-left: 0;
        }

        .carousel-block .text-section h2 {
            padding-left: 36px;
        }

        .carousel-block .text-section h2::before {
            width: 26px;
            height: 22px;
            left: 0;
        }
    }

    @media (max-width: 800px) {
        .carousel-block #prev { left: 10px; }
        .carousel-block #next { right: 10px; }

        .carousel-block .wrapper,
        .carousel-block .window {
            width: 100%;
            max-width: 100%;
        }

        .carousel-block .item { justify-content: center; }

        .carousel-block .item img {
            width: 80vw;
            max-height: 40vh;
            height: auto;
        }

        .carousel-block .hexagon {
            fill: #ece318d0;
            stroke: #ece318;
        }

        .carousel-block .control:hover .hexagon {
            fill: #ece318;
            stroke: #ece318;
        }
    }

    @media (min-width: 1500px) {
        .carousel-block .text-section {
            width: calc(100% + 260px);
            max-width: calc(100% + 260px);
            left: -130px;
            padding: 0 20px;
        }
    }
</style>

<section class="carousel-block">
    <?php if ( ! empty( $data['title'] ) ) : ?>
        <div class="text-section">
            <h2><span class="custom-highlight"><b><?php echo esc_html( $data['title'] ); ?></b></span></h2>
        </div>
    <?php endif; ?>

    <?php if ( ! empty( $images ) ) : ?>
        <div class="carousel-outer">
            <div class="wrapper">
                <div class="window">
                    <div class="track">
                        <?php foreach ( $images as $item ) :
                            $url = esc_url( $item['image'] ?? '' );
                            if ( ! $url ) continue;
                        ?>
                            <div class="item">
                                <img src="<?php echo $url; ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="arrow-layer">
                    <div class="control" id="prev">
                        <svg width="70" height="70" viewBox="0 0 58 50">
                            <g transform="rotate(90 29 25)">
                                <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                            </g>
                            <text x="29" y="27" class="arrow-svg">&#8249;</text>
                        </svg>
                    </div>
                    <div class="control" id="next">
                        <svg width="70" height="70" viewBox="0 0 58 50">
                            <g transform="rotate(90 29 25)">
                                <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                            </g>
                            <text x="29" y="27" class="arrow-svg">&#8250;</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function () {
                var index = 0;
                var track = document.querySelector('.carousel-block .track');
                var items = document.querySelectorAll('.carousel-block .item');
                var total = items.length;

                function update() {
                    track.style.transform = 'translateX(' + -(index * 100) + '%)';
                }

                function next() {
                    index = (index + 1) % total;
                    update();
                }

                function prev() {
                    index = (index - 1 + total) % total;
                    update();
                }

                document.querySelector('.carousel-block #next').onclick = next;
                document.querySelector('.carousel-block #prev').onclick = prev;
                setInterval(next, 5000);
                update();
            })();
        </script>
    <?php endif; ?>
</section>
