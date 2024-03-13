@extends('layouts.admin')
@section('title')Главная страница @endsection
@section('content')
<h1 class="text-center ">Сотрудники Золотого Оттенка</h1>

<div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('admin.workers.create') }}"> Добавить сотрудника</a>

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
        @php
    $i = 0;
@endphp

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

            <form action="{{ route('admin.workers.destroy',$worker->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('admin.workers.show',$worker->id) }}">Показать</a>



                    <a class="btn btn-primary" href="{{ route('admin.workers.edit',$worker->id) }}">Изменить</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Удалить</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
    

    
    

    @endsection