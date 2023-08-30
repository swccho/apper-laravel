<header class="">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="/">
                <img src="{{asset('/images/footer_logo.png')}}" alt="">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="{{route('front.home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('front.home')}}">Features</a>
                </li>
                <li>
                    <a href="{{route('front.home')}}">How it works</a>
                </li>
                <li class="drop-down">
                    <a href="javascript:void(0)">Pages <i class="las la-angle-down"></i></a>
                    <ul>
                        <li>
                            <a href="{{route('front.about')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('front.review')}}">Reviews</a>
                        </li>
                        <li>
                            <a href="{{route('front.contact')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('front.faq')}}">Faq</a>
                        </li>
                        <li>
                            <a href="{{route('front.sign-in')}}">Sign In</a>
                        </li>
                        <li>
                            <a href="{{route('front.sign-up')}}">Sign Up</a>
                        </li>
                        <li>
                            <a href="{{route('front.blog')}}">Blog List</a>
                        </li>
                        <li>
                            <a href="{{route('front.blog.single', ['id' => 1])}}">Blog Single</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('front.home')}}">Pricing</a>
                </li>
                <li class="drop-down">
                    <a href="javascript:void(0)">Blog <i class="las la-angle-down"></i></a>
                    <ul>
                        <li>
                            <a href="{{route('front.blog')}}">Blog List</a>
                        </li>
                        <li>
                            <a href="{{route('front.blog.single', ['id' => 1])}}">Blog Single</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('front.contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>
