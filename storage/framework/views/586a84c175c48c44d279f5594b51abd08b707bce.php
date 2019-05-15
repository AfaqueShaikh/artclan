<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Clans</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">  -->
    <link rel="icon" type="image/png" href="<?php echo e(url('public/image/favicon.png')); ?>"/>
    <link href="<?php echo e(url('public/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/owl.carousel.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/owl.theme.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/jquery-ui.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/animated.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/main.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('public/css/responsive.css')); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="login-here" style="background-image: url('<?php echo e(url('public/image/login.jpg')); ?>');">
    <div class="login-screen mCustomScrollbar">
        <div class="display-middle">
            <div class="row">
                <div class="col-sm-12">
                    <div class="stepFirst" id="stepFirst" style="display: none;">
                        <form id="first_step_form" action="" method="" accept-charset="utf-8">
                            <h3>Register <span>as artist</span></h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                                        <label class="name-label">
                                            <input type="radio" id="gender" name="gender" value="0" checked="checked"> Mr
                                        </label>
                                        <label class="name-label" style="margin-left: 30px;">
                                            <input type="radio" id="gender" name="gender" value="1"> Ms
                                        </label>
                                        <?php if($errors->has('gender')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('gender')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                                        <?php if($errors->has('mobile')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('mobile')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group<?php echo e($errors->has('category') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Select Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option> -- Select Category --</option>
                                            <option value="13" <?php if($type == '13'): ?> selected <?php endif; ?>>Fashion Model</option>
                                            <option value="12" <?php if($type == '12'): ?> selected <?php endif; ?>>Actor</option>
                                            <option value="10" <?php if($type == '10'): ?> selected <?php endif; ?>>DOP Photographer</option>
                                            <option value="9" <?php if($type == '9'): ?> selected <?php endif; ?>>Makeup Artist</option>


                                        </select>

                                        <?php if($errors->has('mobile')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('mobile')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Password</label>
                                        <div class="relative">
                                            <input type="password" class="form-control password" name="password" id="password" placeholder="Password">
                                            <?php if($errors->has('password')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group<?php echo e($errors->has('age') ? ' has-error' : ''); ?>">
                                        <label class="name-label">
                                            <input type="radio" id="age" name="age" value="18+" checked="checked"> I am 18 or above and I agree to the <a href="javascript:void(0);" class="cng-clr"> Terms & Conditions and Privacy Policy.</a>
                                        </label> <br/>
                                        <label class="name-label">
                                            <input type="radio" id="age" name="age" value="18-"> I am below 18
                                        </label>
                                        <?php if($errors->has('age')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('age')); ?></strong>
                                            </span>
                                        <?php endif; ?>
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
                                
                                <li>
                                    <i class="fa fa-check"></i>
                                    <p>Finish</p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group<?php echo e($errors->has('date_of_birth') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Date of birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date of birth">
                                        <input type="hidden" name="form_type" id="form_type" value="artist_form">
                                        <?php if($errors->has('date_of_birth')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('date_of_birth')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group<?php echo e($errors->has('language') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Languages you speak</label>
                                        <select type="text" name="language" id="language" class="form-control" name="" placeholder="Select Language">
                                            <option value="">Select Language</option>
                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Marathi">Marathi</option>
                                        </select>
                                        <?php if($errors->has('language')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('language')); ?></strong>
                                            </span>
                                        <?php endif; ?>
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
                    
                    <div class="stepFive" id="stepFive" >
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
                                    <div class="form-group<?php echo e($errors->has('mobile_no_verification') ? ' has-error' : ''); ?>">
                                        <label class="name-label">Enter your mobile no</label>
                                        <input type="tel" class="form-control" name="mobile_no_verification" id="mobile_no_verification" placeholder="Enter Mobile No">

                                        <?php if($errors->has('mobile_no_verification')): ?>
                                            <span class="help-block">
                                                    <strong><?php echo e($errors->first('mobile_no_verification')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group text-right">
                                        <a href="javascript:void(0);" onclick="verifyNumber();" class="btn btn-danger">Verify Number</a>
                                    </div>
                                </div>
                                
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

    <div class="modal" id="enter_otp_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md signUpPopUp" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form id="otp_verify_form" action="<?php echo e(url('/verify/otp')); ?>" method="post">
                    <input type="hidden" class="form-control" name="mobile_number" id="mobile_number" readonly>
                    <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                    <br>
                    <input type="submit" name="submit_otp" value="Verify OTP" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<script src="<?php echo e(url('public/js/jquery.js')); ?>"></script>
<script src="<?php echo e(url('public/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/wow.js')); ?>"></script>
<script src="<?php echo e(url('public/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/jquery.mixitup.min.js')); ?>"></script>
<script src="<?php echo e(url('public/js/validation.js')); ?>"></script>
<script src="<?php echo e(url('public/js/jquery.validate.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>

    function verifyNumber()
    {
        var number = $('#mobile_no_verification').val();
        if(number == "")
        {
            Swal.fire({
                type: 'warning',
                title: "Please enter number to verify",
                showConfirmButton: false,
                timer: 1000
            });

        }
        else
        {
            $.ajax({
                url: '<?php echo e(url("/verify/number")); ?>',
                method: "POST",
                dataType: 'json',
                data: {
                    number: number,
                },
                success: function (result) {
                    console.log(result.number);
                    $('#mobile_number').val(result.number);
                    $('#enter_otp_model').modal("show");
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
    }

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
        },
        submitHandler:function(form){
            form.submit();
        }
    })

</script>
<script src="<?php echo e(url('public/js/custom.js')); ?>"></script>
</body>
<!--Script Section-->