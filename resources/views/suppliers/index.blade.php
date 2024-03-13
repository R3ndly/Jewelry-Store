@extends('layouts.app')
@section('title')Главная страница @endsection
@section('content')
<h1 class="text-center ">Поставщики Золотого Оттенка</h1>

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
            <th>Имя поставщика</th>
            <th>Длительность поставок</th>
            <th>статус поставщика</th>
            <th>тип поставок</th>
            <th>цена за единицу</th>
            <th>Номер заказа</th>
            
            <th width="300" height="100">Фото</th>
            <th width="280px">Действия</th>

        </tr>

        @foreach ($suppliers as $supplier)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $supplier->name_supplier }}</td>
            <td>{{ $supplier->delivery_time }}</td>
            <td>{{ $supplier->supplier_status }}</td>
            <td>{{ $supplier->type_transportation }}</td>
            <td>{{ $supplier->unit_price }}</td>
            <td>{{ $supplier->order_number }}</td>
            
            <td><img src="{{$supplier->image }}" class="db" ></td>

            <td>

            <a class="btn btn-info" href="{{ route('suppliers.show',$supplier->id) }}">Показать</a>

            </td>

        </tr>

        @endforeach

    </table>
    

    
    

    @endsection