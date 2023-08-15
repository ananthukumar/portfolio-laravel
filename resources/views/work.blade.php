@extends('app')
@section('content')

<div>
    <section class="px-5 md:px-16 pt-10 md:pt-20">
        <div class="md:flex items-end gap-24">
            <div class="md:flex gap-20 items-center">
                <div class="flex-none mb-5 md:mb-0">
                    <p class=" text-md flex gap-4 items-center">Projects <span
                            class="w-[40px] h-[1px] bg-black flex"></span></p>
                </div>
                <div class="text-heading  gray">
                    <h1 class="text-5xl md:text-[6rem] uppercase md:leading-[130px] pb-5 md:pb-0" id="content">Portfolio</h1>
                    <p class="md:mt-5 max-w-xl text-lg md:text-xl">A UI/UX designer passionate about creating simple yet
                        innovative experiences for users.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="px-5 md:max-w-5xl mx-auto pt-10 md:pt-24">
        <div class="card__wrap md:mb-24 mb-10 style__grid ">
            <div class="zoom__img overflow-hidden">
                <a href="">
                    <img src="{{asset('assets/q1.jpg')}}" c alt="" />
                </a>
            </div>
        </div>
        <div class="card__wrap md:mb-24 mb-10">
            <div class="zoom__img overflow-hidden">
                <a href="{{ url('bankit') }}">
                    <img src="{{asset('assets/q3.jpg')}}" alt="" />
                </a>
            </div>


        </div>
        <!-- <div class="card__wrap mb-5">
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
        </div> -->



</section>

@endsection