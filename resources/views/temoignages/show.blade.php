@extends('layouts.app')
@section('entete')
    {{-- <link rel="stylesheet" href="{{asset('css\temoignage.css')}}"> --}}
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-9">
      <h1>Temoignages</h1>
    <!-- Blog post -->
   
    <div class="blog-post full-post">
      <div class="title">
        <h2><a href="#">{{$temoignage->titre}}</a></h2>
      </div>
      <div class="post-container">
        <div class="animate scale"> <img class="img-responsive" src="{{Voyager::image($temoignage->image)}}" alt="">
          <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;{{$temoignage->created_at}}</div>
          <div class="post-comment"><a href="#">{{$nb_comment}} Comments</a></div>
        </div>
        <div class="divider-md"></div>
        <p>{{$temoignage->message}}</p>
                        <div class="divider-sm"></div>

      <div class="bg-grey">
<h3>Commentaires </h3>
        <section class="comments">
            @foreach ($commentaires as $comment)
                
            <div class="comment">
                <div class="inside">
                    <p><strong>{{$comment->name}}</strong> | {{$comment->created_at}} / </p>
                    <p>{{$comment->message}}</p>
              </div>                
            </div>
            @endforeach
        </section>
                      <div class="divider-md"></div>
<div class="comment-form row">
          <div class="col-md-6">
            <div class="form-group">
                <form action="/temoignages/{{$temoignage->id}}" method="post">
                    @csrf
            <label for="InputName">nom:<span class="required">*</span></label>
              <input type="text" id="InputName" class="form-control" name="name">
              </div>
            </div>
          <div class="col-md-6">
            <div class="form-group">
            <label for="InputEmail">email</label>
              <input type="text" id="InputEmail" class="form-control" name="email">
              </div>
            </div>
          <div class="col-md-12">
            <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                <label for="InputComment">Comment:<span class="required">*</span></label>
<textarea class="form-control" id="InputComment" name="message"></textarea>
              </div>
            <button type="submit" class="btn btn-default">AJOUTER COMMENTAIRE</button></form>
            </div>
        </div>
      </div>
    </div>
    <!-- //end Blog post -->

      </div>
   
@endsection