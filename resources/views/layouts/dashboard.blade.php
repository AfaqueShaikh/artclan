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
<body class="dashboardPage">

@include('layouts.dashboard-header')

@yield('content')

@include('layouts.footer')

<!--Script Section-->
<script src="{{url('public/js/jquery.js')}}"></script>
<script src="{{url('public/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<script src="{{url('public/js/wow.js')}}"></script>
<script src="{{url('public/js/jquery-ui.min.js')}}"></script>
<script src="{{url('public/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('public/js/validation.js')}}"></script>
<script src="{{url('public/js/jquery.validate.js')}}"></script>

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
				<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
			</div>
			<div class="modal-body">
				<ul class="list-unstyled contact-info">
					<li>
						<span>Email</span> <a href="mailto:info@123.coms">info@artclan.com</a>
					</li>
					<li><span>Timings</span> 9:30 am to 7:00 pm</li>
				</ul>
				<h4 class="contact-heading">Request call back</h4>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Full Name">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" placeholder="Phone">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email ID">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@yield('modal_section')


@yield('jcontent')

</html>