@extends('app')
@section('content')

<section class="px-5 md:px-36 py-20">
    <div class="grid grid-cols-6 gap-10 items-center">
        <div class="col-span-1">
            <!-- <p class="text-md pb-5 md:pb-0">Bankkit</p> -->
            <h2 class="text-4xl md:text-7xl font-semibold pb-8">Case <span class="text-md">Study</span> </h2>
        </div>
        <div class="card__wrap mb-5 col-span-2">
            <div class="zoom__img overflow-hidden">
                <a href="" class="">
                    <img src="{{asset('assets/ee1.jpg')}}" class=" w-full object-contain " alt="" />
                </a>
            </div>
        </div>
        <div class="col-span-3">
            <p class="text-md md:text-xl mb-4">This project is for the financial company that offers banking
                services. It offers features like currency exchange, debit card, stock trading, cryptocurrency,
                peer to peer payment. Main focus market is United Kingdom, United Arab Emirates, India, Pakistan
                and other developing countries..</p>
        </div>
    </div>
</section>

<section class="px-5 md:px-36 ">
    <div class="py-10">
        <h2 class="text-2xl font-bold mb-1">Information Architecture</h2>
        <p class="pb-5">Once the information architecture was finalized, the next step was to quickly draw out all
            the wireframes and workflows as paper prototypes</p>
        <img src="{{asset('assets/work/b1.png')}}" alt="" />
    </div>
</section>

<!-- <section class="px-5 md:px-36 ">
    <div class="py-10">
        <h2 class="text-2xl font-bold mb-1">Paper Prototyping</h2>
        <p class="pb-5">Once the information architecture was finalized, the next step was to quickly draw out all
            the wireframes and workflows as paper prototypes</p>
        <img src="{{asset('assets/work/b2.png')}}" alt="" />
    </div>
</section> -->

<section class="px-5 md:px-36 ">
    <div class="py-10">
        <h2 class="text-2xl font-bold mb-1">Low Fidelity Wireframes</h2>
        <p class="pb-5">Once the information architecture was finalized, the next step was to quickly draw out all
            the wireframes and workflows as paper prototypes</p>
        <img src="{{asset('assets/work/b3.png')}}" alt="" />
    </div>
</section>

<section class="px-5 md:px-36 ">
    <div class="py-10">
        <h2 class="text-2xl font-bold mb-1">Interactive Prototyping</h2>
        <p class="pb-5">Once the information architecture was finalized, the next step was to quickly draw out all
            the wireframes and workflows as paper prototypes</p>
        <img src="{{asset('assets/work/b4.png')}}" alt="" />
    </div>
</section>
<section class="px-5 md:px-36 ">
    <div class="py-10">
        <h2 class="text-2xl font-bold mb-1">Final Mockups</h2>
        <p class="pb-5">Once the information architecture was finalized, the next step was to quickly draw out all
            the wireframes and workflows as paper prototypes</p>
        <img src="{{asset('assets/work/b5.png')}}" alt="" />
    </div>
</section>


@endsection
