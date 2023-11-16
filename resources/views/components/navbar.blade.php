<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class=" flex items-center justify-center bg-gray-900 sticky top-0 z-10">
    <a href="#" class="basis-1/14 items-center flex flex-row" >
        <img src="{{ asset('assets/img/logohotel.png') }}" alt="Logo" class="w-fit h-20 mr-2">
    </a>
    <span class="flex flex-row text-lg font-bold text-white">KING Hotel Nusa Dua, Bali </span>
</div>
<nav class="flex flex-row p-4 px-4 justify-between items-center bg-gray-900 z-4 sticky top-20 z-10">
    <ul class="hidden lg:flex items-center gap-12 justify-center basis-1/2 text-white ml-60">
        <li><a href="{{ route('user.home') }}">Home</a></li>
        <li><a href="{{ route('user.resort') }}">The Resort</a></li>
        <li><a href="{{ route('user.theroom') }}">The Room & Suites</a></li>
        <li><a href="{{ route('user.dining') }}">Dining</a></li>
        <li><a href="#">Our Hotel</a></li>
        {{-- <li><a href="{{ url('data/reservasi') }}">Database</a></li> --}}
    </ul>
    <div class="hidden lg:flex justify-end mr-52 p-4">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 10 550 502"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        <p class="username text-white">{{ Auth::user()->username }}</p>
    </div>

    <div id="hamburger" class="lg:hidden cursor-pointer">
        <i class="fa-solid fa-bars"></i>
    </div>
</nav>

{{-- <div class="flex items-center justify-center bg-gray-900">
    <a href="#" class="basis-1/14 items-center flex flex-row" >
        <img src="{{ asset('assets/img/logohotel.png') }}" alt="Logo" class="w-fit h-20 mr-2">
    </a>
    <span class="flex flex-row text-lg font-bold text-white">KING Hotel Nusa Dua, Bali </span>
</div>
<nav class="flex flex-row p-4 px-4 justify-between items-center bg-gray-900 z-4 sticky top-0">
    <ul class="flex flex-row gap-12 justify-center basis-1/2 text-white ml-60">
        <li><a href="#">Home</a></li>
        <li><a href="#">The Resort</a></li>
        <li><a href="#">The Room & Suites</a></li>
        <li><a href="#">Dining</a></li>
        <li><a href="#">Our Hotel</a></li>
    </ul>
    <div class="flex justify-end mr-52">
        @include('components.button',['nama' => 'BOOK'])
    </div>
</nav> --}}

