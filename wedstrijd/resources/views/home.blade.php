@extends('layouts.app')
@section('content')
</div>
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

<div class="container">
    <section class="homepage">
            <div class="row justify-center">
                <div class="col-md-6 text-center">
                    <img class="mb-4 img-fluid" src="https://i.imgur.com/5xthSad.png" >
                </div>
                <div class="col-md-6 text-center text-md-left" >
                    <h2 class="mb-4 mt-4">Win an exclusive meeting with your favorite star</h2>
                    <p class="mb-4">As music enthousiast we like to share the possibility for everyone to visit their biggest stars. This time you have the chance to meet one of these stars: Kanye West, Macklemore or Coldplay!</p>
                    <p><a class="btn btn-outline-secondary" href="/question" role="button">Click here to enter</a></p>
                    <p>Thanks and goodluck from us at <a class="spotify" href="http://www.spotify.com">Spotify <i class="fab fa-spotify"></i></a></p>
                </div>
            </div>
        </div>
    </section>
@endsection