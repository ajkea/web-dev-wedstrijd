@extends('layouts.app')

<link href="{{ asset('css/hero-image.css') }}" rel="stylesheet">
<div class="hero-image">
    <div class="image-slide layer1">
    <img src="https://humorlessproductions.files.wordpress.com/2014/07/concert-crowd-crop.jpg" alt="1st background">    
    </div>
    <div class="image-slide layer2">
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/PNG_transparency_demonstration_1.png" alt="2d dices png">        
    </div>
    <div class="image-slide layer3">
    <img src="http://pngimg.com/uploads/grass/grass_PNG4930.png" alt="3rd">        
    </div>
</div>

<script>
    var myIndex = 0;
    carousel();

    // function carousel() {
    //     var i;
    //     var x = document.getElementsByClassName("image-slide");
    //     for (i = 0; i < x.length; i++) {
    //     x[i].style.display = "none";  
    //     }
    //     myIndex++;
    //     if (myIndex > x.length) {myIndex = 1}    
    //     x[myIndex-1].style.display = "block";  
    //     setTimeout(carousel, 1200);    
    // }
</script>