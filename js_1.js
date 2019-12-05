// JavaScript Document
var i=0;
var play_pause=1;
var gallery_image=[
	'<img class="gallery" src="images/img1.jpg" alt="1">',
	'<img class="gallery" src="images/img2.jpg" alt="2">',
	'<img class="gallery" src="images/img3.jpg" alt="3">',
	'<img class="gallery" src="images/img4.jpg" alt="4">',
	'<img class="gallery" src="images/img5.jpg" alt="5">'
];
document.getElementById("body_upper_left_box").onmouseover=pause;
function pause(){
	play_pause=0;	
	document.getElementById("gallery_left_arrow").style.opacity=".6";
	document.getElementById("gallery_right_arrow").style.opacity=".6";
}
document.getElementById("body_upper_left_box").onmouseout=play;
function play(){
	play_pause=1;
	document.getElementById("gallery_left_arrow").style.opacity=".1";
	document.getElementById("gallery_right_arrow").style.opacity=".1";	
}
function slider(){
	if(play_pause==1){
		i+=1;
		if(i==5){i=0};
		document.getElementById("gallery_box").innerHTML=gallery_image[i];
		document.getElementById("bg_gallery_box").innerHTML=gallery_image[i];
	}
}
document.getElementById("gallery_left_arrow").onclick=leftSlide;
function leftSlide(){
	i+=1;
	if(i==5){i=0}
	document.getElementById("gallery_box").innerHTML=gallery_image[i];
	document.getElementById("bg_gallery_box").innerHTML=gallery_image[i];
}
document.getElementById("gallery_right_arrow").onclick=rightSlide;
function rightSlide(){
	i-=1;
	if(i==-1){i=4}
	document.getElementById("gallery_box").innerHTML=gallery_image[i];	
	document.getElementById("bg_gallery_box").innerHTML=gallery_image[i];
}
$(function() {

});
