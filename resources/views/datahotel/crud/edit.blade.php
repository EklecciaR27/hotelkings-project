<!DOCTYPE html>
<html lang="en">

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
                    class="w-[600px] h-full hidden rounded-r-2xl md:block object-cover" />
            </div>
            <form action="{{ route('datahotel.update', $reservasis->id) }}" method="post">
                @csrf
            <!-- right side -->
            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="mb-30 text-4xl font-bold">RESERVATION FORM</span>
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
                    <span class="mb-2 text-md">Nama</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="nama" value="{{$reservasis->nama}}" />
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">No Telp</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="notelp" value="{{$reservasis->notelp}}"/>
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">Email</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="email" value="{{$reservasis->email}}"/>
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">Jumlah Kamar</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="jumlahkamar" value="{{$reservasis->jumlah_kamar}}"/>
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">Guest_ID</span>
                    <select type="text" name="guest_id" class="w-full pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        <option value="" disabled selected>Choose Here</option>
                        @foreach ($guests as $gst)
                            <option value="{{ $gst->id }}" {{$reservasis->guest_id == $gst->id ? 'selected':''}}>{{ $gst->nama }}</option>
                            {{-- <option value="{{ $gst->id }}">{{ $gst->nama }}</option> --}}
                        @endforeach
                    </select>
                </div>
                {{-- <div class="py-2">
                    <span class="mb-2 text-md">Gambar KTP (jpg, jpeg, png):</span>
                    <input type="file" id="gambarktp" name="gambarktp" value="{{$reservasis->gambarktp}}" class="w-full p-2 border border-gray-300 rounded">
                </div> --}}
                <div class="py-2">
                    <button type="submit" class="w-full bg-purple-500 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                        EDIT RESERVATION
                    </button>
                </div>

            </div>
        </form>

        </div>
    </div>
</body>

</html>

