@extends('layouts.global')
@section('content')
    @include('components.navbar')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logohotel.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>

    <body>

        {{-- landing --}}
        <section class="h-[600px] relative">
            <img id="imageSlider" src="{{ asset('assets/img/beachview.jpg') }}" alt="Beachview"
                class="absolute w-full h-full object-cover -z-10 brightness-50">
            <div class="h-full flex flex-col place-content-center text-center text-white">
                <h1 class="text-7xl font-light">A Majestic Open Air Theatre</h1><br>
                <p class="text-2xl">King Hotel & Resort</p>
            </div>
        </section>

        <script>
            const images = [
                "{{ asset('assets/img/beachview.jpg') }}",
                "{{ asset('assets/img/other4.jpg') }}",
                "{{ asset('assets/img/other2.jpg') }}",
                "{{ asset('assets/img/other3.jpg') }}",
            ];

            let currentImageIndex = 0;

            function changeImage() {
                document.getElementById('imageSlider').src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            changeImage();
            // set durasi
            setInterval(changeImage, 2500);

        </script>

        {{-- desk hotel --}}
        @include('components.deskripsihotel')

        {{-- footer --}}
        @include('components.footer')

    @endsection
