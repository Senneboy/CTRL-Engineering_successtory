<?php
/**
 * Quote Block
 *
 * ACF Fields:
 *   - quote        (textarea) — the quote text
 *   - quote_author (text)     — attribution line
 *
 * @var array $args
 */
$block = $args['block'];
$data  = $block['data'] ?? [];
?>

<style>
    /* --- Floating card: no padding so blockquote fills edge to edge --- */
    .quote-block .content-block {
        background: transparent;
        padding: 0;
        box-sizing: border-box;
        border-radius: 5px;
        box-shadow: none;
        overflow: hidden;
    }

    /* --- Quote --- */
    .quote-block .quote {
        display: block;
        width: 100%;
        margin: 0;
        padding: 40px 20px;
        min-height: 170px;
        box-sizing: border-box;
        text-align: center;
        white-space: normal;

        background-color: #202020;

        overflow-wrap: break-word;
        word-break: normal;

        font-weight: 100;
        font-size: 24px;
        font-family: 'Montserrat', sans-serif;
        color: #ffffff;

        border-left: 5px solid #ece318;
        border-radius: 5px;
        transition: all 0.3s ease;
        box-shadow: 10px 10px 5px 4px rgba(0, 0, 0, 0.1), 0 -4px 5px rgba(0, 0, 0, 0.1);
    }

    .quote-block .quote:hover {
        box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.1), 0 -4px 10px rgba(0, 0, 0, 0.1);
        border-left: 10px solid #ece318;
        font-size: 26px;
    }

    .quote-block .quote p {
        margin: 0 0 12px;
        font-family: inherit;
        font-size: inherit;
        font-weight: inherit;
        color: inherit;
    }

    .quote-block .quote p:last-child {
        margin-bottom: 0;
    }

    .quote-block .quote .author {
        font-style: italic;
        color: #ece318;
    }

    /* --- Responsive --- */
    @media (max-width: 900px) {
        .quote-block .quote {
            padding: 18px 16px;
            min-height: 130px;
        }
    }
</style>

<div class="quote-block">
    <?php if ( ! empty( $data['quote'] ) ) : ?>
        <div class="content-block">
            <blockquote class="quote">
                <p>"<?php echo esc_html( $data['quote'] ); ?>"</p>
                <?php if ( ! empty( $data['quote_author'] ) ) : ?>
                    <p class="author">- <?php echo esc_html( $data['quote_author'] ); ?></p>
                <?php endif; ?>
            </blockquote>
        </div>
    <?php endif; ?>
</div>
