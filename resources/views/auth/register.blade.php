


<!-- Compilied CSS file -->
<link rel="stylesheet" type="text/css" href="{{asset('public/css/app.css')}}"/> 



<div class="row">
<div class="col-md-3 col-sm-8 col-xs-8 col-centered logo">
	<img src="{{asset('public/images/onemethod-logo.svg')}}">
</div>
</div>
<div class="row">

<div class="hide alert alert-success col-md-3 col-sm-8  col-xs-8 col-centered animated " role="alert">
  <strong>Thank you</strong> You successfully entered your email.<span class="server-time"></span>
</div>

<div class="hide alert alert-danger col-md-3 col-sm-8  col-xs-8 col-centered animated " role="alert">
  <strong>Error</strong> This email already exist </span>
</div>

<div class="col-md-3 col-xs-8 col-sm-8 col-centered form-container animated">
<form class="add_email">
<!-- <form class="add_email" action="auth/register" method="POST"> -->
    {!! csrf_field() !!}
    <div>
        Email
        <input class="email"  type="email" name="email" value="{{ old('email') }}">
        <input class="button" type="submit" value="Register">
    </div>
</form>
</div>
</div>

<!-- Compiled Javascript -->
<script type="text/javascript" src="{{asset('public/js/all.js')}}"></script>