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

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<!--Script Section-->
<script src="{{url('public/js/jquery.js')}}"></script>
<script src="{{url('public/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<script src="{{url('public/js/wow.js')}}"></script>
<script src="{{url('public/js/jquery-ui.min.js')}}"></script>
<script src="{{url('public/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('public/js/jquery.mixitup.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="{{url('public/js/validation.js')}}"></script>
<script src="{{url('public/js/jquery.validate.js')}}"></script>
<script type="text/javascript">
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
</script>
<script src="{{url('public/js/custom.js')}}"></script>
</body>
<!-- Contact Us Modal -->
<div class="modal" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm contactus-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Let us know your requirement</h4>
            </div>
            <div class="modal-body">
                {{--<ul class="list-unstyled contact-info">
                    <li>
                        <span>Email</span> <a href="mailto:info@123.coms">info@artclan.com</a>
                    </li>
                    <li><span>Timings</span> 9:30 am to 7:00 pm</li>
                </ul>--}}
                {{--<h4 class="contact-heading">Request call back</h4>--}}
                <form id="contactus_form" >
                    <div class="form-group">
                       <select class="form-control" id="category" name="category">
                           <option value="">-- Select Category --</option>
                           <option value="4">Writer</option>
                           <option value="5">Painter</option>
                           <option value="6">Singer</option>
                           <option value="7">Dancer</option>
                           <option value="8">Costume Designer</option>
                           <option value="9">Makeup Artist</option>
                           <option value="10">Photographer</option>
                           <option value="11">Film Maker</option>
                           <option value="12">Actor</option>
                           <option value="13">Fashion Model</option>
                       </select>
                    </div>

                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email ID">
                    </div>
                    <div class="form-group">
                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                        {{--<input type="text" class="form-control" placeholder="Full Name">--}}
                        <textarea id="description" name="description" class="form-control" placeholder="Description"></textarea>
                    </div>

                    <div class="text-right">
                        <button type="button" id="contact_us_from_btn" onclick="sendContactRequest();" class="btn btn-lg"><i id="btn_spin" style="font-size:17px"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md signUpPopUp" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                </button>
            </div>
            <div class="modal-body text-center">
                <a href="{{url('/artist/registration')}}" class="btn custom-btn" >
                    <span>REGISTER AS ARTIST</span>
                </a>
                <a href="{{url('/recruiter/registration')}}" class="btn custom-btn" type="button">
                    <span>REGISTER AS RECRUITER</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md signUpPopUp" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
                </button>
            </div>

            <div class="modal-body">
                <form id="login_form" action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label class="name-label">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                {{ csrf_field() }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="name-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="submit" class="btn custom-btn minBtn" value="Login">
                                        {{--<span>REGISTER AS ARTIST</span>--}}

                                </div>
<!--                                <div class="form-group text-center">
                                    <a href="javascript:void(0);" class="clrRed">Forgot password?</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
<!--                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="name-label">Primery mobile no</label>
                                    <input type="text" class="form-control" name="" placeholder="Primery mobile no">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn custom-btn minBtn" type="button">
                                        <span>Request OTP</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                </form>
            </div>

            <div class="modal-footer text-center">
                <a class="btn custom-btn" href="{{url('/artist/registration')}}">
                    <span>REGISTER AS ARTIST</span>
                </a>
                <a class="btn custom-btn" href="{{url('/recruiter/registration')}}">
                    <span>REGISTER AS RECRUITER</span>
                </a>
            </div>
        </div>
    </div>
</div>

@yield('jcontent')

</html>