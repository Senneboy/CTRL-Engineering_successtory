<!DOCTYPE html>
<?php 
$lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor nunc semper erat mattis, quis facilisis nisl venenatis. Maecenas molestie placerat dignissim. Nam nec molestie ex. Sed quis ligula ultrices, finibus neque venenatis, viverra ex. Aenean quis suscipit diam. Aliquam tincidunt id mauris ut rutrum. Aenean tincidunt magna metus, at auctor tortor rutrum et. Maecenas neque mauris, feugiat non dolor sed, mollis faucibus lectus. Phasellus eget metus nec nibh gravida hendrerit sollicitudin eu eros. Vivamus sollicitudin nisi augue, vitae blandit lorem venenatis eget. Nulla bibendum pretium dolor gravida mattis. Etiam semper risus in tellus accumsan ultrices. Curabitur cursus sapien ut dui lobortis, sit amet dignissim arcu elementum.";
$title = "Yummy Bakery";
$description = "Retrofit of a baking plate drive System";
$industry = "FOOD AND BEVERAGE";
$banner_image = "banner.jpg";
$bg_color = "#040404";
$bg_image = "hexagon3.png";
$container_color = "#ffffff";

// carousel <images> */
$img_1 = "image1.jpg";
$img_2 = "image2.jpg";
$img_3 = "image3.jpg";
$img_4 = "image4.jpg";
$img_5 = "image5.jpg";
$img_6 = "image6.jpg";
$img_7 = "image7.jpg";
$img_8 = "image8.png";

// ID CARD CONTENT 
$id_title = "ID CARD";
$id_customer = "Yummy Bakery";
$id_industry = "FOOD AND BEVERAGE";
$id_priceRange = "€xxx - €xxx";
$id_competence = "Competence";
$id_projectType = "Project Type";
$id_TimePeriod = "date1-date2";

?>

<html lang="nl">

