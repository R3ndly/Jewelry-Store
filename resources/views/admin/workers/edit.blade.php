@extends('layouts.admin')
@section('title')Редактировать @endsection
@section('content')
<h1 class="text-center ">Наши сотрудники</h1>

<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Редактировать записи</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('admin.workers.index') }}">Назад</a>

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



<form action="{{ route('admin.workers.update',$worker->id) }}" method="POST" enctype="multipart/form-data">

@csrf

@method('PUT')



 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Имя:</strong>

            <input type="text" name="name" value="{{ $worker->name }}" class="form-control" placeholder="Имя">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Фамилия:</strong>

            <input type="text" name="surname" value="{{ $worker->surname }}" class="form-control" placeholder="Фамилия">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Отчество:</strong>

            <input type="text" name="patronymic" value="{{ $worker->price }}" class="form-control" placeholder="Отчество">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Должность:</strong>

            <input type="text" name="position" value="{{ $worker->position }}" class="form-control" placeholder="Должность">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Зарплата:</strong>

            <input type="text" name="salary" value="{{ $worker->salary }}" class="form-control" placeholder="Зарплата">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Пол:</strong>

            <input type="text" name="gender" value="{{ $worker->gender }}" class="form-control" placeholder="Пол">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Телефон:</strong>

            <input type="text" name="phone" value="{{ $worker->phone }}" class="form-control" placeholder="Телефон">

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">


<div class="form-group">

    <strong>Еmail:</strong>

    <input type="text" name="email" value="{{ $worker->email }}" class="form-control" placeholder="Еmail">

</div>

</div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Фото:</strong>

            <input type="file" name="image" value="{{ $worker->image }}" class="form-control" placeholder="Фото">

        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

      <button type="submit" class="btn btn-primary">Нажать!</button>

    </div>

</div>



</form>

@endsection