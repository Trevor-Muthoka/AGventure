@extends('layouts.app')

@section('content')

     <div class="background-image grid grid-cols-1 m-auto">
         <div class="flex text-gray-100 pt-1">
             <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-gray-800 text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to write an article ?
                </h1>
                <a href="/article"
                class="text-center bg-gray-50 text-gray-700 py-4 font-bold text-xl uppercase">
                   Article
                </a>
             </div>
         </div>
     </div>

     <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto border-b border-gray-200">
         <div>
             <img src="" alt="">
         </div>
         <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to be a better farmer?
            </h2>
            <p class="py-8 text-gray-500 text-x">
                This is a farming article with various methods to help you become a better farmer.

            </p>
            <p class="font-extrabold text-gray-600 text-x pb-9">
                Farmers need to be on top of their game and need constant support hence it is always good to keep up to date with how other farmers are selling their products
            </p>
            <a href="/article" class="uppercase bg-blue-500 text-gray-200 text-s font-extrabold py-3 px-8 rounded-3xl">
              Check Out Articles
            </a>
        </div>
     </div>
     <div class="text-center p-15 bg-black text-white">
         <h2 class="text-2xl pb-5 text-l">
           I am a learning ...

         </h2>
            <span class="font-extrabold block text-4xl py-1">
                Agricultural Expert
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Market Analyst
            </span>
            <span class="font-extrabold block text-4xl py-1">
                PHP developer
            </span>

     </div>
 <div class="text-center py-15">
     <span class="uppercase text-s text-gray-400">
         Article
     </span>
     <h2 class="text-4xl font-bold py-10">
         Recent Articles
     </h2>
     <p class="m-auto w-4/5 to-gray-500">
         Check out our most recent articles
     </p>

 </div>
 <div class="sm:grid grid-cols-2 w-4/5 m-auto">
 <div class="flex bg-green-600 text-gray-100 pt-10">
     <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
    <span class="uppercase text-xs">
        PHP
    </span>
    <h3 class="text-xl font-bold py-10">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae dolorum fugiat, nulla doloremque nobis molestias numquam, aliquam incidunt deleniti voluptatum autem? Sapiente, dicta temporibus ullam consectetur optio doloribus laborum rerum.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum incidunt cum minus vitae quam sit tenetur quae nesciunt, saepe sunt unde eligendi tempora iusto repellendus adipisci libero veniam ea recusandae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A laborum eos ipsam. Illo cupiditate magni unde, eveniet voluptates nostrum voluptatibus sequi perferendis recusandae ab doloribus fugit, facilis ipsum, eligendi atque.
    </h3>
    <a href=""
       class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 py-5 rounded-3xl"
    >
      Read More
</a>
    </div>
 </div>
 <div>
     <img src="" alt="">
 </div>
</div>

@endsection
