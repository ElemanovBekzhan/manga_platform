<x-layouts.app>
    <h1 class="text-4xl mb-5"> Регистрация </h1>
    <form action="{{route('auth.register')}}" method="POST" class = "w50">
        @csrf
        <label>
            <input required type="text" name="username" placeholder="Имя"class ="w-full text-lg rounded-lg px-5 py-1 my-2">
        </label>
        <label>
            <input required type="email" name="email" placeholder="Почта"class ="w-full text-lg rounded-lg px-5 py-1 my-2">
        </label>
        <label>
            <input required type="password" name="password" placeholder="Пароль"class ="w-full text-lg rounded-lg px-5 py-1 my-2">
        </label>
        <label>
            <input required type="password" name="password_confirmation" placeholder="Повторите пароль"class ="w-full text-lg rounded-lg px-5 py-1 my-2">
        </label>
        <button type="submit" class="w-full text-lg rounded-lg px-10 py-1 my-2 bg-blue-500 text-white">Зарегистрироваться</button>
    </form>
</x-layouts.app>
