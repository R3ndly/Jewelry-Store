@extends('layouts.admin')
@section('title')Главная страница @endsection
@section('content')
<h1 class="text-center ">Ваши заказы</h1>

<div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('admin.orders.create') }}"> Добавить сотрудника</a>

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
            <th>Номер заказа</th>
            <th>Дата заказа</th>
            <th>Статус заказа</th>
            <th>Адрес доставки</th>
            <th>Телефон клиента</th>
            <th>Способ оплаты</th>
            
            <th width="300" height="100">Фото</th>
            <th width="280px">Действия</th>

        </tr>

        
        
        @foreach ($orders as $order)
        @php
    $i = 0;
@endphp

        <tr>

        <td>{{ ++$i }}</td>
            <td>{{ $order->order_number }}</td>
            <td>{{ $order->order_date }}</td>
            <td>{{ $order->order_status }}</td>
            <td>{{ $order->delivery_address }}</td>
            <td>{{ $order->customer_phone_number }}</td>
            <td>{{ $order->payment_method }}</td>
            
            <td><img src="{{$order->image }}" class="db" ></td>

            <td>

            <form action="{{ route('admin.orders.destroy',$order->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('admin.orders.show',$order->id) }}">Показать</a>



                    <a class="btn btn-primary" href="{{ route('admin.orders.edit',$order->id) }}">Изменить</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Удалить</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
    

    
    

    @endsection