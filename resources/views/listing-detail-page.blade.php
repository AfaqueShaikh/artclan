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
        <div class="container">Welcome Harshad</div>
    </section>
    <section class="dashboardSection">
        <div class="container">
            <div class="dashPrifilerInfo clearfix">
                <div class="profilerImage relative">
                    <img src="{{url('public/image/artist2.jpg')}}">
                    <span class="uploadImage">
						<i class="fa fa-camera"></i>
						<input type="file" class="uploadInp">
					</span>
                </div>
                <div class="profilerInformation">
                    <div class="profilerName">
                        <h3>Harshad</h3>
                        <p>Modal / Pune</p>
                    </div>
                    <ul class="profilerViews">
                        <li>
                            Profile Viewed
                            <span class="viewCount"><i class="fa fa-eye"></i></span>
                        </li>
                        <li data-toggle="modal" data-target="#shareLink">
                            Share Portfolio
                            <span class="viewCount"><i class="fa fa-share-alt"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="personLifeSchedule">
        <div class="container">
            <div class="personLifeHistory">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#gallery" aria-controls="home" role="tab" data-toggle="tab">Gallery</a></li>
                    <li role="presentation"><a href="#bio" aria-controls="profile" role="tab" data-toggle="tab">Bio</a></li>
                    <li role="presentation"><a href="#Exp" aria-controls="messages" role="tab" data-toggle="tab">Experience</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="gallery">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Video
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">
                                    <li class="relative">
                                        <img src="img/artist1.jpg">
                                        <span class="deleteBtn"><i class="fa fa-trash"></i></span>
                                        <p class="uplName">Video1</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Photos
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">
                                    <li class="relative">
                                        <img src="{{url('public/image/artist2.jpg')}}">
                                        <p class="uplName">Photo1</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="bio">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                About me
                                <!-- <span class="addButtons" data-toggle="modal" data-target="#editAbout"><i class="fa fa-edit"></i></span> -->
                            </div>
                            <div class="insertedData">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Physical Stats
                                <span class="addButtons" data-toggle="modal" data-target="#PhysicalStats"><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <p class="">Not updated by the artist yet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Skill
                                <span class="addButtons" data-toggle="modal" data-target="#uploadLang"><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Language</label>
                                        <p class="pull-left">Hindi, English, Urdu, Punjabi, Bhojpuri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Work preference
                                <span class="addButtons" data-toggle="modal" data-target="#availableCity"><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <p class="">Not updated by the artist yet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Exp">
                        <div class="uploadingHolder borderBot">
                            <div class="uploadBlock">
                                Raja Hindustani
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Project Name</label>
                                        <p class="pull-left">Web designing</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Role</label>
                                        <p class="pull-left">Web designing</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Start Date</label>
                                        <p class="pull-left">08.05.2019</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">End Date</label>
                                        <p class="pull-left">10.05.2019</p>
                                    </div>
                                    <div class="col-sm-12 clearfix">
                                        <label class="headingLable pull-left">Description</label>
                                        <p class="pull-left">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('jcontent')
@endsection