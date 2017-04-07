@extends('layouts.app')

@section('title','PayPadel')

@section('content')

            <div class="content">
                <div class="container">
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="/img/imagen2.jpg" alt="" width="460" height="345">
                      <div class="carousel-caption" >
                          <p class="carousel-texto">Juega</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="/img/imagen3.jpg" alt="" width="460" height="345">
                      <div class="carousel-caption" >
                          <p class="carousel-texto">Practica</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="/img/imagen4.jpg" alt="" width="460" height="345">
                      <div class="carousel-caption" >
                          <p class="carousel-texto">Aprende</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="/img/imagen5.jpg" alt="" width="460" height="345">
                      <div class="carousel-caption" >
                          <p class="carousel-texto">Compite</p>
                      </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>
                </div>
              </div>
            </div>






@endsection
