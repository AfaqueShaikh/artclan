
<header class="custom-header">
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
			<div class="logo"><a href="index.html"><img src="{{url('public/image/logo.jpeg')}}"> <!-- Logo <span>Here</span> --></a></div>
			<div class="navbar-right">
				<ul class="menus">
					<li>
						<a href="javascript:void(0);">Artists</a>
						<div class="categoryList">
							<ul>
								<li>
									<a href="javascript:void(0);" class="rollLink">Actor</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Modal</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Singer</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Photographer</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Musician</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Graphics Designer</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Writer</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Painter</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Dancer</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Anchor</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Voice-Over Artist</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Stylist</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Filmmaker</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Advertising Professional</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="rollLink">Stand-up Comedian</a>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="javascript:void(0);">Blogs</a></li>
					@if(!Auth::check())
					<li><a href="javascript:void(0);" data-toggle="modal" data-target="#login">Login</a></li>
					<li><a href="javascript:void(0);" class="color-red" data-toggle="modal" data-target="#signup">Sign up</a></li>
						@endif
					@if(Auth::check())
						<li><a href="{{ url('logout') }}" class="color-red" >Logout</a></li>
						@endif
				</ul> 				
				<div class="sideNavToggle">	
					<a href="javascript:void(0);" class="color-red">Menu</a>	
				</div>
			</div>
			<div class="toggle-menu">
				<img src="img/menu.png" class="menu-img">
				<img src="img/error.png" class="cross-img"> 
			</div> 
		</nav>   
		<div class="sidemenu">
			<a href="javascript:void()" class="closeSidenav">
				<img src="img/close.png" alt="">
			</a>
			<div class="sidenavLogo"><a href="index.html"><img src="img/logo.jpeg" alt="Weizmann Forex" width="127"></a></div>
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
	</header>  
<section class="dashboardWelcome">
		<div class="container">Welcome {{Auth::User()->name}}</div>
	</section>