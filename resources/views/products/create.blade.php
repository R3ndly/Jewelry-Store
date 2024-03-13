@extends('layouts.app')
@section('title')Создание @endsection
@section('content')

<h1 class="text-center">Наши изделия<h1>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>добавить украшение</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('products.index')}}">Назад</a>
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

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">

@csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Тип:</strong>
                <input type="text" name="type" class="form-control" placeholder="тип изделия">
            </div>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Материал:</strong>
            <input type="text" name="material" class="form-control" placeholder="Материал">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Цена:</strong>
            <input type="text" name="price" class="form-control" placeholder="Цена">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Масса:</strong>
            <input type="text" name="weight" class="form-control" placeholder="Масса">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Бренд:</strong>
            <input type="text" name="brand" class="form-control" placeholder="Бренд">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Коллекция:</strong>
            <input type="text" name="collection" class="form-control" placeholder="Коллекция">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Телефон:</strong>
            <input type="text" name="telephone" class="form-control" placeholder="Телефон">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Гравировка:</strong>
            <input type="text" name="engraving" class="form-control" placeholder="Гравировка">
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