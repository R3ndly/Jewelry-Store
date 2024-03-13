@extends('layouts.app')
@section('title')Создание @endsection
@section('content')

<h1 class="text-center">Наши поставщики<h1>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>добавить поставщика</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('suppliers.index')}}">Назад</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Проблема!</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('suppliers.store')}}" method="POST" enctype="multipart/form-data">

@csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Имя поставщика:</strong>
                <input type="text" name="name_supplier" class="form-control" placeholder="Имя поставщика">
            </div>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Адресс:</strong>
            <input type="text" name="Address" class="form-control" placeholder="Адресс">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Длительность поставок:</strong>
            <input type="text" name="delivery_time" class="form-control" placeholder="Длительность поставок">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>рейтинг поставщика:</strong>
            <input type="text" name="supplier_rating" class="form-control" placeholder="рейтинг поставщика">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>статус поставщика:</strong>
            <input type="text" name="supplier_status" class="form-control" placeholder="статус поставщика">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>тип поставок:</strong>
            <input type="text" name="type_transportation" class="form-control" placeholder="тип поставок">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>цена за единицу:</strong>
            <input type="text" name="unit_price" class="form-control" placeholder="цена за единицу">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Номер заказа:</strong>
            <input type="text" name="order_number" class="form-control" placeholder="Номер заказа">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Фото:</strong>
            <input type="file" name="image" class="form-control" placeholder="Фото">
        </div>
    </div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Нажать!</button>
</div>
</div>

</form>

@endsection