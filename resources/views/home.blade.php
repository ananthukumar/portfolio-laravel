@extends('app')
@section('content')

<section class="px-5 md:px-36 pb-20 pt-10 md:pt-20">
    <div class="md:flex gap-10 items-center">
        <div class="p-3 border flex-none">
            <div class="zoom__img overflow-hidden">
                <img src="{{asset('assets/img__2.jpg')}}" width="290" class="mx-auto" alt="" />
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
    <div class="grid sm:grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5 items-center style__show">
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/works/e1.jpg')}}" alt="" />
                </a>
            </div>

        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/works/e2.jpg')}}" alt="" />
                </a>
            </div>
            

        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/works/e3.jpg')}}" alt="" />
                </a>
            </div>

        </div>

        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/works/e5.jpg')}}" alt="" />
                </a>
            </div>
        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                <img src="{{asset('assets/works/e4.jpg')}}" alt="" />
                </a>
            </div>
        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                <img src="{{asset('assets/works/e6.jpg')}}" alt="" />
                </a>
            </div>
        </div>
        
    </div>
</section>

<div class="resume flex justify-center pt-36">
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
