<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('style')

</head>
<body>

{{-- responsive navBar --}}

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand kids" href="#">Kids</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}">HOME</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'about-us' ? 'activeItem' : null }}">
        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'classes' ? 'activeItem' : null }}">
        <a class="nav-link" href="{{ route('classes') }}">CLASSES</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'teachers' ? 'activeItem' : null }}">
        <a class="nav-link" href="{{ route('teachers') }}">TEACHERS</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'gallery' ? 'activeItem' : null }}">
        <a class="nav-link" href="{{ route('gallery') }}">GALLERY</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'contact' ? 'activeItem' : null }}">
        <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

<br>


<div class="content">
    <div style="padding-top: 72px;">
        @yield('content')
    </div>
</div>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  if(!$('.nav-item').hasClass('activeItem')){
    $('.nav-item').first().addClass('activeItem');
  }
</script>
</body>
</html>