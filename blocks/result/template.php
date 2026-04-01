<?php
/**
 * Result Block
 *
 * Displays a titled text section (e.g. "Result", "Long story short").
 *
 * Expected $args['block']['data'] keys:
 *   title       (string) – section heading
 *   content     (string) – body text (HTML allowed)
 *
 * @var array $args
 */
$block   = $args['block'];
$data    = $block['data'] ?? [];

$title   = $data['title']   ?? '';
$content = $data['content'] ?? '';
?>

<section style="
    font-family: 'Montserrat', sans-serif;
    width: 150%;
    position: relative;
    left: -160px;
    padding: 0 25px;
    box-sizing: border-box;
">
    <?php if ( $title ) : ?>
        <h2 style="
            display: inline;
            background-color: #ece318;
            padding: 0 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
        "><b><?php echo esc_html( $title ); ?></b></h2>
    <?php endif; ?>

    <div style="
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        margin-top: 16px;
    ">
        <?php echo wpautop( wp_kses_post( $content ) ); ?>
    </div>
</section>
