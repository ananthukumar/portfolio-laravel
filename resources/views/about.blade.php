@extends('app')
@section('content')
            <section class="px-5 md:px-36 py-10 md:py-24">
                <div class="pb-10 md:pb-24">
                    <div class="md:flex items-center gap-10 text-heading  gray">
                        <p class=" text-md flex gap-4 items-center pb-6 md:pb-0">About Me <span class="w-[40px] h-[1px] bg-black flex"></span></p>
                        <h1 class="text-5xl md:text-8xl uppercase ">Who am I ?</h1>
                    </div>

                    <div class="md:grid grid-cols-12 md:mt-20 mt-5">
                        <div class="col-start-5 col-end-12">
                            <p class="text-lg leading-8 mb-4">My name is Ananthu and I'm passionate about improving the lives of others through design. I'm constantly learning new things everyday and love meeting people who are motivated and unafraid of sharing their ideas with the world.</p>
                            <p class="text-lg leading-8 mb-4">I'm passionate about bringing accessibility to the digital interface and working on making technological products more inclusive for a larger, more diverse user base. I believe that good design should be effortless for users, and put in the work to make that happen through my evidence-based design process.</p>
                            <!-- {/* <p class="text-lg md:text-xl mb-4">Established UX design as the first stage of all Web and mobile application developments, instituting a
                                user-centered design (UCD) approach.</p> */} -->

                        </div>
                    </div>
                </div>

                <div class="md:pt-36 pt-10">
                    <div class="md:flex items-center gap-10 text-heading">
                        <p class=" text-md flex gap-4 items-center">My Past  <span class="w-[40px] h-[1px] bg-black flex"></span></p>
                        <h1 class="text-5xl md:text-7xl uppercase mt-5 md:mt-0 ">Last experience</h1>
                    </div>

                    <div class="md:grid grid-cols-12 mt-8 md:mt-20">
                        <div class="col-start-5 col-end-12">
                            <p class="text-lg leading-8 mb-4">I am currently seeking full-time employment with a company that has an environment that encourages values, learning & growth, and effectively contributes to my personal development and the organization's growth.</p>
                            <div class="md:grid grid-cols-2 mt-14 gap-10">
                                <div class="border p-10 mb-10">
                                    <div class="w-[200px] h-[100px] text-center inline-block">
                                        <img src="{{asset('assets/logo web.png')}}"class="object-contain inline-block mx-auto w-full h-full" alt="" />
                                    </div>
                                    <!-- {/* <ul class="list-disc pt-3 md:pt-5">
                                        <li>Experienced in working on big projects like web application,
                                            mobile application, websites etc .</li>
                                        <li>Participated on various design discussion with our UI UX
                                            team mates on the topic of design reformation, delivering
                                            best user friendly UI, Usability testing, design process etc.</li>
                                    </ul> */} -->
                                    <div class=" pt-2 mb-10 md:mb-0 md:pt-5">
                                        <p class="font-semibold text-sm mb-1">UI/UX DESIGNER & UI DEVELOPER</p>
                                        <p> 2020 / 2023 </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="border p-10">
                                        <div class="w-[200px] h-[100px]">
                                            <img src="{{asset('assets/bispage.png')}}" class="object-contain w-full h-full" alt="" />
                                        </div>
                                        <!-- {/* <ul class="list-disc pt-3 md:pt-5">
                                            <li>Creating Website designs using Photoshop, Adobe XD.</li>
                                            <li>Converting  Layout Designs to HTML/CSS /Bootstrap.</li>
                                            <li>Ensuring website function and stability across devices i.e.
                                                desktop, mobile, tablet.</li>
                                        </ul> */} -->
                                        <div class="pt-2 mb-10 md:mb-0 md:pt-5">
                                            <p class="font-semibold text-sm uppercase mb-1">Web designer</p>
                                            <p> 2019 / 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-24 md:pt-36 pb-14 md:pb-24">
                    <div class="px-5">
                        <div class="md:grid grid-cols-12 gap-10">
                            <div class="col-span-2">
                                <p class=" text-md flex gap-4 items-center">Role  <span class="w-[40px] h-[1px] bg-black flex"></span></p>
                            </div>
                            <div class="md:col-span-10 md:grid grid-cols-2 gap-16">
                                <div>
                                    <h1 class="text-[8rem] leading-[8rem] uppercase">UI</h1>
                                    <ul class="list-disc mt-10 text-lg">
                                        <li class="mb-2">Creating wireframes, prototypes, and high-fidelity mockups.</li>
                                        <li class="mb-2">Selecting typography, colors, and other visual elements.</li>
                                        <li class="mb-2">Gathering and evaluating user requirements, in collaboration with product managers and engineers.</li>
                                        <li class="mb-2">Collaborating with UX designers, developers, and stakeholders.</li>
                                        <li class="mb-2">Staying up-to-date with design trends and technology advancements.</li>
                                    </ul>
                                </div>
                                <div>
                                    <h1 class="text-[8rem] leading-[8rem] uppercase">UX</h1>
                                    <ul class="list-disc mt-10 text-lg">
                                        <li class="mb-2">Improving the overall user experience of digital products.</li>
                                        <li class="mb-2">Defining the user journey and creating user flows.</li>
                                        <li class="mb-2">Collaborating with stakeholders, developers, and designers.</li>
                                        <li class="mb-2">Creating and maintaining design systems and style guides.</li>
                                        <li class="mb-2">Staying up-to-date with design trends and user behavior patterns.</li>
                                    </ul>
                                </div>
                                <div>
                                    <h1 class="md:text-[6rem] text-[4rem] leading-[8rem] uppercase">Develop</h1>
                                    <div class="grid grid-cols-2 gap-10">
                                        <div>
                                            <ul class="list-disc mt-10 text-lg pl-10">
                                                <li class="mb-2">HTML</li>
                                                <li class="mb-2">CSS</li>
                                                <li class="mb-2">Javascript</li>
                                                <li class="mb-2">Jquery</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-disc mt-10 text-lg">
                                                <li class="mb-2">Bootstrap</li>
                                                <li class="mb-2">Tailwind</li>
                                                <li class="mb-2">Sass</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <section class=" ">
                                        <ul class="mt-10 text-center md:text-left">
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/html-5.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">    <img src="{{asset('assets/css-3.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">   <img src="{{asset('assets/logo-02.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/logo-07.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/js.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/logo-03.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/illustrator.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/photoshop.png')}}" width="50" class="inline-block" alt="" /></li>
                                            <li class="md:mr-8 mr-2 mb-8 inline-block">  <img src="{{asset('assets/bootstrap-logo-shadow.png')}}" width="50" class="inline-block" alt="" /></li>
                                        </ul>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>

            </section>

            <div class="resume flex justify-center">
            <a href="{{asset('assets/Resume Ananthu.pdf')}}" target="__blank">
                    <button class="border text-2xl uppercase py-3 px-8 hover:tracking-widest hover:bg-black hover:text-white ease-in-out transition-all">Download Resume</button>
               <a>
            </div>

        </div>

@endsection
