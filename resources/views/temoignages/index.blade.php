@extends('layouts.app')
@section('entete')
    <link rel="stylesheet" href="{{asset('css\temoignage.css')}}">
@endsection

@section('content')
<div class="row">
   @foreach ($auteurs as $auteur)
          <div class="col">
              <a href="/temoignages/users/{{$auteur->id}}">
                <img src="{{Voyager::image($auteur->avatar)}}" alt="">
                <h3>{{$auteur->name}}</h3>
              </a>
          </div>
          
          @endforeach
</div>
@endsection