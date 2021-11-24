@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left ">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20 bg-gray-100 p-10 m-20" >
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
    <hr>
    <form 
        action="/blog/{{ $post->slug }}"
        method=""
        enctype="multipart/form-data">
        @csrf
        
        <input 
            name="description"
            placeholder="hãy cho chúng tôi biết cảm nghĩ của bạn..."
            class="py-20 bg-transparent block border-b-2 w-full h-30 text-xl outline-none "></input>
    
    <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-xs font-extrabold py-4 px-8 rounded-3xl mb-10">
            gửi nhận xét 
    </button>
    </form>

    <p class="text-xl uppercase text-gray-900 py-10 ">
        các nhận xét khác
    </p>
    
    @forelse ($post->cmt as $cmts)
    <p class="text-xl text-gray-700  leading-8 font-light">
        {{ $cmts->description }}
    </p>
    <span class="text-gray-500">
        <span class="font-bold italic text-gray-800"></span> Created on {{ date('jS M Y', strtotime($cmts->updated_at)) }}
    </span>
    @empty
        <p>không có nhận xét nào cả</p>
    @endforelse
</div>



@endsection 