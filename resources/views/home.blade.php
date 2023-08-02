@extends('app')
@section('content')

<!-- <section class="px-5 md:px-36 pb-20 pt-10 md:pt-20">
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
</section> -->

<section class="px-5 md:px-16 pb-20 pt-10 md:pt-5 text-center">
    <div class="pb-10 pt-20 text-heading  gray">
        <h1 class="text-4xl md:text-8xl text-center font-bold">Hi, I'am <span class="text-[#dbdede]">Ananthu,</span>
            <br>UI UX Designer</h1>
    </div>
    <a href="{{ url('work') }}">
        <button
            class="border text-center text-xl uppercase py-3 px-8 hover:tracking-widest hover:bg-black hover:text-white ease-in-out transition-all">Explore
            My Work</button>
    </a>

    <!-- <div class="h-80">
        <img src="{{asset('assets/photo.jpg')}}" class="w-full h-full object-cover" alt="">
    </div> -->
    <!-- <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-20 justify-between py-10">
        <div>
            <p class="text-xl">I am a UI/UX Designer from New York and I create unique user experiences for the web and
                mobile.</p>
        </div>
        <div class="text-end">
            <h1 class="text-8xl uppercase">Ananthu <br>Kumar</h1>
        </div>
    </div> -->
</section>
<!-- 
<section class="pt-24 pb-36 bg-[#efefef]">
    <div class="px-5 md:px-16 gap-10">
        <h2 class="text-3xl md:text-[54px] leading-[50px] text-medium">
            I can help you with
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 pt-36">
            <div class="border-l-2 border-gray-300 px-5 hover:bg-white py-10">
                <div class="h-10 w-10">
                    <img src="{{asset('assets/s1.png')}}" class="w-full h-full object-contain" alt="">
                </div>
                <h2 class="text-2xl pb-3 capitalize pt-14">UI Design</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
            </div>
            <div class="border-l-2 border-gray-300 px-5 hover:bg-white py-10">
                <div class="h-10 w-10">
                    <img src="{{asset('assets/s3.png')}}" class="w-full h-full object-contain" alt="">
                </div>
                <h2 class="text-2xl pb-3 capitalize pt-14">UX Design</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
            </div>
            <div class="border-l-2 border-gray-300 px-5 hover:bg-white py-10">
                <div class="h-10 w-10">
                    <img src="{{asset('assets/s2.png')}}" class="w-full h-full object-contain" alt="">
                </div>
                <h2 class="text-2xl pb-3 pt-14 capitalize">Web Development</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
            </div>
        </div>
    </div>
</section> -->
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
<!-- <section class="py-14">
    <div class="text-content gap-10 flex items-center overflow-hidden relative">
        <div class="text-8xl uppercase flex-none">UI UX DESIGNER</div>
        <div class="dot w-5 h-5 bg-black rounded-full block flex-none"></div>
        <div class="text-8xl uppercase flex-none">UI UX DESIGNER</div>
        <div class="dot w-5 h-5 bg-black rounded-full block flex-none"></div>

        <div class="text-8xl uppercase flex-none">UI UX DESIGNER</div>
        <div class="dot w-5 h-5 bg-black rounded-full block flex-none"></div>

        <div class="text-8xl uppercase flex-none">UI UX DESIGNER</div>
        <div class="dot w-5 h-5 bg-black rounded-full block flex-none"></div>

        <div class="text-8xl uppercase flex-none">UI UX DESIGNER</div>
        <div class="dot w-5 h-5 bg-black rounded-full block flex-none"></div>
    </div>
</section> -->

<section class="pt-36">
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
                <h2 class="text-3xl capitalize text-gray-500">bankit</h2>

            </div>
        </div>
    </div>
    <div class="">
        <div class=" overflow-hidden">
            <a href="{{ url('') }}">
                <img src="{{asset('assets/q1.jpg')}}" alt="" />
            </a>
            <div class="pt-3 sm:px-20 sm:pt-10">
                <h2 class="text-3xl capitalize text-gray-500">Jiitak</h2>

            </div>
        </div>
    </div>
    <!-- <div class="grid sm:grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-10 items-center style__show">
        <div class="card__wrap mb-5 style__grid">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/q1.jpg')}}" c alt="" />
                </a>
            </div>
        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="{{ url('bankit') }}">
                    <img src="{{asset('assets/q3.jpg')}}" alt="" />
                </a>
            </div>


        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/easy.jpg')}}" alt="" />
                </a>
            </div>

        </div>

        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/q4.jpg')}}" alt="" />
                </a>
            </div>
        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/q5.jpg')}}" alt="" />
                </a>
            </div>
        </div>
        <div class="card__wrap mb-5">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/q6.jpg')}}" alt="" />
                </a>
            </div>
        </div>

    </div> -->
</section>

<div class="resume flex justify-center pt-14 md:pt-36">
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