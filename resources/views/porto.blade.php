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
         <h1 class="display-1 font-weight-bolder">Portofolio</h1>
         <hr style="height:5px;background-color:white;width:auto;">
      </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container">
        <div class="card-group vgr-cards">
        <div class="card1">
            <div class="card-img-body">
            <img class="card-img" src="{{url('img/baru.png')}}" alt="Card image cap">
            </div>
            <div class="card-body">
            <h4 class="card-title">Coding</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cupiditate odio perferendis facere reiciendis tempora sapiente consectetur esse dicta alias. Laborum eaque fugit impedit, maiores illum obcaecati. Sequi, delectus ipsum!</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
            </div>
        </div>
        <div class="card1">
            <div class="card-img-body">
            <img class="card-img" src="{{url('img/baru1.png')}}" alt="Card image cap"></div>
            <div class="card-body">
            <h4 class="card-title">Design</h4>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, at? Qui, quis eaque! Hic quia voluptates porro dolores fuga eos expedita ea, vitae a ex magnam deleniti praesentium eligendi magni!</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
            </div>
        </div>
        <div class="card1">
            <div class="card-img-body">
            <img class="card-img" src="{{url('img/baru3.png')}}" alt="Card image cap"></div>
            <div class="card-body">
            <h4 class="card-title">Market</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur esse, illum explicabo est dignissimos saepe, soluta autem illo animi earum eum nam reiciendis ipsa temporibus, laboriosam ipsum corrupti dolorum voluptas!</p>
            <a href="#" class="btn btn-outline-primary">Primary</a>
            </div>
        </div>
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