@extends('layouts.app')

@section('content')
<h1>Gallery</h1>
<div class="filters-by-category text-center">
  <ul class="option-set" data-option-key="filter">
    @foreach ($events as $event)
        <li><a href="/gallery/{{event->id}}" data-option-value="{{$event->id}}">{{$event->name}}</a></li>
    @endforeach
   
  </ul>

  <div class="gallery">
      @foreach ($images as $i)
      <div class="item "> <a href="{{Voyager::image($i->image)}}" class="img-popup"><img src="{{Voyager::image($i->image)}}"  alt=""/></a> </div>
          
      @endforeach
</div>
@endsection