<header>
	<a  style="text-decoration: none"; href="index.php"><p id="logotext">
		<strong>Pflanzdich</strong>
	</p></a>
	<div>
		<img id="logoPicture" src="/resources/logo.jpg">
	</div>

	<nav>
		<ul>

			<?php
				/* Erstellt das Header Menü:
				 * Checkt zu erst ob man sich auf der Startseite befindet
				 * Befindet man sich auf der Startseite, blende den ersten Punkt
				 * des horizontalen Menüs aus.
				 * Danach wird geguckt auf welcher Produktseite man sich gerade befindet
				 * diese Wird dann im Produktmenü grau hinterlegt
				 */
				if ($start) {
 					echo '<li><a>Produkte:</a></li>';
				}else {
					echo '<li class="submenu"><a>Produkte</a>
				<ul>';
				if($name==="Rosen"){
					echo '<li style="background-color:gray"><a href="rosen.php">Rosen</a></li>';
				}else {
					echo '<li><a href="rosen.php">Rosen</a></li>';
				}
				if($name==="Tulpen"){
					echo '<li style="background-color:gray"><a href="tulpen.php">Tulpen</a></li>';
				}else {
					echo '<li><a href="tulpen.php">Tulpen</a></li>';
				}
				if($name==="Veilchen"){
					echo '<li style="background-color:gray"><a href="veilchen.php">Veilchen</a></li>';
				}else{
					echo '	<li><a href="veilchen.php">Veilchen</a></li>';
				}
				if($name==="Azaleen"){
					echo '<li style="background-color:gray"><a href="azaleen.php">Azaleen</a></li>';
				}else{
					echo '<li><a href="azaleen.php">Azaleen</a></li>';
				}if($name==="Dahlien"){
					echo '<li style="background-color:gray"><a href="dahlien.php">Dahlien</a></li>';
				}else{
					echo '<li><a href="dahlien.php">Dahlien</a></li>';
				}
					echo '</ul></li>';
				};
				echo '
				<li class="submenu"><a>Über uns</a>
				<ul>';
				if($name==="Geschichte"){
					echo '<li style="background-color:gray"><a href="geschichte.php">Geschichte</a></li>';
				}else{
					echo'<li><a href="geschichte.php">Geschichte</a></li>';
				}if($name==="Philosophie"){
					echo '<li style="background-color:gray"><a href="philosophie.php">Philosophie</a></li>';
				}else{
					echo '<li><a href="philosophie.php">Philosophie</a></li>';
				}if($name==="Lieferanten"){
					echo '<li style="background-color:gray"><a href="lieferanten.php">Lieferanten</a></li>';
				}else{
					echo '<li><a href="lieferanten.php">Lieferanten</a></li>';
				}
				echo '


				</ul>
				</li>
				<li class="submenu"><a>Angebote</a>
				<ul>
				<li class="submenu"><a>Bestseller</a>
				<ul>
				<li><a href="underConstruction.php">Heckenpflanzen</a></li>
				<li><a href="underConstruction.php">Dornenbüsche</a></li>
				</ul>
				</li>
				</ul>
				</li>
				<li><a href="underConstruction.php">Aktuelles</a></li>

				';
				?>



		</ul>
	</nav>
    </header>