@extends('layouts.app')
@section('entete')
    
@endsection

@section('content')
    <form action="/temoignages/new" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">titre</label>
            <input type="text" name="titre" id="titre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file"name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">message</label>
            <textarea class="form-control" name="message" rows="15" style="font-size: 16px"></textarea>
        </div>
        <input type="submit" value="envoyer" class="btn btn-secondary">
    </form>
@endsection