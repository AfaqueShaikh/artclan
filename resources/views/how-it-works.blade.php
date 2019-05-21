@extends('layouts.app')

@section('content')

<section class="cmsBanner" style="background-image: url('{{url('public/image/1.jpg')}}');">
    <div class="cmsCaption">
        <h2>How It Works</h2>
    </div>
    <div class="cmsBreadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">How It Works</li>
        </ol>
    </div>
</section>
<!-------------About Us-------------->
<section class="cms-content">
    <div class="container">
        <div class="home-heading text-center">
            <h3>
                <span class="cng-clr inline-span">{{$how_it_works_data->name}}</span>
            </h3>
        </div>
        <div class="content-holder">
            <div class="about-image">
                <img src="{{url('public/image/about-us.jpg')}}" alt="Company Image"/>
            </div>
            <div class="about-info">
                <div class="content-block">
                    <p>{!! $how_it_works_data->value  !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------------Why choose us---------->
{{--<section class="what-we-are">
    <div class="container">
        <div class="home-heading">
            <h3>
                Our
                <span class="cng-clr inline-span">History</span>
                <p class="home-sub-heading">From Begining</p>
            </h3>
        </div>
        <div class="cust-tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Our Company</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Company Roots</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Notary Services</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="media">
                        <div class="media-left">
                            <div class="cms-img">
                                <img src="{{url('public/image/about-us.jpg')}}" alt="image"/>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Our <span class="cng-clr">Company</span></h3>
                            <div class="h-scroll content-block mCustomScrollbar">
                                <p>As early as possible as soon as you have plans for the property. We can advise on and demonstrate lots of options to you so you can define budgets for our works and the associated works by the electrician etc upfront. We can also advise on cable routes and access, AV and lighting control equipment locations and ventilation requirements so you have these facilities catered for from day one rather than having to make changes or add extras further down the as soon as you have plans for the property. We can advise on and demonstrate lots of options to you so you can define budgets for our works and the associated works by the electrician etc upfront.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="media">
                        <div class="media-left">
                            <div class="cms-img">
                                <img src="{{url('public/image/about-us.jpg')}}" alt="image"/>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Company <span class="cng-clr">Roots</span></h3>
                            <div class="h-scroll content-block mCustomScrollbar">
                                <p>As early as possible as soon as you have plans for the property. We can advise on and demonstrate lots of options to you so you can define budgets for our works and the associated works by the electrician etc upfront. We can also advise on cable routes and access, AV and lighting control equipment locations and ventilation requirements so you have these facilities catered for from day one rather than having to make changes or add extras further down the as soon as you have plans for the property. We can advise on and demonstrate lots of options to you so you can define budgets for our works and the associated works by the electrician etc upfront.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="media">
                        <div class="media-left">
                            <div class="cms-img">
                                <img src="{{url('public/image/about-us.jpg')}}" alt="image"/>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Notary <span class="cng-clr">Services</span></h3>
                            <div class="h-scroll content-block mCustomScrollbar">
                                <p>As early as possible as soon as you have plans for the property. We can advise on and demonstrate lots of options to you so you can define budgets for our works and the associated works by the electrician etc upfront. We can also advise on cable routes and access, AV and lighting control equipment locations and ventilation requirements so you have these facilities catered for from day one rather than having to make changes or add extras further down the as soon as you have plans for the property. We can advise on and demonstrate lots of options to you so you can define budgets for our works and the associated works by the electrician etc upfront.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}
@endsection

@section('jcontent')
    @endsection