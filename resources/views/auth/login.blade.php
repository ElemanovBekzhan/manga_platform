<x-layouts.app>
    <h1 class="text-4xl mb-5"> Авторизация </h1>
    <form action="{{route('auth.login')}}" method="POST" class = "w50">
        @csrf
        <label>
            <input required type="text" name="username" placeholder="Имя"class ="w-full text-lg rounded-lg px-5 py-1 my-2">
        </label>
        <label>
            <input required type="password" name="password" placeholder="Пароль"class ="w-full text-lg rounded-lg px-5 py-1 my-2">
        </label>
        <button type="submit" class="w-full text-lg rounded-lg px-10 py-1 my-2 bg-blue-500 text-white">Войти</button>
    </form>
</x-layouts.app>
