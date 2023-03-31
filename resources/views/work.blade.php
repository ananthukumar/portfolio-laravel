@extends('app')
@section('content')

<div>
    <section class="px-5 md:px-36 pt-10 md:pt-20">
        <div class="md:flex items-end gap-24">
            <div class="md:flex gap-20 items-center">
                <div class="flex-none mb-5 md:mb-0">
                    <p class=" text-md flex gap-4 items-center">Projects <span
                            class="w-[40px] h-[1px] bg-black flex"></span></p>
                </div>
                <div class="">
                    <h2 class="text-5xl md:text-[6rem] font-bold md:leading-[130px] pb-5 md:pb-0">My Projects</h2>
                    <p class="md:mt-5 max-w-xl text-lg md:text-xl">A UI/UX designer passionate about creating simple yet
                        innovative experiences for users.
                    </p>
                </div> 

            </div>
        </div>
    </section>

    <section class="px-5 md:px-36 pt-10 md:pt-24">
        <div class="grid sm:grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5 style__show">
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                        <img src="{{asset('assets/ee1.jpg')}}" alt="" />
                    </a>
                </div>

            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee2.jpg')}}" alt="" />
                    </a>
                </div>

            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee3.jpg')}}" alt="" />
                    </a>
                </div>

            </div>
           
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee5.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee4.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee6.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee7.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee8.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee9.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee10.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="card__wrap mb-5">
                <div class="zoom__img overflow-hidden">
                    <a href="">
                    <img src="{{asset('assets/ee11.jpg')}}" alt="" />
                    </a>
                </div>
            </div>



        </div>
    </section>

    @endsection
