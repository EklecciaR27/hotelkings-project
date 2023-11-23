<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class=" flex items-center justify-center bg-gray-900 sticky top-0 z-10">
    <a href="#" class="basis-1/14 items-center flex flex-row" >
        <img src="{{ asset('assets/img/logohotel.png') }}" alt="Logo" class="w-fit h-20 mr-2">
    </a>
    <span class="flex flex-row text-lg font-bold text-white">KING Hotel Nusa Dua, Bali </span>
    <div class="px-80"></div>
    <div class="hidden lg:flex justify-end ">
        <a href="{{ url('auth/login') }}" class="group relative bg-gray-900  px-0 py-2 w-28 font-bold flex justify-center gap-4 hover:bg-slate-800 ">
            <p class="invisible">LOGIN</p>
            <p class="absolute text-white">LOGIN</p>
        </a>

        <a href="{{ url('auth/register') }}" class="group relative bg-gray-900  px-0 py-2 w-28 font-bold flex justify-center gap-4 hover:bg-slate-800 ">
            <p class="invisible">REGISTER</p>
            <p class="absolute text-white">REGISTER</p>
        </a>

    </div>
</div>

