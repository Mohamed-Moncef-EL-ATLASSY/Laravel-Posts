@extends('home')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-yellow-400 p-6 rounded-lg">
            {{-- @auth --}}
                <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Be creative!"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
            {{-- @endauth --}}

            {{-- @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach

                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif --}}


                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="mb-4">
                            <div class="text-gray-900 font-bold text-2xl">{{ $post->user->name }} <a class="text-gray-600 font-normal text-xs leading-none"> posted {{$post->created_at->diffForHumans()}}</a></div>
                            <p class="text-xl">{{$post->body}}
                            </p>
                            <div class="flex items-center text-sm">
                                @if(!$post->likedBy(auth()->user()))
                                <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-1 mr-3">
                                    @csrf
                                    <button type="submit" class="text-green-500 font-bold">Like</button>
                                </form>
                                @else
                                <form action="{{ route('posts.likes', $post->id) }}" method="delete" class="mr-1">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-500 font-bold">Unlike</button>
                                </form>
                                @endif
                                <span>{{ $post->likes->count()}} {{ Str::plural('Like', $post->likes->count() ) }}</span>
                                {{-- <span>{{ $post->unlikes->count()}}</span> --}}
                            </div>
                        </div>
                    @endforeach
                    {{ $posts->links()}}
                @else
                    <p>Post something!</p>
                @endif

    </div>
</div>

@endsection
