@extends('layouts.dashboard')

@section('content')
    <section class="dashboardSection">

        <div class="container">
            @if(Session::has('success'))
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            @endif
            <div class="dashPrifilerInfo clearfix">
                <div class="profilerImage relative">
                    @if(isset(Auth::user()->profile_img))
                        <img src="{{url('storage/app/public/user_profile/'.Auth::user()->profile_img)}}" height="570">
                    @else
                        <img src="{{url('public/image/noimagefound.png')}}" height="570">
                    @endif

                    <span class="uploadImage" onclick='$("#uploadProfilePicture").modal("show")'>
						<i class="fa fa-camera"></i>
						
					</span>
                </div>


                <div class="profilerInformation">
                    <div class="profilerName">
                        <h3>{{$userData->name}}</h3>
                        <p>{{$user_types[$userData->user_type]}} / {{$userData->city}}</p>
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
                        <li data-toggle="modal" data-target="">
                            <a href="javascript:void(0);"data-toggle="modal" data-target="#contact_artist_model" class="btn btn-danger">Enquiry</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="personLifeSchedule">
        <div class="container">
            <div class="searchByTag">
                <p class="tagHead">Tags</p>
                <p class="desp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="javascript:void(0);" class="tagsBtn"><i class="fa fa-plus"></i> Add Tags</a>
            </div>
            <div class="personLifeHistory">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#gallery" aria-controls="home" role="tab"
                                                              data-toggle="tab">My Art Gallery</a></li>
                    <li role="presentation"><a href="#bio" aria-controls="profile" role="tab" data-toggle="tab">Bio</a>
                    </li>
                    <li role="presentation"><a href="#Exp" aria-controls="messages" role="tab" data-toggle="tab">Experience</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="gallery">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Video
                                <span class="addButtons" data-toggle="modal" data-target="#uploadVideo"><i
                                            class="fa fa-plus"></i></span>
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">

                                    @foreach($userData->userVideos as $video)

                                        <li class="relative">
                                            <iframe width="204" height="222"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen src={{'https://www.youtube.com/embed/'.$video->video_url}}></iframe>
                                            <span class="deleteBtn"><i class="fa fa-trash"></i></span>
                                            <p class="uplName">{{$video->title}}</p>
                                        </li>




                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Photos
                                <span class="addButtons" data-toggle="modal" data-target="#uploadphoto"><i
                                            class="fa fa-plus"></i></span>
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">
                                    @foreach($userData->userPhotos as $photo)
                                        <li class="relative">
                                            <img src="{{url('storage/app/public/user_photos/'.$photo->photo)}}">
                                            <span class="deleteBtn"><i class="fa fa-trash"></i></span>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @if(Auth::user()->user_type == 4)
                            <div class="uploadingHolder">
                                <div class="uploadBlock">
                                    Documents
                                    <span class="addButtons" data-toggle="modal" data-target="#uploadDocument"><i
                                                class="fa fa-plus"></i></span>
                                </div>
                                <div class="uploadedListing">
                                    <ul class="listUpload clearfix">
                                        @foreach($userData->userDocuments as $document)
                                            <li class="relative">
                                                <div class="pdfIcon">
                                                    <a href='{{url('storage/app/public/user_documents/'.$document->file_name)}}'
                                                       download="{{$document->file_name}}"><img
                                                                src="{{url('public/image/pdf-icon.png')}}"></a>
                                                </div>
                                                <span class="deleteBtn"><i class="fa fa-trash"></i></span>
                                                <p class="uplName">{{$document->title}}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div role="tabpanel" class="tab-pane" id="bio">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                About me
                                <span class="addButtons" data-toggle="modal" data-target="#editAbout"><i
                                            class="fa fa-edit"></i></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Name</label>
                                        <p class="pull-left">{{Auth::user()->name}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Residing City</label>
                                        <p class="pull-left">{{Auth::user()->city}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Language known</label>
                                        <p class="pull-left">{{Auth::user()->language}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Know Me</label>
                                        <p class="pull-left">{{Auth::user()->about_me}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Education
                                <span class="addButtons" data-toggle="modal" data-target="#uploadEducation1"><i
                                            class="fa fa-plus"></i></span>
                            </div>
                            @foreach($userData->userEducations as $education)
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Education Name</label>
                                            <p class="pull-left">{{$education->education_name}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Institute </label>
                                            <p class="pull-left">{{$education->institute}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">From</label>
                                            <p class="pull-left">{{$education->from}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">To</label>
                                            <p class="pull-left">{{$education->to}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Work & Location Preference
                                <span class="addButtons" data-toggle="modal" data-target="#availableCity"><i
                                            class="fa fa-pencil"></i></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Work Preference</label>
                                        <p class="pull-left">{{Auth::user()->work_preference}}</p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Location Preference</label>
                                        <p class="pull-left">{{Auth::user()->location_preference}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @if(Auth::user()->user_type == 7 || Auth::user()->user_type == 12 || Auth::user()->user_type == 13 )
                            <div class="uploadingHolder">
                                <div class="uploadBlock">
                                    Physical Attributes
                                    <span class="addButtons" data-toggle="modal" data-target="#PhysicalStats"><i
                                                class="fa fa-edit"></i></span>
                                </div>
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Height</label>
                                            <p class="pull-left">{{isset($userPhysicsData->height)?$userPhysicsData->height:''}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Weight</label>
                                            <p class="pull-left">{{isset($userPhysicsData->weight)?$userPhysicsData->weight:''}}</p>
                                        </div>
                                        @if(Auth::user()->user_type != 7)
                                        @if(Auth::user()->gender != '0')
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Bust</label>
                                                <p class="pull-left">{{isset($userPhysicsData->bust)?$userPhysicsData->bust:''}}</p>
                                            </div>
                                        @endif
                                         <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Waist</label>
                                            <p class="pull-left">{{isset($userPhysicsData->waist)?$userPhysicsData->waist:''}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Hips</label>
                                            <p class="pull-left">{{isset($userPhysicsData->hips)?$userPhysicsData->hips:''}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Chest</label>
                                            <p class="pull-left">{{isset($userPhysicsData->chest)?$userPhysicsData->chest:''}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Biceps</label>
                                            <p class="pull-left">{{isset($userPhysicsData->biceps)?$userPhysicsData->biceps:''}}</p>
                                        </div>
                                        @endif
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Hair Type</label>
                                            <p class="pull-left">{{isset($userPhysicsData->hair_type)?$userPhysicsData->hair_type:''}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Hair Length</label>
                                            <p class="pull-left">{{isset($userPhysicsData->hair_length)?$userPhysicsData->hair_length:''}}</p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Complexion</label>
                                            <p class="pull-left">{{isset($userPhysicsData->complexion)?$userPhysicsData->complexion:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div role="tabpanel" class="tab-pane" id="Exp">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Add Experience
                                <span class="addButtons" data-toggle="modal" data-target="#addExpe"><i
                                            class="fa fa-plus"></i></span>
                            </div>


                            @foreach($userData->userExp as $exp)
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Experience Title</label>
                                            <p class="pull-left">{{$exp->title}}</p>
                                        </div>


                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">About Your Work</label>
                                            <p class="pull-left">
                                                {{$exp->about_your_work}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if(Auth::user()->user_type == 4)
                            <div class="uploadingHolder">
                                <div class="uploadBlock">
                                    Add Writing Type
                                    <span class="addButtons" data-toggle="modal" data-target="#addWritingType"><i
                                                class="fa fa-plus"></i></span>
                                </div>
                                <div class="eduDetails">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Writing Type</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userWritingType->writing_type)) @if(str_contains('Creative', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                                Creative
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userWritingType->writing_type)) @if(str_contains('Poetry', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                                Poetry
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userWritingType->writing_type)) @if(str_contains('ContentWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                                Content Writer
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userWritingType->writing_type)) @if(str_contains('ScriptWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                                Script Writer
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userWritingType->writing_type)) @if(str_contains('NovelWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                                Novel Writer
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userWritingType->writing_type)) @if(str_contains('ComicWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                                Comic Writer
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                        @if(Auth::user()->user_type == 4)
                            <div class="uploadingHolder">
                                <div class="uploadBlock">
                                    Add Genre
                                    <span class="addButtons" data-toggle="modal" data-target="#addGenre"><i
                                                class="fa fa-plus"></i></span>
                                </div>
                                <div class="eduDetails">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Genre</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userGenre->genre)) @if(str_contains('Romance', explode(',', $userGenre->genre))) Checked @endif @endif>
                                                Romance
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userGenre->genre)) @if(str_contains('Horror', explode(',', $userGenre->genre))) Checked @endif @endif>
                                                Horror
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userGenre->genre)) @if(str_contains('sci-fi', explode(',', $userGenre->genre))) Checked @endif @endif>
                                                Sci-Fi
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userGenre->genre)) @if(str_contains('Drama', explode(',', $userGenre->genre))) Checked @endif @endif>
                                                Drama
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userGenre->genre)) @if(str_contains('Fantasy', explode(',', $userGenre->genre))) Checked @endif @endif>
                                                Fantasy
                                            </div>
                                            <div class="col-sm-2 clearfix">
                                                <input type="checkbox" disabled
                                                       @if(isset($userGenre->genre)) @if(str_contains('Comedy', explode(',', $userGenre->genre))) Checked @endif @endif>
                                                Comedy
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection


@section('modal_section')
    <div class="modal" id="shareLink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="footer-social menuSocials text-center">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-facebook"> Facebook</i>
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
                    <label>Copy link to share</label>
                    <div class="form-group input-group">
				  <span class="input-group-addon" id="basic-addon1">
				  	<i class="fa fa-link"></i>
				  </span>
                        <input type="text" class="form-control" placeholder="copy link"
                               value="https://www.youtube.com/watch?v=Ix2fG8qAlbc" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------upload video-------->
    <div class="modal" id="uploadVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action='{{url('user/videos/create')}}' method="post">
                        <div class="form-group">
                            <label>Video title</label>
                            <input type="text" name='video_title' class="form-control" required=""
                                   placeholder="Video Title">
                        </div>
                        <div class="form-group">
                            <label>YouTube video link</label>
                            <input type="url" name='video_url' required="" class="form-control"
                                   placeholder="Youtube Video Link">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---------photo video-------->
    <div class="modal" id="uploadphoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{url('user/photos/create')}}' enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>Add Photo</label>
                            <p>(Maximum photo upload size is 10MB. The width and height of the image should be at least
                                350px)</p>
                        </div>
                        <div class="form-group text-center">

                            <input type="file" name="photo" required="">

                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="uploadProfilePicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{url('user/profile-picture/update')}}' enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>Add Profile Picture</label>

                        </div>
                        <div class="form-group text-center">

                            <input type="file" name="photo" required="">

                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---------document video-------->
    <div class="modal" id="uploadDocument" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='{{url('user/documents/create')}}' enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name='title' class="form-control" required="" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label>Add Document</label>

                        </div>
                        <div class="form-group text-center">


                            <input type="file" name="document" required="">


                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-----------edit about info--------->
    <!---------upload video-------->
    <div class="modal" id="editAbout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('user/about-me/update')}}" method="post">
                        <div class="eduDetails">
                            <div class="eduDetails">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{Auth::user()->name}}" name="name" required=""
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Residing City</label>
                                    <input type="text" name="city" required="" value="{{Auth::user()->city}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Language known</label>
                                    <select name="language[]" class="form-control" multiple="" required="">
                                        <option value="English"
                                                @if(str_contains('English', explode(',', Auth::user()->language))) selected @endif>
                                            English
                                        </option>
                                        <option value="Hindi"
                                                @if(str_contains('Hindi', explode(',', Auth::user()->language))) selected @endif>
                                            Hindi
                                        </option>
                                        <option value="Marathi"
                                                @if(str_contains('Marathi', explode(',', Auth::user()->language))) selected @endif>
                                            Marathi
                                        </option>
                                        <option value="Bengali"
                                                @if(str_contains('Bengali', explode(',', Auth::user()->language))) selected @endif>
                                            Bengali
                                        </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Know Me</label>

                                    <textarea class="form-control" required=""
                                              name="about_me">{{Auth::user()->about_me}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="uploadEducation1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{url('user/education/create')}}" method="post">
                        <div class="eduDetails">
                            <div class="eduDetails">
                                <div class="form-group">
                                    <label>Education Name</label>
                                    <input type="text" name='education_name' required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Institute Name</label>
                                    <input type="text" name='institute' required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="from" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" name="to" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="uploadLang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="eduDetails">
                        <div class="eduDetails">
                            <div class="form-group">
                                <label>Experties</label>
                                <select name="" class="form-control">
                                    <option value="">Actor</option>
                                    <option value="">Writer</option>
                                    <option value="">Singer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Language</label>
                                <select name="" class="form-control">
                                    <option value="">Actor</option>
                                    <option value="">Writer</option>
                                    <option value="">Singer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn custom-btn" type="button">
                            <span>Submit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="availableCity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{url('user/work-preference/update')}}" method="post">
                        <div class="eduDetails">
                            <div class="eduDetails">
                                <div class="form-group">
                                    <label>Location Preference</label>
                                    <select name="location_preference" required="" class="form-control">
                                        @foreach($cities as $city)
                                            <option value="{{$city->name}}"
                                                    @if(Auth::user()->location_preference == $city->name) selected @endif>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Work Preference</label>
                                    <select name="work_preference" required="" class="form-control">
                                        <option value="Part Time"
                                                @if(Auth::user()->work_preference == 'Part Time') selected @endif>Part
                                            Time
                                        </option>
                                        <option value="Full Time"
                                                @if(Auth::user()->work_preference == 'Full Time') selected @endif>Full
                                            Time
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="PhysicalStats" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('user/physical-attributes/create')}}" id="physical_attribute_form"
                          method="post">
                        <div class="eduDetails">
                            <div class="eduDetails">

                                <div class="form-group">
                                    <label>Height</label><span style="color: red"> (In cm)</span>
                                    {{--<input name="height"   value="{{isset($userPhysicsData->height)?$userPhysicsData->height:""}}" class="form-control" >--}}
                                    <select class="form-control" id="height" name="height">
                                        <option value="">-- Select Height --</option>
                                        <option value="152.40 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '152.40 Cm') selected  @endif @endif>152.40 Cm</option>
                                        <option value="154.94 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '154.94 Cm') selected  @endif @endif>154.94 Cm</option>
                                        <option value="157.48 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '157.48 Cm') selected  @endif @endif>157.48 Cm</option>
                                        <option value="160.02 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '160.02 Cm') selected  @endif @endif>160.02 Cm</option>
                                        <option value="162.56 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '162.56 Cm') selected  @endif @endif>162.56 Cm</option>
                                        <option value="165.10 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '165.10 Cm') selected  @endif @endif>165.10 Cm</option>
                                        <option value="167.64 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '167.64 Cm') selected  @endif @endif>167.64 Cm</option>
                                        <option value="170.18 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '170.18 Cm') selected  @endif @endif>170.18 Cm</option>
                                        <option value="172.72 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '172.72 Cm') selected  @endif @endif>172.72 Cm</option>
                                        <option value="175.26 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '175.26 Cm') selected  @endif @endif>175.26 Cm</option>
                                        <option value="177.80 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '177.80 Cm') selected  @endif @endif>177.80 Cm</option>
                                        <option value="180.34 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '180.34 Cm') selected  @endif @endif>180.34 Cm</option>
                                        <option value="182.88 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '182.88 Cm') selected  @endif @endif>182.88 Cm</option>
                                        <option value="185.42 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '185.42 Cm') selected  @endif @endif>185.42 Cm</option>
                                        <option value="187.96 Cm" @if(isset($userPhysicsData->height)) @if($userPhysicsData->height == '187.96 Cm') selected  @endif @endif>187.96 Cm</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Weight </label><span style="color: red"> (In Kg)</span>
                                    <input name="weight"
                                           value="{{isset($userPhysicsData->weight)?$userPhysicsData->weight:""}}"
                                           class="form-control">
                                </div>
                                @if(Auth::user()->user_type != 7)
                                @if(Auth::user()->gender != '0')
                                    <div class="form-group">
                                        <label>Bust </label><span style="color: red"> (In inches)</span>
                                        <input name="bust" class="form-control"
                                               value="{{isset($userPhysicsData->bust)?$userPhysicsData->bust:""}}">
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Waist </label><span style="color: red"> (In inches)</span>
                                    <input name="waist" class="form-control"
                                           value="{{isset($userPhysicsData->waist)?$userPhysicsData->waist:""}}">
                                </div>
                                <div class="form-group">
                                    <label>Hips </label><span style="color: red"> (In inches)</span>
                                    <input name="hips" class="form-control"
                                           value="{{isset($userPhysicsData->hips)?$userPhysicsData->hips:""}}">
                                </div>
                                <div class="form-group">
                                    <label>Chest </label><span style="color: red"> (In inches)</span>
                                    <input name="chest" class="form-control"
                                           value="{{isset($userPhysicsData->chest)?$userPhysicsData->chest:""}}">
                                </div>
                                <div class="form-group">
                                    <label>Biceps </label><span style="color: red"> (In inches)</span>
                                    <input name="biceps" class="form-control"
                                           value="{{isset($userPhysicsData->biceps)?$userPhysicsData->biceps:""}}">
                                </div>
                                @endif
                                <div class="form-group">
                                    <label>Hair Type </label>
                                    {{--<input name="hair_type" class="form-control"
                                           value="{{isset($userPhysicsData->hair_type)?$userPhysicsData->hair_type:""}}">--}}
                                    <select class="form-control" id="hair_type" name="hair_type">
                                        <option value="">-- Select Hair Type --</option>
                                        <option value="Straight" @if(isset($userPhysicsData->hair_type)) @if($userPhysicsData->hair_type == 'Straight') selected  @endif @endif>Straight</option>
                                        <option value="Wavy" @if(isset($userPhysicsData->hair_type)) @if($userPhysicsData->hair_type == 'Wavy') selected  @endif @endif>Wavy</option>
                                        <option value="Curly" @if(isset($userPhysicsData->hair_type)) @if($userPhysicsData->hair_type == 'Curly') selected  @endif @endif>Curly</option>
                                        <option value="Kinky" @if(isset($userPhysicsData->hair_type)) @if($userPhysicsData->hair_type == 'Kinky') selected  @endif @endif>Kinky</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Hair Length </label>
                                    {{--<input name="hair_length" class="form-control"
                                           value="{{isset($userPhysicsData->hair_length)?$userPhysicsData->hair_length:""}}">--}}
                                    <select class="form-control" id="hair_length" name="hair_length">
                                        <option value="">-- Select Hair Lenght --</option>
                                        <option value="Long" @if(isset($userPhysicsData->hair_length)) @if($userPhysicsData->hair_length == 'Long') selected  @endif @endif>Long</option>
                                        <option value="Short" @if(isset($userPhysicsData->hair_length)) @if($userPhysicsData->hair_length == 'Short') selected  @endif @endif>Short</option>
                                        <option value="Mid Lenght" @if(isset($userPhysicsData->hair_length)) @if($userPhysicsData->hair_length == 'Mid Lenght') selected  @endif @endif>Mid Lenght</option>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Complexion </label>
                                    {{--<input name="complexion" class="form-control"
                                           value="{{isset($userPhysicsData->complexion)?$userPhysicsData->complexion:""}}">--}}
                                    <select class="form-control" id="complexion" name="complexion">
                                        <option value="">-- Select Complexion --</option>
                                        <option value="Fair" @if(isset($userPhysicsData->complexion)) @if($userPhysicsData->complexion == 'Fair') selected  @endif @endif>Fair</option>
                                        <option value="Light Brown" @if(isset($userPhysicsData->complexion)) @if($userPhysicsData->complexion == 'Light Brown') selected  @endif @endif>Light Brown</option>
                                        <option value="Moderate Brown" @if(isset($userPhysicsData->complexion)) @if($userPhysicsData->complexion == 'Moderate Brown') selected  @endif @endif>Moderate Brown</option>
                                        <option value="Dark Brown" @if(isset($userPhysicsData->complexion)) @if($userPhysicsData->complexion == 'Dark Brown') selected  @endif @endif>Dark Brown</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="addExpe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('user/experience/create')}}" method="post">
                        <div class="eduDetails">
                            <div class="eduDetails">
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input type="text" required="" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>About Your Work</label>
                                    <textarea name="about_work" required="" class="form-control"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal" id="addWritingType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Writing Type</label>
                    </div>

                    <form action="{{url('user/writing-type/create')}}" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="writing_type[]" value="Creative"
                                           @if(isset($userWritingType->writing_type)) @if(str_contains('Creative', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                    Creative
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="writing_type[]" value="Poetry"
                                           @if(isset($userWritingType->writing_type)) @if(str_contains('Poetry', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                    Poetry
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="writing_type[]" value="ContentWriter"
                                           @if(isset($userWritingType->writing_type)) @if(str_contains('ContentWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                    Content Writer
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="writing_type[]" value="ScriptWriter"
                                           @if(isset($userWritingType->writing_type)) @if(str_contains('ScriptWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                    Script Writer
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="writing_type[]" value="NovelWriter"
                                           @if(isset($userWritingType->writing_type)) @if(str_contains('NovelWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                    Novel Writer
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="writing_type[]" value="ComicWriter"
                                           @if(isset($userWritingType->writing_type)) @if(str_contains('ComicWriter', explode(',', $userWritingType->writing_type))) Checked @endif @endif>
                                    Comic Writer
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="addGenre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Genre</label>
                    </div>

                    <form action="{{url('user/genre/create')}}" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="genre[]" value="Romance"
                                           @if(isset($userGenre->genre)) @if(str_contains('Romance', explode(',', $userGenre->genre))) Checked @endif @endif>
                                    Romance
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="genre[]" value="Horror"
                                           @if(isset($userGenre->genre)) @if(str_contains('Horror', explode(',', $userGenre->genre))) Checked @endif @endif>
                                    Horror
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="genre[]" value="sci-fi"
                                           @if(isset($userGenre->genre)) @if(str_contains('sci-fi', explode(',', $userGenre->genre))) Checked @endif @endif>
                                    Sci-Fi
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="genre[]" value="Drama"
                                           @if(isset($userGenre->genre)) @if(str_contains('Drama', explode(',', $userGenre->genre))) Checked @endif @endif>
                                    Drama
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="genre[]" value="Fantasy"
                                           @if(isset($userGenre->genre)) @if(str_contains('Fantasy', explode(',', $userGenre->genre))) Checked @endif @endif>
                                    Fantasy
                                </div>
                                <div class="col-sm-4 clearfix">
                                    <input type="checkbox" name="genre[]" value="Comedy"
                                           @if(isset($userGenre->genre)) @if(str_contains('Comedy', explode(',', $userGenre->genre))) Checked @endif @endif>
                                    Comedy
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn custom-btn" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="contact_artist_model" tabindex="-1" role="" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <center><h3>Contact Admin</h3></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3 id="success_otp_heading"> </h3>
                    <br>
                    <form id="contact_admin_form" method="POST" action="{{url('/contact/admin')}}">

                        <div class="form-group">

                            <select class="form-control" id="artist_category" name="artist_category">
                                <option value="">-- Select Category --</option>
                                <option @if(Auth::user()->user_type == '4') selected @endif value="4">Writer</option>
                                <option @if(Auth::user()->user_type == '5') selected @endif value="5">Painter</option>
                                <option @if(Auth::user()->user_type == '6') selected @endif value="6">Singer</option>
                                <option @if(Auth::user()->user_type == '7') selected @endif value="7">Dancer</option>
                                <option @if(Auth::user()->user_type == '8') selected @endif value="8">Costume Designer</option>
                                <option @if(Auth::user()->user_type == '9') selected @endif value="9">Makeup Artist</option>
                                <option @if(Auth::user()->user_type == '10') selected @endif value="10">Photographer</option>
                                <option @if(Auth::user()->user_type == '11') selected @endif value="11">Film Maker</option>
                                <option @if(Auth::user()->user_type == '12') selected @endif value="12">Actor</option>
                                <option @if(Auth::user()->user_type == '13') selected @endif value="13">Fashion Model</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <input type="text" id="artist_name" name="artist_name" value="{{Auth::user()->name}}" class="form-control" placeholder="Name" readonly>
                        </div>

                        <div class="form-group">

                            <input type="text" id="artist_email" name="artist_email" value="{{Auth::user()->email}}" class="form-control" placeholder="Email ID" readonly>
                        </div>
                        <div class="form-group">

                            <input type="text" id="artist_city" name="artist_city"  class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" id="artist_mobile_no" name="artist_mobile_no" value="{{Auth::user()->mobile}}" class="form-control" placeholder="Phone number" readonly>
                        </div>
                        <div class="form-group">
                            {{--<input type="text" class="form-control" placeholder="Full Name">--}}
                            <textarea id="artist_requirement" name="artist_requirement" class="form-control" placeholder="Post Your Requirement"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-danger" name="admin_contact_btn" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jcontent')
    <script>
        $(function () {
            $('#physical_attribute_form').validate({
                errorClass: 'text-danger',
                rules: {
                    height: {
                        required: true,

                    },
                    weight: {
                        digits: true,
                    },
                    waist: {
                        digits: true,
                    },
                    hips: {
                        digits: true,
                    },
                    chest: {
                        digits: true,
                    },
                    biceps: {
                        digits: true,
                    },

                },
                messages: {
                    height: {
                        required: "Enter Height",

                    },
                    weight: {
                        digits: 'Value Should Be Numeric',
                    },
                    waist: {
                        digits: 'Value Should Be Numeric',
                    },
                    hips: {
                        digits: 'Value Should Be Numeric',
                    },
                    chest: {
                        digits: 'Value Should Be Numeric',
                    },
                    biceps: {
                        digits: 'Value Should Be Numeric',
                    },

                },
                submitHandler: function (form) {
                    form.submit();
                }
            });

            $('#contact_admin_form').validate({
                errorClass: 'text-danger',
                rules: {
                    artist_requirement: {
                        required: true,
                    },

                },
                messages: {

                    artist_requirement: {
                        required: 'Please Enter Your Requirement',
                    },

                },
                submitHandler: function (form) {
                    form.submit();
                }
            });


        })
    </script>
@endsection