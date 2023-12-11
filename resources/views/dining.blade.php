@extends('layouts.global')
@section('content')
    @include('components.navbar')


<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">Coral Restaurant</h1>
                <p class="leading-relaxed mb-10">Crafted by our team of talented professionals, The Apurva Kempinski Bali offers dining that is always a celebration. Embark on a gastronomic journey, with tempting authentic flavours offering something for every taste in some of the finest restaurants in Bali.
                </p>
                <div>@include('components.button',['nama' => 'SHOW ALL'])</div>
            </div>


            <div class="md:w-1/2">
                <img src="{{ asset('assets/img/other4.jpg') }}" alt="resto" class="h-full w-full">
            </div>
        </div>
    </div>
</section>
