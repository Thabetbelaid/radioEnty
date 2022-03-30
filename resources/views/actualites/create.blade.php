@extends('layouts.app')
@section('entete')
<link href="{{asset('css/actualite.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')

<form method="post">
@csrf

    <label for="" class="form-label">title</label>
    <input type ="text" name="title" class="form-control">
    <label for="" class="form-label">content</label>
    <textarea  name="content" class="form-control"></textarea>
    <label for="" class="form-label">image</label>
    <input type="file" name="image"class="form-control">
    <input type="submit" value="save"class="btn btn-secondary">

</FORM>
@endsection