@extends('layouts.app')

@section('content')
    <div class="">
        <div class="grid grid-cols-1 m-auto p-20">
            <div class="flex text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
                    <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                        Do you want to become a Wbloger?
                    </h1>
                    <a 
                        href="/blog"
                        class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                        Read More
                    </a>
                </div>
            </div>
        </div>

        <div class="sm:grid grid-cols-2 w-4/5 m-auto pb-20 ">
            <div>
                <img src="https://jeu-bayrou.com/wp-content/uploads/2021/08/1628854021_Comment-regarder-la-diffusion-en-direct-Genshin-Impact-21-date.jpg" alt="">
            </div>
            <div class="flex bg-purple-900 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <span class="uppercase">
                        Wblog
                    </span>

                    <h3 class="text-xl font-bold py-10">
                        Wblog là nơi giao lưu chia sẽ với các bạn có cùng sở thích và đam mê
                    </h3>

                    <a 
                        href="/blog"
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center text-white p-15 mx-20 bg-black ">
                <h2 class="text-2xl pb-5 text-l"> 
                    chúng ta là
                </h2>

                <span class="font-extrabold block text-4xl py-1">
                    wibu chân chính
                </span>
                <span class="font-extrabold block text-4xl py-1">
                    game thủ chân chính 
                </span>
                <span class="font-extrabold block text-4xl py-1">
                    tất cả vì đam mê
                </span>
                <span class="font-extrabold block text-4xl py-1">
                    tất cả vì sở thích 
                </span>
        </div>


        <div class="sm:grid grid-cols-2 w-4/5 m-auto py-20">
            <div class="flex bg-gray-900 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <span class="uppercase">
                        Hãy cùng nhau chia sẽ
                    </span>

                    <h3 class="text-xl font-bold py-10">
                        chỉ cần bạn đăng nhập là có thể tạo ngay cho mình 1 blog riêng cho bản thân và cùng nhau đóng góp cho WBlog
                    </h3>

                    <a 
                        href="/blog"
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div>
                <img src="https://i.pinimg.com/originals/83/8d/5c/838d5c19e22a7cecdf7fa713a6422dc3.jpg" alt="">
            </div>
        </div>
    </div>
@endsection