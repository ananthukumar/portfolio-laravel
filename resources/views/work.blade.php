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
        <div class="md:grid grid-cols-2 gap-10">
            <!-- {/* <Link to="/bankkit"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/bankit.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Mobile App Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Ecommerce</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                </div>
                <!-- <Link to="/bankkit"> -->
                <button
                    class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View
                    Case
                    <span><svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.46967 11.6726C0.176777 11.9654 0.176777 12.4403 0.46967 12.7332C0.762563 13.0261 1.23744 13.0261 1.53033 12.7332L0.46967 11.6726ZM12.9528 1.00009C12.9528 0.585875 12.617 0.250089 12.2028 0.250089L5.45279 0.250089C5.03858 0.250089 4.70279 0.585875 4.70279 1.00009C4.70279 1.4143 5.03858 1.75009 5.45279 1.75009L11.4528 1.75009L11.4528 7.75009C11.4528 8.1643 11.7886 8.50009 12.2028 8.50009C12.617 8.50009 12.9528 8.1643 12.9528 7.75009L12.9528 1.00009ZM1.53033 12.7332L12.7331 1.53042L11.6725 0.469759L0.46967 11.6726L1.53033 12.7332Z"
                                fill="#797979" />
                        </svg>
                    </span>
                </button>
                </Link>
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/meet1"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/meeturdreams.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Mobile App Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Video Conference</span>
                        </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->
            <!-- {/* <Link to="/easystore"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/easy.jpg')}}" alt="" />

                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Wesite Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Ecommerce</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Adobe XD</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/taj"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/taj.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Mobile App Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Property Management</span>
                        </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->


            <!-- {/* <Link to="/goldbazar"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/gold.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Mobile App Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Loan</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Adobe xd</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->
            <!-- {/* <Link to="/winfarm"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/winfarm.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Website Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Farming</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Technologies :
                        <span class="text-[12px] uppercase">Html</span>
                        <span class="text-[12px] uppercase">Css</span>
                        <span class="text-[12px] uppercase">bootstrap</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->
            <!-- {/* <Link to="/siaaha"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">

                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/siahaa.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Website Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Property Management</span>
                        </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>

                    </p>

                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/meet2"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/meetweb.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Website Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Farming</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Technologies :
                        <span class="text-[12px] uppercase">React</span>
                        <span class="text-[12px] uppercase">Tailwind Css</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/moto"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/moto.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Website Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Ecommerce</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>

                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/protinium"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/protinium.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Mobile App Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Food Subscription</span>
                        </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>

                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/protinium"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/mlm.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Mobile App Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">MLM</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Adobe XD</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>

                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->

            <!-- {/* <Link to="/irohub"> */} -->
            <div class="card__wrap p-3 md:p-5 border mb-5">
                <div class="zoom__img overflow-hidden">
                    <img src="{{asset('assets/irohub.jpg')}}" alt="" />
                </div>
                <div class="text__wrap mt-3">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-medium">Website Design</h2>
                        <h2 class="text-lg font-medium upp"> <span
                                class="py-1 px-3 text-sm bg-gray-800 rounded-sm text-white">Farming</span> </h2>
                    </div>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Tools :
                        <span class="text-[12px] uppercase">Figma</span>
                        <span class="text-[12px] uppercase">Photoshop</span>
                        <span class="text-[12px] uppercase">Illustrator</span>
                    </p>
                    <p class="pt-1 flex text-[12px] text-gray-500 gap-2 text-sm uppercase font-semibold">Technologies :
                        <span class="text-[12px] uppercase">Html</span>
                        <span class="text-[12px] uppercase"> Css</span>
                        <span class="text-[12px] uppercase"> Bootstrap</span>
                        <span class="text-[12px] uppercase"> Gulp</span>
                    </p>
                </div>
                <!-- {/* <button class="mt-3 flex items-center gap-3 px-6 py-2 bg-[#fd888844] rounded-md text-md hover:text-black ">View Case
                                <span><img src={svg1} alt="" /></span>
                            </button> */} -->
            </div>
            <!-- {/* </Link> */} -->


        </div>
    </section>

    @endsection
