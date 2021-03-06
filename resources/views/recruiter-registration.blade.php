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
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            {{--<label class="name-label">Mobile Number</label>--}}
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No" aria-describedby="basic-addon1">
                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="submit" id="recruiter_verify_number" class="btn btn-danger"><i id="recruiter_verify_btn_spin" style="font-size:17px"></i>Verify Number</button>
                            <a href="javascript:void(0);" id="change_recruiter_mobile_number" style="display: none" name="change_recruiter_mobile_number" class="btn btn-danger">Change Mobile Number</a>
                        </div>
                    </div>
                </div>
            </form>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group text-center">
                            <a id="submit_btn"class="btn custom-btn">
                                <i id="register_recruiter_btn_spin" style="font-size:17px"></i><span>Register</span>
                            </a>
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
                    <form id="recruiter_otp_verify_form">
                        <input type="hidden" class="form-control" name="mobile_number" id="mobile_number" readonly>
                        <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                    </form>
                    <br>
                    <button id="btn_verify_otp" onclick="verifyRecruiterOtp();" class="btn btn-danger">Verify OTP</button>

                </div>
            </div>
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
    var javascript_site_path = '{{url('/')}}';
    $(function () {

        $('#submit_btn').attr('disabled',true);

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
                remote: {
                    url: javascript_site_path + '/chk-mobile-duplicate/recruiter',
                    method: 'get'
                }
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
                remote:'Mobile Number Already Exits'
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
        },
        submitHandler:function (form) {

            $('#mobile').attr('readonly',true);
            $('#recruiter_verify_number').attr('disabled',true);
            $('#recruiter_verify_btn_spin').addClass('fa fa-spinner fa-spin');
            var number = $('#mobile').val();
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
                        $('#recruiter_verify_btn_spin').removeClass('fa fa-spinner fa-spin');
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

    $('#recruiter_otp_verify_form').validate({
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

    function verifyRecruiterOtp()
    {
        if($('#recruiter_otp_verify_form').valid())
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
                        $('#mobile').attr('readonly',true);
                        $('#recruiter_verify_number').attr('disabled',true);
                        $('#recruiter_verify_number').text('Verified');
                        $('#otp_display').text('');
                        $('#mobile_number').val('');
                        $('#otp').val('');
                        $('#enter_otp_model').modal("hide");
                        $('#submit_btn').attr('disabled',false);
                        $('#change_recruiter_mobile_number').show();

                    }
                    else
                    {
                        $('#mobile').attr('readonly',false);
                        $('#recruiter_verify_number').attr('disabled',false);
                        $('#mobile').val('');
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

    $('#change_recruiter_mobile_number').click(function () {
        $('#mobile').attr('readonly',false);
        $('#recruiter_verify_number').attr('disabled',false);
        $('#mobile').val('');
        $('#otp_display').text('');
        $('#mobile_number').val('');
        $('#otp').val('');
        $('#submit_btn').attr('disabled',true);
        $('#recruiter_verify_number').text('Send OTP');
    })

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

            $('#submit_btn').attr('disabled',true);
            $('#register_recruiter_btn_spin').addClass('fa fa-spinner fa-spin');

            $.ajax({
                url: '{{url("/signup/recruiter")}}',
                method: "POST",
                dataType: 'json',
                data: registerData,
                success: function (result) {
                    console.log(result);
                    $('#submit_btn').attr('disabled',false);
                    $('#register_recruiter_btn_spin').removeClass('fa fa-spinner fa-spin');
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