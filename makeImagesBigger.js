// Sorgt dafür das die Bilder auf der Startseite größer werden wenn man hovert

$(".productViewImages").hover(makeBigger, returnToOriginalSize);

function makeBigger(){
	$(this).css({height: "+=40px", width: "+=40px", top:"-=20px" , left:"-=20px"});

}
function returnToOriginalSize(){
	$(this).css({height:"", width:"", top:"", left:""});
}