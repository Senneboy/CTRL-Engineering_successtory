<!DOCTYPE html>
<?php
$longStoryShort = "At Yummy Bakery, a baking plate forms a critical part of the production process. After many years of continuous operation, wear in the bearing system of the baking plate drive began to compromise mechanical stability. This created risks for product consistency and production continuity. <br> CTRL Engineering was responsible for the mechanical design, drive system dimensioning, and on-site integration, restoring the installation through a targeted and cost-effective retrofit.";
$solution = "CTRL Engineering executed a complete retrofit of the baking plate drive system. The mechanical design was tailored to the existing structure, with new bearings and mounting interfaces to reduce vibrations and ensure long-term durability. The drive system was carefully sized, with motor, gearbox, and coupling selected to meet the required torque and speed profiles while providing sufficient safety margins for reliable operation. <br> The new drive system was installed, calibrated, and tested on-site, fully integrated with the existing machine software, allowing the conveyor plate to operate smoothly without major modifications to the original setup.";
$whyIt_matters = "If you only upgrade the parts that affect performance, you can get more use out of your machines while keeping control of your spending and time offline. This approach makes sure your production line keeps working reliably, protects product quality, and delivers a clear return on investment.";
$result = "Following the retrofit, the baking plate operates smoothly and consistently, restoring product stability and reducing the risk of unexpected production stops. By upgrading only the critical mechanical components, Yummy Bakery significantly extended the service life of the existing installation. <br> <br> This approach delivered a strong return on investment compared to full machine replacement, while securing reliable production for the long term.";
$quote = "A targeted retrofit allowed us to restore reliability and extend the lifetime of the baking plate without replacing the entire line.";
$quoteAuthor = "Anthony van Dael – Build and integration at CTRL engineering";
$title = "Yummy Bakery";
$description = "Retrofit of a baking plate drive System";
$industry = "FOOD AND BEVERAGE";
$banner_image = "banner.jpg";
$bg_color = "#040404";
$bg_image = "hexagon7.png"; // hexagon3.png for dark bg
$container_color = "#ececec"; // #fff for dark bg

//Text and titles
$challenge_title = "Worn-out bearings threaten production continuity";
$challenge = "The baking plate had been operating reliably for many years, but progressive bearing wear introduced mechanical play and vibrations in the drive system. This reduced the stability of the baking process and increased the risk of unplanned downtime. <br> <br> Although only specific mechanical components were worn, the impact on production quality and reliability was significant. A full machine replacement would have been costly and disproportionate to the actual technical problem.";
$solution_title = "Targeted retrofit of the drive system";

// carousel <images> 
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
    <link rel="stylesheet" href="successtoryText.css">
    <meta charset="UTF-8">
    <title>CTRL Engineering</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* ---TEXT CONTAINER --- */
        .container {
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

        @media (min-width: 2000px) {
            .container {
                max-width: 50%;
                margin: -590px auto 0 auto;
                background:
                    <?php echo $container_color; ?>
                ;
                min-height: 200vh;
                padding: 200px;
                overflow: visible;
            }
        }


        h1 {
            margin-top: 0;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background: <//?php echo $bg_color; ?//>; /* Background next to white container */
            background-image: url('<?php echo $bg_image; ?>');
            overflow-x: hidden;
        }

        /* --- BANNER --- */
        .banner {
            width: 100vw;
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
            <p class="last"><b>TIME PERIOD</b> <br> <?php echo $id_TimePeriod ?> </p>

        </div>

        <div class="toggle-arrow" id="toggleBtn">
            <span class="arrow arrow-icon">‹</span>
            <span class="arrow-text">ID CARD</span>
        </div>

    </div>
    <!-- CONTENT -->
    <div class="container">

        <!-- Long story short -->
        <section class="text-section">

            <h2 class="custom-highlight"> <b>Long story short</b></h2>

            <p> <?php echo $longStoryShort ?> </p>
            <br>
        </section>



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
                <!-- ARROWS LAYER CAROUSEL -->
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

        <!-- QUOTE -->
        <blockquote class="quote">
            <p>
                “<?php echo $quote; ?>”
            </p>
            <p class="author">- <?php echo $quoteAuthor; ?></p>
        </blockquote>


        <!-- FLEX CONT TXT & IMAGE -->
        <section class="text-section">
            <h2 class="custom-highlight">Why it matters to you?</h2>
            <div class="flex-container-img">
                <div class="text">
                    <p>
                        <?php echo $whyIt_matters; ?>
                    </p>
                </div>

                <div class="image">
                    <img src="image6.jpg" alt="image">
                </div>
            </div>
        </section>

        <!-- FLEX CONT TXT & TXT -->
        <section class="text-section">
            <div class="flex-container-column-txt">
                <div class="col-left">
                    <h2 class="custom-highlight">
                        The Challenge: 
                    </h2>
                    <br>
                    <h3 class="custom-highlight">
                        <?php echo $challenge_title; ?> 
                    </h3>
                    <br>
                    <p>
                        <?php echo $challenge; ?>
                    </p>
                    
                </div>

                <div class="col-right">
                    <h2 class="custom-highlight">
                        The Solution: 
                    </h2>
                    <br>
                    <h3 class="custom-highlight">
                        <?php echo $solution_title; ?> 
                    </h3>
                    <br>
                    <p>
                        <?php echo $solution; ?>
                    </p>
                </div>
            </div>
        </section>

        
        <!-- JavaScript Carousel-->
        <script>
            let index = 0;
            const track = document.querySelector(".track");
            const items = document.querySelectorAll(".item");
            const total = items.length;
            function update() {

                let center = index + 1;
                if (center >= total) center = 0;

                const offset = -(index * (100)); /* 100% per image | FOR MORE IMAGES CHANGE HERE*/
                track.style.transform = `translateX(${offset}%)`;
            }
            function next() {
                index++;
                if (index > total - 1) index = 0; /* total - 1 => 1 image per | FOR MORE IMAGES CHANGE HERE*/
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
            btn.onclick = () => {
            idCard.classList.toggle("collapsed");
            if (idCard.classList.contains("collapsed")) {
                btn.style.marginLeft = "-265px";
            } 
            else {
                btn.style.marginLeft = "0px";
            }
            };
            function syncIdCardHeight() {
                const arrow = document.getElementById("toggleBtn");
                console.log(arrow.offsetWidth, arrow.offsetHeight, getComputedStyle(arrow).display, getComputedStyle(arrow).visibility, getComputedStyle(arrow).opacity);
                const overlapOffset = -36;
                const card = document.querySelector('.id-card');
                if (!card) return;
                const title = card.querySelector('.id-title');
                const items = Array.from(card.querySelectorAll('.id-content > p'));
                const titleH = title ? title.offsetHeight : 0;
                const itemsH = items.reduce((sum, item) => sum + item.offsetHeight, 0);
                // Add padding from .id-content
                const contentPadding = 15 + 20; // top/bottom + left/right from CSS
                card.style.height = (titleH + itemsH + contentPadding + overlapOffset) + 'px';
            }
            // Wait for all images to load
            window.addEventListener('load', syncIdCardHeight);
            // Recalculate on resize
            window.addEventListener('resize', syncIdCardHeight);
            // Also run immediately in case everything is cached
            syncIdCardHeight();
        </script>


    </div>

</body>

</html>