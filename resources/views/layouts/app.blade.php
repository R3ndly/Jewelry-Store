<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('custom_js')
    
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4 px-5">Золотой Оттенок</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/contact">Наши контакты</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/about">О мастерой</a>

        @auth 
        @if (Auth::user())
        <a class="me-3 py-2 text-dark text-decoration-none" href="/products">Наши товары</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/workers">Сотрудники</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/orders">Заказы</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/suppliers">Поставщики</a>
        <a class="me-3 py-2 text-light text-decoration-none btn btn-primary" href="{{ url('/cart')  }}">Корзина</a>
        @endif
        @endauth
        
        @if (Auth::check())
        <div class="dropdown me-2">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  {{ Auth::user()->name }}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a type="submit" class="btn btn-primary w-80 dropdown-item" href="{{ route('logout') }}">Выйти</a> </li>
  </ul>
</div> 
        @else
        <a type="submit" class="btn btn-primary w-80" href="{{ route('login') }}">Войти</a>
        @endif
      </nav>
    </div>


    


        <main class="py-4">
            @yield('content')
        </main>
    </div>
  </body>
  <div class="footer">
  <p>&copy; 2024 Ювелирная мастерская. Все права защищены.</p>
  </div>
</html>
