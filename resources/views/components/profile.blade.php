<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
    <img src="https://mangalib.me/uploads/users/3546132/YaEjtUBDF5G1.jpg" class = "mt-10" alt="">
    @php
        $current_route = Route::currentRouteName();


    @endphp

    <a class = "inline-block py-2 px-5 no-underline text-gray mg-5">{{ $user->username }} </a>
</div>



