@extends('layouts.app')

@section('content')

    <!-------------Banner------------>
    <section class="banner">
        <div id="banner-slider" class="owl-carousel">
            @foreach($banner_images as $banner_image)
                <div class="item" style="background-image: url('{{url('/storage/app/public/banner_images/'.$banner_image->banner_image)}}')">
                    <div class="banner-caption">

						@if($banner_image->show_button == true)
							<a class="btn custom-btn" target="_blank" href="{{$banner_image->button_url}}"><span>{{$banner_image->button_text}}</span></a>
						@endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

	@if(Session::has('error'))
		@if ($message = Session::get('error'))
			<div style="display: none" id="accout_not_verified_error" class="alert alert-danger alert-block">
				<strong>{{ $message }}</strong>
			</div>
		@endif
	@endif

	@if(Session::has('errors'))
		@if ($message = Session::get('errors'))
			<div style="display: none" id="invalid_crediantial_error" class="alert alert-danger alert-block">
				<strong>{{ $message }}</strong>
			</div>
		@endif
	@endif


    <!---------Platinum artist-------->

	
    
<section class="platinumArtist">
<!--			<div class="home-heading">
				<h3 class="text-center">
				PLATINUM
				<span class="cng-clr">ARTISTS</span>
				</h3>
			</div>-->
			<div class="artistGallery clearfix">
				<div class="artCatLeft">
					<ul class="artGallery limitedCategories clearfix">
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
										
									</a>
									<p class="artDetailsCat">
										Fashion Models
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(13))}}" class="btn custom-btn" type="button"><span>Hire Fashion Models</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/13')}}" type="button"><span>REGISTER</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
										
									</a>
									<p class="artDetailsCat">
										Actors
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(12))}}" class="btn custom-btn" type="button"><span>Hire Actors</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/12')}}" type="button"><span>REGISTER</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">

										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>

									</a>
									<p class="artDetailsCat">
										 Photographers
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(10))}}" class="btn custom-btn" type="button"><span>Hire Photographers</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/10')}}" type="button"><span>REGISTER</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
									</a>
									<p class="artDetailsCat">
										Makeup Artist
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(9))}}" class="btn custom-btn" type="button"><span>Hire Makeup Artist</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/9')}}" type="button"><span>REGISTER</span></a>
								</div>
								
							</div>
						</li>
						
					</ul>
				</div>
				<div class="artTestRight">
					{{--<div class="home-heading">
						<h3 class="text-center">
							<span class="cng-clr">Testimonial</span>
						</h3>
					</div>--}}
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
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
										
									</a>
									<p class="artDetailsCat">
										Costume Designer
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(8))}}" class="btn custom-btn" type="button"><span>Hire Costume Designer</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/8')}}" type="button"><span>REGISTER</span></a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
									</a>
									<p class="artDetailsCat">
										Writer
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(4))}}" class="btn custom-btn" type="button"><span>Hire Writer</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/4')}}" type="button"><span>REGISTER</span></a>
								</div>

							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
									</a>
									<p class="artDetailsCat">
										Painter
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(5))}}" class="btn custom-btn" type="button"><span>Hire Painter</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/5')}}" type="button"><span>REGISTER</span></a>
								</div>

							</div>
						</li>
						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">
									<a href="javascript:void(0);">
										<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
									</a>
									<p class="artDetailsCat">
										Singer
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/listing/'.base64_encode(6))}}" class="btn custom-btn" type="button"><span>Hire Singer</span></a>
									<a class="btn custom-btn" href="{{url('/artist/registration/6')}}" type="button"><span>REGISTER</span></a>
								</div>

							</div>
						</li>

					</ul>


				</div>
				<div class="artTestRight bgImageSec">
					<div id="AdvertisingBlock" class="owl-carousel">
						@foreach($advertisements as $advertisement)
							<div class="item">
								<a target="_blank" href="{{$advertisement->ads_url}}"><img height="250px" width="250px" src="{{url('storage/app/public/ads_images/'.$advertisement->image)}}"></a>
							</div>
								@endforeach
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
								<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
							</a>
							<p class="artDetailsCat">
								Dancer
							</p>
						</div>
						<div class="hrCatBtn text-center">
							<a href="{{url('/artist/listing/'.base64_encode(7))}}" class="btn custom-btn" type="button"><span>Hire Dancer</span></a>
							<a class="btn custom-btn" href="{{url('/artist/registration/7')}}" type="button"><span>REGISTER</span></a>
						</div>

					</div>
				</li>
				<li>
					<div class="artPortfolio">
						<div class="artImage relative text-center">
							<a href="javascript:void(0);">
								<img src="{{url('public/image/testi_img.png')}}" alt="Artist Image"/>
							</a>
							<p class="artDetailsCat">
								Film Maker
							</p>
						</div>
						<div class="hrCatBtn text-center">
							<a href="{{url('/artist/listing/'.base64_encode(11))}}" class="btn custom-btn" type="button"><span>Hire Film Maker</span></a>
							<a class="btn custom-btn" href="{{url('/artist/registration/11')}}" type="button"><span>REGISTER</span></a>
						</div>

					</div>
				</li>


			</ul>


		</div>


	</div>
		</section>
    <!------------Testimonials-------->
    

    <section class="platinumArtist">
			<div class="home-heading">
				<h3 class="text-center">
				Artist of  
				<span class="cng-clr">the Week</span>
				</h3>
			</div>
			<div class="artistGallery categoriFull">
				<ul class="artGallery limitedCategories clearfix">

				@foreach($artists_of_the_day as $artist_of_the_day)

						<li>
							<div class="artPortfolio">
								<div class="artImage relative text-center">

									@if(isset($artist_of_the_day->user->profile_img))
										<a href="javascript:void(0);">
											<img src="{{url('storage/app/public/user_profile/'.$artist_of_the_day->user->profile_img)}}" alt="Artist Image"/>
										</a>
									@else
										<a href="javascript:void(0);">
											<img src="{{url('/public/image/testi_img.png')}}" alt="Artist Image"/>
										</a>
									@endif
									<p class="artDetailsCat">

										{{$user_types[$artist_of_the_day->user->user_type]}}
									</p>
								</div>
								<div class="hrCatBtn text-center">
									<a href="{{url('/artist/detail/'.base64_encode($artist_of_the_day->user_id))}}" class="btn custom-btn" type="button"><span>Hire {{$user_types[$artist_of_the_day->user->user_type]}} </span></a>
								</div>

							</div>
						</li>
					@endforeach

					
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
			if($('#accout_not_verified_error').length)
            {
                $('#login_btn').click();
            }
            if($('#invalid_crediantial_error').length)
			{
                $('#login_btn').click();
			}
		});
        $('#login_form').validate({

            errorClass:'text-danger',
            rules:{
                mobile:{
                    required:true,
                },
                password:{
                    required:true,
                }

            } ,
            messages:{
                mobile:{
                    required:'Please Enter Your Registered Mobile Number',
                },
                password:{
                    required:'Please Enter Your Password',
                }
            }

        });
        $('#contactus_form').validate({

            errorClass:'text-danger',
            rules:{
                category:{
                    required:true,
                },
				email:{
                    required:true,
				},
                phone_number:{
                    required:true,
                },
                description:{
                    required:true,
				}

            } ,
            messages:{
                category:{
                    required:'Please Select Category',
                },
                email:{
                    required:'Please Enter Email Id',
                },
                phone_number:{
                    required:'Please Enter Your Mobile Number',
                },
                description:{
                    required:'Please Enter Description',
                }
            }

        });

        function sendContactRequest()
		{
		    if($('#contactus_form').valid())
			{
			    $('#contact_us_from_btn').attr('disabled',true);
			    $('#btn_spin').addClass('fa fa-spinner fa-spin');
				$.ajax({
                    url: '{{url("/create/contact-request")}}',
                    method: "POST",
                    dataType: 'json',
                    data: {
                        category: $('#category').val(),
                        email: $('#email').val(),
						phone_number : $('#phone_number').val(),
                        description: $('#description').val(),
					},
                    success: function (result) {
                        console.log(result);
                        $('#contact_us_from_btn').attr('disabled',false);
                        $('#btn_spin').removeClass('fa fa-spinner fa-spin');
                        $('#contactus_form').find('input[type=text], textarea, select').val('');
						$('#chatModal').modal('hide');
                        Swal.fire({
                            type: 'success',
                            title: result.message,
                            showConfirmButton: false,
                            timer: 1500
						});
                    }
                })
			}
		}

    </script>

@endsection