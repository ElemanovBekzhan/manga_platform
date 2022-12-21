<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Manga</title>
    <meta name="author" content="name" />
    <meta name="description" content="description here" />
    <meta name="keywords" content="keywords,here" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
</head>


<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<nav id="header" class="fixed w-full z-10 top-0">



        <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

        <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

            <div class="pl-4">
             <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="{{ route('home') }}">
                   Manga
             </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Catalog</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">

                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    @php
                        $current_route = Route::currentRouteName();
                    @endphp
                    @guest
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4  no-underline @if($current_route === 'auth.login') text-gray-600 font-bold   @endif" href="{{route('auth.login')}}">Авторизация</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block  no-underline py-2 px-4 @if($current_route === 'auth.register')  text-gray-600 font-bold @endif" href="{{route('auth.register')}}">Регистрация</a>
                    </li>
                    @endguest
                    @auth()
                        <li class="mr-3">
                            <a class="inline-block no-underline py-2 px-4 @if($current_route === 'profile') text-gray-600 font-bold @endif" href="{{route('profile')}}">{{ $user->username }}</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block no-underline py-2 px-4 @if($current_route === 'catalog') text-gray-600 font-bold @endif" href="{{ route('catalog') }}">Каталог</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block no-underline py-2 px-4 @if($current_route === 'mangas.create') text-gray-600 font-bold @endif" href="{{route('mangas.create')}}">Загрузить</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block no-underline py-2 px-4 @if($current_route === 'genre') text-gray-600 font-bold @endif" href="{{route('genre_load')}}">Жанры</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block no-underline py-2 px-4 text-gray-600 font-bold " href="{{route('auth.logout')}}">Выйти</a>
                        </li>
                        </li>

                        @endauth
            </ul>

        </div>
    </div>
</nav>


<div class="container w-full md:max-w-3xl mx-auto pt-20">
    @if(session('error'))
        <div class = "w-full bg-red-700 text-white rounded-lg py-5 px-8 mb-10">
            {{session('error')}}
        </div>
    @endif
    {{ $slot }}
</div>
<script>
    document.getElementById('nav-toggle').onclick = function() {
        document.getElementById("nav-content").classList.toggle("hidden");
    }
</script>

</body>

</html>
