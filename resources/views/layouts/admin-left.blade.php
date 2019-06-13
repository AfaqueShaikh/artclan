<?php
$site_logo = \App\Modules\Models\GlobalValue::where('slug','site-logo')->pluck('value')->first();
$site_title = \App\Modules\Models\GlobalValue::where('slug','site-title')->pluck('value')->first();
$segment_value = Request::segment(2);
$segment_parameter = '';
switch ($segment_value)
    {
    case 'user':
        $segment_parameter = 'users';
        break;

    case 'banner':
        $segment_parameter = 'banners';
        break;

    case 'ads':
        $segment_parameter = 'ads';
        break;

    case 'featured-patner':
        $segment_parameter = 'featured-patner';
        break;

    case 'testimonial':
        $segment_parameter = 'testimonial';
        break;

    case 'promotion':
        $segment_parameter = 'promotion';
        break;

    case 'blog':
        $segment_parameter = 'blog';
        break;
}
?>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a class="site_title"><img width="40px" src="{{url('/public/frontend/img/a.png')}}"> <span>{{$site_title}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                  <img src="{{asset('/storage/app/public/admin/site-logo/'.$site_logo)}}" alt="Site Logo" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                      <a href="{{url('/admin/dashboard')}}"><i class="fa fa-home"></i> Home </a>
                  </li>

                  @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'banner') current-page @endif">
                            <a href="{{url('/admin/banner/list')}}"><i class="fa fa-lock"></i> Manage Banner </a>
                        </li>
                    @endif


                     @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'ads') current-page @endif">
                            <a href="{{url('/admin/ads/list')}}"><i class="fa fa-lock"></i> Manage Ads </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'featured-patner') current-page @endif">
                            <a href="{{url('/admin/featured-patner/list')}}"><i class="fa fa-lock"></i> Manage Featured Partner </a>
                        </li>
                    @endif

                     @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'testimonial') current-page @endif">
                            <a href="{{url('/admin/testimonial/list')}}"><i class="fa fa-lock"></i> Manage Testimonial </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'promotion') current-page @endif">
                            <a href="{{url('/admin/promotion/list')}}"><i class="fa fa-lock"></i> Manage Promotion </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'blog') current-page @endif">
                            <a href="{{url('/admin/blog/list')}}"><i class="fa fa-lock"></i> Manage Blog </a>
                        </li>
                    @endif
                  
                  @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.module'))
                  <li class="@if($segment_value === 'module') current-page @endif">
                      <a href="{{url('/admin/module/list')}}"><i class="fa fa-lock"></i> Manage Module </a>
                  </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                        <li>
                            <a href="{{url('/admin/recruiter/list')}}"><i class="fa fa-envelope"></i> Manage Recruiter </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                        <li>
                            <a href="{{url('/admin/payment/list')}}"><i class="fa fa-envelope"></i> View Payment </a>
                        </li>
                    @endif
                    
                    <li class="@if($segment_parameter == 'users') active @endif"><a><i class="fa fa-users"></i> Manage Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="@if($segment_parameter == 'users')display: block;@endif">

                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/all')}}">Manage All Users</a></li>
                            @endif

                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/4')}}">Manage Writers</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/5')}}">Manage Painters</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/6')}}">Manage Singers</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/7')}}">Manage Dancers</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/8')}}">Manage Costume Designer</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/9')}}">Manage Makeup Artists</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/10')}}">Manage Photographers</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/11')}}">Manage Filmmakers</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/12')}}">Manage Actors</a></li>
                            @endif
                            
                            @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users'))
                                <li class="@if($segment_value === 'user') current-page @endif"><a href="{{url('/admin/user/list/13')}}">Manage Fashion Models</a></li>
                            @endif
                            
                            

                        </ul>
                    </li>
                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.role'))
                  <li class="@if($segment_value === 'role') current-page @endif">
                      <a href="{{url('/admin/role/list')}}"><i class="fa fa-lock"></i> Manage Roles </a>
                  </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.global.values'))
                    <li>
                        <a href="{{url('/admin/manage-global-value')}}"><i class="fa fa-globe"></i> Manage Global Values </a>
                    </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries'))
                        <li class="@if($segment_value === 'country') current-page @endif">
                            <a href="{{url('/admin/country/list')}}"><i class="fa fa-lock"></i> Manage Countries </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.emailtemplate'))
                        <li>
                            <a href="{{url('/admin/artist/list')}}"><i class="fa fa-envelope"></i> Manage Artist Category </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.emailtemplate'))
                        <li>
                            <a href="{{url('/admin/artist-recruiter/list')}}"><i class="fa fa-envelope"></i> Manage Recruiter Account Request </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.states'))
                        <li class="@if($segment_value === 'state') current-page @endif">
                            <a href="{{url('/admin/state/list')}}"><i class="fa fa-lock"></i> Manage States </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.districts'))
                        <li class="@if($segment_value === 'district') current-page @endif">
                            <a href="{{url('/admin/district/list')}}"><i class="fa fa-lock"></i> Manage Districts </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.talukas'))
                        <li class="@if($segment_value === 'taluka') current-page @endif">
                            <a href="{{url('/admin/taluka/list')}}"><i class="fa fa-lock"></i> Manage Talukas </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.emailtemplate'))
                        <li>
                            <a href="{{url('/admin/emailtemplate/list')}}"><i class="fa fa-envelope"></i> Manage Email Templates </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.cms'))
                    <li>
                        <a href="{{url('/admin/cms/list')}}"><i class="fa fa-file"></i> Manage Cms Pages </a>
                    </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.contactus'))
                        <li>
                            <a href="{{url('/admin/contactus/list')}}"><i class="fa fa-mobile"></i> Manage Contact Us </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.contactus'))
                        <li>
                            <a href="{{url('/admin/artist-contact-request/list')}}"><i class="fa fa-mobile"></i> Manage Artist Request </a>
                        </li>
                    @endif

                    @if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.faqs'))
                    <li>
                        <a href="{{url('/admin/faq/list')}}"><i class="fa fa-question"></i> Manage FAQs </a>
                    </li>
                    @endif



                </ul>
              </div>

            </div>
      
          </div>
        </div>