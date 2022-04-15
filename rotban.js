window.onload = choosePic;

var adImages = new Array("images/slideshow/Focus29.png", "images/slideshow/Focus25.png","images/slideshow/Focus22.png","images/slideshow/Focus23.png","images/slideshow/Focus24.png","images/slideshow/Focus19.png", "images/slideshow/Focus20.png", "images/slideshow/Focus21.png","images/slideshow/Focus1.png","images/slideshow/Focus2.png","images/slideshow/Focus3.png", "images/slideshow/Focus4.png","images/slideshow/Focus5.png","images/slideshow/Focus6.png", "images/slideshow/Focus7.png","images/slideshow/Focus8.png","images/slideshow/Focus9.png", "images/slideshow/Focus10.png","images/slideshow/Focus11.png","images/slideshow/Focus12.png", "images/slideshow/Focus13.png","images/slideshow/Focus14.png","images/slideshow/Focus15.png", "images/slideshow/Focus16.png","images/slideshow/Focus17.png","images/slideshow/Focus18.png");

function rotate() {
	thisAd++;
	if (thisAd == adImages.length) {
		thisAd = 0;
	}
	document.getElementById("adBanner").src = adImages[thisAd];

	setTimeout("rotate()", 26 * 800);
}


function choosePic() {
	thisAd = Math.floor((Math.random() * adImages.length));
	document.getElementById("adBanner").src = adImages[thisAd];
	
	rotate();
}
