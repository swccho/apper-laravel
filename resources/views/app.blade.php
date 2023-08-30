<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apper</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/countup@1.8.2/countUp.js"></script>
    @vite('resources/scss/style.scss')

</head>
<body>
@include('shared.header')
@yield('content')
@include('shared.footer')

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- Initialize Swiper -->
<script>
    window.onload = function (){
        AOS.init({
            delay: 50,
            duration: 1000,
            offset: 120,
            disable: 'mobile',
        });
        var swiper1 = new Swiper(".testimonialSwiper", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 2000,
            },
            autoplay: {
                delay: 2000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper2 = new Swiper(".companySwiper", {
            slidesPerView: 5,
            loop: true,
            autoplay: {
                delay: 2000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper3 = new Swiper(".interfaceSwiper", {
            slidesPerView: 5,
            loop: true,
            autoplay: {
                delay: 2000,
            },
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        const targets = document.querySelectorAll("#count-1, #count-2, #count-3, #count-4");
        function callback(entries) {
            entries.map((entry) => {
                let count;
                const target = entry.target.id
                if(target == 'count-1'){
                    count = 17;
                }else if(target == 'count-2'){
                    count = 2300;
                }else if(target == 'count-3'){
                    count = 8;
                }else if(target == 'count-4'){
                    count = 150;
                }

                var countUp = new CountUp (entry.target.id,  0, count);
                if(!countUp.error){
                    countUp.start()
                }
            });
        }
        targets.forEach((target) => {
            new IntersectionObserver(callback).observe(target);
        });

    }
</script>
</body>
</html>
