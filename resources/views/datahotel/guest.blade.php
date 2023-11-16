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


            <div class="text-center">
                <h1 class="text-3xl font-bold mt-12">DATA GUEST</h1>
            </div>
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
                                        NIK
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
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
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a  class="text-indigo-600 hover:text-indigo-900">
                                                <i class="fas fa-edit text-blue-500"></i>
                                            </a>

                                            <a class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash text-red-500"></i>
                                            </a>
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
