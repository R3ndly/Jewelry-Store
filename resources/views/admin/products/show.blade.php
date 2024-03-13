@extends('layouts.admin')
@section('title')Детали @endsection
@section('content')
<h1 class="text-center ">Ювелирная мастерская</h1>

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Детали</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Назад</a>

    </div>

</div>

</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Тип:</strong>

        {{ $product->type }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Материал:</strong>

        {{ $product->material }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Математика:</strong>

        {{ $product->price }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Масса:</strong>

        {{ $product->weight }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Бренд:</strong>

        {{ $product->brand}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Коллекция:</strong>

        {{ $product->collection}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Телефон:</strong>

        {{ $product->telephone}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Гравировка:</strong>

        {{ $product->engraving}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Фото:</strong>

        <img class="db" src="{{ $product->image}}">

    </div>

</div>



</div>

@endsection