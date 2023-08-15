<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MR ANANTHU</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/fav.jpg')}}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('build/assets/app.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/app2.css')}}">
<!-- 
    @vite('resources/js/app.js')
    @vite('resources/css/app.css') -->

</head>

<body class="antialiased">
    <div id="">
        @include('partials.header')
        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
        $(".ham").click(function () {
            $(".menu__btn").css("display", "block");;
        });
        $(".close").click(function () {
            $(".menu__btn").css("display", "none");;
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>

    <script>
        const tl = gsap.timeline();
        tl.from(".line h1", 1.8, {
            y: 100,
            ease: "power4.out",
            delay: 0.1,
            skewY: 7,
            stagger: {
                amount: 0.3
            }
        })

        var content = document.getElementById('content');
        TweenMax.fromTo(content, 1, { opacity: 0, y: 50 }, { opacity: 1, y: 0 });

        const boxes = gsap.utils.toArray('.fadeUp');
        boxes.forEach((box, i) => {
            const anim = gsap.fromTo(box, { autoAlpha: 0, y: 50 }, { duration: 1, autoAlpha: 1, y: 0 });
            ScrollTrigger.create({
                trigger: box,
                animation: anim,
                toggleActions: 'play none none reverse',
                once: true,

            });
        });
    </script>



    <!-- <script src="{{asset('build/assets/app.js')}}"></script> -->
</body>

</html>