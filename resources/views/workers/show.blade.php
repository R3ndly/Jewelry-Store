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

        <a class="btn btn-primary" href="{{ route('workers.index') }}"> Назад</a>

    </div>

</div>

</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Имя:</strong>

        {{ $worker->name }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Фамилия:</strong>

        {{ $worker->surname }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Отчество:</strong>

        {{ $worker->patronymic }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Должность:</strong>

        {{ $worker->position }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Зарплата:</strong>

        {{ $worker->salary }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Пол:</strong>

        {{ $worker->gender}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Телефон:</strong>

        {{ $worker->phone}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Email:</strong>

        {{ $worker->email}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Фото:</strong>

        <img class="db" src="{{ $worker->image}}">

    </div>

</div>
</div>
@endsection