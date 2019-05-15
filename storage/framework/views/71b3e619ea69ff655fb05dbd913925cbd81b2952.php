<?php $__env->startSection('content'); ?>
    <body class="dashboardPage">
    <!-------------Header------------>
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
            <div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('public/image/logo.jpeg')); ?>"> <!-- Logo <span>Here</span> --></a></div>
            <div class="navbar-right">
                <ul class="menus">
                    <li>
                        <a href="javascript:void(0);">Artists</a>
                        <div class="categoryList">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Writer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Painter</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Singer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Dancer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Costume Designer</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/artist/listing/'.base64_encode(10))); ?>" class="rollLink">Photographer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="rollLink">Film Maker</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/artist/listing/'.base64_encode(12))); ?>"class="rollLink">Actor</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/artist/listing/'.base64_encode(13))); ?>" class="rollLink">Fashion Model</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/artist/listing/'.base64_encode(9))); ?>" class="rollLink">Makeup Artist</a>
                                </li>
                                
                                
                                
                                
                                
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0);">Blogs</a></li>
                    <?php if(!Auth::check()): ?>
                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login">Login</a></li>
                        <li><a href="javascript:void(0);" class="color-red" data-toggle="modal" data-target="#signup">Sign up</a></li>
                    <?php endif; ?>
                </ul>
                <div class="sideNavToggle">
                    <a href="javascript:void(0);" class="color-red">Menu</a>
                </div>
            </div>
            <div class="toggle-menu">
                <img src="<?php echo e(url('public/image/menu.png')); ?>" class="menu-img">
                <img src="<?php echo e(url('public/image/error.png')); ?>" class="cross-img">
            </div>
        </nav>
        <div class="sidemenu">
            <a href="javascript:void()" class="closeSidenav">
                <img src="<?php echo e(url('public/image/close.png')); ?>" alt="">
            </a>
            <div class="sidenavLogo"><a href="index.html"><img src="<?php echo e(url('public/image/logo.jpeg')); ?>" alt="Weizmann Forex" width="127"></a></div>
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
        <div class="container">Actors List</div>
    </section>
    <section class="dashboardSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="filtersBlock">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="filterSearch relative">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button type="search" class="btn searchFilter">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <select name="" class="form-control">
                                    <option value="">All Cities</option>
                                    <option value="">Delhi NCR</option>
                                    <option value="">Mumbai</option>
                                    <option value="">Hyderabad</option>
                                    <option value="">Patna</option>
                                    <option value="">Kochi</option>
                                    <option value="">Chennai</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="" class="form-control">
                                    <option value="">Actor</option>
                                    <option value="">Model</option>
                                    <option value="">Singer</option>
                                    <option value="">Musician</option>
                                    <option value="">Graphic Designer</option>
                                    <option value="">Writer</option>
                                    <option value="">Painter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="dashboardartistGallery">
                        <ul class="artGallery clearfix">
                            <?php $__currentLoopData = $user_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li>
                                    <div class="artPortfolio">
                                        <div class="artImage relative">
                                            <a href="<?php echo e(url('/artist/detail/'.base64_encode($user_detail->id))); ?>">
                                                <?php if(isset($user_detail->profile_img)): ?>
                                                <img  src="<?php echo e(url('storage/app/public/user_profile/'.$user_detail->profile_img)); ?>" alt="Artist Image"/>
                                                    <?php else: ?>
                                                    <img  src="<?php echo e(url('public/image/noimagefound.png')); ?>" width="128px" height="128px" alt="Artist Image"/>
                                                <?php endif; ?>
                                            </a>
                                            <p class="artDetailsCat">
                                                <?php echo e($user_types[$user_detail->user_type]); ?> / <?php echo e($user_detail->city); ?>

                                            </p>
                                        </div>
                                        <div class="artInfo text-center">
                                            <h3 class="artName">
                                                <a href="javascript:void(0);"><?php echo e($user_detail->name); ?></a>
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

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('jcontent'); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>