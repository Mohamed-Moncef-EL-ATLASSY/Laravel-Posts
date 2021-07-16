@extends('home')

@section('content')

<div class="flex justify-center">

    <div class="w-8/12 bg-yellow-400 p-3 rounded-lg">
    <div class="flex justify-center items-center py-12 w-full bg-yellow-400">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8">
        <h1 class="block w-full text-center text-black-800 text-2xl font-bold mb-3">Register</h1>
        <form action="{{ route('register') }}" method="post">

            @csrf
            <div class="flex flex-col mb-4">
                <label class=" font-bold text-lg text-gray-900" for="name">Full Name</label>
                <input class="border-2 py-2 px-3 text-grey-800 @error('name') border-red-500 @enderror " type="text" name="name" id="name" value="{{ old('name') }}">

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        The "Full Name" field is required
                    </div>
                @enderror
            </div>

            <div class="flex flex-col mb-4">
                <label class=" font-bold text-lg text-gray-900" for="username">Username</label>
                <input class="border-2 py-2 px-3 text-grey-800 @error('username') border-red-500 @enderror " type="text" name="username" id="username" value="{{ old('username') }}">

                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror


            </div>

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

            <div class="flex flex-col mb-4">
                <label class=" font-bold text-lg text-gray-900" for="password_confirmation">Confirm Password</label>
                <input class="border-2 py-2 px-3 text-grey-800" type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <button class="bg-transparent hover:bg-yellow-600 text-yellow-800 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded" type="submit">Create account</button>

        </form>
        <a class="block w-full text-center no-underline mt-4 text-sm text-gray-700 hover:text-gray-900" href="/login"><u> Already have an account? </u></a>
    </div>
</div>
    </div>
</div>

@endsection
