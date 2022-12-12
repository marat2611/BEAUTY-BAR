// document.getElementById('slider-left').onclick=sliderLeft;
autoSlider ()
left=0;
var timer;

function autoSlider () {
    timer=setTimeout(function() {
        var polosa=document.getElementById ('polosa');
        left=left-1142;
        if (left<-2284) {left=0}
        polosa.style.left=left+'px';
        autoSlider ()
    },4000) 
}