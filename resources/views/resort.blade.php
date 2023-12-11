@extends('layouts.global')
@section('content')
    @include('components.navbar')

<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="md:w-1/2 ml-4">
                <img src="{{ asset('assets/img/resort2.jpg') }}" alt="" class="h-full w-full">
                <img src="{{ asset('assets/img/resort2.jpg') }}" alt="" class="h-full w-full">
            </div>

            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10 ml-12">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">Ampurva Resort</h1>
                <p class="leading-relaxed mb-10">
                    Ampurva Resort, terpaut dari dunia, menawarkan pangkuan hening untuk menemukan kedamaian dalam. Di tengah hutan yang menari dengan angin, aku menemukan diriku terbenam dalam kesunyian yang menyentuh jiwa. Di sini, kolam renang pribadi menjadi cermin bagi keindahan alam yang memelukku erat.
                </p>
                <div>@include('components.button',['nama' => 'BOOK'])</div>
            </div>
        </div>
    </div>
</section>

<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10 ml-12">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">Kempinski Resort</h1>
                <p class="leading-relaxed mb-10">Kempinski Resort membuka pintu ke dunia kemewahan yang mengundang untuk merayakan kehidupan. Dikelilingi oleh gemerlapnya kemegahan Bali, aku menemukan diriku terhanyut dalam kemewahan yang mempesona. Kolam renang pribadinya adalah cermin dari keanggunan dan keelokan yang membius mata.
                </p>
                <div>@include('components.button',['nama' => 'BOOK'])</div>
            </div>

            <div class="md:w-1/2 ml-4">
                <img src="{{ asset('assets/img/resort1.jpg') }}" alt="" class="h-full w-full">
                <img src="{{ asset('assets/img/resort1.jpg') }}" alt="" class="h-full w-full">
            </div>

        </div>
    </div>
</section>
