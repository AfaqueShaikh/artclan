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
    <link href="{{url('public/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/animated.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/css/responsive.css')}}" rel="stylesheet" type="text/css" />
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
                            <div class="row">
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
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                        <label class="name-label">Select Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option> -- Select Category --</option>
                                            <option value="13">Fashion Model</option>
                                            <option value="12">Actor</option>
                                            <option value="10">DOP Photographer</option>
                                            <option value="9">Makeup Artist</option>


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
                                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date of birth">
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
                                        <select type="text" name="language" id="language" class="form-control" name="" placeholder="Select Language">
                                            <option value="">Select Language</option>
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
                        <form id="five_step_form" action= method="" accept-charset="utf-8">
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p class="clrRed">OTP Verification</p>
                                        <p>We have sent you a One-Time-Password.</p>
                                        <p>Please enter here your mobile no</p>
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
                                        <a href="javascript:void(0)" class="clrRed">Resend OTP</a>
                                    </div>
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
                                        <a id="step_five_submit_btn" href="javascript:void(0);" class="btn custom-btn"><span>Finish</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    var registerData = {};
    var javascript_site_path = '{{url('/')}}';
    $(function () {
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
           mobile:{
               required:true,
               remote: {
                   url: javascript_site_path + '/chk-mobile-duplicate',
                   method: 'get'
               }
           },
           category:{
               required:true,
           },
           password:{
               required:true,
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
            mobile:{
                required:'Please Enter Your Mobile No',
                remote:"Mobile Number Already Exits",
            },
            category:{
                required:'Please Select Category',
            },
            password:{
                required:'Please Enter Password',
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
            },



        } ,
        messages:{
            mobile_no_verification:{
                required:'Please Enter Mobile Number For Verification',
            },


        }

    });





    $('#first_step_btn').click(function () {

        if($('#first_step_form').valid())
        {
            registerData.name = $('#name').val();
            registerData.email = $('#email').val();
            registerData.mobile = $('#mobile').val();
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
            registerData.language = $('#language').val();
            registerData.form_type = $('#form_type').val();
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
            console.log(registerData);
            $.ajax({
                url: '{{url("/register/artist")}}',
                method: "POST",
                dataType: 'json',
                data: registerData,
                success: function (result) {
                    console.log(result);
                    Swal.fire({
                        type: 'success',
                        title: 'Registered Successfully......',
                        showConfirmButton: true,
                    }).then(function() {
                        // Redirect the user
                        window.location.href = "{{url('/')}}";
                    })
                }
            })


        }

    })

</script>
<script src="{{url('public/js/custom.js')}}"></script>
</body>
<!--Script Section-->