$(document).ready(function() {

$('[href="#"]').attr("href", "javascript:;");
$('.menu-Bar').click(function() {
$(this).toggleClass('open');
$('.menuWrap').toggleClass('open');
$('body').toggleClass('ovr-hiddn');
});
function alphaOnly(event) {
var key = event.keyCode;
return ((key >= 65 && key <= 90) || key == 8);
};
$('.counter-box span').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 6000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});
$('.what-we-do-slider').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 5,
centerPadding: '30px',
centerMode: true,
responsive: [
{
breakpoint: 1600,
settings: {
slidesToShow: 4,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 767,
settings: {
slidesToShow: 1,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: false
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
$('.brands-slider').slick({
dots: false,
infinite: true,
autoplay:true,
arrows: false,
autoplaySpeed:0,
speed:8000,
cssEase: 'linear',
Swiping: true,
slidesToShow: 6,
pauseOnHover:false,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1601,
settings: {
slidesToShow: 5,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 767,
settings: {
slidesToShow: 3,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: false
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
$('.case-st-slider').slick({
dots: false,
// vertical:true,
speed: 300,
fade: true,
slidesToShow: 1,
responsive: [
{
breakpoint: 767,
settings: {
dots:true,
}
}
]
});
$('.reason-slider').slick({
dots: false,
arrows:true,
// vertical:true,
speed: 300,
slidesToShow: 1,
});


$('.two-d-animation-slider').slick({
dots: false,
arrows:true,
centerPadding: '40px',
slidesToShow: 3,
responsive: [
{
breakpoint: 767,
settings: {
slidesToShow: 1,
dots: true,

centerPadding: '0px'

}
}
]
});
$('.testi-slider').slick({
dots: false,
fade: true,
slidesToShow: 1,
responsive: [

{

breakpoint: 767,
settings: {
dots: true


}
}
]
});
$('.folio-slider').slick({
  useTransform: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 14000,
  pauseOnHover: false,
  cssEase: 'linear',
  variableWidth: true

});

$('.folio-slider2').slick({
dots: true,
arrows:false,
slidesToShow: 5,
responsive: [
{
breakpoint: 1600,
settings: {
slidesToShow: 4,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 767,
settings: {
slidesToShow: 1,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: true
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
$('.folio-slider3').slick({
dots: true,
arrows:false,
slidesToShow: 5,
responsive: [
{
breakpoint: 1600,
settings: {
slidesToShow: 5,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 767,
settings: {
slidesToShow: 1,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,
dots: true
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
$('.slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: true,
asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
slidesToShow: 3,
vertical:true,
slidesToScroll: 1,
centerMode: true,
asNavFor: '.slider-for',
dots: false,
focusOnSelect: true,
responsive: [
{
breakpoint: 1601,
settings: {
slidesToShow: 3,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 767,
settings: {
slidesToShow: 3,
vertical:false,
dots: true,
arrows:false,
centerPadding: '0px',
slidesToScroll: 1,
infinite: true,

}
}
]
});
//         $('.slider-for-two').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
//   asNavFor: '.slider-nav-two'
// });
// $('.slider-nav-two').slick({
//   slidesToShow: 1,
//   vertical:true,
//   slidesToScroll: 1,
//   asNavFor: '.slider-for-two',
//   dots: false,
//   focusOnSelect: true
// });
$('[data-targetit]').on('click', function(e) {
$(this).addClass('active');
$(this).siblings().removeClass('active');
var target = $(this).data('targetit');
$('.' + target).siblings('[class^="box-"]').hide();
$('.' + target).fadeIn();
$('.folio-slider').slick('setPosition');
});


});
$(document).on("click",".popup-btn",function() {
$('.popupform-main').addClass('active');
// $('body').addClass('o-hidden');
$('.overlay-bg').fadeIn(500);
$('.close-btn').on('click', function(){
$('.popupform-main').removeClass('active');
// $('body').removeClass('o-hidden');
$('.overlay-bg').fadeOut(500);
});
$('.overlay-bg').click(function() {
$('popupform-main').removeClass('active');
// $('body').removeClass('o-hidden');
$('.overlay-bg').fadeOut(500);
});
});





/* RESPONSIVE JS */
if ($(window).width() > 766) {
jQuery(function() {
ParallaxScroll.init();
});
var ParallaxScroll = {
/* PUBLIC VARIABLES */
showLogs: false,
round: 1000,
/* PUBLIC FUNCTIONS */
init: function() {
this._log("init");
if (this._inited) {
this._log("Already Inited");
this._inited = true;
return;
}
this._requestAnimationFrame = (function(){
return  window.requestAnimationFrame       ||
window.webkitRequestAnimationFrame ||
window.mozRequestAnimationFrame    ||
window.oRequestAnimationFrame      ||
window.msRequestAnimationFrame     ||
function(/* function */ callback, /* DOMElement */ element){
window.setTimeout(callback, 1000 / 60);
};
})();
this._onScroll(true);
},
/* PRIVATE VARIABLES */
_inited: false,
_properties: ['x', 'y', 'z', 'rotateX', 'rotateY', 'rotateZ', 'scaleX', 'scaleY', 'scaleZ', 'scale'],
_requestAnimationFrame:null,
/* PRIVATE FUNCTIONS */
_log: function(message) {
if (this.showLogs) console.log("Parallax Scroll / " + message);
},
_onScroll: function(noSmooth) {
var scroll = jQuery(document).scrollTop();
var windowHeight = jQuery(window).height();
this._log("onScroll " + scroll);
jQuery("[data-parallax]").each(jQuery.proxy(function(index, el) {
var jQueryel = jQuery(el);
var properties = [];
var applyProperties = false;
var style = jQueryel.data("style");
if (style == undefined) {
style = jQueryel.attr("style") || "";
jQueryel.data("style", style);
}
var datas = [jQueryel.data("parallax")];
var iData;
for(iData = 2; ; iData++) {
if(jQueryel.data("parallax"+iData)) {
datas.push(jQueryel.data("parallax-"+iData));
}
else {
break;
}
}
var datasLength = datas.length;
for(iData = 0; iData < datasLength; iData ++) {
var data = datas[iData];
var scrollFrom = data["from-scroll"];
if (scrollFrom == undefined) scrollFrom = Math.max(0, jQuery(el).offset().top - windowHeight);
scrollFrom = scrollFrom | 0;
var scrollDistance = data["distance"];
var scrollTo = data["to-scroll"];
if (scrollDistance == undefined && scrollTo == undefined) scrollDistance = windowHeight;
scrollDistance = Math.max(scrollDistance | 0, 1);
var easing = data["easing"];
var easingReturn = data["easing-return"];
if (easing == undefined || !jQuery.easing|| !jQuery.easing[easing]) easing = null;
if (easingReturn == undefined || !jQuery.easing|| !jQuery.easing[easingReturn]) easingReturn = easing;
if (easing) {
var totalTime = data["duration"];
if (totalTime == undefined) totalTime = scrollDistance;
totalTime = Math.max(totalTime | 0, 1);
var totalTimeReturn = data["duration-return"];
if (totalTimeReturn == undefined) totalTimeReturn = totalTime;
scrollDistance = 1;
var currentTime = jQueryel.data("current-time");
if(currentTime == undefined) currentTime = 0;
}
if (scrollTo == undefined) scrollTo = scrollFrom + scrollDistance;
scrollTo = scrollTo | 0;
var smoothness = data["smoothness"];
if (smoothness == undefined) smoothness = 30;
smoothness = smoothness | 0;
if (noSmooth || smoothness == 0) smoothness = 1;
smoothness = smoothness | 0;
var scrollCurrent = scroll;
scrollCurrent = Math.max(scrollCurrent, scrollFrom);
scrollCurrent = Math.min(scrollCurrent, scrollTo);
if(easing) {
if(jQueryel.data("sens") == undefined) jQueryel.data("sens", "back");
if(scrollCurrent>scrollFrom) {
if(jQueryel.data("sens") == "back") {
currentTime = 1;
jQueryel.data("sens", "go");
}
else {
currentTime++;
}
}
if(scrollCurrent<scrollTo) {
if(jQueryel.data("sens") == "go") {
currentTime = 1;
jQueryel.data("sens", "back");
}
else {
currentTime++;
}
}
if(noSmooth) currentTime = totalTime;
jQueryel.data("current-time", currentTime);
}
this._properties.map(jQuery.proxy(function(prop) {
var defaultProp = 0;
var to = data[prop];
if (to == undefined) return;
if(prop=="scale" || prop=="scaleX" || prop=="scaleY" || prop=="scaleZ" ) {
defaultProp = 1;
}
else {
to = to | 0;
}
var prev = jQueryel.data("_" + prop);
if (prev == undefined) prev = defaultProp;
var next = ((to-defaultProp) * ((scrollCurrent - scrollFrom) / (scrollTo - scrollFrom))) + defaultProp;
var val = prev + (next - prev) / smoothness;
if(easing && currentTime>0 && currentTime<=totalTime) {
var from = defaultProp;
if(jQueryel.data("sens") == "back") {
from = to;
to = -to;
easing = easingReturn;
totalTime = totalTimeReturn;
}
val = jQuery.easing[easing](null, currentTime, from, to, totalTime);
}
val = Math.ceil(val * this.round) / this.round;
if(val==prev&&next==to) val = to;
if(!properties[prop]) properties[prop] = 0;
properties[prop] += val;
if (prev != properties[prop]) {
jQueryel.data("_" + prop, properties[prop]);
applyProperties = true;
}
}, this));
}
if (applyProperties) {
if (properties["z"] != undefined) {
var perspective = data["perspective"];
if (perspective == undefined) perspective = 800;
var jQueryparent = jQueryel.parent();
if(!jQueryparent.data("style")) jQueryparent.data("style", jQueryparent.attr("style") || "");
jQueryparent.attr("style", "perspective:" + perspective + "px; -webkit-perspective:" + perspective + "px; "+ jQueryparent.data("style"));
}
if(properties["scaleX"] == undefined) properties["scaleX"] = 1;
if(properties["scaleY"] == undefined) properties["scaleY"] = 1;
if(properties["scaleZ"] == undefined) properties["scaleZ"] = 1;
if (properties["scale"] != undefined) {
properties["scaleX"] *= properties["scale"];
properties["scaleY"] *= properties["scale"];
properties["scaleZ"] *= properties["scale"];
}
var translate3d = "translate3d(" + (properties["x"] ? properties["x"] : 0) + "px, " + (properties["y"] ? properties["y"] : 0) + "px, " + (properties["z"] ? properties["z"] : 0) + "px)";
var rotate3d = "rotateX(" + (properties["rotateX"] ? properties["rotateX"] : 0) + "deg) rotateY(" + (properties["rotateY"] ? properties["rotateY"] : 0) + "deg) rotateZ(" + (properties["rotateZ"] ? properties["rotateZ"] : 0) + "deg)";
var scale3d = "scaleX(" + properties["scaleX"] + ") scaleY(" + properties["scaleY"] + ") scaleZ(" + properties["scaleZ"] + ")";
var cssTransform = translate3d + " " + rotate3d + " " + scale3d + ";";
this._log(cssTransform);
jQueryel.attr("style", "transform:" + cssTransform + " -webkit-transform:" + cssTransform + " " + style);
}
}, this));
if(window.requestAnimationFrame) {
window.requestAnimationFrame(jQuery.proxy(this._onScroll, this, false));
}
else {
this._requestAnimationFrame(jQuery.proxy(this._onScroll, this, false));
}
}
};
}
$(document).ready(function() {
$('#popupcountrycode').val("+1");
$('#countrycode').val("+1");
$('#homeformcountry').change(function() {
var thisval = $(this).children('option:selected').val();
var thiscode = $(this).children('option:selected').attr('data-abbr');
$('#countrycode').val("+" + thisval);
if (thiscode == 'CA') {
$(this).siblings('span').removeClass();
$(this).siblings('span').addClass('fgca');
} else {
$(this).siblings('span').removeClass();
$(this).siblings('span').addClass('fg' + thisval);
}
});
$('#popupformcountry').change(function() {
var thisval = $(this).children('option:selected').val();
var thiscode = $(this).children('option:selected').attr('data-abbr');
$('#popupcountrycode').val("+" + thisval);
if (thiscode == 'CA') {
$(this).siblings('span').removeClass();
$(this).siblings('span').addClass('fgca');
} else {
$(this).siblings('span').removeClass();
$(this).siblings('span').addClass('fg' + thisval);
}
});
$('.countrylist').change(function() {
var thisval = $(this).children('option:selected').val();
var thiscode = $(this).children('option:selected').attr('data-abbr');
$('#countrycode').val("+" + thisval);
$('.countrycode').val("+" + thisval);
if (thiscode == 'CA') {
$(this).siblings('span').removeClass();
$(this).siblings('span').addClass('fgca');
} else {
$(this).siblings('span').removeClass();
$(this).siblings('span').addClass('fg' + thisval);
}
});
});



if ($(window).width() < 800) {


    $('.pricing-slider').slick({
dots: true,
arrows:false,
slidesToShow: 1,
});

  }