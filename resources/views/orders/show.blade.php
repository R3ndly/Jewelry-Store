@extends('layouts.app')
@section('title')Детали @endsection
@section('content')
<h1 class="text-center ">Наши сотрудники</h1>

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Детали</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('orders.index') }}"> Назад</a>

    </div>

</div>

</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Номер заказа:</strong>

        {{ $order->order_number }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Дата заказа:</strong>

        {{ $order->order_date }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Статус заказа:</strong>

        {{ $order->order_status }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Имя клиента:</strong>

        {{ $order->customer_name }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Адрес доставки:</strong>

        {{ $order->delivery_address }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Телефон клиента:</strong>

        {{ $order->customer_phone_number}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Способ оплаты:</strong>

        {{ $order->payment_method}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Стоимость доставки :</strong>

        {{ $order->shipping_cost}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Фото:</strong>

        <img class="db" src="{{ $order->image}}">

    </div>

</div>
</div>
@endsection