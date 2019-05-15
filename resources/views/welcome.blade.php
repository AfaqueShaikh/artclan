@extends('layouts.app')

@section('content')

    <!-------------Banner------------>
    <section class="banner">
        <div id="banner-slider" class="owl-carousel">
            @foreach($banner_images as $banner_image)
                <div class="item" style="background-image: url('{{url('/storage/app/public/banner_images/'.$banner_image->banner_image)}}')">
                    <div class="banner-caption">
                        <h2>20 years of quality! service in <span class="cng-clr">KITGREEN</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="btn custom-btn" type="submit"><span>GET A QUOTE NOW</span></button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!---------Platinum artist-------->
    
<section class="platinumArtist">
			<div class="home-heading">
				<h3 class="text-center">
				PLATINUM
				<span class="cng-clr">ARTISTS</span>
				</h3>
			</div>
			<div class="artistGallery clearfix">
				<div class="artCatLeft">
					<ul class="artGallery limitedCategories clearfix">
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										
									</a>
									<p class="artDetailsCat">
										Fashion Models
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a class="btn custom-btn" href="{{url('/artist/registration/13')}}" type="button"><span>REGISTER</span></a>
									<a href="{{url('/artist/listing/'.base64_encode(13))}}" class="btn custom-btn" type="button"><span>Hire</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										
									</a>
									<p class="artDetailsCat">
										Actors
									</p>
								</div>
								<div class="hrCatBtn text-center">
                                                                    <a class="btn custom-btn" href="{{url('/artist/registration/12')}}" type="button"><span>REGISTER</span></a>
									<a href="{{url('/artist/listing/'.base64_encode(12))}}" class="btn custom-btn" type="button"><span>Hire</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										
									</a>
									<p class="artDetailsCat">
										 Photographers
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a class="btn custom-btn" href="{{url('/artist/registration/10')}}" type="button"><span>REGISTER</span></a>
									<a href="{{url('/artist/listing/'.base64_encode(10))}}" class="btn custom-btn" type="button"><span>Hire</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										
									</a>
									<p class="artDetailsCat">
										Makeup Artist
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a class="btn custom-btn" href="{{url('/artist/registration/9')}}" type="button"><span>REGISTER</span></a>
									<a href="{{url('/artist/listing/'.base64_encode(9))}}" class="btn custom-btn" type="button"><span>Hire</span></a>
								</div>
								
							</div>
						</li>
						
					</ul>
				</div>
				<div class="artTestRight">
					<div class="home-heading">
						<h3 class="text-center">
							<span class="cng-clr">Testimonial</span>
						</h3>
					</div>
					<div class="client-right">
						<div id="clientSay" class="client-says owl-carousel">
							@foreach($testimonials as $testimonial)
                    <div class="item" >
                        <div class="client-block">
                            <div class="clearfix">
                                <div class="client-image pull-left">
                                    <img src="{{url('storage/app/public/testimonial/'.$testimonial->image)}}">
                                </div>
                                <div class="client-posts pull-left">
                                    <h3>{{$testimonial->name}}</h3>
                                    
                                </div>
                            </div>
                            <div class="client-tell">
                                {{ $testimonial->description  }}
                            </div>
                        </div>
                    </div>
                @endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="artistGallery pdTop clearfix">
				<div class="artCatLeft">
					<ul class="artGallery limitedCategories clearfix">
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										
									</a>
									<p class="artDetailsCat">
										Costume Designer
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<button class="btn custom-btn" type="button"><span>REGISTER</span></button>
									<button class="btn custom-btn" type="button"><span>Hire</span></button>
								</div>
								
							</div>
						</li>
					</ul>
				</div>
				<div class="artTestRight bgImageSec" style="background-image:url('img/featureBg.jpg');">
					<p class="addText">Advertising Block</p>					
				</div>
			</div>
		</section>
    <!------------Testimonials-------->
    

    <section class="platinumArtist">
			<div class="home-heading">
				<h3 class="text-center">
				Artist of  
				<span class="cng-clr">the Day</span>
				</h3>
			</div>
			<div class="artistGallery categoriFull">
				<ul class="artGallery limitedCategories clearfix">
					<li>
						<div class="artPortfolio">
							<div class="artImage relative text-center">
								<a href="javascript:void(0);">
									<img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
								</a>
								<p class="aartDetailsCat">
									Stylist / Delhi
								</p>
							</div>
							<div class="hrCatBtn text-center">
								<p>Model</p>
								<button class="btn custom-btn" type="submit"><span>Hire</span></button>
								
							</div>
							
						</div>
					</li>
					
				</ul>
			</div>
		</section>
    <!---------featured partner------------->
    <section class="featuredPartner" style="background-image: url('{{url('public/image/featureBg.jpg')}}');">
        <div class="home-heading">
            <h3 class="text-center">
                Featured
                <span class="cng-clr">Partner's</span>
            </h3>
        </div>
        <div id="partnerSlider" class="owl-carousel">
            @foreach($featured_partners as $featured_partner)
                <div class="item">
                    <div class="partnerImage">
                        <img src="{{url('storage/app/public/featured_partners/'.$featured_partner->image)}}"/>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!---------quick help------------------->
    <div class="quickHelp">
        <a href="#." data-toggle="modal" data-target="#chatModal">
            <i class="fa fa-headphones"></i>
        </a>
    </div>

@endsection

@section('jcontent')
    <script>
        $(function () {

            $('#Login_form').validate({

                errorClass:'text-danger',
                rules:{
                    email:{
                        required:true,
                    },
                    password:{
                        required:true,
                    }

                } ,
                messages:{
                    email:{
                        required:'Please Enter Your Email',
                    },
                    password:{
                        required:'Please Enter Your Password',
                    }
                }

            });
        })
    </script>

@endsection