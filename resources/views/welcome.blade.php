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

    <!-----Registration both user------->
    <section class="bothUsers">
        <div class="clearfix">
            <a href="{{url('/artist/registration')}}" class="quickRegister artistRegister">REGISTER AS ARTIST</a>
            <a href="{{url('/recruiter/registration')}}" class="quickRegister requiterRegister">REGISTER AS RECRUITER</a>
        </div>
    </section>

    <!---------Platinum artist-------->
    <section class="platinumArtist">
        <div class="home-heading">
            <h3 class="text-center">
                ARTIST'S
                <span class="cng-clr">OF THE DAY</span>
            </h3>
        </div>
        <div class="artistGallery">
            <div id="artistSlider" class="owl-carousel artistSlideList">
                <div class="item">
                    <ul class="artGallery clearfix">
                        <li>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist2.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="artGallery clearfix">
                        <li>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist2.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="artGallery clearfix">
                        <li>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist2.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="artGallery clearfix">
                        <li>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist2.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="artGallery clearfix">
                        <li>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist2.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="artGallery clearfix">
                        <li>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist1.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="artPortfolio">
                                <div class="artImage relative">
                                    <a href="javascript:void(0);">
                                        <img src="{{url('public/image/artist2.jpg')}}" alt="Artist Image"/>
                                    </a>
                                    <p class="artDetailsCat">
                                        Stylist / Delhi NCR
                                    </p>
                                </div>
                                <div class="artInfo text-center">
                                    <h3 class="artName">
                                        <a href="javascript:void(0);">Richa</a>
                                    </h3>
                                </div>
                                <div class="social-left actorSocial">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!------------Testimonials-------->
    <section class="productGallery">
        <div class="home-heading">
            <h3 class="text-center">
                {{--Our--}}
                <span class="cng-clr">Artist's Testimonial</span>
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
                                    <h3>John Doe</h3>
                                    <p>Actor</p>
                                </div>
                            </div>
                            <div class="client-tell">
                                {{ $testimonial->description  }}
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<div class="item" >
                    <div class="client-block">
                        <div class="clearfix">
                            <div class="client-image pull-left">
                                <img src="{{url('public/image/testi_img.png')}}">
                            </div>
                            <div class="client-posts pull-left">
                                <h3>John Doe</h3>
                                <p>Actor</p>
                            </div>
                        </div>
                        <div class="client-tell">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.
                        </div>
                    </div>
                </div>--}}
            </div>
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


        })
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
    </script>

@endsection