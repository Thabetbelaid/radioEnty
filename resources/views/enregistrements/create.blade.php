@extends('layouts.app')
@section('entete')
    
@endsection

@section('content')
    <form action="/enregistrements/new" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input type="file" class="form-control" name="message">
        </div>
        <input type="submit" value="envoyer" class="btn btn-secondary">
    </form>
@endsection