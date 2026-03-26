<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>3-up Auto Carousel</title>

  <style>
    body {
      padding: 40px;
      font-family: Arial;
      background: #f5f5f5;
    }

    /* ===== WRAPPER ===== */
    .wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
    }

    /* ===== VIEWPORT ===== */
    .window {
      width: 900px;
      overflow: hidden;
    }

    /* ===== TRACK ===== */
    .track {
      display: flex;
      transition: transform 0.9s ease;
    }

    /* ===== ITEM ===== */
    .item {
      flex: 0 0 33.333%;
      padding: 0 10px;
      box-sizing: border-box;
      transition: transform 0.3s ease;
    }

    .item img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 5px;
      transform: scale(0.9);
    }

    /* middelste groter */
    .item.active-center img {
      transform: scale(1.2);
    }

    /* ===== HEXAGON BUTTONS ===== */
    .control {
      cursor: pointer;
    }

    .hexagon {
      fill: transparent;
      stroke: #ece318;
      stroke-width: 3;
      stroke-linejoin: round;
    }

    .arrow {
      fill: #000000;
      font-size: 28px;
      font-weight: bold;
      text-anchor: middle;
      dominant-baseline: middle;
      font-family: Arial;
      pointer-events: none;
    }

    /* hover */
    .control:hover .hexagon {
      fill: #ece318;
      stroke: #ece318;
    }

    .control:hover .arrow {
      fill: #000;
    }
  </style>
</head>

<body>

  <div class="wrapper">

    <!-- LEFT -->
    <div class="control" id="prev">
      <svg width="70" height="70" viewBox="0 0 58 50">
        <g transform="rotate(90 29 25)">
          <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
        </g>
        <text x="29" y="27" class="arrow">‹</text>
      </svg>
    </div>

    <!-- WINDOW -->
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

    <!-- RIGHT -->
    <div class="control" id="next">
      <svg width="70" height="70" viewBox="0 0 58 50">
        <g transform="rotate(90 29 25)">
          <polygon class="hexagon" points="29,1 51,13 51,37 29,49 7,37 7,13" />
        </g>
        <text x="29" y="27" class="arrow">›</text>
      </svg>
    </div>

  </div>

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

    /* ===== AUTO PLAY PER 1 IMAGE ===== */
    setInterval(next, 2500);

    update();
  </script>

</body>

</html>