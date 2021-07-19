<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Ciggy Gaming</title>
</head>

<body class="bg-black">
    <nav class="p-6 bg-yellow-400 flex justify-between mb-6">
        <ul class="flex items-center">

            <li>
                <a href="/" class="p-6"><b> My posts</b> </a>
            </li>

            @auth
            <li>
                <a href=" {{ route('posts') }} " class="p-6"> <b>Posts</b> </a>
            </li>

            <li>
                <a href="{{ route('dashboard') }}" class="p-6"> <b>Dashboard</b> </a>
            </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            {{-- If user authenticated --}}
            @auth
            <li>
                <a href="" class="p-6"><b>Welcome, {{ auth()->user()->name }}</b></a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-white text-white hover:text-red-500 font-bold py-2 px-4 rounded inline-flex items-center">
                        <span>Log Out</span>
                    </button>
                </form>
            </li>
            @endauth

            {{-- If user is guest --}}
            @guest
            <li>
                <a href="{{ route('login') }}" class="p-6"> <b>Login</b> </a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-6"><b> Register </b></a>
            </li>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body>

</html>
