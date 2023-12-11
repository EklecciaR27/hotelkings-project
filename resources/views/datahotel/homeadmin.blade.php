@extends('layouts.global')

@include('components.navbardashboard')


<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">Welcome, Admin</h1>
                <p class="leading-relaxed mb-10">"Selamat datang di dashboard Admin KING Hotel! Mari jelajahi beragam fitur yang tersedia untuk mengelola informasi, reservasi, dan tamu dengan mudah. Semoga hari Anda penuh produktivitas dan sukses!"
                </p>

            </div>

            <div class="md:w-1/2">
                <img src="{{ asset('assets/img/admin.png') }}" alt="resto" class="h-full w-full">
            </div>
        </div>
    </div>



    {{-- <div style="display: flex; justify-content: space-around;">
        {!! $chart->container() !!}
    </div>
    <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }} --}}
</section>



