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
<div class="modal" id="shareLink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">
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
				<label>Copy link to share</label>
				<div class="form-group input-group">
				  <span class="input-group-addon" id="basic-addon1">
				  	<i class="fa fa-link"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="copy link" value="https://www.youtube.com/watch?v=Ix2fG8qAlbc" aria-describedby="basic-addon1">
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
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="form-group">
					<label>Video title</label>
					<input type="text" class="form-control" placeholder="Add your title here">
				</div>
				<div class="form-group">
					<label>YouTube video link</label>
					<input type="tel" class="form-control" placeholder="Add your video YouTube link">
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
<!---------photo video-------->
<div class="modal" id="uploadphoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="form-group">
					<label>Add Photo</label>
					<p>(Maximum photo upload size is 10MB. The width and height of the image should be at least 350px)</p>
				</div>
				<div class="form-group text-center">					
					<button class="btn custom-btn" type="button">
						<span>Browse</span>
						<input type="file" class="fileInput">
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!---------document video-------->
<div class="modal" id="uploadDocument" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="form-group">
					<label>Add Document</label>
					<p>(Maximum photo upload size is 10MB. The width and height of the image should be at least 350px)</p>
				</div>
				<div class="form-group text-center">					
					<button class="btn custom-btn" type="button">
						<span>Browse</span>
						<input type="file" class="fileInput">
					</button>
					<p class="smallText">Document Uploaded</p>
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
<!-----------edit about info--------->
<!---------upload video-------->
<div class="modal" id="editAbout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="form-group">
					<label>About Us</label>
					<input type="text" class="form-control" placeholder="Add your title here">
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
<div class="modal" id="uploadEducation1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Cource Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Institute Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Start Date</label>
							<input type="date" class="form-control">
						</div>
						<div class="form-group">
							<label>End Date</label>
							<input type="date" class="form-control">
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
<div class="modal" id="uploadLang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
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
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Available in </label>
							<select name="" class="form-control">
								<option value="">Delhi</option>
								<option value="">Pune</option>
								<option value="">Mumbai</option>
							</select>
						</div>
						<div class="form-group">
							<label>Availability</label>
							<select name="" class="form-control">
								<option value="">Full Time</option>
								<option value="">Short Time</option>
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
<div class="modal" id="PhysicalStats" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Hair length </label>
							<select class="form-control" name="attributes[]" id="attributes[]" class="input-common-style">		 
									<option value="">Select</option>
									<option value="440_439">Long</option>
					
									<option value="441_439">Medium</option>
					
									<option value="442_439">Short</option>
					
									<option value="443_439">Pixie</option>
					
									<option value="444_439">Bald</option>					
				 
							</select>
						</div>
						<div class="form-group">
							<label>Hair length </label>
							<select class="form-control" name="attributes[]" id="attributes[]" class="input-common-style">		 
									<option value="">Select</option>
									<option value="440_439">Long</option>
					
									<option value="441_439">Medium</option>
					
									<option value="442_439">Short</option>
					
									<option value="443_439">Pixie</option>
					
									<option value="444_439">Bald</option>					
				 
							</select>
						</div>
						<div class="form-group">
							<label>Hair length </label>
							<select class="form-control" name="attributes[]" id="attributes[]" class="input-common-style">		 
									<option value="">Select</option>
									<option value="440_439">Long</option>
					
									<option value="441_439">Medium</option>
					
									<option value="442_439">Short</option>
					
									<option value="443_439">Pixie</option>
					
									<option value="444_439">Bald</option>					
				 
							</select>
						</div>
						<div class="form-group">
							<label>Hair length </label>
							<select class="form-control" name="attributes[]" id="attributes[]" class="input-common-style">		 
									<option value="">Select</option>
									<option value="440_439">Long</option>
					
									<option value="441_439">Medium</option>
					
									<option value="442_439">Short</option>
					
									<option value="443_439">Pixie</option>
					
									<option value="444_439">Bald</option>					
				 
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
<div class="modal" id="addExpe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="{{url('public/image/close.png')}}"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Project Name</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-group">
							<label>Role</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-group">
							<label>Start Date</label>
							<input type="date" class="form-control" name="">
						</div>
						<div class="form-group">
							<label>End Date</label>
							<input type="date" class="form-control" name="">
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

@yield('jcontent')

</html>