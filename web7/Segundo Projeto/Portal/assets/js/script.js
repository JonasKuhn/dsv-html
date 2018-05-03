var slideitem = 0;

var teste = 1;
window.onload = function() {
    setInterval(passarSlide, 5000);

    var slidewidth = document.getElementById("slideshow").offsetWidth;

    document.getElementById("bolinha"+ teste).style.backgroundColor = "red";

    var objs = document.getElementsByClassName("slide");
    var tamanho = objs.length;
    for (var i = 0; i < tamanho; i++) {
        objs[i].style.width = slidewidth + "px";
    }
}

function passarSlide() {
	var slidewidth = document.getElementById("slideshow").offsetWidth;

	if(slideitem > 3){
		document.getElementById("bolinha" + slideitem).style.backgroundColor = "#CCC";
		slideitem = 0;
	} else{
		document.getElementById("bolinha" + slideitem).style.backgroundColor = "#CCC";
		slideitem++;
	}
	if(teste > 4){
		teste=1;
	}else{
		document.getElementById("bolinha" + teste).style.backgroundColor = "red";
		teste++;
	}

	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-" + (slidewidth * slideitem)+"px";
}

function mudarSlide(pos){
	slideitem = pos;
	
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-" + (slidewidth * slideitem)+"px";
}