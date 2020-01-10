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
@section('tentang')
<div>
  <img src="{{url('img/bg4.png')}}" class="img-fluid" alt="Responsive image">
    <div>
      <div class="carousel-caption">
         <h1 class="display-1 font-weight-bolder">Tentang Kami</h1>
         <hr style="height:5px;background-color:white;width:auto;">
      </div>
    </div>
</div>
@endsection

@section('card')
<div class="text-center">
<h2>TEAM KAMI</h2>
<hr style="height:5px;background-color:white;width:auto;">
</div>
<div class="card" style="width: 14rem;">
  <img src="vito.jpg" width="200" height="180" class="rounded-circle" alt="Responsive image">
  <div class="card-body">
    <p class="card-text">Hallo Nama saya Vito Arsy Saputra</p>
  </div>
</div>
<div class="card" style="width: 14rem;">
  <img src="uji.jpeg" width="200" height="180" class="rounded-circle" alt="Responsive image">
  <div class="card-body">
    <p class="card-text">Hallo Nama saya Mochamad Ilham Fauzi</p>
  </div>
</div>
<div class="card" style="width: 14rem;">
  <img src="mus.jpeg" width="200" height="180" class="rounded-circle" alt="Responsive image">
  <div class="card-body">
    <p class="card-text">Hallo Nama saya Muhamad Musyafa</p>
  </div>
</div>
<div class="card" style="width: 14rem;">
  <img src="hafis.jpeg" width="200" height="180" class="rounded-circle" alt="Responsive image">
  <div class="card-body">
    <p class="card-text">Hallo Nama saya Nurhafidz Muhamad Faizal</p>
  </div>
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