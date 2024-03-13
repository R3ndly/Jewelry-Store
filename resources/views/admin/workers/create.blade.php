@extends('layouts.admin')
@section('title') Создание @endsection
@section('content')

<h1 class="text-center">Наши изделия<h1>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>добавить сотрудника</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('admin.workers.index')}}">Назад</a>
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

<form action="{{route('admin.workers.store')}}" method="POST" enctype="multipart/form-data">

@csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Имя:</strong>
                <input type="text" name="name" class="form-control" placeholder="Имя">
            </div>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Фамилия:</strong>
            <input type="text" name="surname" class="form-control" placeholder="Фамилия">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Отчество:</strong>
            <input type="text" name="patronymic" class="form-control" placeholder="Отчество">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Должность:</strong>
            <input type="text" name="position" class="form-control" placeholder="Должность">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Зарплата:</strong>
            <input type="text" name="salary" class="form-control" placeholder="Зарплата">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Пол:</strong>
            <input type="text" name="gender" class="form-control" placeholder="Пол">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Телефон:</strong>
            <input type="text" name="phone" class="form-control" placeholder="Телефон">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" placeholder="Email">
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