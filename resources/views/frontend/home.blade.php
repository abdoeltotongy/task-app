@extends('frontend.layouts.app')

@section('content')
    <header>
        <div class="overly">

            <nav class="navbar navbar-expand-lg">
                <div class="navbar-brand">
                    <img src="{{asset('imgs/LOGO.png')}}">
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item" href="#"> <a> Home </a>  </li>


                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sections<i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"  href="#"> <a> Media & Publications  </a> </li>

                        <li class="nav-item"  href="#"><a> Contact Us </a> </li>
                        <li class="nav-item"  href="#"><a> About </a> </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Other <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="head-icon">
                    <ul class="last-dropdown">

                        <li class="nav-item dropdown">
                            <img src="{{asset('imgs/Male User.png')}}"  class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @auth
{{--                                <li><a class="dropdown-item" href="{{route('logout')}}">logout</a></li>--}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                @else
                                    <li><a class="dropdown-item" href="{{route('login')}}">LOGIN</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">REGISTER</a></li>
                                @endauth
                            </ul>
                        </li>

                        <li class="nav-item"> <img src="{{asset('imgs/Search.png')}}" alt=""> </li>
                    </ul>


                </div>
            </nav>


            <div class="head-next">
                <img src="{{asset('imgs/Right Arrow.png')}}">
            </div>

            <div class="head-title">
                <p>WE EXIST TO HELP YOU </p>

                <div class="see-more">
                    <img src="{{asset('imgs/play.png')}}">
                    <h4> SEE MORE <img src="{{asset('imgs/Right Arrow.png')}}">  </h4>
                </div>
            </div>

        </div>
    </header>

    <section class="online-section">
        <div class="overly">
            <div class="online-img">
                <img class="img-left" src="{{asset('imgs/image 5.png')}}">
                <img class="img-center" src="{{asset('imgs/image 2.png')}}">
                <img class="img-right" src="{{asset('imgs/img-1.png')}}">
            </div>

            <div class="online-text">
                <h1 class="online-title">Get your online </h1>
                <p class="online-sub-title"> profile, so talent hunters can choose you easily </p>

                <ul>
                    <li> No fees for sign up</li>
                    <li> Create an account</li>
                    <li> Uploading all your media on one place</li>
                    <li> Available on all platforms.</li>
                </ul>

                <h5> SEE ALL </h5>

                <button> SIGN UP NOW </button>
            </div>
        </div>
    </section>

    <section class="Contact">
        <div class="overly">
            <div class="Contact-desc">
                <div class="desc-logo">
                    <img src="{{asset('imgs/LOGO.png')}}"> <hr>
                </div>
                <p class="desc-text">
                    ACT is an online casting platform, for those who want to expose their talents to talent hunters, to get more work opportunities in the media field. On the other hand, we also offer the talent seekers the ideal candidate for their project.
                </p>
            </div>
            <div class="Contact-info">
                <h2 class="info-title"> CONTACT US </h2>
                <h2 class="info-phone"> Telephone: 01024010174 </h2>
                <h2 class="info-email"> Email: ACTcastingagency@gmail.com </h2>
                <h2 class="info-address"> Address: Everywhere man just look </h2>

                <div class="info-footer">
                    <h2>KEEP IN TOUCH </h2>
                    <img src="{{asset('imgs/Facebook.png')}}">
                    <img src="{{asset('imgs/YouTube Squared.png')}}">
                    <img src="{{asset('imgs/Twitter Squared.png')}}">
                    <img src="{{asset('imgs/LinkedIn.png')}}">
                </div>
            </div>
            <div class="Contact-sign">
                <h2>  Sign up to receive the latest  updates </h2>
                <input type="text" placeholder="Please Write Your Mail">
                <button>SIGN UP</button>
            </div>
        </div>
    </section>


@endsection
