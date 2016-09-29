<!DOCTYPE html>
<html>

    <body>

    <head>

        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>

    </head>
    <?php
    $start = true;
    include ("header.php");

    ?>

	<!--  Vertikales Menü -->

	<div id = "verticalMenu">
		<ul>
			<li><a href="rosen.php">Rosen</a></li>
			<li><a href="tulpen.php">Tulpen</a></li>
			<li><a href="veilchen.php">Veilchen</a></li>
			<li><a href="azaleen.php">Azaleen</a></li>
			<li><a href="dahlien.php">Dahlien</a></li>

		</ul>
	</div>
	<!--  Vertikales Menü ENDE -->

	<!--  Slideshow  -->

	<div id = "slideshow">
		<img class="slideshowImages" src="/resources/slideshow2.jpg">
		<img class="slideshowImages" src="/resources/slideshow3.jpg">
		<img class="slideshowImages" src="/resources/fagus-sylvatica-detail-web-02.jpg">
	</div>
	<script type="text/javascript" src="slideshow.js"></script>
	<!--  Slideshow ENDE -->

	<!--  ProductView (die 4 kleinen Bilder auf der Startseite) -->

	<div id = "productView">
		<div id ="productViewDiv">
			<img class="productViewImages" src="/resources/echter-winter-jasmin_jasminum-nudiflorum-1.jpg">
		</div>

		<div id ="productViewDiv">
			<img class="productViewImages" src="/resources/nelken-pink-kisses-3.jpg">
		</div>

		<div id ="productViewDiv">
			<img class="productViewImages" src="/resources/rosa-midsummer-web-01.jpg">
		</div>

		<div id ="productViewDiv">
			<img class="productViewImages" src="/resources/pennisetum-alopecuroides-hameln-web-02.jpg">
		</div>
	</div>
	<script type="text/javascript" src="makeImagesBigger.js"></script>
	<!--  ProductView ENDE -->

	<!--  Videos -->

	<script type="text/javascript" src="video.js"></script>

	<div class = "videoView">
		<video controls="true">
    		<source src="https://www.youtube.com/watch?v=xbjoXabSybs&html5=True" type="video/mp4" />
		</video>

		<video controls="true">
    		<source src="https://www.youtube.com/watch?v=1_Ni5tBJpkk&html5=True" type="video/mp4" />
		</video>
		<video controls="true">
    		<source src="https://www.youtube.com/watch?v=hy38fNZQ_Ag&html5=True" type="video/mp4" />
		</video>
		<video controls="true">
    		<source src="https://www.youtube.com/watch?v=4HSlb-CeOR0&html5=True" type="video/mp4" />
		</video>
	</div>
	<!-- Videos ENDE -->


	<?php include ("footer.php");?>


    </body>
</html>
