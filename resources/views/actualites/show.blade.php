@extends('layouts\app')
@section('entete')
@section('entete')
<link href="{{asset('css/actualite.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<img src="{{Voyager::image($actualite->image)}}" class="actualite_cover">
<h1 class="show_title">{{$actualite->title}}</h1>
<p class="show_content">{{$actualite->content}}</p>
<div class="autre_acts">
@foreach($actualites as $act)
    <div class="cadre">
        <img src="{{Voyager::image($act->thumbnail)}}" alt="" width="100px" height="100px">
        <h3><a href="/actualites/{{$act->id}}">{{$act->title}}</a></h3>
    </div>

@endforeach</div>
@endsection