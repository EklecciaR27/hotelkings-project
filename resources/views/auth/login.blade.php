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
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <form action="{{ route('login.action') }}" method="post">
                @csrf
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
                        <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                            <p class="text-green-500">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                @endif
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Welcome back</span>
                <span class="font-light text-gray-500 mb-8">
                    to Kings Hotel Nusa Dua! Please enter your details
                </span>
                <div class="py-4">
                    <span class="mb-2 text-md">Username</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="username" />
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">Password</span>
                    <input type="password" name="password"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2" />
                        <span class="text-md">Remember for 30 days</span>
                    </div>
                    <span class="font-bold text-md">Forgot password</span>
                </div>
                <button type="submit"
                    class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    Sign in
                </button>

                <div class="text-center text-gray-400">
                    Dont Have Account?
                    <a href="{{ route('auth.register') }}" class="font-bold underline text-blue-500">Sign Up Here</a>
                </div>
            </div>
        </form>
            <!-- {/* right side */} -->
            <div class="relative">
                <img src= "{{ asset('assets/img/beachview.jpg') }}" alt="img"
                    class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover" />
                <!-- text on image  -->

            </div>
        </div>
    </div>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logohotel.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        <title>King Hotel Nusa Dua - Bali</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{-- coba open ini --}}
{{-- @yield('content') --}}
{{-- <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <box-icon name='user'></box-icon>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <box-icon name='lock-alt' ></box-icon>
                </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't Have Account?<a href="#">Register</a></p>
            </div>

            </form>
        </div>


    </body>
<html> --}}
