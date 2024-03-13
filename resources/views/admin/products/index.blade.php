@extends('layouts.admin')
@section('title')Главная страница @endsection
@section('content')
<h1 class="text-center ">Изделия Золотого Оттенка</h1>

<div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('admin.products.create') }}"> Добавить украшение</a>

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
            <th>Тип</th>
            <th>Материал</th>
            <th>Цена</th>
            <th>Масса</th>
            <th>Бренд</th>
            <th>Коллекция</th>
            
            <th width="300" height="100">Фото</th>
            <th width="280px">Действия</th>

        </tr>

        @foreach ($products as $product)
        @php
    $i = 0;
@endphp

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->material }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->collection }}</td>
            
            <td><img src="{{$product->image }}" class="db" ></td>

            <td>

            <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('admin.products.show',$product->id) }}">Показать</a>



                    <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}">Изменить</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Удалить</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
    

    
    

    @endsection