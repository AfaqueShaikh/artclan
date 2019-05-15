<!DOCTYPE html>
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
            <form id="recruiter_registration_form" action="" method="" accept-charset="utf-8">
                <h3>Recruiter registration <span>with artclans</span></h3>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('represent') ? ' has-error' : '' }}">
                            <label class="name-label">I represent a / an <sup>*</sup></label>
                            <select class="form-control" name="represent" id="represent">
                                <option value="">Select</option>
                                <option value="film producer">Film Producer</option>
                                <option value="casting director">Casting Director</option>
                                <option value="fashion designer">Fashion Designer</option>
                            </select>
                            @if ($errors->has('represent'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('represent') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('i_am_looking') ? ' has-error' : '' }}">
                            <label class="name-label">I am looking for <sup>*</sup></label>
                            <select class="form-control" id="i_am_looking" name="i_am_looking">
                                <option value="">Select</option>
                                <option value="actor">Actor</option>
                                <option value="singer">Singer</option>
                                <option value="model">Model</option>
                            </select>
                            @if ($errors->has('i_am_looking'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('i_am_looking') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                            <label class="name-label">Company Name</label>
                            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                            @if ($errors->has('company_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="name-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="City">
                            @if ($errors->has('city'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="name-label">Password</label>
                            <div class="relative">
                                <input type="password" class="form-control password" name="password" id="password" placeholder="Password">
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                            <label class="name-label">Confirm Password</label>
                            <div class="relative">
                                <input type="password" class="form-control password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                            </div>
                            @if ($errors->has('confirm_password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group input-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <span class="input-group-addon" id="basic-addon1">+91</span>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No" aria-describedby="basic-addon1">
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
                        <div class="form-group text-center">
                            <a id="submit_btn"class="btn custom-btn">
                                <span>Verify</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--Script Section-->
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
    $('#recruiter_registration_form').validate({

        errorClass:'text-danger',
        rules:{
            represent:{
                required:true,
            },
            i_am_looking:{
                required:true,
            },
            name:{
                required:true,
            },
            company_name:{
                required:true,
            },
            email:{
                required:true,
            },
            city:{
                required:true,
            },
            password:{
                required:true,
            },
            confirm_password:{
                required:true,
                equalTo: "#password",
            },
            mobile:{
                required:true,
            }

        } ,
        messages:{
            represent:{
                required:'Please Select Who You Are',
            },
            i_am_looking:{
                required:'Please Select What Are You Looking',
            },
            email:{
                required:'Please Enter Your Email Id',
            },
            mobile:{
                required:'Please Enter Your Mobile No',
            },

            password:{
                required:'Please Enter Password',
            },
            confirm_password:{
                required:'Please Confirm Password',
                equalTo:'Confirm Password Should Be Same As Password',
            },

            name:{
                required:'Please Enter Your Name',
            },
            company_name:{
                required:'Please Enter Your Company Name',
            },
            city:{
                required:'Please Enter City',
            }
        }

    });

    $('#submit_btn').click(function () {
        if($('#recruiter_registration_form').valid())
        {
            registerData.name = $('#name').val();
            registerData.email = $('#email').val();
            registerData.mobile = $('#mobile').val();
            registerData.company_name = $('#company_name').val();
            registerData.password = $('#password').val();
            registerData.represent = $('#represent').val();
            registerData.i_am_looking = $('#i_am_looking').val();
            registerData.city = $('#city').val();

            $.ajax({
                url: '{{url("/register/recruiter")}}',
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
            });
        }
    })
</script>
<script src="{{url('public/js/custom.js')}}"></script>
</body>

</html>