<head>
<link rel="icon" type="image/jpg" href="\images\logo.jpg"/>
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>

<center>

<!-- Load the NAVBAR from header.php file, this save duplicate navbar code and allows updating navbar in one place -->
<div class="navbarblock">
<nav>
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."";
	include($IPATH."header.php"); ?>
</nav>
</div>

<!-- Content under here will be in MAINBLOCK pain and automatically expand -->

<div class="mainblock">

<div class="container">
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="\images\cars\car1.jpg" alt=""></div>
    <div class="swiper-slide"><img src="\images\cars\car2.jpg" alt=""></div>
    <div class="swiper-slide"><img src="\images\cars\car3.jpg" alt=""></div>
    <div class="swiper-slide"><img src="\images\cars\car4.jpg" alt=""></div>
	  <div class="swiper-slide"><img src="\images\cars\car5.jpg" alt=""></div>

  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>
</div>

<script src="swiper-bundle.min.js"></script>

<script>
	const swiper = new Swiper('.swiper', {
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
  loop: true,

  pagination: {
    el: '.swiper-pagination',
	clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>

</div>

<div class="mainblock">

</div>

</body>
</html>