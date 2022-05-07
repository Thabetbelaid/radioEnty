@extends('layouts.app')
@section('entete')
    
@endsection

@section('content')
<h1>Contacts</h1>
<div class="row">
  <div class="col-md-4">
    <div class="map animate fadeUp">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6115.684863819771!2d-82.9719195443651!3d39.96727545833253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf3846176f3dff5ed!2sLa+Aurora!5e0!3m2!1sen!2sus!4v1416911994304" class="google-map"></iframe>
    </div>
    <div class="divider-sm"></div>
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-sm-6 col-lg-5"><img src="images/liveradio/logo-dark.png" alt="" class="img-responsive" /></div>
    </div>
    <div class="divider-sm"></div>
    <ul class="contacts-list">
      <li><span class="icon flaticon-home"></span> 7563 St. Vincent Place, Glasgow</li>
      <li><span class="icon flaticon-phone"></span> 321321321, 321321321</li>
      <li><span class="icon flaticon-mail"></span> <a href="#">info@mydomain.com</a></li>
      <li><span class="icon flaticon-skype"></span> <a href="#">shop.test</a></li>
    </ul>
    <div class="divider-lg"></div>
    <div class="divider-md"></div>
    <h3>Send Message </h3>
    <div class="divider-xs"></div>
    <form id="form-contact" method="post" novalidate>
        @csrf
      <div class="comment-form row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="InputName">sujet<span class="required">*</span></label>
            <input type="text" id="InputName" class="form-control" name="sujet">
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label for="InputEmail"> e-mail:</label>
            <input type="text" id="InputEmail" class="form-control" name="email">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group"> <span class="icon icon-bubbles-2"></span>
            <label for="InputComment">message<span class="required">*</span></label>
            <textarea class="form-control" id="InputComment" name="message"></textarea>
          </div>
         
           
          </div>
          <div class="divider-sm"></div>
          <button type="submit" class="btn btn-default">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection