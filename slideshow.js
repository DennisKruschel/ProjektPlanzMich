// Regelt die slideshow auf der Startseite, es können beliebig viele Bilder hinzugefügt werden,
// diese einfach in index.php im div "slideshow" einfügen

var slideIndex = 0;
carousel();

function carousel() {
	var i;
	var x = document.getElementsByClassName("slideshowImages");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	slideIndex++;
	if (slideIndex > x.length) {slideIndex = 1}
	   x[slideIndex-1].style.display = "block";
	   setTimeout(carousel, 4000);
	}