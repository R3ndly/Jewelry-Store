@extends('layouts.app')
@section('title')Главная страница @endsection
@section('content')
<h1 class="text-center ">Изделия Золотого Оттенка</h1>

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

            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Показать</a>
</br></br>
            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-auto">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-primary">В корзину!</button>
            </form>




            </td>

        </tr>

        @endforeach

    </table>
    

    
    

    @endsection