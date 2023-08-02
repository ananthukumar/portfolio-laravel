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

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText3.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script> -->
    <script>
        var childSplit = new SplitText("h1", {
            type: "lines",
            linesClass: "split-child"
        });
        var parentSplit = new SplitText("h1", {
            type: "lines",
            linesClass: "split-parent"
        });

        gsap.from(childSplit.lines, {
            duration: 2,
            yPercent: 100,
            ease: "power4",
            stagger: 0.1,
           
        });
    </script>

    <!-- <script src="{{asset('build/assets/app.js')}}"></script> -->
</body>

</html>