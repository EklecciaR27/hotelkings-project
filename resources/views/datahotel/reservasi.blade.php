@extends('layouts.global')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logohotel.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Reservasi - Kings Hotel Nusa Dua</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @yield('content')

        @include('components.navbardashboard')

            <div class="text-center flex flex-col items-center">
                <h1 class="text-3xl font-bold mt-8">DATA RESERVASI</h1>
                <div class="flex flex-row">
                    <a href="{{ route('datahotel.crud.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                        <i class="fas fa-plus"></i>
                        CREATE
                    </a>
                    <div class="px-4"></div>
                    <a href="{{ route('datahotel.download') }}" class="bg-green-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mt-4">
                        <i class="fa-solid fa-download"></i>
                        DOWNLOAD DATA RESERVASI
                    </a>
                    <form action="{{ route('datahotel.search') }}" method="GET" class="flex items-center border border-gray-300 rounded mt-4 ml-4">
                        <input type="text" name="query" placeholder="Search..." class="py-2 px-3 rounded-l focus:outline-none">
                        <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                            Search
                        </button>
                    </form>

                </div>

            </div>

            @if (session('success'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-green-100 ring-1 text-center ring-green-500">
                            <p class="text-green-500">
                                Reservasi dengan ID {{ session('edited_id') }} berhasil diubah.
                            </p>
                        </div>
                    </div>
             @endif

             @if (session('success1'))
             <div class="mb-6">
                 <div class="p-2 rounded-sm bg-green-100 ring-1 text-center ring-green-500">
                     <p class="text-green-500">
                         Reservasi dengan ID {{ session('deleted_id') }} berhasil dihapus.
                     </p>
                 </div>
             </div>
             @endif



            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nomor Telepon
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No. Kamar
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID-Guest
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       FOTO KTP
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Bukti Pembayaran
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($reservasi as $res)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->nama }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->notelp }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->jumlahkamar }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->guest_id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->gambarktp }}
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $res->bukti }}
                                        </td> --}}
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('datahotel.crud.edit', $res->id) }}"class="text-indigo-600 hover:text-indigo-900">
                                                <i class="fas fa-edit text-blue-500"></i>
                                            </a>
                                            <form action="{{route('datahotel.delete', $res->id)}}" method="post">
                                            @csrf
                                            <button>
                                                <a class="text-red-600 hover:text-red-900">
                                                    <i class="fas fa-trash text-red-500"></i>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </body>
<html>
