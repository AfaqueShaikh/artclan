@extends('layouts.app')

@section('content')
    <body class="dashboardPage">
    <!-------------Header------------>
   {{-- <header class="custom-header">
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
            <div class="logo"><a href="{{url('/')}}"><img src="{{url('public/image/logo.jpeg')}}"> <!-- Logo <span>Here</span> --></a></div>
            <div class="navbar-right">
                <ul class="menus">
                    <li>
                        <a href="javascript:void(0);">Artists</a>
                        <div class="categoryList">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Writer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Painter</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Singer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Dancer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Costume Designer</a>
                                </li>
                                <li>
                                    <a href="{{url('/artist/listing/'.base64_encode(10))}}" class="rollLink">Photographer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Film Maker</a>
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
                                --}}{{--<li>
                                    <a href="javascript:void(0);" class="rollLink">Voice-Over Artist</a>
                                </li>--}}{{--
                                --}}{{--<li>
                                    <a href="javascript:void(0);" class="rollLink">Stylist</a>
                                </li>--}}{{--
                                --}}{{--<li>
                                    <a href="javascript:void(0);" class="rollLink">Filmmaker</a>
                                </li>--}}{{--
                                --}}{{--<li>
                                    <a href="javascript:void(0);" class="rollLink">Advertising Professional</a>
                                </li>--}}{{--
                                --}}{{--<li>
                                    <a href="javascript:void(0);" class="rollLink">Stand-up Comedian</a>
                                </li>--}}{{--
                            </ul>
                        </div>
                    </li>
                    --}}{{--<li><a href="javascript:void(0);">Blogs</a></li>--}}{{--
                    @if(!Auth::check())
                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login">Login</a></li>
                        <li><a href="javascript:void(0);" class="color-red" data-toggle="modal" data-target="#signup">Sign up</a></li>
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
    </header>--}}
    <section class="dashboardWelcome">
        <div class="container">Welcome {{$user_details->name}}</div>
    </section>
    <section class="dashboardSection">
        <div class="container">
            <div class="dashPrifilerInfo clearfix">
                <div class="profilerImage relative">
                    @if(isset($user_details->profile_img))
                        <img  src="{{url('storage/app/public/user_profile/'.$user_details->profile_img)}}" height="570" alt="Artist Image"/>
                    @else
                        <img  src="{{url('public/image/noimagefound.png')}}" height="570"  alt="Artist Image"/>
                    @endif
                    {{--<img src="{{url('public/image/artist2.jpg')}}">--}}
                    {{--<span class="uploadImage">
						<i class="fa fa-camera"></i>
						<input type="file" class="uploadInp">
					</span>--}}
                </div>
                <div class="profilerInformation">
                    <div class="profilerName">
                        <h3>{{$user_details->name}}</h3>
                        <p>{{$user_types[$user_details->user_type]}} / {{$user_details->city}}</p>
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
                                    {{--<li class="relative">
                                        <img src="img/artist1.jpg">
                                        <span class="deleteBtn"><i class="fa fa-trash"></i></span>
                                        <p class="uplName">Video1</p>
                                    </li>--}}
                                    @if(isset($user_details->userVideos) && count($user_details->userVideos) > 0)
                                        @foreach($user_details->userVideos as $video)

                                            <li class="relative">
                                                <iframe width="204" height="222" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src={{'https://www.youtube.com/embed/'.$video->video_url}}></iframe>
                                                {{--<span class="deleteBtn"><i class="fa fa-trash"></i></span>--}}
                                                <p class="uplName">{{$video->title}}</p>
                                            </li>
                                        @endforeach
                                    @else
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </ul>
                            </div>

                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Photos
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">
                                    {{--<li class="relative">
                                        <img src="{{url('public/image/artist2.jpg')}}">
                                        <p class="uplName">Photo1</p>
                                    </li>--}}
                                    @if(isset($user_details->userPhotos) && count($user_details->userPhotos) > 0)
                                        @foreach($user_details->userPhotos as $photo)
                                            <li class="relative">
                                                <img src="{{url('storage/app/public/user_photos/'.$photo->photo)}}">
                                                {{--<span class="deleteBtn"><i class="fa fa-trash"></i></span>--}}
                                            </li>
                                        @endforeach
                                    @else
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        @if($user_details->user_type == 4)
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Documents
                                <span class="addButtons" data-toggle="modal" data-target="#uploadDocument">{{--<i class="fa fa-plus"></i>--}}</span>
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">

                                    @if(isset($user_details->userDocuments) && count($user_details->userDocuments) > 0)
                                        @foreach($user_details->userDocuments as $document)
                                            <li class="relative">
                                                <div class="pdfIcon">
                                                    <a href='{{url('storage/app/public/user_documents/'.$document->file_name)}}' download="{{$document->file_name}}"><img src="{{url('public/image/pdf-icon.png')}}"></a>
                                                </div>
                                                {{--<span class="deleteBtn"><i class="fa fa-trash"></i></span>--}}
                                                <p class="uplName">{{$document->title}}</p>
                                            </li>
                                        @endforeach
                                    @else
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </ul>
                            </div>
                        </div>
                            @endif
                    </div>
                    <div role="tabpanel" class="tab-pane" id="bio">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                About me
                                <!-- <span class="addButtons" data-toggle="modal" data-target="#editAbout"><i class="fa fa-edit"></i></span> -->
                            </div>
                            <div class="insertedData">
                                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>--}}
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Name:</label>
                                        <p class="pull-left">{{$user_details->name}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Residing City:</label>
                                        <p class="pull-left">{{$user_details->city}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Language known:</label>
                                        <p class="pull-left">{{$user_details->language}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Know Me:</label>
                                        <p class="pull-left">{{$user_details->about_me}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Education
                                <span class="addButtons" data-toggle="modal" data-target="#PhysicalStats">{{--<i class="fa fa-plus"></i>--}}</span>
                            </div>
                            {{--<div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <p class="">Not updated by the artist yet.</p>
                                    </div>
                                </div>
                            </div>--}}
                            @if(isset($user_details->userEducations) && count($user_details->userEducations) > 0)
                                @foreach($user_details->userEducations as $education)
                                    <div class="eduDetails">
                                        <div class="row">
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Education Name:</label>
                                                <p class="pull-left">{{$education->education_name}}</p>
                                            </div>
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Institute: </label>
                                                <p class="pull-left">{{$education->institute}}</p>
                                            </div>
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">From:</label>
                                                <p class="pull-left">{{$education->from}}</p>
                                            </div>
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">To:</label>
                                                <p class="pull-left">{{$education->to}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                        @if($user_details->user_type == 13 || $user_details->user_type == 12)
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Physical Attributes
                                <span class="addButtons" data-toggle="modal" data-target="#PhysicalStats">{{--<i class="fa fa-edit"></i>--}}</span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Height</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->height)?$user_details->userPhysics->height:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Weight</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->weight)?$user_details->userPhysics->weight:''}}</p>
                                    </div>
                                    @if($user_details->gender != '0')
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Bust</label>
                                            <p class="pull-left">{{isset($user_details->userPhysics->bust)?$user_details->userPhysics->bust:''}}</p>
                                        </div>
                                    @endif
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Waist</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->waist)?$user_details->userPhysics->waist:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Hips</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->hips)?$user_details->userPhysics->hips:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Chest</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->chest)?$user_details->userPhysics->chest:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Biceps</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->biceps)?$user_details->userPhysics->biceps:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Hair Type</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->hair_type)?$user_details->userPhysics->hair_type:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Hair Length</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->hair_length)?$user_details->userPhysics->hair_length:''}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Complexion</label>
                                        <p class="pull-left">{{isset($user_details->userPhysics->complexion)?$user_details->userPhysics->complexion:''}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Work & Location Preference
                                <span class="addButtons" data-toggle="modal" data-target="#availableCity">{{--<i class="fa fa-plus"></i>--}}</span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    @if(isset($user_details->work_preference))
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Work Preference:</label>
                                            <p class="pull-left">{{$user_details->work_preference}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Location Preference:</label>
                                            <p class="pull-left">{{$user_details->location_preference}}</p>
                                        </div>
                                    @else
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Exp">
                        <div class="uploadingHolder borderBot">
                            <div class="uploadBlock">
                                Experience
                            </div>
                            {{--<div class="eduDetails">
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
                            </div>--}}
                            @if(isset($user_details->userExp) && count($user_details->userExp) > 0)
                                @foreach($user_details->userExp as $exp)
                                    <div class="eduDetails">
                                        <div class="row">
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Experience Title:</label>
                                                <p class="pull-left">{{$exp->title}}</p>
                                            </div>


                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">About Your Work:</label>
                                                <p class="pull-left">
                                                    {{$exp->about_your_work}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        @if($user_details->user_type == 4)
                        <div class="uploadingHolder borderBot">
                            <div class="uploadBlock">
                                Writing Type
                            </div>
                            @if(isset($user_details->userWritingType))
                                <div class="eduDetails">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-2 clearfix">
                                                    <input type="checkbox" disabled
                                                           @if(isset($user_details->userWritingType->writing_type)) @if(str_contains('Creative', explode(',', $user_details->userWritingType->writing_type))) Checked @endif @endif>
                                                    Creative
                                                </div>
                                                <div class="col-sm-2 clearfix">
                                                    <input type="checkbox" disabled
                                                           @if(isset($user_details->userWritingType->writing_type)) @if(str_contains('Poetry', explode(',', $user_details->userWritingType->writing_type))) Checked @endif @endif>
                                                    Poetry
                                                </div>
                                                <div class="col-sm-2 clearfix">
                                                    <input type="checkbox" disabled
                                                           @if(isset($user_details->userWritingType->writing_type)) @if(str_contains('ContentWriter', explode(',', $user_details->userWritingType->writing_type))) Checked @endif @endif>
                                                    Content Writer
                                                </div>
                                                <div class="col-sm-2 clearfix">
                                                    <input type="checkbox" disabled
                                                           @if(isset($user_details->userWritingType->writing_type)) @if(str_contains('ScriptWriter', explode(',', $user_details->userWritingType->writing_type))) Checked @endif @endif>
                                                    Script Writer
                                                </div>
                                                <div class="col-sm-2 clearfix">
                                                    <input type="checkbox" disabled
                                                           @if(isset($user_details->userWritingType->writing_type)) @if(str_contains('NovelWriter', explode(',', $user_details->userWritingType->writing_type))) Checked @endif @endif>
                                                    Novel Writer
                                                </div>
                                                <div class="col-sm-2 clearfix">
                                                    <input type="checkbox" disabled
                                                           @if(isset($user_details->userWritingType->writing_type)) @if(str_contains('ComicWriter', explode(',', $user_details->userWritingType->writing_type))) Checked @endif @endif>
                                                    Comic Writer
                                                </div>
                                            </div>
                                    </div>

                            @else
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                        @endif
                        @if($user_details->user_type == 4)
                        <div class="uploadingHolder borderBot">
                            <div class="uploadBlock">
                                Genre
                            </div>
                            @if(isset($user_details->userGenre))
                                <div class="eduDetails">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($user_details->userGenre->genre)) @if(str_contains('Romance', explode(',', $user_details->userGenre->genre))) Checked @endif @endif>
                                                Romance
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($user_details->userGenre->genre)) @if(str_contains('Horror', explode(',', $user_details->userGenre->genre))) Checked @endif @endif>
                                                Horror
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($user_details->userGenre->genre)) @if(str_contains('sci-fi', explode(',', $user_details->userGenre->genre))) Checked @endif @endif>
                                                Sci-Fi
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($user_details->userGenre->genre)) @if(str_contains('Drama', explode(',', $user_details->userGenre->genre))) Checked @endif @endif>
                                                Drama
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($user_details->userGenre->genre)) @if(str_contains('Fantasy', explode(',', $user_details->userGenre->genre))) Checked @endif @endif>
                                                Fantasy
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($user_details->userGenre->genre)) @if(str_contains('Comedy', explode(',', $user_details->userGenre->genre))) Checked @endif @endif>
                                                Comedy
                                            </div>
                                        </div>
                                    </div>

                                    @else
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                        </div>
                            @endif


                </div>
            </div>
        </div>
        </div>
    </section>

@endsection


@section('jcontent')
@endsection