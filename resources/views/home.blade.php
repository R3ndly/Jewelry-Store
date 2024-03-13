@extends('layouts.app')
@section('title')Главная страница Золотого Оттенка @endsection
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner bg-secondary">
    <div class="carousel-item active ">
      <img src="/img/1.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/2.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/3.webp" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
</br></br>
<div class="bg-secondary text-light ">
<p class="text-center ">Мы делаем самые лучшие украшения в Иркутской области.</p>
<p class="text-center">Среди наших мастеров специалисты с опытом свыше 10 лет.</p>
<p class="text-center">Наши изделия: кольца, подвески, браслеты, серьги и заколки.</p>
</div>
</br></br></br>
@endsection
