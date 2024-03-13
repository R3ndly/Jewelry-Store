@extends('layouts.app')
@section('title')Главная страница @endsection
@section('content')
<h1 class="text-center ">Сотрудники Золотого Оттенка</h1>

<div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                

            </div>

            <div class="pull-right">

                

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Должность</th>
            <th>Зарплата</th>
            <th>Телефон</th>
            <th>Email</th>
            
            <th width="300" height="100">Фото</th>
            <th width="280px">Действия</th>

        </tr>

        @foreach ($workers as $worker)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $worker->name }}</td>
            <td>{{ $worker->surname }}</td>
            <td>{{ $worker->position }}</td>
            <td>{{ $worker->salary }}</td>
            <td>{{ $worker->phone }}</td>
            <td>{{ $worker->email }}</td>
            
            <td><img src="{{$worker->image }}" class="db" ></td>

            <td>

            <a class="btn btn-info" href="{{ route('workers.show',$worker->id) }}">Показать</a>

            </td>

        </tr>

        @endforeach

    </table>
    @endsection