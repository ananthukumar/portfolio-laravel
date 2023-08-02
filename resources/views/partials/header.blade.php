<nav class="sticky top-0 bg-white">
    <div class="px-5 md:px-16 overflow-hidden ">
        <div class="flex justify-between py-4 items-center">
            <div class="text-2xl hover:tracking-widest transition-all animate-pulse">
                <a href="{{ url('/') }}">A K
                </a>
            </div>

            <div>
                <div class=" z-50 fixed bg-black w-full h-full text-white top-0 right-0 left-0 bottom-0 overflow-hidden hidden menu__btn">
                    <ul class="grid place-content-center h-screen text-center gap-10">
                        <a href="{{ url('work') }}">
                            <li class="hover:tracking-widest transition-all uppercase text-5xl">
                                Work
                            </li>
                        </a>
                        <a href="{{ url('about') }}">
                            <li class="hover:tracking-widest transition-all uppercase text-5xl  ">
                                About
                            </li>
                        </a>
                        <a href="{{asset('assets/Resume Ananthu.pdf')}}" target="__blank">
                            <li class="hover:tracking-widest transition-all uppercase text-5xl">
                                Resume
                            </li>
                        </a>
                    </ul>

                    <span class="absolute text-white right-5 top-5 close">Close</span>
                </div>

                <div class="hidden md:block">
                    <ul class="flex gap-10">
                        <a href="{{ url('work') }}">
                            <li class="hover:tracking-widest transition-all uppercase text-sm">
                                Work
                            </li>
                        </a>
                        <a href="{{ url('about') }}">
                            <li class="hover:tracking-widest transition-all uppercase text-sm  ">
                                About
                            </li>
                        </a>
                        <a href="{{asset('assets/Resume Ananthu.pdf')}}" target="__blank">
                            <li class="hover:tracking-widest transition-all uppercase text-sm">
                                Resume
                            </li>
                        </a>
                    </ul>
                </div>

                <div class="block md:hidden ham">
                    <span class="block h-0.5 w-7 animate-pulse mb-2 bg-gray-900"></span>
                    <span class="block h-0.5 w-7 animate-pulse mb-2 bg-gray-900"></span>
                    <span class="block h-0.5 w-7 animate-pulse mb-2 bg-gray-900"></span>
                </div>
            </div>
        </div>
    </div>
</nav>
