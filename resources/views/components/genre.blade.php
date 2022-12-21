
    <form action="{{route('genre')}}" method="POST" class = "w50">
        <div class="-space-y-px rounded-md shadow-sm">
            @csrf
            <div>
                <label class="sr-only">Genre</label>
                <input name="genre" type="text" required class="relative block w-full appearance-none rounded-none
                 rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10
                 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                       placeholder="Жанр">
            </div>
            <div>
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent
                bg-gray-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2
                focus:ring-indigo-500 focus:ring-offset-2">
                    Загрузить
                </button>
            </div>
        </div>
    </form>

