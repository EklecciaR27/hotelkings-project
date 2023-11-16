@extends('layouts.global')
@section('content')
    @include('components.navbar')

<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="md:w-1/2 ml-4">
                <img src="{{ asset('assets/img/resort.jpeg') }}" alt="" class="h-full w-full">
                <img src="{{ asset('assets/img/resort.jpeg') }}" alt="" class="h-full w-full">
            </div>

            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10 ml-12">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">Our Resort</h1>
                <p class="leading-relaxed mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </div>
        </div>
    </div>
</section>
