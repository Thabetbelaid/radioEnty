@extends ('layouts.app')
@section('entete')
<link href="{{asset('css/actualite.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    @foreach($actualites as $actualite)
    <div class="act">
       <img src=" {{Voyager::image($actualite->thumbnail)}}" alt="" width=200px height=200px class="act_img"> 
      <h1 class="act_title">{{  $actualite->title}}</h1>
      <p class="act_cont">
      @if(strlen($actualite->content) < 250)
       {{$actualite->content}}
       @endif
       @if(strlen($actualite->content) > 250)
          @php
          $actualite_entete = substr($actualite->content,0,250);
          echo $actualite_entete;
          @endphp
          ............ 
       @endif
       <button class="btn btn-primary"> voir plus</button>

      </p>
    </div>
    @endforeach
@endsection