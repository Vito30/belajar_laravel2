@extends('layout/main')

@section('title','My Web')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Hallo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">Tentang Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/porto">Portofolio</a>
      </li>
    </ul>
  </div>
</nav>
@endsection
@section('container')
<div>
  <img src="{{url('img/bg2.png')}}" class="img-fluid" alt="Responsive image">
    <div>
      <div class="carousel-caption">
         <h1 class="display-1 font-weight-bolder">Selamat Datang</h1>
         <hr style="height:5px;background-color:white;width:auto;">
         <h3>Ke Web Saya</h3>
      </div>
    </div>
</div>
@endsection

@section('jumbotron')
<div class="jumbotron">
  <h1 class="display-4">Hallo</h1>
  <p class="lead">Web ini merupakan contoh website dengan Framwork Laravel</p>
  <hr class="my-4">
  <p>Apa itu laravel ? Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.</p>
  <img src="{{url('img/is.jpg')}}" class="img-fluid" alt="responsive image">
</div>
@endsection
@section('footer')
    <div>
        <div class="card-footer text-muted">
            <div  class="text-center">
                <div>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
                Copyright &copy; Vito
            </div>
        </div>
    </div>
@endsection