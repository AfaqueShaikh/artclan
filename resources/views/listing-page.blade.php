@extends('layouts.app')

@section('content')
    <body class="dashboardPage">
    <!-------------Header------------>
    <header class="custom-header">
        <div class="social-left fixedSocials">
            <ul class="clearfix">
                <!-- <li>
                    <a href="tel:+91 9689260707">
                        <i class="fa fa-headphones"></i>
                        <div class="iconOverlay">9689260707</div>
                    </a>
                </li> -->
                <li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-facebook"></i>
                        <div class="iconOverlay">Facebook</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-twitter"></i>
                        <div class="iconOverlay">Twitter</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-instagram"></i>
                        <div class="iconOverlay">Instagram</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-linkedin"></i>
                        <div class="iconOverlay">LinkedIn</div>
                    </a>
                </li>
            </ul>
        </div>
        <nav class="custome-navbar clearfix">
            <div class="logo"><a href="index.html"><img src="{{url('public/image/logo.jpeg')}}"> <!-- Logo <span>Here</span> --></a></div>
            <div class="navbar-right">
                <ul class="menus">
                    <li>
                        <a href="javascript:void(0);">Artists</a>
                        <div class="categoryList">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Actor</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Modal</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Singer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Photographer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Musician</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Graphics Designer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Writer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Painter</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Dancer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Anchor</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Voice-Over Artist</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Stylist</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Filmmaker</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Advertising Professional</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Stand-up Comedian</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0);">Blogs</a></li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login">Login</a></li>
                    <li><a href="javascript:void(0);" class="color-red" data-toggle="modal" data-target="#signup">Sign up</a></li>
                </ul>
                <div class="sideNavToggle">
                    <a href="javascript:void(0);" class="color-red">Menu</a>
                </div>
            </div>
            <div class="toggle-menu">
                <img src="{{url('public/image/menu.png')}}" class="menu-img">
                <img src="{{url('public/image/error.png')}}" class="cross-img">
            </div>
        </nav>
        <div class="sidemenu">
            <a href="javascript:void()" class="closeSidenav">
                <img src="{{url('public/image/close.png')}}" alt="">
            </a>
            <div class="sidenavLogo"><a href="index.html"><img src="{{url('public/image/logo.jpeg')}}" alt="Weizmann Forex" width="127"></a></div>
            <ul class="sidemenu-list">
                <li class="active">
                    <a href="javascript:void(0);" class="color-red">About Us</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="color-red">How it works?</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="color-red">Contact Us</a>
                </li>
            </ul>
            <div class="footer-social menuSocials text-center">
                <ul>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa fa-facebook">	Facebook</i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa fa-twitter"> Twitter</i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa fa-instagram"> Instagram</i>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);">
                            <i class="fa fa-linkedin"> LinkedIn</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="dashboardWelcome">
        <div class="container">Actors List</div>
    </section>
    <section class="dashboardSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="filtersBlock">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="filterSearch relative">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button type="search" class="btn searchFilter">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <select name="" class="form-control">
                                    <option value="">All Cities</option>
                                    <option value="">Delhi NCR</option>
                                    <option value="">Mumbai</option>
                                    <option value="">Hyderabad</option>
                                    <option value="">Patna</option>
                                    <option value="">Kochi</option>
                                    <option value="">Chennai</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="" class="form-control">
                                    <option value="">Actor</option>
                                    <option value="">Model</option>
                                    <option value="">Singer</option>
                                    <option value="">Musician</option>
                                    <option value="">Graphic Designer</option>
                                    <option value="">Writer</option>
                                    <option value="">Painter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="dashboardartistGallery">
                        <ul class="artGallery clearfix">
                            @foreach($user_details as $user_detail)

                                <li>
                                    <div class="artPortfolio">
                                        <div class="artImage relative">
                                            <a href="{{url('/artist/detail/'.base64_encode($user_detail->id))}}">
                                                @if(isset($user_detail->profile_img))
                                                <img  src="{{url('storage/app/public/user_profile/'.$user_detail->profile_img)}}" alt="Artist Image"/>
                                                    @else
                                                    <img  src="{{url('public/image/noimagefound.png')}}" width="128px" height="128px" alt="Artist Image"/>
                                                @endif
                                            </a>
                                            <p class="artDetailsCat">
                                                {{$user_types[$user_detail->user_type]}} / {{$user_detail->city}}
                                            </p>
                                        </div>
                                        <div class="artInfo text-center">
                                            <h3 class="artName">
                                                <a href="javascript:void(0);">{{$user_detail->name}}</a>
                                            </h3>
                                        </div>
                                        <div class="social-left actorSocial">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                @endforeach
                            {{--<li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>--}}
                            {{--<li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>--}}
                            {{--<li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>--}}
                            {{--<li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>--}}
                            {{--<li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="artPortfolio">
                                    <div class="artImage relative">
                                        <a href="javascript:void(0);">
                                            <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                        </a>
                                        <p class="artDetailsCat">
                                            Stylist / Delhi NCR
                                        </p>
                                    </div>
                                    <div class="artInfo text-center">
                                        <h3 class="artName">
                                            <a href="javascript:void(0);">Richa</a>
                                        </h3>
                                    </div>
                                    <div class="social-left actorSocial">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection

@section('jcontent')
    @endsection