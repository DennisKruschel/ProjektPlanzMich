<!DOCTYPE html>
<html>

    <body>

    <head>

        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>

    </head>
    <?php

    include("header.php");

    ?>
    <!-- Erstellt die Grundmaske jeder Produktseite.
		Bei der Erstellung einer neuen Produktseite müssen die
		Variablen:
		$name
		$img
		$price
		$description
		überschrieben werden.
     -->

     <!--  Legt das Grundlayout fest -->

		<h1><?php echo $name?></h1>
		<img style="margin-right:5%;"class = "productImage" src = <?php echo $img?> >
		<p>Preis ab: <?php echo $price?></p>

		<!-- Erstellt die Bewertungssterne -->

		<div  class="rating">
		<span>☆</span>
		<span>☆</span>
		<span>☆</span>
		<span>☆</span>
		<span>☆</span>
		</div>
		<br>
		<p><?php echo $description?></p>
		<button class = "buyButton">Kaufen!</button>

    <?php include("footer.php");?>
    </body>
 </html>