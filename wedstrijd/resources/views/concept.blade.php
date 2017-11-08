@extends('layouts.app')
<div class="sp-slideshow">
    <div class="nav-hero-image">
		<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
		<label for="button-1" class="button-label-1"></label>
				
		<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
		<label for="button-2" class="button-label-2"></label>
				
		<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
		<label for="button-3" class="button-label-3"></label>
	
		<div class="sp-content">
			<div class="sp-parallax-bg one"></div>
			<div class="sp-parallax-bg two"></div>
			<div class="sp-parallax-bg three"></div>
			<ul class="sp-slider clearfix">
				<li><img src="{{ url('img/hero-image/kanyewest.png')}}" alt="image01" /></li>
				<li><img src="{{ url('img/hero-image/coldplay.png')}}" alt="image02" /></li>
				<li><img src="{{ url('img/hero-image/macklemore.png')}}" alt="image03" /></li>
			</ul>
	    </div><!-- sp-content -->
    </div>
</div><!-- sp-slideshow -->
            
<style>
.sp-slideshow {
    padding:0;
    position: relative;
    height: 70vh;
    overflow: hidden;
}

.sp-parallax-bg {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
    overflow: hidden;
    opacity:0;
}
.sp-parallax-bg.one{
    background: url('../img/hero-image/backgroundkanyewest.jpg') repeat-x scroll 0 0;
    background-position: 0 0;
    background-size: auto 100vh;
}
.sp-parallax-bg.two{
    background: url('../img/hero-image/backgroundcoldplay.jpg') repeat-x scroll 0 0;
    background-position: 0 0;
    background-size: auto 100vh;
}
.sp-parallax-bg.three{
    background: url('../img/hero-image/backgroundmacklemore.jpg') repeat-x scroll 0 0;
    background-position: 0 0;
    background-size: auto 100vh;
}


.sp-slideshow input {
    position: absolute;
	bottom: 15px;
	left: 50%;
	width: 9px;
	height: 9px;
	z-index: 1001;
    opacity:0;
}

.sp-slideshow input + label {
    position: absolute;
    bottom: 15px;
	left: 50%;
    width: 20px;
	height: 20px;
	display: block;
	z-index: 1000;
	border: 3px solid #fff;
	border: 3px solid rgba(255,255,255,0.9);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: background-color linear 0.1s;
    -moz-transition: background-color linear 0.1s;
    -o-transition: background-color linear 0.1s;
    -ms-transition: background-color linear 0.1s;
    transition: background-color linear 0.1s;
}
.sp-slideshow input:checked + label {
	background-color: #fff;
    background-color: rgba(255,255,255,0.9);
}

.sp-selector-1, .button-label-1 {
    margin-left: -25px;
}

.sp-selector-2, .button-label-2 {
    margin-left: 0px;
}


.sp-selector-3, .button-label-3 {
    margin-left: 25px;
}


.sp-slideshow input:checked ~ .sp-content {
    -webkit-transition: background-position ease-out 1s, background-color linear 0.8s;
    -moz-transition: background-position ease-out 1s, background-color linear 0.8s;
    -o-transition: background-position ease-out 1s, background-color linear 0.8s;
    -ms-transition: background-position ease-out 1s, background-color linear 0.8s;
    transition: background-position ease-out 1s, background-color linear 0.8s;
}

.sp-slideshow input:checked ~ .sp-content .sp-parallax-bg {
    -webkit-transition: background-position cubic-bezier(0.000, 1.080, 0.305, 1) 15s, opacity linear 0.7s;
    -moz-transition: background-position cubic-bezier(0.000, 1.080, 0.305, 1)t 15s, opacity linear 0.7s;
    -o-transition: background-position cubic-bezier(0.000, 1.080, 0.305, 1)t 15s, opacity linear 0.7s;
    -ms-transition: background-position cubic-bezier(0.000, 1.080, 0.305, 1) 15s, opacity linear 0.7s;
    transition: background-position cubic-bezier(0.000, 1.080, 0.305, 1) 15s, opacity linear 0.7s;
}

input.sp-selector-1:checked ~ .sp-content.one {
    background-position: 0 0;
	background-color: #727b7f;
}

input.sp-selector-2:checked ~ .sp-content.two {
    background-position: 0% 0;
	background-color: #7f7276;
}

input.sp-selector-3:checked ~ .sp-content.three {
    background-position: 0% 0;
	background-color: #737f72;
}


input.sp-selector-1:checked ~ .sp-content .sp-parallax-bg.one {
    background-position: 30% 0;
    opacity:1;
}

input.sp-selector-2:checked ~ .sp-content .sp-parallax-bg.two {
    background-position: 50% 0;
    opacity:1;
}

input.sp-selector-3:checked ~ .sp-content .sp-parallax-bg.three {
    background-position: 70% 0;
    opacity:1;
}

.sp-slider {
    position: relative;
	left: 0;
    width: 500%;
	height: 100%;
	list-style: none;
    margin: 0;
	padding: 0;
    -webkit-transition: left ease-out 1s;
    -moz-transition: left ease-out 1s;
    -o-transition: left ease-out 1s;
    -ms-transition: left ease-out 1s;
    transition: left ease-out 1s; 
}

.sp-slider > li {
	color: #fff;
	width: 20%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	height: 100%;
	padding: 0 60px;
    float: left;
	text-align: center;
}
.sp-slider > li img{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	display: block;
	margin: 0 auto;
	padding: 40px 0 50px 0;
	max-height: 100%;
    max-width: 100%;
    top:100vh;
    padding-bottom:0;

    position:sticky;
    bottom:0px;
}
input.sp-selector-1:checked ~ .sp-content .sp-slider {
    left: 0;
}

input.sp-selector-2:checked ~ .sp-content .sp-slider {
    left: -100%;
}

input.sp-selector-3:checked ~ .sp-content .sp-slider {
    left: -200%;
}
</style>