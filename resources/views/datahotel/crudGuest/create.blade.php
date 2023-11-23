<!DOCTYPE html>
<html lang="en">

@yield('content')

        @include('components.navbardashboard')

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logohotel.png') }}">
    <title>King Hotel Nusa Dua - Bali</title>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-8 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
             <!-- left side -->
            <div class="relative">
                <img src= "{{ asset('assets/img/iconform.png') }}" alt="img"
                    class="w-[400px] h-5/6 hidden rounded-r-2xl md:block object-cover" />
            </div>
            <form action="{{ route('datahotel.guest.store') }}" method="post" enctype="multipart/form-data">
                @csrf

            <!-- right side -->
            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="mb-30 text-4xl font-bold">GUEST FORM</span>
                <span class="font-light text-gray-500 mb-8">
                    Kings Hotel Nusa Dua Bali
                </span>
                @if (session('error'))
                <div class="mb-6">
                    <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                        <p class="text-red-500">
                            {{ session('error') }}
                        </p>
                    </div>
                </div>
                @endif
            <!-- Pesan success -->
                @if (session('success'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-green-100 ring-1 text-center ring-green-500">
                            <p class="text-green-500">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                @endif
                <div class="py-2">
                    <span class="mb-2 text-md">NIK</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="NIK"/>
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">Nama</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="nama"/>
                </div>
                <div class="py-2">
                    <button type="submit" class="w-full bg-purple-500 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                        ADD GUEST
                    </button>
                </div>

            </div>
        </form>

        </div>
    </div>
</body>

</html>

