<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>راديو إنتي</title>
<link rel="shortcut icon" href="{{asset('image/fav-dark.png')}}" type="image/png">

        <!-- CSS preloader -->
<link href="{{asset('css/loader-dark.css')}}" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('css/liveradio-template-dark.css')}}" rel="stylesheet">
<!-- CSS modules -->
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
<link href="{{asset('css/sfmenu.css')}}" rel="stylesheet">
<link href="{{asset('css/jquery.mCustomScrollbar-dark.css')}}" rel="stylesheet" />
<link href="{{asset('jplayer/skin/liveradio/css/jplayer.liveradio-dark.css')}}" rel="stylesheet" />
<link href="{{asset('fonts/flaticon-liveradio/flaticon.css')}}" rel="stylesheet">
@yield('entete')
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('entete')
        <!-- Scripts -->
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    

    <body class="responsive">
        <div class="loader">
          <div class="inside">
            <span class="bar n1">A</span>
            <span class="bar n2">B</span>
            <span class="bar n3">c</span>
            <span class="bar n4">D</span>
            <span class="bar n5">E</span>
            <span class="bar n6">F</span>
            <span class="bar n7">G</span>
            <span class="bar n8">H</span>
          </div>
        </div>
        <!-- Off Canvas Menu -->
        @php
            $categories = DB::table('categories')->get();
        @endphp
        <nav id="off-canvas-menu" >
          <div id="off-canvas-menu-title">MENU<span class="icon flaticon-cancel" id="off-canvas-menu-close"></span></div>
         
          <ul class="expander-list">
          @foreach ($categories as $cat)
          <li> <span class="name"><span class="expander">-</span> <a href=".djshtml">{{$cat->name}}</a></span>
           
                {{$sub_cat = DB::table('sub_categories')->where('category_id',$cat->id)->get();}}
                <ul>
                @foreach ($sub_cat as $sub)
                <li><span class="name"><a href="#">{{$sub->name}}</a></span> </li>
                    
                @endforeach
                </ul>
         
         </li>
          @endforeach
         
            
            <li><span class="name"><a href="schedule.html">Schedule</a></span></li>
            <li><span class="name"><a href="blog-posts.html">Blog</a></span></li>
            <li><span class="name"><a href="fallery.html">Gallery</a></span></li>
            <li><span class="name"><a href="faq.html">FAQ</a></span></li>
            <li><span class="name"><a href="contact.html">Contact</a></span></li>
          </ul>
        </nav>
        <!-- //end Off Canvas Menu -->
        
        <div id="outer">
          <div id="outer-canvas"> <!-- Navbar -->
            <header> 
              
              <!-- Back to top -->
              <div class="back-to-top"><span class="arrow-up"><img src="images/icon-scroll-arrow.png" alt=""></span><img src="images/icon-scroll-mouse.png" alt=""></div>
              <!-- //end Back to top -->
              
              <section class="navbar">
                <div class="background">
                  <div class="container"> 
                    <!-- Logo -->
                    <div class="navbar-logo pull-left"> <a href="index.html"><img src="images/liveradio/logo-dark.gif" alt="Live Radio" class="img-responsive"></a></div>
                    <!-- //end Logo -->
                    <div id="top-player">
                      <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                      <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="jp-type-playlist">
                          <div id="openPlaylist"><a href="#0" class="playlist-toggle"> <span></span> <span></span> <span></span> </a></div>
                          <div class="jp-gui jp-interface">
                            <div class="jp-details">
                              <div class="inside"> <span class="jp-title" aria-label="title">&nbsp;</span> <span class="jp-artist" aria-label="artist">&nbsp;</span> </div>
                            </div>
                            <div class="jp-controls">
                              <div class="jp-play-wrap">
                                <div class="jp-play" role="button">
                                  <div class="jp-play-front"></div>
                                  <div class="jp-play-back"> </div>
                                </div>
                              </div>
                            </div>
                            <div class="jp-volume-controls">
                              <button class="jp-mute" role="button" tabindex="0">mute</button>
                              <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                              </div>
                            </div>
                          </div>
                          <div class="jp-playlist" id="playlist">
                            <ul>
                              <li>&nbsp;</li>
                            </ul>
                          </div>
                          <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                        </div>
                      </div>
                    </div>
                    <!-- Search -->
                    <form class="navbar-search form-inline visible-lg visible-md pull-right" role="form">
                      <div class="form-group">
                        <button type="submit" class="button"><span class="flaticon-search"></span></button>
                        <input type="text" class="form-control" value="Search" onblur="if (this.value == '') {this.value = 'Search';}" onfocus="if(this.value == 'Search') {this.value = '';}">
                      </div>
        
                    </form>
                    <!-- //end Search --> 
                    <!-- Main menu -->
                    <dl class="navbar-main-menu hidden-xs">
                      <dt class="item"> <a href="index.html" class="btn-main"><span class="icon flaticon-home"></span></a> </dt>
                      <dd></dd>
                      <dt class="item">
                        <ul class="sf-menu">
                            @foreach ($categories as $cat)
                                
                           
                                 <li> <a href="djs.html">{{$cat->name}}</a>
                                {{$sub_cats = DB::table('sub_categories')->where('category_id',$cat->id)->get();}}
                            
                                  <ul>
                                    @foreach ($sub_cats as $sub)
                                         <li><a href="#">{{$sub->name}}</a></li>
                                        
                                    @endforeach
                              
                             
                                   </ul>
                                  </li>
                           @endforeach
                        </ul>
                      </dt>
                      <dd></dd>
                      <dt class="item"> <a href="schedule.html" class="btn-main">Schedule</a> </dt>
                      <dd></dd>
                      <dt class="item"> <a href="blog-posts.html" class="btn-main">BLOG</a> </dt>
                      <dd></dd>
                      <dt class="item"> <a href="gallery.html" class="btn-main">GALLERY</a> </dt>
                      <dd></dd>
                      <dt class="item"> <a href="faq.html" class="btn-main">FAQ</a> </dt>
                      <dd></dd>
                      <dt class="item"> <a href="contact.html" class="btn-main">Contact</a> </dt>
                      <dd></dd>
                    </dl>
                    <!-- //end Main menu --> 
                    
                  </div>
                </div>
                <!-- Mobile menu -->
                <div class="container visible-xs">
                  <div class="mobile-nav row">
                    <div class="nav-item item-01"><a href="#" id="off-canvas-menu-toggle"><span class="icon flaticon-menu-1"></span></a></div>
                    <div class="nav-item item-02"><a href="#"></a></div>
                    <div class="nav-item item-03"><a href="#"></a></div>
                    <div class="nav-item item-04"><a href="#"><span class="icon flaticon-search"></span></a>
                      <div class="tab-content"> <!-- Search -->
                        <form class="navbar-search form-inline" role="form">
                          <div class="form-group">
                            <button type="submit" class="button"><span class="flaticon-search"></span></button>
                            <input type="text" class="form-control" value="Search" onblur="if (this.value == '') {this.value = 'Search';}" onfocus="if(this.value == 'Search') {this.value = '';}">
                          </div>
                        </form>
                        <!-- //end Search --> 
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- //end Mobile menu --> 
                <!-- Navbar switcher -->
                <div class="navbar-switcher-container">
                  <div class="navbar-switcher"> <span class="i-inactive"><img src="images/liveradio/icon-switcher-dark.png" alt=""></span> <span class="i-active flaticon-cancel"></span> </div>
                </div>
                <!-- //end Navbar switcher --> 
                
              </section>
              
              <!-- Navbar height -->
              <div class="navbar-height-inner"></div>
              <!-- Navbar height --> 
              
              <!-- Navbar height -->
              <div class="navbar-height"></div>
              <!-- Navbar height --> 
              
            </header>
            <div class="container">
                @yield('content')
            </div>


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]--> 
    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script> 
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
    <script src="{{asset('jplayer/top10-playlist.js')}}"></script> 
    <script src="{{asset('js/liveradio.js')}}"></script> 
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script> 
    <script type="text/javascript">
    
                    jQuery(document).ready(function() {
    
                        jQuery('.tp-banner').show().revolution(
                        {
                            dottedOverlay:"none",
                            delay:5000,
                            startwidth:1170,
                            startheight:700,
                            hideThumbs:200,
                            
                            thumbWidth:100,
                            thumbHeight:50,
                            thumbAmount:5,
                            
                            navigationType:"",
                            navigationArrows:"",
                            navigationStyle:"",
                            
                            touchenabled:"on",
                            onHoverStop:"off",
                            
                            swipe_velocity: 0.7,
                            swipe_min_touches: 1,
                            swipe_max_touches: 1,
                            drag_block_vertical: false,
                                                    
                            parallax:"mouse",
                            parallaxBgFreeze:"on",
                            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                                    
                            keyboardNavigation:"off",
                            
                            navigationHAlign:"center",
                            navigationVAlign:"bottom",
                            navigationHOffset:0,
                            navigationVOffset:20,
    
                            soloArrowLeftHalign:"left",
                            soloArrowLeftValign:"center",
                            soloArrowLeftHOffset:20,
                            soloArrowLeftVOffset:0,
    
                            soloArrowRightHalign:"right",
                            soloArrowRightValign:"center",
                            soloArrowRightHOffset:20,
                            soloArrowRightVOffset:0,
                                    
                            shadow:0,
                            fullWidth:"off",
                            fullScreen:"on",
    
                            spinner:"",
                            
                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,
    
                            shuffle:"off",
                            
                            autoHeight:"off",						
                            forceFullWidth:"off",						
                                                    
                            hideTimerBar:"on",						
                                                    
                            hideThumbsOnMobile:"off",
                            hideNavDelayOnMobile:1500,						
                            hideBulletsOnMobile:"off",
                            hideArrowsOnMobile:"off",
                            hideThumbsUnderResolution:0,
                            
                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            startWithSlide:0,
                            fullScreenOffsetContainer: ".navbar"	
                        });
                        
                        
                        
                                        
                    });	//ready
                    
                </script>
    </body>
</html>
