//counter for change image name
var step = 1;
function slideshow () {
	if(!document.images){
		return
	}
	//change image src
	document.images.slide.src = eval("image" + step + ".src");
	//change step value 
	if(step < 4){
		step ++;
	}else{
		step = 1;
	}
	//set time for change image in slideshow
	setTimeout("slideshow()", 2000);
}
slideshow();