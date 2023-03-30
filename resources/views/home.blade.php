@extends('app')
@section('content')

<section class="px-5 md:px-36 pb-20 pt-10 md:pt-20">
    <div class="md:flex gap-10">
        <div class="p-3 border flex-none">
            <div class="zoom__img overflow-hidden">
                <img src="{{asset('assets/image.jpg')}}" width="290" class="mx-auto" alt="" />
            </div>
        </div>
        <div class="mt-5 text-center md:text-left">
            <p class="font-bold">HELLO THERE, I AM </p>
            <h2 class="text-5xl md:text-8xl my-4 font-extrabold">Mr Ananthu</h2>
            <p class="text-xl">UI UX Designer.</p>
            <button class="bg-black text-white py-4 px-6 mt-5">Lets talk</button>
        </div>
    </div>
</section>

<section class=" m-0 py-20 md:py-36 my-14 bg-black text-white">
    <div class="px-5 md:px-36 gap-10">
        <div class="">
            <h2 class="text-3xl md:text-[36px] leading-[50px] text-medium text-center">
                "As a designer I believe in solving problems with intuitive, purposeful design. I’m driven when creating
                products and experiences that elevate our lives and communities."
            </h2>
        </div>
    </div>
</section>

<section class="px-5 md:px-36 pt-10 md:pt-36 mx-auto">
    <div class="md:grid grid-cols-2 gap-20 items-center">
        <div class="md:flex relative">
            <div class="zoom__img overflow-hidden">
                <div class="p-3 border ">
                    <img src="{{asset('assets/bankit.jpg')}}" class="object-cover rounded-sm w-full h-full bg-cover"
                        alt="" />
                </div>
            </div>
        </div>

        <div class="text-lg md:text-2xl my-10">
            <h2 class="mb-3 text-3xl md:text-3xl font-semibold">Bankkit</h2>
            <p class="mb-3 text-lg text-[#8f9193]">This project is for the financial company that offers banking
                services.
                It offers features like currency exchange, debit card, stock trading, cryptocurrency, peer to peer
                payment.</p>
            <div class="mt-5 md:mt-8">

                <button
                    class="flex items-center gap-3 px-5 md:px-7 py-2 md:py-3 bg-[#f2f2f2] rounded-3xl text-md md:text-lg hover:bg-[#fff] transition 
                            ease-in-out delay-50 hover:-translate-x-1 hover:text-black hover:border-2 hover:border-[#000]">View
                    Case
                    <span><img src="" alt="" /></span>
                </button>

            </div>
        </div>
    </div>
</section>


<section class="px-5 md:px-36 pt-10 md:pt-36 mx-auto">
    <div class="md:grid grid-cols-2 gap-20 items-center">
        <div class="md:flex relative overflow-hidden">
            <div class="p-3 border zoom__img overflow-hidden">
                <img src="{{asset('assets/meeturdreams.jpg')}}" class="object-cover rounded-sm w-full h-full bg-cover"
                    alt="" />
            </div>
        </div>
        <div class="text-lg md:text-2xl ">
            <h2 class="mb-3 text-3xl md:text-3xl font-semibold my-10">MeetUrDreams</h2>
            <p class="mb-3 text-lg text-[#8f9193]">Meet Your Dream is a Video Conference app and video Conference
                platform.
                which have a mobile app, web application and admin.
            </p>
            <div class="mt-5 md:mt-8">
            </div>
        </div>
    </div>
</section>

<div class="resume flex justify-center py-36">
    <a href="{{ url('work') }}">
        <button
            class="border text-2xl uppercase py-3 px-8 hover:tracking-widest hover:bg-black hover:text-white ease-in-out transition-all">View
            All</button></a>
</div>

<!-- <section class="pt-10 overflow-hidden">
    <div class="flex gap-10">
        <div class="flex gap-10 text-xl md:text-7xl font-semibold flex-none items-center">View Cases <span></span> </div>
        <div class="flex gap-10 text-xl md:text-7xl font-semibold flex-none items-center">View Cases <span></span> </div>
        <div class="flex gap-10 text-xl md:text-7xl font-semibold flex-none items-center">View Cases <span></span> </div>
        <div class="flex gap-10 text-xl md:text-7xl font-semibold flex-none items-center">View Cases <span></span> </div>
    </div>
</section> -->

@endsection
