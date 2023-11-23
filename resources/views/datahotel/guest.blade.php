@extends('layouts.global')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logohotel.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Guest - Kings Hotel Nusa Dua</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @yield('content')

        @include('components.navbardashboard')


        <div class="text-center flex flex-col items-center">
            <h1 class="text-3xl font-bold mt-8">DATA GUEST</h1>
            <div class="flex flex-row">
                <a href="{{ route('datahotel.guest.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                    <i class="fas fa-plus"></i>
                    CREATE
                </a>
                <div class="px-4"></div>
                {{-- <a href="{{ route('datahotel.download') }}" class="bg-green-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mt-4">
                    <i class="fa-solid fa-download"></i>
                    DOWNLOAD
                </a> --}}
            </div>

        </div>
            <div class="py-12 mx-20">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NIK
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($guest as $gst)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $gst->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $gst->NIK }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $gst->nama }}
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
