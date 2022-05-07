@extends('layouts.app')
@section('entete')
    <link rel="stylesheet" href="{{asset('css\temoignage.css')}}">
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
<link href="{{asset('css/sfmenu.css')}}" rel="stylesheet">
<link href="{{asset('css/jquery.mCustomScrollbar-dark.css')}}" rel="stylesheet" />
<link href="{{asset('css/timeline.css')}}" rel="stylesheet" />
<link href="{{asset('jplayer/skin/liveradio/css/jplayer.liveradio-dark.css')}}" rel="stylesheet" />
<link href="{{asset('fonts/flaticon-liveradio/flaticon.css')}}" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script> 
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script> 
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/jquery.flexslider.js')}}"></script> 
<script src="{{asset('js/jquery.parallax.js')}}"></script> 
<script src="{{asset('js/jquery.inview.js')}}"></script> 
<script src="{{asset('js/superfish.js')}}"></script> 
<script src="{{asset('js/supersubs.js')}}"></script> 
<script src="{{asset('js/jquery.mCustomScrollbar.min.js')}}"></script> 
<script src="{{asset('jplayer/jquery.jplayer.js')}}"></script> 
<script src="{{asset('jplayer/jplayer.playlist.js')}}"></script> 
<script src="{{asset('jplayer/header-playlist.js')}}"></script> 
<script src="{{asset('jplayer/schedule-playlist.js')}}"></script> 
<script src="{{asset('js/liveradio.js')}}"></script>
<script>
jQuery(function ($) {
	
    "use strict";
	$('.cd-timeline-content').hover(function (e) {
		$(this).parent('.cd-timeline-block').toggleClass('under')
	})
	
});
</script>
@endsection

@section('content')
<div class="row">
    <h1 class="title">{{$auteur->name}}</h1>
</div>
<div class="row">
    <div id="cd-timeline" class="cd-container">
        <div class="container">

        @foreach ($temoignages as $tm)
        <div class="cd-timeline-block  animate fadeInLeft">
            <div class="cd-timeline-date"> <span class="month">{{$tm->created_at}}</span> </div>
            <div class="cd-timeline-content">
              <div class="wrapper">
                <div class="image-cell"><a href="/temoignages/{{$tm->id}}"><img src="{{$tm->image}}" class="img-responsive animate scale animated" alt="" draggable="false"></a>
                  <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;{{$tm->created_at}} </div>
                  <div class="post-comment pull-right"><a href="#"><span class="icon flaticon-comment"></span>41</a><a href="#"><span class="icon flaticon-heart"></span>17</a></div>
                </div>
              </div>
              <div class="title">
                <h3><a href="/temoignages/{{$tm->id}}">{{$tm->titre}}</a></h3>
              </div>
              <p>{{$tm->message}}</p>
            </div>
            <!-- cd-timeline-content --> 
          </div>
          <!-- cd-timeline-block -->   
        @endforeach
         
          
    </div>
</div>
@endsection