<!-------------Header------------>
<header class="custom-header">
    <style>
        .profile-img {
            border-radius: 50%;
            width: 85px;
            height: 78px;
        }
    </style>
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
            {{--<li>
                <a href="javascript:void(0);">
                    <i class="fa fa-linkedin"></i>
                    <div class="iconOverlay">LinkedIn</div>
                </a>
            </li>--}}
        </ul>
    </div>
    <nav class="custome-navbar clearfix">
        <div class="logo"><a href="{{url('/')}}"><img src="{{url('public/image/logo.jpeg')}}"> <!-- Logo <span>Here</span> --></a></div>
        <div class="navbar-right">
            <ul class="menus">
                <li>
                    <a href="javascript:void(0);">Artists</a>
                    <div class="categoryList">
                        <ul>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(4))}}" class="rollLink">Writer</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(5))}}" class="rollLink">Painter</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(6))}}" class="rollLink">Singer</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(7))}}" class="rollLink">Dancer</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(8))}}" class="rollLink">Costume Designer</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(10))}}" class="rollLink">Photographer</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(11))}}" class="rollLink">Film Maker</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(12))}}"class="rollLink">Actor</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(13))}}" class="rollLink">Fashion Model</a>
                            </li>
                            <li>
                                <a href="{{url('/artist/listing/'.base64_encode(9))}}" class="rollLink">Makeup Artist</a>
                            </li>
                            {{--<li>
                                <a href="javascript:void(0);" class="rollLink">Voice-Over Artist</a>
                            </li>--}}
                            {{--<li>
                                <a href="javascript:void(0);" class="rollLink">Stylist</a>
                            </li>--}}
                            {{--<li>
                                <a href="javascript:void(0);" class="rollLink">Filmmaker</a>
                            </li>--}}
                            {{--<li>
                                <a href="javascript:void(0);" class="rollLink">Advertising Professional</a>
                            </li>--}}
                            {{--<li>
                                <a href="javascript:void(0);" class="rollLink">Stand-up Comedian</a>
                            </li>--}}
                        </ul>
                    </div>
                </li>
<!--                <li><a href="javascript:void(0);"><strong class="bigft">Blogs</strong></a></li>-->
                @if(!Auth::check())
                    <li><a id="login_btn" href="javascript:void(0);"data-toggle="modal" data-target="#login">Login</a></li>
                    <li><a href="javascript:void(0);" class="color-red" data-toggle="modal" data-target="#signup">Sign up</a></li>
                @endif
                @if(Auth::check())
                    @if(Auth::user()->user_type != 3)
                        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    @else
                        <li><a href="{{url('/recruiter/dashboard')}}">Dashboard</a></li>
                    @endif

                @endif
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
        <a href="javascript:void(0);" class="closeSidenav">
            <img src="{{url('public/image/close.png')}}" alt="">
        </a>
        <div class="sidenavLogo">
            @if(Auth::check())
                @if(Auth::user()->user_type != 3)
                    @if(isset(Auth::user()->profile_img))
                        <a href="{{url('/dashboard')}}"><img class="profile-img" src="{{url('storage/app/public/user_profile/'.Auth::user()->profile_img)}}" alt="Weizmann Forex" ></a>
                    @else
                        <a href="{{url('/dashboard')}}"><img class="profile-img" src="{{url('public/image/noimagefound.png')}}" alt="Weizmann Forex" ></a>
                    @endif
                @else
                    @if(isset(Auth::user()->profile_img))
                        <a href="{{url('/recruiter/dashboard')}}"><img class="profile-img" src="{{url('storage/app/public/recruiter_profile/'.Auth::user()->profile_img)}}" alt="Weizmann Forex" ></a>
                    @else
                        <a href="{{url('/recruiter/dashboard')}}"><img class="profile-img" src="{{url('public/image/noimagefound.png')}}" alt="Weizmann Forex" ></a>
                    @endif
                @endif
            @else
                <a href="javascript:void(0);"><img class="profile-img" src="{{url('public/image/logo.jpeg')}}"> <!-- Logo <span>Here</span> --></a>
            @endif

        </div>
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

                {{--<li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-linkedin"> LinkedIn</i>
                    </a>
                </li>--}}
            </ul>
        </div>
    </div>
</header>