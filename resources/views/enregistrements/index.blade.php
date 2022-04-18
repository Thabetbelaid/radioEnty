@extends('layouts.app')
@section('entete')
    
@endsection

@section('content')
<form action="">
    <input type="text "placeholder="search">
    <input type="submit" value="recherche">
</form>
<div class=" animate fadeInLeft">
    <h2><span class="icon flaticon-audio36 color"></span>Top 10</h2>
    <div id="content-player">
      <div class="scrollpane">
        <div id="jquery_jplayer_2" class="jp-jplayer"></div>
        <div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
          {{-- <div class="jp-type-playlist">
            <div class="jp-playlist">
              <ul>
                <audio src=""></audio>
              </ul>
            </div>
            <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
          </div> --}}
          @foreach ($enregistrements as $en)
              
          <audio src="{{$en->contant}}" class="audio_btn"></audio>
          @endforeach
        </div>
      </div>
    </div>
  </div>
    
@endsection