<head>
    <link rel="stylesheet" href="successtoryCarousel.css">
    <link rel="stylesheet" href="successtoryID_Card.css">
    <meta charset="UTF-8">
    <title>CTRL Engineering</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* ---TEXT CONTAINER --- */
        .containerNew {
            max-width: 500px;
            /* width white container */
            margin: -590px auto 0 auto;
            /* "50px auto" for space between banner and container  + "0 auto" center container */
            background:
                <?php echo $container_color; ?>
            ;
            min-height: 200vh;
            /* hight of container = height of page */
            padding: 200px;
            overflow: visible;
        }

        h1 {
            margin-top: 0;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background: <//?php echo $bg_color; ?//>; /* Background next to white container */
            background-image: url('<?php echo $bg_image; ?>');
        }

        /* --- BANNER --- */
        .banner {
            position: relative;
            background-image: url('<?php echo $banner_image; ?>');
            background-size: cover;
            background-position: center;
            min-height: 500px;
            display: flex;
            clip-path: polygon(39% 100%, 0 100%, 0 0, 100% 0, 100% 15%, 100% 100%, 61% 100%, 60% 95%, 40% 95%);
        }

        .banner-wrap {
            filter: drop-shadow(0 12px 25px rgba(0, 0, 0, 0.55));
        }



        .banner-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Makes banner image darker */
        }

        .banner-inner {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding: 80px 0;
            display: flex;
            align-items: center;
            z-index: 2;
        }

        /* --- BANNER TEXT: COLOR & FONT --- */
        .banner-text {
            color: #fff;
        }

        .banner-text h1 {
            font-size: 40px;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 3px;
        }

        .banner-text h2 {
            font-size: 32px;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
        }

        .banner-text h3 {
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
        }





        /* --- TEXT SECTION --- */
        .text-section {
            background:
                <?php echo $container_color; ?>
            ;
            padding: 0px 0;
            /* space between banner and text */

        }

        .text-section>* {
            max-width: 1200px;
            margin-left: -70px;
            /* indent */
        }

        .text-section h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
        }

        .text-section p {
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;

        }

        /* --- CUSTOM HIGHLIGHT: HEADER --- */
        .custom-highlight {
            display: inline;
            background-color: #ece318;
            padding: 0 15px;

        }

        /* --- RESPONSIVE --- */
        @media (max-width: 750px) {
            .banner-inner {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>


<body>

    <!-- BANNER -->
    <div class="banner-wrap">
        <section class="banner">

            <div class="banner-overlay"></div>

            <div class="banner-inner">

                <div class="banner-text">
                    <h1><?php echo $title; ?></h1>
                    <h2><?php echo nl2br($description); ?></h2>
                    <br> <br>
                    <h3><?php echo $industry; ?></h3>
                </div>
            </div>

        </section>
    </div>

    <!-- ID CARD -->
    <div class="id-card" id="idCard">

        <div class="id-content">
            <h3 class="id-title"><?php echo $id_title ?></h3>
            
            <p class="first"><b>CUSTOMER</b> <br> <?php echo $id_customer ?> </p>
            <p class="even"><b>INDUSTRY</b> <br> <?php echo $id_industry ?> </p>
            <p class="odd"><b>PRICE RANGE</b> <br> <?php echo $id_priceRange ?> </p>
            <p class="even"><b>COMPETENCE</b> <br> <?php echo $id_competence ?> </p>
            <p class="odd"><b>PROJECT TYPE</b> <br> <?php echo $id_projectType ?> </p>
            <p class="last"><b>TIME PERIOD</b> <br> <?php echo $id_TimePeriod?> </p>

        </div>

        <div class="toggle-arrow" id="toggleBtn">
            <span class="arrow-icon">›</span>
        </div>

    </div>
    <!-- CONTENT -->
    <div class="containerNew">

        <section class="text-section">

            <h2 class = "custom-highlight"> <b>Long story short</b></h2>

            <p> <?php echo $lorem_ipsum; ?> </p>
            <br>
        </section>

        <body>

            <div class="carousel-outer">
                <div class="wrapper">

                    <!-- CAROUSEL IMAGES -->
                    <div class="window">
                        <div class="track">
                            <div class="item"><img src="image1.jpg"></div>
                            <div class="item"><img src="image2.jpg"></div>
                            <div class="item"><img src="image3.jpg"></div>
                            <div class="item"><img src="image4.jpg"></div>
                            <div class="item"><img src="image5.jpg"></div>
                            <div class="item"><img src="image6.jpg"></div>
                            <div class="item"><img src="image7.jpg"></div>
                            <div class="item"><img src="image8.png"></div>
                        </div>
                    </div>

                    <!-- ARROWS LAYER -->
                    <div class="arrow-layer">

                        <div class="control" id="prev">
                            <svg width="70" height="70" viewBox="0 0 58 50">
                                <g transform="rotate(90 29 25)">
                                    <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                                </g>
                                <text x="29" y="27" class="arrow">‹</text>
                            </svg>
                        </div>

                        <div class="control" id="next">
                            <svg width="70" height="70" viewBox="0 0 58 50">
                                <g transform="rotate(90 29 25)">
                                    <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
                                </g>
                                <text x="29" y="27" class="arrow">›</text>
                            </svg>
                        </div>

                    </div>

                </div>
            </div>
            <!-- JavaScript Carousel-->
            <script>
                let index = 0;

                const track = document.querySelector(".track");
                const items = document.querySelectorAll(".item");
                const total = items.length;

                function update() {

                    items.forEach(i => i.classList.remove("active-center"));

                    let center = index + 1;
                    if (center >= total) center = 0;

                    items[center].classList.add("active-center");

                    const offset = -(index * (100 / 3));
                    track.style.transform = `translateX(${offset}%)`;
                }

                function next() {
                    index++;
                    if (index > total - 3) index = 0;
                    update();
                }

                function prev() {
                    index--;
                    if (index < 0) index = total - 3;
                    update();
                }

                document.getElementById("next").onclick = next;
                document.getElementById("prev").onclick = prev;

                /* ==== AUTO PLAY PER 1 IMAGE ==== */
                setInterval(next, 5000);

                update();


                /* ==== JavaScript ID CARD ==== */
                const btn = document.getElementById("toggleBtn");
                const card = document.getElementById("idCard");

                btn.onclick = () => {
                    card.classList.toggle("collapsed");
                };


                /* ==== ID CARD HEIGHT CALCULATOR ==== */
                function syncIdCardHeight() {
                    const card = document.querySelector('.id-card');
                    if (!card) return;

                    const title = card.querySelector('.id-title');
                    const items = Array.from(card.querySelectorAll('.id-content > p'));
                    const titleH = title ? title.offsetHeight : 0;
                    const itemsH = items.reduce((sum, item) => sum + item.offsetHeight, 0);

                    // include inside spacing you want (no need if margins are in flow)
                    card.style.height = titleH + itemsH + 1.3 + 'px';
                }
                document.addEventListener('DOMContentLoaded', syncIdCardHeight);
                window.addEventListener('resize', syncIdCardHeight); // optional

            </script>

        </body>
    </div>

</body>

</html>