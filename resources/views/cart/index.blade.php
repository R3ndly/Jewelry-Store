@extends('layouts.app')
@section('title') Ваша корзина товаров @endsection
@section('content')
<div class="container">
    <h2>Ваша корзина</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Название товара</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Общая стоимость</th>
                <th>Фото</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                
                <td>{{ $item->product->type }}</td>
                <td>{{ $item->product->price }} Рублей</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->quantity * $item->product->price }} Рублей</td>
              
                <td><img src="{{$item->product->image }}" class="cart" width="30%" ></td>
                <td>
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <strong>Общая сумма: </strong> {{ $total }} Рублей
    </div>
</div>
@endsection