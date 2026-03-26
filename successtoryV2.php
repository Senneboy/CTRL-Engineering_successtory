<!DOCTYPE html>
<?php
$lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor nunc semper erat mattis, quis facilisis nisl venenatis. Maecenas molestie placerat dignissim. Nam nec molestie ex. Sed quis ligula ultrices, finibus neque venenatis, viverra ex. Aenean quis suscipit diam. Aliquam tincidunt id mauris ut rutrum. Aenean tincidunt magna metus, at auctor tortor rutrum et. Maecenas neque mauris, feugiat non dolor sed, mollis faucibus lectus. Phasellus eget metus nec nibh gravida hendrerit sollicitudin eu eros. Vivamus sollicitudin nisi augue, vitae blandit lorem venenatis eget. Nulla bibendum pretium dolor gravida mattis. Etiam semper risus in tellus accumsan ultrices. Curabitur cursus sapien ut dui lobortis, sit amet dignissim arcu elementum.";
$title = "Yummy Bakery";
$description = "Retrofit of a baking plate drive System";
$industry = "FOOD AND BEVERAGE";
$banner_image = "banner.jpg";
$bg_color = "#040404";
$bg_image = "hexagon.svg";
$container_color = "#ffffff";
?>

<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Banner</title>

    <style>
        /* ---TEXT CONTAINER --- */
        .containerNew {
            max-width: 900px;      /* width white container */
            margin: 0 auto;        /* "50px auto" for space between banner and container  + "0 auto" center container */
            background: <?php echo $container_color; ?>;
            min-height: 100vh; /* container filles whole screen (vertical) */
            padding: 200px;         /* padding -> text 40px to the right */
            }

            h1 {
            margin-top: 0;
            }




        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /*background: <?php echo $bg_color; ?>; Background next to white container */
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
            align-items: center;
            color: white;
            overflow: visible;
            box-shadow: 0 12px 25px rgba(0,0,0,0.18);
        }




        .banner-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.5); /* Makes banner image darker */
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

        .banner-text h1 {
            font-size: 60px;
            margin: 0 0 15px 0;
        }

        .banner-text h2,
        .banner-text h3 {
            margin: 0;
        }
        


        /* SHAPE INDENT IN BANNER*/
        .banner-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30px;
        }
        .banner-shape {
            display: block;
            line-height: 0;

        }

        .banner-shape polygon {
            fill: <?php echo $container_color; ?>;
        }
        
        /* --- TEXT SECTION --- */
        .text-section {
            background: <?php echo $container_color; ?>;
            padding: 0px 0; /* space between banner and text */
            
        }
        .text-section > * {
            max-width: 1200px;
            margin-left: 60px; /* indent */
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

    <svg class="banner-shape" viewBox="0 0 1242.21 104.88" xmlns="http://www.w3.org/2000/svg">
        <polygon points="0 0 60.55 104.88 1181.66 104.88 1242.21 0"
                 transform="rotate(180, 621.105, 52.44)">
        </polygon>

    </svg>
<!-- <?php echo $container_color; ?> -->
</section>

<!-- CONTENT -->
<div class="containerNew">

    <section class="text-section">
        <h2> <b>Long story short</b></h2>
        
        <p> <?php echo $lorem_ipsum; ?> </p>
        
    </section>

</div>

</body>
</html>