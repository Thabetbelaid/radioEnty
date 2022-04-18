@extends('layouts.app')

@section('entete')
    <link rel="stylesheet" href="css/welcome.css" type="text/css">
@endsection
@section('content')
    

    <!-- //end Navbar --> 
    {{-- publicite --}}
    {{-- <div class="pub" style="background-image: {{$pub->image}}; height:300px;">
        <h3>{{$pub->titre}}</h3>
        <p>{{$pub->contenu}}</p>
    </div> --}}
    <!-- Slider -->
    <section id="slider"> 
      
      <!--
  #################################
      - THEMEPUNCH BANNER -
  #################################
  -->
      <div class="tp-banner-container hidden-xs">
        <div class="tp-banner">
          <ul>
            <!-- SLIDE  -->
        	 <li data-transition="slotzoom-horizontal" data-slotamount="10" data-masterspeed="500" data-saveperformance="on"  data-title="Slide1">
             <!-- MAIN IMAGE -->
             <img src="images/dummy.png"  alt="slide1" data-lazyload="images/slider/slide1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYER NR. 1 -->
              <div class="tp-caption text1 sfr"
                         data-x="400" 
                         data-y="350"  
                         data-speed="800"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><span>WE ARE MUSIC </span></div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption text2 sfr"
                         data-x="400" 
                         data-y="465"  
                         data-speed="3000"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>Curation</span></div>
              <div class="tp-caption lfb stt"
                         data-x="-100"
                         data-y="100"
                         data-speed="2000"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-01.png" alt="" ></div>
            <div class="tp-caption lfb stt"
                         data-x="80"
                         data-y="250"
                         data-speed="2500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-02.png" alt="" ></div>
                <div class="tp-caption lfb stt"
                         data-x="350"
                         data-y="100"
                         data-speed="2000"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-03.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="700"
                         data-y="50"
                         data-speed="2000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="4000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-04.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="550"
                         data-y="500"
                         data-speed="1000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="900"
                         data-y="150"
                         data-speed="2000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="4000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-06.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="1050"
                         data-y="200"
                         data-speed="2500"
                         data-start="500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-07.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="1200"
                         data-y="100"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="1100"
                         data-y="500"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-08.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="1250"
                         data-y="480"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-09.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="0"
                         data-y="550"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-10.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="450"
                         data-y="450"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-11.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="300"
                         data-y="350"
                         data-speed="2000"
                         data-start="500"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-12.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="800"
                         data-y="450"
                         data-speed="2000"
                         data-start="2500"
                         data-easing="easeOutQuad"
                         data-end="4500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-13.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="700"
                         data-y="500"
                         data-speed="2000"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-14.png" alt="" ></div>
          </li>
        	 <li data-transition="slotzoom-horizontal" data-slotamount="10" data-masterspeed="500" data-saveperformance="on"  data-title="Slide2">
             <!-- MAIN IMAGE -->
             <img src="images/dummy.png"  alt="slide2" data-lazyload="images/slider/slide2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYER NR. 1 -->
              <div class="tp-caption text1 sfr"
                         data-x="400" 
                         data-y="350"  
                         data-speed="800"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><span>LIVE SHOW</span></div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption text2 sfr"
                         data-x="400" 
                         data-y="465"  
                         data-speed="3000"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>CONTEST</span></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption text3 sfr"
                         data-x="820" 
                         data-y="465"  
                         data-speed="3000"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>EVERYDAY 8:00 AM</span></div>
              <div class="tp-caption lfb stt"
                         data-x="-100"
                         data-y="100"
                         data-speed="2000"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-01.png" alt="" ></div>
            <div class="tp-caption lfb stt"
                         data-x="80"
                         data-y="250"
                         data-speed="2500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-02.png" alt="" ></div>
                <div class="tp-caption lfb stt"
                         data-x="350"
                         data-y="100"
                         data-speed="2000"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-03.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="700"
                         data-y="50"
                         data-speed="2000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="4000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-04.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="550"
                         data-y="500"
                         data-speed="1000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="900"
                         data-y="150"
                         data-speed="2000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="4000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-06.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="1050"
                         data-y="200"
                         data-speed="2500"
                         data-start="500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-07.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="1200"
                         data-y="100"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="1100"
                         data-y="500"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-08.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="1250"
                         data-y="480"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-09.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="0"
                         data-y="550"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-10.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="450"
                         data-y="450"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-11.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="300"
                         data-y="350"
                         data-speed="2000"
                         data-start="500"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-12.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="800"
                         data-y="450"
                         data-speed="2000"
                         data-start="2500"
                         data-easing="easeOutQuad"
                         data-end="4500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-13.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="700"
                         data-y="500"
                         data-speed="2000"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-14.png" alt="" ></div>
            </li>
        	 <li data-transition="slotzoom-vertical" data-slotamount="10" data-masterspeed="1000" data-saveperformance="on"  data-title="Slide3">
             <!-- MAIN IMAGE -->
             <img src="images/dummy.png"  alt="slide3" data-lazyload="images/slider/slide3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYER NR. 1 -->
              <div class="tp-caption text1 sfr"
                         data-x="0" 
                         data-y="250"
                         data-speed="800"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 1; max-width: auto; max-height: auto; white-space: nowrap;"><span>SPECIAL GUEST</span></div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption text2 sfr"
                         data-x="80" 
                         data-y="365"  
                         data-speed="3000"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>FRIDAY 9:00 PM</span></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption text4 randomrotate"
                         data-x="0" 
                         data-y="365"  
                         data-speed="3000"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><span>EVERY</span></div>
              <div class="tp-caption lfb stt"
                         data-x="-100"
                         data-y="100"
                         data-speed="2000"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-01.png" alt="" ></div>
            <div class="tp-caption lfb stt"
                         data-x="80"
                         data-y="250"
                         data-speed="2500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-02.png" alt="" ></div>
                <div class="tp-caption lfb stt"
                         data-x="350"
                         data-y="100"
                         data-speed="2000"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-03.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="700"
                         data-y="50"
                         data-speed="2000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="4000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-04.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="550"
                         data-y="500"
                         data-speed="1000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="900"
                         data-y="150"
                         data-speed="2000"
                         data-start="2000"
                         data-easing="easeOutQuad"
                         data-end="4000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-06.png" alt="" ></div>
             <div class="tp-caption lfb stt"
                         data-x="1050"
                         data-y="200"
                         data-speed="2500"
                         data-start="500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-07.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="1200"
                         data-y="100"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-05.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="1100"
                         data-y="500"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-08.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="1250"
                         data-y="480"
                         data-speed="1500"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3000"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-09.png" alt="" ></div>
               <div class="tp-caption lfb stt"
                         data-x="0"
                         data-y="550"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-10.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="450"
                         data-y="450"
                         data-speed="1500"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-11.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="300"
                         data-y="350"
                         data-speed="2000"
                         data-start="500"
                         data-easing="easeOutQuad"
                         data-end="2500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-12.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="800"
                         data-y="450"
                         data-speed="2000"
                         data-start="2500"
                         data-easing="easeOutQuad"
                         data-end="4500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-13.png" alt="" ></div>
              <div class="tp-caption lfb stt"
                         data-x="700"
                         data-y="500"
                         data-speed="2000"
                         data-start="1500"
                         data-easing="easeOutQuad"
                         data-end="3500"
                         data-endspeed="500"
                         data-endeasing="easeInSine"><img src="images/slider/nota-14.png" alt="" ></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- //end Slider --> 
    
  <!-- Social widgets -->
  <section class="social-widgets hidden-xs">
    <ul class="items">
      <li class="item item-01 facebook"> <a href="social/facebook.html" class="tab-icon"><span class="icon icon-facebook flaticon-facebook"></span></a>
        <div class="tab-content">
          <div class="title">FACEBOOK</div>
          <div class="loading"><img src="images/ajax-loader.gif" alt="" class="ajaxloader"></div>
        </div>
      </li>
      <li class="item item-02 twitter"> <a href="social/twitter.html" class="tab-icon"><span class="icon icon-twitter flaticon-twitter"></span></a>
        <div class="tab-content">
          <div class="title">TWITTER FEEDS</div>
          <div class="loading"><img src="images/ajax-loader.gif" alt="" class="ajaxloader"></div>
        </div>
      </li>
      <li class="item item-03 youtube"> <a href="social/youtubevideo.html" class="tab-icon"><span class="icon icon-youtube flaticon-youtube"></span></a>
        <div class="tab-content">
          <div class="title">Video</div>
          <div class="loading"><img src="images/ajax-loader.gif" alt="" class="ajaxloader"></div>
        </div>
      </li>
    </ul>
  </section>
  <!-- //end Social widgets -->
  <section class="container content-row">
    <div class="banners-row">
      <div class="banner-box" onclick="location.href='#'">
        <div class="inside">
          <div class="icon-float-left animate fadeIn">
            <div class="icon-circle"><a href="#"><span class="icon flaticon-musical51"></span></a></div>
          </div>
          <div class="text-float-right">
            <div class="inside">
              <h3 class="upper">Artist Booking</h3>
              <p>Artist for Your Party</p>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-box" onclick="location.href='#'">
        <div class="inside">
          <div class="icon-float-left">
            <div class="icon-circle animate fadeIn"><a href="#"><span class="icon flaticon-movie29"></span></a></div>
          </div>
          <div class="text-float-right">
            <div class="inside">
              <h3 class="upper">Online</h3>
              <p>www.liveradio.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-box" onclick="location.href='#'">
        <div class="inside">
          <div class="icon-float-left">
            <div class="icon-circle animate fadeIn"><a href="#"><span class="icon flaticon-smartphone53"></span></a></div>
          </div>
          <div class="text-float-right">
            <div class="inside">
              <h3 class="upper">On Your Phone</h3>
              <p>Live Radio App</p>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-box" onclick="location.href='#'">
        <div class="inside">
          <div class="icon-float-left">
            <div class="icon-circle animate fadeIn"><a href="#"><span class="icon flaticon-podcast6"></span></a></div>
          </div>
          <div class="text-float-right">
            <div class="inside">
              <h3 class="upper">On Demand</h3>
              <p>Radio Podcasts</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="divider-lg"></div>
    <div class="row">
      <div class="col-sm-6 col-lg-4 animate fadeInLeft">
        <h2><span class="icon flaticon-movie29 color"></span>TOP 5</h2>
    
      @foreach ($top as $top_act)
      <div class="faq-outer">
        <div class="faq-heading">
            <img src="{{Voyager::image($top_act->image)}}" class="act_img" >
            {{$top_act->title}} 
    </div>
        <span class="act_cont">{{$extract = substr($top_act->content,0,100)}}
       <br><a href="/actualites/{{$top_act->id}}">voir plus</a>
    </span>

      
      </div>
      @endforeach
      </div>
      
      <div class="col-sm-12 col-lg-8 animate fadeInRight">
        <h2><span class="icon flaticon-movie29 color"></span>Most Recent</h2>
        @foreach ($recent as $recent_act)
      <div class="faq-outer">
        <div class="faq-heading">
            <img src="{{Voyager::image($recent_act->image)}}" class="act_img" >
            {{$recent_act->title}} 
    </div>
        <span class="act_cont">{{$extract = substr($recent_act->content,0,200)}}</span>
       <br><a href="/actualites/{{$recent_act->id}}">voir plus</a>

      
      </div>
      @endforeach
      </div>
    </div>
  </section>
  <!-- Blog widget -->
  <section class="blog-widget parallax">
    <div class="container content">
      <h3><span class="icon flaticon-megaphone9"></span>&nbsp;From the BLOG</h3>
      <div class="posts flexslider">
        <ul class="slides">
          <li>
            <h4>Phasellus id nisi vitae odio pretium aliquam. Pellentesque</h4>
            <div class="image-cell"><a href="blog-posts.html"><img src="images/liveradio/blog-img.jpg" class="img-responsive animate scale" alt=""></a>
              <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</div>
              <div class="post-comment"><a href="#">41 Comments</a></div>
            </div>
            <div class="offset-image">
              <p>Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. </p>
              <p>Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc.</p>
              <h4>&nbsp;</h4>
            </div>
          </li>
          <li>
            <h4>Phasellus id nisi vitae odio pretium aliquam. Pellentesque</h4>
            <div class="image-cell"><a href="blog-posts.html"><img src="images/liveradio/blog-img.jpg" class="img-responsive animate scale" alt=""></a>
              <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</div>
              <div class="post-comment"><a href="#">41 Comments</a></div>
            </div>
            <div class="offset-image">
              <p>Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. </p>
              <p>Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc.</p>
              <h4>&nbsp;</h4>
            </div>
          </li>
          <li>
            <h4>Phasellus id nisi vitae odio pretium aliquam. Pellentesque</h4>
            <div class="image-cell"><a href="blog-posts.html"><img src="images/liveradio/blog-img.jpg" class="img-responsive animate scale" alt=""></a>
              <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</div>
              <div class="post-comment"><a href="#">41 Comments</a></div>
            </div>
            <div class="offset-image">
              <p>Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. </p>
              <p>Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc.</p>
              <h4>&nbsp;</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //end Blog widget -->
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 animate fadeUp info-box">
          <div class="inside">
            <div class="text">
              <h3>User <span class="color">Stories</span></h3>
              {{$temoins = DB::table('temoignages')->latest()->limit(5)->get()}}
              @foreach ($temoins as $tm)
              <p><img src="{{Voyager::image($tm->uploader->avatar)}}" alt="" class="img-left" /> <strong>{{$tm->name}}</strong></p>
              <p>{{$extract = substr($tm->message,0,250)}}</p>
              @endforeach
            </div>
            <div class="info-box-bg-icon"><span class="flaticon-flat-mic"></span></div>
          </div>
        </div>
        <div class="col-sm-4 animate fadeUp info-box">
            <div class="row">
                @foreach ($images1 as $img)
                  <div class="col">
                      <img src="{{Voyager::image($img->image)}}" alt="">
                  </div>
                @endforeach 
              </div>
              <div class="row">
                @foreach ($images2 as $img)
                  <div class="col">
                      <img src="{{Voyager::image($img->image)}}" alt="">
                  </div>
                @endforeach 
              </div>
              <div class="row">
                @foreach ($images3 as $img)
                  <div class="col">
                      <img src="{{Voyager::image($img->image)}}" alt="">
                  </div>
                @endforeach 
              </div>
     
        </div>
        <div class="col-sm-4 animate fadeUp info-box">
          <div class="inside">
            <div class="text">
              <h3>Radio Listeners Poll</h3>
              <form role="form">
                <p><strong>How often do you listen to Live Radio?</strong></p>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Daily</label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                    More than once a week</label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked="">
                    More than once a month</label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" checked="">
                    Around once a year</label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5" checked="">
                    Never</label>
                </div>
                <div class="divider-xs"></div>
                <button class="btn btn-default">SUBMIT</button>
                <div class="divider-xs"></div>
              </form>
            </div>
            <div class="info-box-bg-icon"><span class="flaticon-podcast6"></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Social navbar -->
  <section class="content nopad-xs grey-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6  col-lg-6 newsletter collapsed-block">
          <div class="row">
            <div class="col-lg-5  col-md-12 col-sm-12 ">
              <h2 class="icon-title"><span class="icon flaticon-mail color"></span>NEWSLETTER SIGNUP <a class="expander visible-xs" href="#TabBlock-1">+</a></h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 tabBlock" id="TabBlock-1">
              <p>Enter your email and we'll send you a coupon with 10% off your next order.</p>
              <form class="form-inline" role="form">
                <div class="form-group input-control">
                  <button type="submit" class="button"><span class="flaticon-mail-alt"></span></button>
                  <input type="text" class="form-control" value="Your E-mail..." onblur="if (this.value == '') {this.value = 'Your E-mail...';}" onfocus="if(this.value == 'Your E-mail...') {this.value = '';}">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 collapsed-block">
          <h2><span class="icon flaticon-disc29 color"></span>FIND US ON<a class="expander visible-xs" href="#TabBlock-2">+</a></h2>
          <div  class="tabBlock" id="TabBlock-2">
            <ul class="find-us">
              <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-facebook flaticon-facebook"></span></a></li>
              <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-twitter flaticon-twitter"></span></a></li>
              <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-linkedin flaticon-linkedin"></span></a></li>
              <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-youtube flaticon-youtube"></span></a></li>
              <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-pinterest flaticon-pinterest"></span></a></li>
              <li class="divider"><a href="#" class="animate-scale"><span class="icon icon-gplus flaticon-gplus"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //end Social navbar -->

  <section>
    <div class="animate fadeUp">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6115.684863819771!2d-82.9719195443651!3d39.96727545833253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf3846176f3dff5ed!2sLa+Aurora!5e0!3m2!1sen!2sus!4v1416911994304" class="google-map-full"></iframe>
    </div>
  </section>
  <!-- Footer -->
  <footer>
    <section class="footer-navbar">
      <div class="container content nopad-xs">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-4 hidden-xs animate fadeUp">
            <div>&copy; 2015<a href="#"> Live Radio</a>. <span class="clearfix visible-sm"></span>All Rights Reserved.</div>
            <a href="#"><img src="images/liveradio/logo-footer-dark.png" alt="" class="img-responsive"/></a> </div>
          <div class="col-sm-9 col-md-9 col-lg-8 collapsed-block-outer">
            <div class="col-sm-4 col-md-4 collapsed-block animate fadeUp">
              <h4><span class="icon flaticon-info color"></span>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
              <div  class="tabBlock" id="TabBlock-3">
                <ul class="menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="#">Shipping &amp; Returns</a></li>
                  <li><a href="#">Privacy Notice</a></li>
                  <li><a href="#">Conditions of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4  collapsed-block animate fadeUp">
              <h4><span class="icon flaticon-mic color"></span>On live Radio<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
              <div  class="tabBlock" id="TabBlock-4">
                <ul class="menu">
                  <li>Schedule</li>
                  <li>Playlist</li>
                  <li>Last 10 Songs</li>
                  <li>New Songs</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 collapsed-block animate fadeUp">
              <h4><span class="icon flaticon-location-1 color"></span>CUSTOM HTML BLOCK<a class="expander visible-xs" href="#TabBlock-6">+</a></h4>
              <div  class="tabBlock" id="TabBlock-6">
                <ul class="menu">
                  <li><span class="icon flaticon-home"></span> 7563 St. Vincent Place, Glasgow</li>
                  <li><span class="icon flaticon-phone"></span> 321321321, 321321321</li>
                  <li><span class="icon flaticon-mail"></span> <a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                  <li><span class="icon flaticon-skype"></span> <a href="#">shop.test</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-bottom-block container visible-xs">
      <div class="row">
        <div class="col-sm-5 col-md-4 copyright-text"> &copy; 2015<a href="#"> Live Radio</a>. All Rights Reserved. </div>
      </div>
    </section>
  </footer>
  <div id="outer-overlay"></div>
  <!-- //end Footer --></div>
</div>
@endsection
