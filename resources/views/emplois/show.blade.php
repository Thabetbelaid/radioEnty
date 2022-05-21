@extends('layouts.app')
@section('content')
    <h1>le programme de la semaine</h1>
    <img src="{{Voyager::image($emploi->image)}}" width="100%" height="600px">
@endsection