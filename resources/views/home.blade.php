@extends('app')
@section('content')
<section class="px-5 md:px-16 pb-20 pt-10 md:pt-5 text-center">
    <div class="pb-10 pt-20 text-heading  gray">
        <h1 class="text-6xl md:text-8xl text-center font-bold">Hi, I'am <span class="text-[#dbdede]">Ananthu,</span>
            <br>UI UX Designer</h1>
    </div>
    <a href="{{ url('work') }}">
        <button
            class="border text-center text-md md:text-xl uppercase py-3 px-8 hover:tracking-widest hover:bg-black hover:text-white ease-in-out transition-all">Explore
            My Work</button>
    </a>

 
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


<section class="pt-14 md:pt-36">
    <div class="px-5 md:px-16">
        <div class="flex justify-between items-center">
            <h2 class="text-3xl md:text-7xl font-semibold">My Works</h2>
            </p>
        </div>

    </div>
</section>

<section class="px-5 md:px-16 pt-10 md:pt-24 mx-auto">
    <div class="mb-14 md:mb-28">
        <div class=" overflow-hidden">
            <a href="{{ url('bankit') }}">
                <img src="{{asset('assets/q3.jpg')}}" alt="" />
            </a>
            <div class="pt-3 sm:px-20 sm:pt-10">
                <h2 class="text-xl md:text-3xl capitalize text-gray-500">bankit</h2>

            </div>
        </div>
    </div>
    <div class="">
        <div class=" overflow-hidden">
            <a href="{{ url('') }}">
                <img src="{{asset('assets/q1.jpg')}}" alt="" />
            </a>
            <div class="pt-3 sm:px-20 sm:pt-10">
                <h2 class="text-xl md:text-3xl capitalize text-gray-500">Jiitak</h2>

            </div>
        </div>
    </div>

</section>

<div class="resume flex justify-center pt-14 md:pt-36">
    <a href="{{ url('work') }}">
        <button
            class="border text-2xl uppercase py-3 px-8 hover:tracking-widest hover:bg-black hover:text-white ease-in-out transition-all">View
            All</button></a>
</div>

@endsection