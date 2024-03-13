@extends('layouts.admin')
@section('title')Редактировать @endsection
@section('content')
<h1 class="text-center ">Наши поставщики</h1>

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Редактировать записи</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('admin.suppliers.index') }}">Назад</a>

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



<form action="{{ route('admin.suppliers.update',$supplier->id) }}" method="POST" enctype="multipart/form-data">

@csrf

@method('PUT')



 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Имя поставщика:</strong>

            <input type="text" name="name_supplier" value="{{ $supplier->name_supplier }}" class="form-control" placeholder="Имя поставщика">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Адресс:</strong>

            <input type="text" name="Address" value="{{ $supplier->Address }}" class="form-control" placeholder="Адресс">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Длительность поставок:</strong>

            <input type="text" name="delivery_time" value="{{ $supplier->delivery_time }}" class="form-control" placeholder="Длительность поставок">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>рейтинг поставщика:</strong>

            <input type="text" name="supplier_rating" value="{{ $supplier->supplier_rating }}" class="form-control" placeholder="рейтинг поставщика">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>статус поставщика:</strong>

            <input type="text" name="supplier_status" value="{{ $supplier->supplier_status }}" class="form-control" placeholder="статус поставщика">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>тип поставок:</strong>

            <input type="text" name="type_transportation" value="{{ $supplier->type_transportation }}" class="form-control" placeholder="Тип поставок">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>цена за единицу:</strong>

            <input type="text" name="unit_price" value="{{ $supplier->unit_price }}" class="form-control" placeholder="цена за единицу">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">


<div class="form-group">

    <strong>Номер заказа:</strong>

    <input type="text" name="order_number" value="{{ $supplier->order_number }}" class="form-control" placeholder="Номер заказа">

</div>

</div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Фото:</strong>

            <input type="file" name="image" value="{{ $supplier->image }}" class="form-control" placeholder="Фото">

        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

      <button type="submit" class="btn btn-primary">Нажать!</button>

    </div>

</div>



</form>

@endsection