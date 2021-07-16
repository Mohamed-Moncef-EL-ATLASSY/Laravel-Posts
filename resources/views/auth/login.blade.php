@extends('home')

@section('content')

<div class="flex justify-center">

    <div class="w-8/12 bg-yellow-400 p-3 rounded-lg">
    <div class="flex justify-center items-center py-12 w-full bg-yellow-400">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8">
        <h1 class="block w-full text-center text-black-800 text-2xl font-bold mb-3">Log In</h1>

        @if (session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{ session('status') }}
            </div>
        @endif



        <form action="{{ route('login') }}" method="post">

            @csrf

            <div class="flex flex-col mb-4">
                <label class=" font-bold text-lg text-gray-900" for="email">Email</label>
                <input class="border-2 py-2 px-3 text-grey-800 @error('email') border-red-500 @enderror " type="email" name="email" id="email" value="{{ old('email') }}">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror


            </div>

            <div class="flex flex-col mb-4">
                <label class=" font-bold text-lg text-gray-900" for="password">Password</label>
                <input class="border-2 py-2 px-3 text-grey-800 @error('password') border-red-500 @enderror " type="password" name="password" id="password" >

                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <button class="bg-transparent hover:bg-yellow-600 text-yellow-800 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded" type="submit">Log In</button>

        </form>
        <a class="block w-full text-center no-underline mt-4 text-sm text-gray-700 hover:text-gray-900" href="/register"><u> New User?</u></a>
    </div>
</div>
    </div>
</div>

@endsection
