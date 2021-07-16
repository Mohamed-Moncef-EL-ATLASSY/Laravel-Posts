@extends('home')

@section('content')


    <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
        <div class="p-5 bg-white rounded shadow-sm">
            <div class="text-base text-gray-400 ">Total Users</div>
            <div class="flex items-center pt-1">
                <div class="text-2xl font-bold text-gray-900 ">{{ auth()->user()->name }}</div>
                <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>1.8%</span>
                </span>
            </div>
        </div>
        <div class="p-5 bg-white rounded shadow-sm">
            <div class="text-base text-gray-400 ">Total Posts</div>
            <div class="flex items-center pt-1">
                <div class="text-2xl font-bold text-gray-900 ">$7520.50</div>
                <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-red-600 bg-red-100 rounded-full">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>2.5%</span>
                </span>
            </div>
        </div>
        <div class="p-5 bg-white rounded shadow-sm">
            <div class="text-base text-gray-400 ">Total Likes</div>
            <div class="flex items-center pt-1">
                <div class="text-2xl font-bold text-gray-900 ">1375</div>
                <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>5.2%</span>
                </span>
            </div>
        </div>
        <div class="p-5 bg-white rounded shadow-sm">
            <div class="text-base text-gray-400 ">Total Unlikes</div>
            <div class="flex items-center pt-1">
                <div class="text-2xl font-bold text-gray-900 ">$250.00</div>
                <span class="flex items-center px-2 py-0.5 mx-2 text-sm text-green-600 bg-green-100 rounded-full">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>2.2%</span>
                </span>
            </div>
        </div>
    </div>



@endsection
