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

    case 'blog':
        $segment_parameter = 'blog';
        break;
}
?>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a class="site_title"><img width="40px" src="<?php echo e(url('/public/frontend/img/a.png')); ?>"> <span><?php echo e($site_title); ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                  <img src="<?php echo e(asset('/storage/app/public/admin/site-logo/'.$site_logo)); ?>" alt="Site Logo" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo e(Auth::user()->name); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                      <a href="<?php echo e(url('/admin/dashboard')); ?>"><i class="fa fa-home"></i> Home </a>
                  </li>

                  <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries')): ?>
                        <li class="<?php if($segment_value === 'banner'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/banner/list')); ?>"><i class="fa fa-lock"></i> Manage Banner </a>
                        </li>
                    <?php endif; ?>


                     <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries')): ?>
                        <li class="<?php if($segment_value === 'ads'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/ads/list')); ?>"><i class="fa fa-lock"></i> Manage Ads </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries')): ?>
                        <li class="<?php if($segment_value === 'featured-patner'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/featured-patner/list')); ?>"><i class="fa fa-lock"></i> Manage Featured Partner </a>
                        </li>
                    <?php endif; ?>

                     <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries')): ?>
                        <li class="<?php if($segment_value === 'testimonial'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/testimonial/list')); ?>"><i class="fa fa-lock"></i> Manage Testimonial </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries')): ?>
                        <li class="<?php if($segment_value === 'blog'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/blog/list')); ?>"><i class="fa fa-lock"></i> Manage Blog </a>
                        </li>
                    <?php endif; ?>
                  
                  <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.module')): ?>
                  <li class="<?php if($segment_value === 'module'): ?> current-page <?php endif; ?>">
                      <a href="<?php echo e(url('/admin/module/list')); ?>"><i class="fa fa-lock"></i> Manage Module </a>
                  </li>
                    <?php endif; ?>
                    
                    <li class="<?php if($segment_parameter == 'users'): ?> active <?php endif; ?>"><a><i class="fa fa-users"></i> Manage Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="<?php if($segment_parameter == 'users'): ?>display: block;<?php endif; ?>">

                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/4')); ?>">Manage Writers</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/5')); ?>">Manage Painters</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/6')); ?>">Manage Singers</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/7')); ?>">Manage Dancers</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/8')); ?>">Manage Costume Designer</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/9')); ?>">Manage Makeup Artists</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/10')); ?>">Manage Photographers</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/11')); ?>">Manage Filmmakers</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/12')); ?>">Manage Actors</a></li>
                            <?php endif; ?>
                            
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.users')): ?>
                                <li class="<?php if($segment_value === 'user'): ?> current-page <?php endif; ?>"><a href="<?php echo e(url('/admin/user/list/13')); ?>">Manage Fashion Models</a></li>
                            <?php endif; ?>
                            
                            

                        </ul>
                    </li>
                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.role')): ?>
                  <li class="<?php if($segment_value === 'role'): ?> current-page <?php endif; ?>">
                      <a href="<?php echo e(url('/admin/role/list')); ?>"><i class="fa fa-lock"></i> Manage Roles </a>
                  </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.global.values')): ?>
                    <li>
                        <a href="<?php echo e(url('/admin/manage-global-value')); ?>"><i class="fa fa-globe"></i> Manage Global Values </a>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.countries')): ?>
                        <li class="<?php if($segment_value === 'country'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/country/list')); ?>"><i class="fa fa-lock"></i> Manage Countries </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.emailtemplate')): ?>
                        <li>
                            <a href="<?php echo e(url('/admin/artist/list')); ?>"><i class="fa fa-envelope"></i> Manage Artist Category </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.states')): ?>
                        <li class="<?php if($segment_value === 'state'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/state/list')); ?>"><i class="fa fa-lock"></i> Manage States </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.districts')): ?>
                        <li class="<?php if($segment_value === 'district'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/district/list')); ?>"><i class="fa fa-lock"></i> Manage Districts </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.talukas')): ?>
<!--                        <li class="<?php if($segment_value === 'taluka'): ?> current-page <?php endif; ?>">
                            <a href="<?php echo e(url('/admin/taluka/list')); ?>"><i class="fa fa-lock"></i> Manage Talukas </a>
                        </li>-->
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.emailtemplate')): ?>
                        <li>
                            <a href="<?php echo e(url('/admin/emailtemplate/list')); ?>"><i class="fa fa-envelope"></i> Manage Email Templates </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.cms')): ?>
                    <li>
                        <a href="<?php echo e(url('/admin/cms/list')); ?>"><i class="fa fa-file"></i> Manage Cms Pages </a>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.contactus')): ?>
                        <li>
                            <a href="<?php echo e(url('/admin/contactus/list')); ?>"><i class="fa fa-mobile"></i> Manage Contact Us </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('view.faqs')): ?>
                    <li>
                        <a href="<?php echo e(url('/admin/faq/list')); ?>"><i class="fa fa-question"></i> Manage FAQs </a>
                    </li>
                    <?php endif; ?>



                </ul>
              </div>

            </div>
      
          </div>
        </div>