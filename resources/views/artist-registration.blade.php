<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Clans</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">  -->
    <link rel="icon" type="image/png" href="{{url('public/image/favicon.png')}}"/>
    <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/bootstrap-multiselect.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/animated.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
       /* .multiselect-container>li>a>label {
            padding: 4px 20px 3px 20px;
        }*/
    </style>
</head>
<body>
<section class="login-here" style="background-image: url('{{url('public/image/login.jpg')}}');">
    <div class="login-screen mCustomScrollbar">
        <div class="display-middle">
            <div class="row">
                <div class="col-sm-12">
                    <div class="stepFirst" id="stepFirst">
                        <form id="first_step_form" action="" method="" accept-charset="utf-8">
                            <h3>Register <span>as artist</span></h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <label class="name-label">
                                            <input type="radio" id="gender" name="gender" value="0" checked="checked"> Mr
                                        </label>
                                        <label class="name-label" style="margin-left: 30px;">
                                            <input type="radio" id="gender" name="gender" value="1"> Ms
                                        </label>
                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="name-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="name-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                        <label class="name-label">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                                        @if ($errors->has('mobile'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>--}}


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                        <label class="name-label">Select Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option> -- Select Category --</option>
                                            <option @if(Request::segment(3) == 4) selected @endif value="4">Writer</option>
                                            <option @if(Request::segment(3) == 5) selected @endif value="5">Painter</option>
                                            <option @if(Request::segment(3) == 6) selected @endif value="6">Singer</option>
                                            <option @if(Request::segment(3) == 7) selected @endif value="7">Dancer</option>
                                            <option @if(Request::segment(3) == 8) selected @endif value="8">Costume Designer</option>
                                            <option @if(Request::segment(3) == 9) selected @endif value="9">Makeup Artist</option>
                                            <option @if(Request::segment(3) == 10) selected @endif value="10">DOP Photographer</option>
                                            <option @if(Request::segment(3) == 11) selected @endif value="11">Film Maker</option>
                                            <option @if(Request::segment(3) == 12) selected @endif value="12">Actor</option>
                                            <option @if(Request::segment(3) == 13) selected @endif value="13">Fashion Model</option>
                                        </select>

                                        @if ($errors->has('mobile'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="name-label">Password</label>
                                        <div class="relative">
                                            <input type="password" class="form-control password" name="password" id="password" placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                        <label class="name-label">Confirm Password</label>
                                        <div class="relative">
                                            <input type="password" class="form-control password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                                            @if ($errors->has('confirm_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                        <label class="name-label">
                                            <input type="radio" id="age" name="age" value="18+" checked="checked"> I am 18 or above and I agree to the <a href="javascript:void(0);" class="cng-clr"> Terms & Conditions and Privacy Policy.</a>
                                        </label> <br/>
                                        <label class="name-label">
                                            <input type="radio" id="age" name="age" value="18-"> I am below 18
                                        </label>
                                        @if ($errors->has('age'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('age') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <a id="first_step_btn" href="javascript:void(0);" class="btn custom-btn"><span>Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                   {{-- <div class="stepSecond" id="stepSecond" style="display: none;">
                        <form action="Login_submit" method="get" accept-charset="utf-8">
                            <h3 class="text-center">Select <span>category</span></h3>
                            <ul class="steps clearfix">
                                <li>
                                    <i class="fa fa-th"></i>
                                    <p>Category</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p>Personal</p>
                                </li>
                                --}}{{--<li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>Location</p>
                                </li>--}}{{--
                                <li>
                                    <i class="fa fa-check"></i>
                                    <p>Finish</p>
                                </li>
                            </ul>
                            <ul class="catetoryUl clearfix">
                                <li>
                                    <i class="fa fa-user-o"></i>
                                    <p>Actor</p>
                                </li>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <p>Musician</p>
                                </li>
                                <li>
                                    <i class="fa fa-user-o"></i>
                                    <p>Actor</p>
                                </li>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <p>Musician</p>
                                </li>
                                <li>
                                    <i class="fa fa-user-o"></i>
                                    <p>Actor</p>
                                </li>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <p>Musician</p>
                                </li>
                                <li>
                                    <i class="fa fa-user-o"></i>
                                    <p>Actor</p>
                                </li>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <p>Musician</p>
                                </li>
                                <li>
                                    <i class="fa fa-user-o"></i>
                                    <p>Actor</p>
                                </li>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <p>Musician</p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <a id="step_secend_previous_btn" href="javascript:void(0);" class="btn custom-btn"><span>Prev</span></a>
                                        <a id="step_secend_next_btn" href="javascript:void(0);" class="btn custom-btn"><span>Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>--}}
                    <div class="stepThree" id="stepThree" style="display: none;">
                        <form id="third_step_form" action="" method="" accept-charset="utf-8">
                            <h3>Register <span>as artist</span></h3>
                            <ul class="steps clearfix">
                                <li>
                                    <i class="fa fa-th"></i>
                                    <p>Category</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p>Personal</p>
                                </li>
                                {{--<li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>Location</p>
                                </li>--}}
                                <li>
                                    <i class="fa fa-check"></i>
                                    <p>Finish</p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                        <label class="name-label">Date of birth</label>
                                        <input type="text" class="form-control"  name="date_of_birth" id="date_of_birth" placeholder="Date of birth">
                                        <input type="hidden" name="form_type" id="form_type" value="artist_form">
                                        @if ($errors->has('date_of_birth'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                                        <label class="name-label">Languages you speak</label>
                                        <br>

                                        <select type="text" name="language" id="language" clas="form-control" multiple="multiple" name="" placeholder="Select Language">

                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Marathi">Marathi</option>
                                        </select>
                                        @if ($errors->has('language'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('language') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <a id="step_third_previous_btn" href="javascript:void(0);" class="btn custom-btn"><span>Prev</span></a>
                                        <a id="step_third_next_btn" href="javascript:void(0);" class="btn custom-btn"><span>Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{--<div class="stepFour" id="stepFour" style="display: none;">
                        <form action="Login_submit" method="get" accept-charset="utf-8">
                            <h3 class="text-center">Your <span>Location</span></h3>
                            <ul class="steps clearfix">
                                <li>
                                    <i class="fa fa-th"></i>
                                    <p>Category</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p>Personal</p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>Location</p>
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    <p>Finish</p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p class="clrRed">Where are you located?</p>
                                        <p>Where are you located?</p>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="name-label wid50">
                                            <input type="radio" name="gender" value="male"> Delhi NCR
                                        </label>
                                        <label class="name-label wid50" style="margin-left: 30px;">
                                            <input type="radio" name="gender" value="female"> Mumbai
                                        </label>
                                        <label class="name-label wid50">
                                            <input type="radio" name="gender" value="male"> Chennai
                                        </label>
                                        <label class="name-label wid50" style="margin-left: 30px;">
                                            <input type="radio" name="gender" value="female"> Kolkata
                                        </label>
                                        <label class="name-label wid50">
                                            <input type="radio" name="gender" value="male"> Hydrabad
                                        </label>
                                        <label class="name-label wid50" style="margin-left: 30px;">
                                            <input type="radio" name="gender" value="female"> Bangalore
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="name-label">Or find your location</label>
                                        <input type="text" class="form-control" name="" placeholder="find your location">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <p class="clrRed">Where are you available for work?</p>
                                            <label class="name-label">
                                                <input type="checkbox" name="gender" value="male"> Delhi NCR
                                            </label>
                                            <p class="clrRed">Or select form top locations</p>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="name-label wid50">
                                            <input type="checkbox" name="gender" value="male"> Delhi NCR
                                        </label>
                                        <label class="name-label wid50" style="margin-left: 30px;">
                                            <input type="checkbox" name="gender" value="female"> Mumbai
                                        </label>
                                        <label class="name-label wid50">
                                            <input type="checkbox" name="gender" value="male"> Chennai
                                        </label>
                                        <label class="name-label wid50" style="margin-left: 30px;">
                                            <input type="checkbox" name="gender" value="female"> Kolkata
                                        </label>
                                        <label class="name-label wid50">
                                            <input type="checkbox" name="gender" value="male"> Hydrabad
                                        </label>
                                        <label class="name-label wid50" style="margin-left: 30px;">
                                            <input type="checkbox" name="gender" value="female"> Bangalore
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="name-label">And find or add your location</label>
                                        <input type="text" class="form-control" name="" placeholder="find your location">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <a id="step_four_previous_btn" href="javascript:void(0);" class="btn custom-btn"><span>Prev</span></a>
                                        <a id="step_four_next_btn" href="javascript:void(0);" class="btn custom-btn"><span>Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>--}}
                    <div class="stepFive" id="stepFive" style="display: none;">

                            <h3 class="text-center">Mobile No <span>Verification</span></h3>
                            <ul class="steps clearfix">
                                <li>
                                    <i class="fa fa-th"></i>
                                    <p>Category</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p>Personal</p>
                                </li>
                               {{-- <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>Location</p>
                                </li>--}}
                                <li>
                                    <i class="fa fa-check"></i>
                                    <p>Finish</p>
                                </li>
                            </ul>
                            <div class="row">
                                <form id="five_step_form" action="" method="" accept-charset="utf-8">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p class="clrRed">Mobile Number Verification</p>
                                        <p>Please enter your mobile no here</p>
                                    </div>

                                    <div class="form-group{{ $errors->has('mobile_no_verification') ? ' has-error' : '' }}">
                                        <label class="name-label">Enter your mobile no</label>
                                        <input type="tel" class="form-control" name="mobile_no_verification" id="mobile_no_verification" placeholder="Enter Mobile No">

                                        @if ($errors->has('mobile_no_verification'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('mobile_no_verification') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group text-right">
                                        <a href="javascript:void(0);" id="change_mobile_number" style="display: none" name="change_mobile_number" class="btn btn-danger">Change Mobile Number</a>
                                        <button type="submit"  id="verify_number_btn" name="verify_number_btn" class="btn btn-danger"><i id="verify_btn_spin" style="font-size:17px"></i>Send OTP</button>

                                    </div>


                                </form>

                                </div>
                                {{--<div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <p class="clrRed text-center">
                                                Add account image
                                            </p>
                                            <div class="BrowseProfileImage">
                                                <input type="file"/>
                                                <img src="{{url('public/image/testi-img.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <a id="step_five_previous_btn" href="javascript:void(0);" class="btn custom-btn"><span>Back</span></a>
                                        <a id="step_five_submit_btn" href="javascript:void(0);" class="btn custom-btn" disabled><i id="register_btn_spin" style="font-size:17px"></i><span>Finish</span></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="enter_otp_model" tabindex="-1" role="" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h3 id="success_otp_heading"> </h3>
                    <br>
                    <form id="otp_verify_form">
                    <input type="hidden" class="form-control" name="mobile_number" id="mobile_number" readonly>
                    <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                    </form>
                    <br>
                    <button id="btn_verify_otp" onclick="verifyOtp();" class="btn btn-danger">Verify OTP</button>

                </div>
            </div>
        </div>
    </div>

</section>
<script src="{{url('public/js/jquery.js')}}"></script>
<script src="{{url('public/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<script src="{{url('public/js/wow.js')}}"></script>
<script src="{{url('public/js/jquery-ui.min.js')}}"></script>
<script src="{{url('public/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('public/js/jquery.mixitup.min.js')}}"></script>
<script src="{{url('public/js/validation.js')}}"></script>
<script src="{{url('public/js/jquery.validate.js')}}"></script>
<script src="{{url('public/js/bootstrap-multiselect.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    var registerData = {};
    var javascript_site_path = '{{url('/')}}';
    $(function () {



       $('#date_of_birth').datepicker({
            dateFormat: 'dd/mm/yy',
            changeYear: true
        });

        $('#language').multiselect({

            includeSelectAllOption: true

        });

        var filterList = {
            init: function () {
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.all'
                    }
                });
            }
        };
        // Run the show!
        filterList.init();
    });

    $('#first_step_form').validate({

       errorClass:'text-danger',
       rules:{
           name:{
               required:true,
           },
           gender:{
               required:true,
           },
           email:{
               required:true,
           },
          /* mobile:{
               required:true,
               remote: {
                   url: javascript_site_path + '/chk-mobile-duplicate',
                   method: 'get'
               }
           },*/
           category:{
               required:true,
           },
           password:{
               required:true,
           },
           confirm_password:{
               required:true,
               equalTo: "#password",
           },
           age:{
               required:true,
           }

       } ,
        messages:{
           name:{
               required:'Please Enter Your Name',
           },
            gender:{
                required:'Please Select Your Gender',
            },
            email:{
                required:'Please Enter Your Email Id',
            },
            /*mobile:{
                required:'Please Enter Your Mobile No',
                remote:"Mobile Number Already Exits",
            },*/
            category:{
                required:'Please Select Category',
            },
            password:{
                required:'Please Enter Password',
            },
            confirm_password:{
                required:'Please Confirm Password',
                equalTo:'Confirm Password Should Be Same As Password',
            },
            age:{
                required:'Please Select Your Age',
            },
        }

    });

    $('#third_step_form').validate({

        errorClass:'text-danger',
        rules:{
            date_of_birth:{
                required:true,
            },
            language:{
                required:true,
            },


        } ,
        messages:{
            date_of_birth:{
                required:'Please Enter Your Date Of Birth',
            },
            language:{
                required:'Please Select Language',
            },

        }

    });

    $('#five_step_form').validate({

        errorClass:'text-danger',
        rules:{
            mobile_no_verification:{
                required:true,
                remote: {
                    url: javascript_site_path + '/chk-mobile-duplicate',
                    method: 'get'
                }
            },



        } ,
        messages:{
            mobile_no_verification:{
                required:'Please Enter Mobile Number For Verification',
                remote:"Mobile Number Already Exits",
            },


        },
        submitHandler:function (form) {

            $('#mobile_no_verification').attr('readonly',true);
            $('#verify_number_btn').attr('disabled',true);
            $('#verify_btn_spin').addClass('fa fa-spinner fa-spin');
            var number = $('#mobile_no_verification').val();
            $.ajax({
                url: '{{url("/verify/number")}}',
                method: "POST",
                dataType: 'json',
                data: {
                    number: number,
                },
                success: function (result) {
                    console.log(result.number);
                    if(result.message == 'success')
                    {
                        $('#verify_btn_spin').removeClass('fa fa-spinner fa-spin');
                        $('#success_otp_heading').text('We have sent an OTP on your mobile number please enter OTP to proceed Thank you!!!');
                        /*$('#otp_display').text(result.generated_otp);*/
                        $('#mobile_number').val(result.number);
                        $('#enter_otp_model').modal("show");
                    }
                    else
                    {
                        Swal.fire({
                            type: 'warning',
                            title: "Something went wrong",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                    /*Swal.fire({
                        title: 'Enter OTP To Verify Number',
                        input: 'text',
                        inputAttributes: {
                            autocapitalize: 'off'
                        },
                        showCancelButton: true,
                        confirmButtonText: 'Verify OTP',
                        showLoaderOnConfirm: true,
                    }).then(function() {
                        alert();
                    })*/
                }
            });
        }

    });





    $('#first_step_btn').click(function () {

        if($('#first_step_form').valid())
        {
            registerData.name = $('#name').val();
            registerData.email = $('#email').val();
            /*registerData.mobile = $('#mobile').val();*/
            registerData.category = $('#category').val();
            registerData.password = $('#password').val();
            registerData.gender = $("input[name='gender']:checked").val();
            registerData.age = $("input[name='age']:checked").val();
            $('#stepFirst').hide();
            $('#stepThree').show();
        }

    });

    /*$('#step_secend_previous_btn').click(function () {
        $('#stepFirst').show();
        $('#stepSecond').hide();
    });*/

    /*$('#step_secend_next_btn').click(function () {
        $('#stepSecond').hide();
        $('#stepThree').show();
    });*/

    $('#step_third_previous_btn').click(function () {
        $('#stepFirst').show();
        $('#stepThree').hide();
    });

    $('#step_third_next_btn').click(function () {
        if($('#third_step_form').valid())
        {
            registerData.date_of_birth = $('#date_of_birth').val();
            registerData.language = $('#language').val().toString();
            registerData.form_type = $('#form_type').val();
            console.log(registerData);
            $('#stepThree').hide();
            $('#stepFive').show();
        }

    });

    /*$('#step_four_previous_btn').click(function () {
        $('#stepThree').show();
        $('#stepFour').hide();
    });*/

   /* $('#step_four_next_btn').click(function () {
        $('#stepFour').hide();
        $('#stepFive').show();
    });*/

    $('#step_five_previous_btn').click(function () {
        $('#stepThree').show();
        $('#stepFive').hide();
    });

    $('#step_five_submit_btn').click(function () {
        if($('#five_step_form').valid())
        {
            registerData.mobile = $('#mobile_no_verification').val();
            $('#step_five_submit_btn').attr('disabled',true);
            $('#register_btn_spin').addClass('fa fa-spinner fa-spin');

            console.log(registerData);
            $.ajax({
                url: '{{url("/artist/registration")}}',
                method: "POST",
                dataType: 'json',
                data: registerData,
                success: function (result) {
                    /*console.log(result);
                    console.log(123);*/
                    $('#step_five_submit_btn').attr('disabled',false);
                    $('#register_btn_spin').removeClass('fa fa-spinner fa-spin');
                    Swal.fire({
                        type: 'success',
                        title: 'Registered Successfully......',
                        showConfirmButton: true,
                    }).then(function() {
                        // Redirect the user
                        window.location.href = "{{url('/login-after-registration')}}/"+ btoa(result.id)+"";
                    })
                }
            })


        }

    })






    $('#otp_verify_form').validate({
        errorClass: 'text-danger',
        rules:{
            otp:{
                required:true,
                number:true,
            }
        },
        messages:{
            otp:{
                required:'Enter OTP',
                number:'Invalid OTP Format'
            }
        }

    });

    function verifyOtp()
    {
        if($('#otp_verify_form').valid())
        {
            $.ajax({
                url: '{{url("/verify/otp")}}',
                method: "POST",
                dataType: 'json',
                data: {
                    mobile_number: $('#mobile_number').val(),
                    otp: $('#otp').val(),
                },
                success: function (result) {
                    console.log(result);
                    if(result.icon == 'success')
                    {
                        $('#mobile_no_verification').attr('readonly',true);
                        $('#verify_number_btn').attr('disabled',true);
                        $('#verify_number_btn').text('Verified');
                        $('#otp_display').text('');
                        $('#mobile_number').val('');
                        $('#otp').val('');
                        $('#enter_otp_model').modal("hide");
                        $('#step_five_submit_btn').attr('disabled',false);
                        $('#change_mobile_number').show();

                    }
                    else
                    {
                        $('#mobile_no_verification').attr('readonly',false);
                        $('#verify_number_btn').attr('disabled',false);
                        $('#mobile_no_verification').val('');
                        $('#otp_display').text('');
                        $('#mobile_number').val('');
                        $('#otp').val('');
                        $('#enter_otp_model').modal("hide");
                    }
                    Swal.fire({
                        type: result.icon,
                        title: result.message,
                        showConfirmButton: false,
                        timer: 1000
                    });



                }
            });
        }
    }

    $('#change_mobile_number').click(function () {
        $('#mobile_no_verification').attr('readonly',false);
        $('#verify_number_btn').attr('disabled',false);
        $('#mobile_no_verification').val('');
        $('#otp_display').text('');
        $('#mobile_number').val('');
        $('#otp').val('');
        $('#step_five_submit_btn').attr('disabled',true);
        $('#verify_number_btn').text('Send OTP');
    })

</script>
<script src="{{url('public/js/custom.js')}}"></script>
</body>
<!--Script Section-->