<?php
/**
 * ID Card Block
 *
 * Sticky slide-in card that shows project metadata.  The card can be toggled
 * open/closed via an arrow button on its right edge.  On narrow viewports it
 * starts collapsed automatically.
 *
 * Expected $args['block']['data'] keys:
 *   title        (string) – card heading (default 'ID CARD')
 *   customer     (string) – customer / company name
 *   industry     (string) – industry label
 *   price_range  (string) – price range (e.g. '€500 – €2 000')
 *   competence   (string) – competence / domain
 *   project_type (string) – project type description
 *   time_period  (string) – project timeframe (e.g. '2023–2024')
 *   block_id     (string) – unique HTML id prefix (default 'id-card')
 *
 * @var array $args
 */
$block        = $args['block'];
$data         = $block['data'] ?? [];

$title        = $data['title']        ?? 'ID CARD';
$customer     = $data['customer']     ?? '';
$industry     = $data['industry']     ?? '';
$price_range  = $data['price_range']  ?? '';
$competence   = $data['competence']   ?? '';
$project_type = $data['project_type'] ?? '';
$time_period  = $data['time_period']  ?? '';
$block_id     = $data['block_id']     ?? 'id-card';

$block_id = preg_replace( '/[^a-z0-9_-]/i', '-', $block_id );

// Row data: label => value
$rows = [
    'CUSTOMER'     => $customer,
    'INDUSTRY'     => $industry,
    'PRICE RANGE'  => $price_range,
    'COMPETENCE'   => $competence,
    'PROJECT TYPE' => $project_type,
    'TIME PERIOD'  => $time_period,
];
// Zebra-stripe helpers
$row_odd  = '#fff89a';
$row_even = '#fffbc1';
?>

<!-- ID Card styles (scoped via the unique id) -->
<style>
    #<?php echo esc_attr( $block_id ); ?> {
        font-family: 'Montserrat', sans-serif;
        width: 300px;
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

    #<?php echo esc_attr( $block_id ); ?>.ctrl-id-collapsed {
        width: 55px;
    }

    #<?php echo esc_attr( $block_id ); ?>.ctrl-id-collapsed .ctrl-id-content {
        pointer-events: none;
        opacity: 0;
        transition: opacity 0s 0.35s;
    }

    #<?php echo esc_attr( $block_id ); ?>.ctrl-id-collapsed .ctrl-arrow-icon {
        display: none;
    }

    #<?php echo esc_attr( $block_id ); ?>.ctrl-id-collapsed .ctrl-arrow-text {
        display: block;
    }

    @media (max-width: 600px) {
        #<?php echo esc_attr( $block_id ); ?> {
            width: min(380px, calc(100vw - 8px));
            max-width: calc(100vw - 8px);
        }

        #<?php echo esc_attr( $block_id ); ?>.ctrl-id-collapsed {
            width: 38px;
        }
    }
</style>

<div id="<?php echo esc_attr( $block_id ); ?>">

    <!-- Content panel -->
    <div class="ctrl-id-content" style="
        padding: 15px 15px 15px 20px;
        flex: 1;
        opacity: 1;
        transform: translateX(0);
        min-width: 235px;
    ">
        <!-- Title bar -->
        <h3 style="
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
            position: relative;
            z-index: 2;
        "><?php echo esc_html( $title ); ?></h3>

        <?php
        $row_index = 0;
        foreach ( $rows as $label => $value ) :
            $is_first = ( $row_index === 0 );
            $is_last  = ( $row_index === count( $rows ) - 1 );
            $bg       = ( $row_index % 2 === 0 ) ? $row_odd : $row_even;

            $extra_border = '';
            if ( $is_first ) {
                $extra_border = 'border-top: 2px solid #000;';
            } elseif ( $is_last ) {
                $extra_border = 'border-bottom: 2px solid #000;';
            }
            $row_index++;
        ?>
            <p style="
                display: block;
                margin: -15px -15px 15px -20px;
                padding: 15px 20px;
                width: calc(100% - 5px);
                background-color: <?php echo esc_attr( $bg ); ?>;
                color: #202020;
                border: 1px solid #000;
                font-family: 'Montserrat', sans-serif;
                font-size: 15px;
                position: relative;
                top: 15px;
                <?php echo $extra_border; ?>
            ">
                <b style="
                    font-family: 'Montserrat', sans-serif;
                    font-size: 16px;
                    display: block;
                "><?php echo esc_html( $label ); ?></b>
                <?php echo esc_html( $value ); ?>
            </p>
        <?php endforeach; ?>
    </div>

    <!-- Toggle button -->
    <div id="<?php echo esc_attr( $block_id ); ?>-toggle" style="
        width: 35px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ece318;
        z-index: 10;
        position: relative;
        cursor: pointer;
    ">
        <span class="ctrl-arrow-icon" style="
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 900;
            color: #000;
        ">&#8249;</span>

        <span class="ctrl-arrow-text" style="
            display: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 19px;
            font-weight: 1000;
            color: #000;
            transform: rotate(90deg);
            transform-origin: center;
            white-space: nowrap;
            letter-spacing: 0.6em;
        ">ID CARD</span>
    </div>
</div>

<script>
(function () {
    var cardId  = <?php echo wp_json_encode( $block_id ); ?>;
    var btnId   = <?php echo wp_json_encode( $block_id . '-toggle' ); ?>;
    var card    = document.getElementById( cardId );
    var btn     = document.getElementById( btnId );
    if ( ! card || ! btn ) { return; }

    function syncHeight() {
        var title  = card.querySelector( 'h3' );
        var items  = Array.from( card.querySelectorAll( '.ctrl-id-content > p' ) );
        var titleH = title ? title.offsetHeight : 0;
        var itemsH = items.reduce( function ( sum, el ) { return sum + el.offsetHeight; }, 0 );
        card.style.height = ( titleH + itemsH + 35 - 36 ) + 'px';
    }

    function syncState() {
        if ( window.innerWidth < 900 ) {
            card.classList.add( 'ctrl-id-collapsed' );
        } else if ( window.innerWidth >= 1380 ) {
            card.classList.remove( 'ctrl-id-collapsed' );
        }
        syncHeight();
    }

    btn.addEventListener( 'click', function () {
        card.classList.toggle( 'ctrl-id-collapsed' );
        syncHeight();
    } );

    window.addEventListener( 'load',   syncState );
    window.addEventListener( 'resize', syncState );
    syncState();
}());
</script>
