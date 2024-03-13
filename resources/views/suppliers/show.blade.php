@extends('layouts.app')
@section('title')Детали @endsection
@section('content')
<h1 class="text-center ">Ювелирная мастерская</h1>

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Детали</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Назад</a>

    </div>

</div>

</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Имя поставщика:</strong>

        {{ $supplier->name_supplier }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Адресс:</strong>

        {{ $supplier->Address }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Длительность поставок:</strong>

        {{ $supplier->delivery_time }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>рейтинг поставщика:</strong>

        {{ $supplier->supplier_rating }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>статус поставщика:</strong>

        {{ $supplier->supplier_status}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>тип поставок:</strong>

        {{ $supplier->type_transportation}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>цена за единицу:</strong>

        {{ $supplier->unit_price}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Номер заказа:</strong>

        {{ $supplier->order_number}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Фото:</strong>

        <img class="db" src="{{ $supplier->image}}">

    </div>

</div>



</div>

@endsection