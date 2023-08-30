@extends('app')
@section('content')

    <div class="shared bread-crumb" style="background-image: url('{{asset('/images/bread_crumb_bg.png')}}')">
        <div>
            <div class="title">About Us</div>
            <ul class="menu">
                <li>
                    <a href="{{route('front.home')}}">Home</a>
                </li>
                <li>
                    <span>
                        >>
                    </span>
                </li>
                <li>
                    <span>About us</span>
                </li>
            </ul>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('/images/banner-shape1.png')}}" alt=""/>
        </div>
        <div class="shape shape-2">
            <img src="{{asset('/images/banner-shape2.png')}}" alt=""/>
        </div>
        <div class="shape shape-3">
            <img src="{{asset('/images/banner-shape3.png')}}" alt=""/>
        </div>
    </div>
    <div class="page about">
        {{--about us section start--}}
        <section class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="left">
                            <div>
                                <div class="header">
                                    <div class="title" data-aos="fade-up">
                                        <span>Providing innovative app solution</span> to make customer life easy to grow.
                                    </div>
                                    <br/>
                                    <div class="desc">
                                        <div data-aos="fade-up">
                                            Lorem Ipsum is simply dummy text of the printing and type setting industry lorem Ipsum has been
                                            the industrys standard dummy text ever since the when an unknown printer took a galley of type
                                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting, remaining to make a type speci men book. It has survived
                                            essentially unchanged.
                                        </div>
                                        <br/>
                                        <div data-aos="fade-up">
                                            Standard dummy text ever since the when an unknown printer took a galley of type and scrambled
                                            it to make a type specien book. It has survived not only five centuries, but also the leap into
                                            electronic typesetting.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="right" data-aos="fade-left">
                            <ul>
                                <li>
                                    <img src="{{asset('/images/abt_01.png')}}" alt=""/>
                                </li>
                                <li>
                                    <img src="{{asset('/images/abt_02.png')}}" alt=""/>
                                    <button class="btn play-btn">
                                        <img src="{{asset('/images/play_black.png')}}" alt=""/>
                                    </button>
                                </li>
                                <li>
                                    <img src="{{asset('/images/abt_03.png')}}" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--about us section end--}}

        {{--service section start--}}

        <section class="service">
            <div class="container">
                <div class="content">
                    <div class="header" data-aos="fade-up">
                        <div class="title">
                            <span>Why we are different</span> from others!
                        </div>
                        <div class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typese tting
                            <br/>indus orem Ipsum has beenthe standard dummy.
                        </div>
                    </div>
                    <div class="body" data-aos="fade-up">
                        <div class="row">
                            <div class="col-3">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{asset('/images/secure_data.png')}}" alt=""/>
                                    </div>
                                    <div class="title">Secure code</div>
                                    <div class="desc">
                                        Lorem Ipsum is simply dummy text of the printing and type setting indus ideas.
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{asset('/images/functional.png')}}" alt=""/>
                                    </div>
                                    <div class="title">Fully functional</div>
                                    <div class="desc">
                                        Simply dummy text of the printing and typesetting indus lorem Ipsum is dummy.
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{asset('/images/live-chat.png')}}" alt=""/>
                                    </div>
                                    <div class="title">Best communication</div>
                                    <div class="desc">
                                        Lorem Ipsum is simply dummy text of the printing and type setting indus ideas.
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{asset('/images/support.png')}}" alt=""/>
                                    </div>
                                    <div class="title">24-7 Support</div>
                                    <div class="desc">
                                        Simply dummy text of the printing and typesetting indus lorem Ipsum is dummy.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--service section end--}}

        {{--company status section start--}}
        <section class="company-status">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="left">
                            <img src="{{asset('/images/about_main.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="right">
                            <div class="header">
                                <div class="title" data-aos="fade-up">
                                    <span>We focus on quality,</span> never <br/> focus on quantity
                                </div>
                                <div class="desc" data-aos="fade-up">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem
                                    Ipsum has been the industrys standard dummy text ever since the when an unknown
                                    printer took a galley of type and. Lorem ipsum dolor sit amet.
                                </div>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="counters">
                                            <div class="counter">
                                                <div class="icon">
                                                    <img src="{{asset('/images/download.png')}}" alt=""/>
                                                </div>
                                                <div class="text">
                                                    <div class="title">
                                                        <sapn id="count-1">0</sapn>M+
                                                    </div>
                                                    <div class="text">Download</div>
                                                </div>
                                            </div>
                                            <div class="counter">
                                                <div class="icon">
                                                    <img src="{{asset('/images/reviews.png')}}" alt=""/>
                                                </div>
                                                <div class="text">
                                                    <div class="title">
                                                        <sapn id="count-2">0</sapn>+
                                                    </div>
                                                    <div class="text">Download</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="counters">
                                            <div class="counter">
                                                <div class="icon">
                                                    <img src="{{asset('/images/followers.png')}}" alt=""/>
                                                </div>
                                                <div class="text">
                                                    <div class="title">
                                                        <sapn id="count-3">0</sapn>M+
                                                    </div>
                                                    <div class="text">Download</div>
                                                </div>
                                            </div>
                                            <div class="counter">
                                                <div class="icon">
                                                    <img src="{{asset('/images/countries.png')}}" alt=""/>
                                                </div>
                                                <div class="text">
                                                    <div class="title">
                                                        <sapn id="count-4">0</sapn>+
                                                    </div>
                                                    <div class="text">Download</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--company status section end--}}

        {{--employee section start--}}
        <section class="employee">
            <div class="container">
                <div class="header" data-aos="fade-up">
                    <div class="title">
                        Meet our <span>experts</span>
                    </div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typese tting
                        <br/>indus orem Ipsum has beenthe standard dummy.
                    </div>
                </div>
                <div class="body">
                    <div class="row" data-aos="fade-up">
                        <div class="col-3">
                            <div class="member">
                                <div class="img">
                                    <img src="{{asset('/images/experts_01.png')}}"} alt=""/>
                                </div>
                                <div class="name">Steav Joe</div>
                                <div class="role">CEO & Co-Founder</div>
                                <ul class="social-links">
                                    <li>
                                        <a href="">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="member">
                                <div class="img">
                                    <img src="{{asset('/images/experts_02.png')}}" alt=""/>
                                </div>
                                <div class="name">Steav Joe</div>
                                <div class="role">CEO & Co-Founder</div>
                                <ul class="social-links">
                                    <li>
                                        <a href="">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="member">
                                <div class="img">
                                    <img src="{{asset('/images/experts_03.png')}}" alt=""/>
                                </div>
                                <div class="name">Steav Joe</div>
                                <div class="role">CEO & Co-Founder</div>
                                <ul class="social-links">
                                    <li>
                                        <a href="">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="member">
                                <div class="img">
                                    <img src="{{asset('/images/experts_04.png')}}" alt=""/>
                                </div>
                                <div class="name">Steav Joe</div>
                                <div class="role">CEO & Co-Founder</div>
                                <ul class="social-links">
                                    <li>
                                        <a href="">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="lab la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--employee section end--}}

        {{--contact section start--}}
        <section class="contact">
            <div class="container">
                <div class="content"
                     data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="300"
                     data-aos-offset="0">
                    <div class="header">
                        <div class="title">Have any query about ?</div>
                        <div class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typese tting
                            <br/>indus orem Ipsum has beenthe standard dummy.
                        </div>
                    </div>
                    <button class="btn btn-theme">contact us now</button>
                    <div class="shape shape-1">
                        <img src="{{asset('/images/banner-shape1.png')}}" alt=""/>
                    </div>
                    <div class="shape shape-2">
                        <img src="{{asset('/images/banner-shape2.png')}}" alt=""/>
                    </div>
                    <div class="shape shape-3">
                        <img src="{{asset('/images/banner-shape3.png')}}" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        {{--contact section end--}}

        {{--company section start--}}
        <section class="shared company">
            <div class="container">
                <div class="header" data-aos="fade-up">
                    <div class="title">Trusted by <span>150+</span> companies</div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typese tting
                        <br/>
                        indus orem Ipsum has beenthe standard dummy.
                    </div>
                </div>
                <div class="body">
                    <div class="logos">
                        <div class="swiper companySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/envato.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/spoty.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/slack.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/paypal.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/shopboat.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/envato.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/spoty.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/slack.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/paypal.png')}}" alt=""/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('/images/shopboat.png')}}" alt=""/>
                                </div>
                            </div>
                            <div class="swiper-pagination position-relative"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--company section end--}}
    </div>
@endsection
