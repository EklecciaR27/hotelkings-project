<style>
    .hover-bg-slate-800:hover {
      background-color: #2b3748;
      padding: 8px 16px;
      transition: background-color 0.3s, padding 0.3s;
    }
  </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class=" flex items-center justify-center bg-sky-500 sticky top-0 z-10">
    <a href="#" class="basis-1/14 items-center flex flex-row" >
        <img src="{{ asset('assets/img/logohotel.png') }}" alt="Logo" class="w-fit h-20 mr-2">
    </a>
    <span class="flex flex-row text-lg font-bold text-black">ADMIN DASHBOARD </span>
    <nav class="flex flex-row p-8 px-4 justify-between items-center sticky top-20 z-10">
        <ul class="hidden lg:flex items-center font-bold gap-28 justify-center text-white ml-80">
          <li class="hover-bg-slate-800"><a href="{{ url('data/home') }}">HOME</a></li>
          <li class="hover-bg-slate-800"><a href="{{ url('data/chart') }}">CHART</a></li>
          <li class="hover-bg-slate-800"><a href="{{ url('data/reservasi') }}">RESERVASI</a></li>
          <li class="hover-bg-slate-800"><a href="{{ url('data/guest') }}"> GUEST</a></li>
          <li class="hover-bg-slate-800"><a href="{{ route('logout') }}" > <i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
        {{-- <div class="flex items-center ml-4"> --}}
            {{-- <span class="text-white mr-4">{{ auth()->user()->name }}</span> --}}
            {{-- <a href="{{ route('logout') }}" class="text-white hover:text-red-500">
                <i class="fas fa-sign-out-alt"></i> --}}
        {{-- </div> --}}
      </nav>
</div>

