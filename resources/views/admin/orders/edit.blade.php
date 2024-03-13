@extends('layouts.admin')
@section('title')Редактировать @endsection
@section('content')
<h1 class="text-center ">Ваши заказы</h1>

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Редактировать записи</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('admin.orders.index') }}">Назад</a>

    </div>

</div>

</div>



@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<form action="{{ route('admin.orders.update',$order->id) }}" method="POST" enctype="multipart/form-data">

@csrf

@method('PUT')



 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Номер заказа:</strong>

            <input type="text" name="order_number" value="{{ $order->order_number }}" class="form-control" placeholder="Номер заказа">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Дата заказа:</strong>

            <input type="text" name="order_date" value="{{ $order->order_date }}" class="form-control" placeholder="Дата заказа">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Статус заказа:</strong>

            <input type="text" name="order_status" value="{{ $order->order_status }}" class="form-control" placeholder="Статус заказа">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Имя клиента:</strong>

            <input type="text" name="customer_name" value="{{ $order->customer_name }}" class="form-control" placeholder="Имя клиента">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Адрес доставки:</strong>

            <input type="text" name="delivery_address" value="{{ $order->delivery_address }}" class="form-control" placeholder="Адрес доставки">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Телефон клиента:</strong>

            <input type="text" name="customer_phone_number" value="{{ $order->customer_phone_number }}" class="form-control" placeholder="Телефон клиента">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Способ оплаты:</strong>

            <input type="text" name="payment_method" value="{{ $order->payment_method }}" class="form-control" placeholder="Способ оплаты">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">


<div class="form-group">

    <strong>Стоимость доставки:</strong>

    <input type="text" name="shipping_cost" value="{{ $order->shipping_cost }}" class="form-control" placeholder="Стоимость доставки">

</div>

</div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Фото:</strong>

            <input type="file" name="image" value="{{ $order->image }}" class="form-control" placeholder="Фото">

        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

      <button type="submit" class="btn btn-primary">Нажать!</button>

    </div>

</div>



</form>

@endsection