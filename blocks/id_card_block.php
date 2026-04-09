<?php
/**
 * ID Card Block
 *
 * ACF Fields:
 *   - id_title        (text) — card header, e.g. "ID CARD"
 *   - id_customer     (text)
 *   - id_industry     (text)
 *   - id_price_range  (text)
 *   - id_competence   (text)
 *   - id_project_type (text)
 *   - id_time_period  (text)
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];

$id_title        = $data['id_title']        ?? 'ID CARD';
$id_customer     = $data['id_customer']     ?? '';
$id_industry     = $data['id_industry']     ?? '';
$id_price_range  = $data['id_price_range']  ?? '';
$id_competence   = $data['id_competence']   ?? '';
$id_project_type = $data['id_project_type'] ?? '';
$id_time_period  = $data['id_time_period']  ?? '';
?>

<style>
    .id-card-block .id-card {
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

    .id-card-block .id-card h3 {
        font-family: 'Montserrat', sans-serif;
        color: white;
        font-size: 18px;
        margin: 0;
        top: 0;
        position: relative;
        text-align: center;
    }

    .id-card-block .id-title {
        display: block;
        margin: -15px -15px 0 -20px;
        padding: 15px 20px;
        width: auto;
        background-color: #000000;
        color: #ece318;
        font-weight: 700;
        border-right: 3px solid #2c2c2c;
        border-bottom: 3px solid #2c2c2c;
        position: relative;
        z-index: 2;
    }

    .id-card-block .id-title::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 180px;
        aspect-ratio: 1 / cos(30deg);
        clip-path: polygon(25% 40%, 75% 40%, 82% 50%, 75% 60%, 25% 60%, 17% 50%);
        background: #ece318;
        z-index: -2;
        pointer-events: none;
    }

    .id-card-block .id-title::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 180px;
        aspect-ratio: 1 / cos(30deg);
        clip-path: polygon(25% 42%, 75% 42%, 80% 50%, 75% 58%, 25% 58%, 19% 50%);
        background: #000000;
        z-index: -1;
        pointer-events: none;
    }

    .id-card-block .id-card b {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        margin: 0;
        top: 15px;
        position: absolute;
    }

    .id-card-block .id-card p {
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        margin-bottom: 15px;
        top: 15px;
        position: relative;
    }

    .id-card-block .id-content {
        padding: 15px 15px 15px 20px;
        flex: 1;
        opacity: 1;
        transform: translateX(0);
        min-width: 235px;
    }

    .id-card-block .id-content .first,
    .id-card-block .id-content .last,
    .id-card-block .id-content .odd,
    .id-card-block .id-content .even {
        display: block;
        margin: -15px -15px 15px -20px;
        padding: 15px 20px;
        width: calc(100% - 5px);
        color: #202020;
        border-radius: 0;
    }

    .id-card-block .id-content .first,
    .id-card-block .id-content .odd  { background-color: #fff89a; }
    .id-card-block .id-content .last,
    .id-card-block .id-content .even  { background-color: #fffbc1; }

    .id-card-block .toggle-arrow {
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

    .id-card-block .toggle-arrow:hover {
        background: rgba(0, 0, 0, 0.1);
    }

    .id-card-block .arrow-icon {
        font-family: 'Montserrat', sans-serif;
        font-size: 30px;
        font-weight: 900;
        color: #000;
        white-space: nowrap;
    }

    .id-card-block .arrow-text {
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

    .id-card-block .id-card.collapsed {
        width: 55px;
    }

    .id-card-block .id-card.collapsed .id-content {
        pointer-events: none;
        opacity: 0;
        transition: opacity 0s 0.35s;
    }

    .id-card-block .id-card.collapsed .arrow-icon { display: none; }
    .id-card-block .id-card.collapsed .arrow-text { display: block; }

    @media (max-width: 600px) {
        .id-card-block .id-card {
            width: min(380px, calc(100vw - 8px));
            max-width: calc(100vw - 8px);
        }

        .id-card-block .id-card.collapsed {
            width: 38px;
        }

        .id-card-block .id-card h3        { font-size: 20px; }
        .id-card-block .id-card b         { font-size: 17px; }
        .id-card-block .id-card p         { font-size: 16px; }

        .id-card-block .id-content {
            min-width: 0;
            padding: 18px 18px 18px 24px;
        }

        .id-card-block .toggle-arrow { width: 40px; }
        .id-card-block .arrow-icon   { font-size: 34px; }
        .id-card-block .arrow-text   { font-size: 20px; letter-spacing: 0.45em; }
    }
</style>

<div class="id-card-block">
    <div class="id-card" id="idCard">
        <div class="id-content">
            <h3 class="id-title"><?php echo esc_html( $id_title ); ?></h3>

            <?php if ( $id_customer ) : ?>
                <p class="first"><b>CUSTOMER</b><br><?php echo esc_html( $id_customer ); ?></p>
            <?php endif; ?>

            <?php if ( $id_industry ) : ?>
                <p class="even"><b>INDUSTRY</b><br><?php echo esc_html( $id_industry ); ?></p>
            <?php endif; ?>

            <?php if ( $id_price_range ) : ?>
                <p class="odd"><b>PRICE RANGE</b><br><?php echo esc_html( $id_price_range ); ?></p>
            <?php endif; ?>

            <?php if ( $id_competence ) : ?>
                <p class="even"><b>COMPETENCE</b><br><?php echo esc_html( $id_competence ); ?></p>
            <?php endif; ?>

            <?php if ( $id_project_type ) : ?>
                <p class="odd"><b>PROJECT TYPE</b><br><?php echo esc_html( $id_project_type ); ?></p>
            <?php endif; ?>

            <?php if ( $id_time_period ) : ?>
                <p class="last"><b>TIME PERIOD</b><br><?php echo esc_html( $id_time_period ); ?></p>
            <?php endif; ?>
        </div>

        <div class="toggle-arrow" id="idCardToggleBtn">
            <span class="arrow-icon">&#8249;</span>
            <span class="arrow-text"><?php echo esc_html( $id_title ); ?></span>
        </div>
    </div>
</div>

<script>
    (function () {
        var btn  = document.getElementById('idCardToggleBtn');
        var card = document.getElementById('idCard');

        function updateTogglePosition() {
            if ( card.classList.contains('collapsed') ) {
                var content    = card.querySelector('.id-content');
                var hiddenWidth = content ? content.offsetWidth : 265;
                btn.style.marginLeft = '-' + hiddenWidth + 'px';
            } else {
                btn.style.marginLeft = '0px';
            }
        }

        function syncResponsiveState() {
            if ( window.innerWidth < 900 ) {
                card.classList.add('collapsed');
            }
            if ( window.innerWidth >= 1380 ) {
                card.classList.remove('collapsed');
            }
            updateTogglePosition();
        }

        function syncHeight() {
            var title   = card.querySelector('.id-title');
            var items   = Array.from( card.querySelectorAll('.id-content > p') );
            var titleH  = title ? title.offsetHeight : 0;
            var itemsH  = items.reduce( function (sum, el) { return sum + el.offsetHeight; }, 0 );
            card.style.height = ( titleH + itemsH + 35 - 36 ) + 'px';
        }

        btn.onclick = function () {
            card.classList.toggle('collapsed');
            updateTogglePosition();
        };

        window.addEventListener('load',   function () { syncResponsiveState(); syncHeight(); });
        window.addEventListener('resize', function () { syncResponsiveState(); syncHeight(); });
        syncResponsiveState();
        syncHeight();
    })();
</script>
