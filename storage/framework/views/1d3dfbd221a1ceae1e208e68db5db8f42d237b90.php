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
        <div class="container">Welcome <?php echo e($user_details->name); ?></div>
    </section>
    <section class="dashboardSection">
        <div class="container">
            <div class="dashPrifilerInfo clearfix">
                <div class="profilerImage relative">
                    <?php if(isset($user_details->profile_img)): ?>
                        <img  src="<?php echo e(url('storage/app/public/user_profile/'.$user_details->profile_img)); ?>" height="570" alt="Artist Image"/>
                    <?php else: ?>
                        <img  src="<?php echo e(url('public/image/noimagefound.png')); ?>" height="570"  alt="Artist Image"/>
                    <?php endif; ?>
                    
                    
                </div>
                <div class="profilerInformation">
                    <div class="profilerName">
                        <h3><?php echo e($user_details->name); ?></h3>
                        <p><?php echo e($user_types[$user_details->user_type]); ?> / <?php echo e($user_details->city); ?></p>
                    </div>
                    <ul class="profilerViews">
                        <li>
                            Profile Viewed
                            <span class="viewCount"><i class="fa fa-eye"></i></span>
                        </li>
                        <li data-toggle="modal" data-target="#shareLink">
                            Share Portfolio
                            <span class="viewCount"><i class="fa fa-share-alt"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="personLifeSchedule">
        <div class="container">
            <div class="personLifeHistory">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#gallery" aria-controls="home" role="tab" data-toggle="tab">Gallery</a></li>
                    <li role="presentation"><a href="#bio" aria-controls="profile" role="tab" data-toggle="tab">Bio</a></li>
                    <li role="presentation"><a href="#Exp" aria-controls="messages" role="tab" data-toggle="tab">Experience</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="gallery">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Video
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">
                                    
                                    <?php if(isset($user_details->userVideos) && count($user_details->userVideos) > 0): ?>
                                        <?php $__currentLoopData = $user_details->userVideos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="relative">
                                                <iframe width="204" height="222" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="<?php echo e($video->video_url); ?>"></iframe>
                                                
                                                <p class="uplName"><?php echo e($video->title); ?></p>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Photos
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">
                                    
                                    <?php if(isset($user_details->userPhotos) && count($user_details->userPhotos) > 0): ?>
                                        <?php $__currentLoopData = $user_details->userPhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="relative">
                                                <img src="<?php echo e(url('storage/app/public/user_photos/'.$photo->photo)); ?>">
                                                
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Documents
                                <span class="addButtons" data-toggle="modal" data-target="#uploadDocument"></span>
                            </div>
                            <div class="uploadedListing">
                                <ul class="listUpload clearfix">

                                    <?php if(isset($user_details->userDocuments) && count($user_details->userDocuments) > 0): ?>
                                        <?php $__currentLoopData = $user_details->userDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="relative">
                                                <div class="pdfIcon">
                                                    <a href='<?php echo e(url('storage/app/public/user_documents/'.$document->file_name)); ?>' download="<?php echo e($document->file_name); ?>"><img src="<?php echo e(url('public/image/pdf-icon.png')); ?>"></a>
                                                </div>
                                                
                                                <p class="uplName"><?php echo e($document->title); ?></p>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="eduDetails">
                                            <div class="row">
                                                <div class="col-sm-6 clearfix">
                                                    <p class="">Not updated by the artist yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="bio">
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                About me
                                <!-- <span class="addButtons" data-toggle="modal" data-target="#editAbout"><i class="fa fa-edit"></i></span> -->
                            </div>
                            <div class="insertedData">
                                
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Name:</label>
                                        <p class="pull-left"><?php echo e($user_details->name); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Residing City:</label>
                                        <p class="pull-left"><?php echo e($user_details->city); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Language known:</label>
                                        <p class="pull-left"><?php echo e($user_details->language); ?></p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Know Me:</label>
                                        <p class="pull-left"><?php echo e($user_details->about_me); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Education
                                <span class="addButtons" data-toggle="modal" data-target="#PhysicalStats"></span>
                            </div>
                            
                            <?php if(isset($user_details->userEducations) && count($user_details->userEducations) > 0): ?>
                                <?php $__currentLoopData = $user_details->userEducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="eduDetails">
                                        <div class="row">
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Education Name:</label>
                                                <p class="pull-left"><?php echo e($education->education_name); ?></p>
                                            </div>
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Institute: </label>
                                                <p class="pull-left"><?php echo e($education->institute); ?></p>
                                            </div>
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">From:</label>
                                                <p class="pull-left"><?php echo e($education->from); ?></p>
                                            </div>
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">To:</label>
                                                <p class="pull-left"><?php echo e($education->to); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Physical Attributes
                                <span class="addButtons" data-toggle="modal" data-target="#PhysicalStats"></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Height</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->height)?$user_details->userPhysics->height:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Weight</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->weight)?$user_details->userPhysics->weight:''); ?></p>
                                    </div>
                                    <?php if($user_details->gender != '1'): ?>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Bust</label>
                                            <p class="pull-left"><?php echo e(isset($user_details->userPhysics->bust)?$user_details->userPhysics->bust:''); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Waist</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->waist)?$user_details->userPhysics->waist:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Hips</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->hips)?$user_details->userPhysics->hips:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Chest</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->chest)?$user_details->userPhysics->chest:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Biceps</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->biceps)?$user_details->userPhysics->biceps:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Hair Type</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->hair_type)?$user_details->userPhysics->hair_type:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Hair Length</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->hair_length)?$user_details->userPhysics->hair_length:''); ?></p>
                                    </div>
                                    <div class="col-sm-6 clearfix">
                                        <label class="headingLable pull-left">Complexion</label>
                                        <p class="pull-left"><?php echo e(isset($user_details->userPhysics->complexion)?$user_details->userPhysics->complexion:''); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uploadingHolder">
                            <div class="uploadBlock">
                                Work & Location Preference
                                <span class="addButtons" data-toggle="modal" data-target="#availableCity"></span>
                            </div>
                            <div class="eduDetails">
                                <div class="row">
                                    <?php if(isset($user_details->work_preference)): ?>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Work Preference:</label>
                                            <p class="pull-left"><?php echo e($user_details->work_preference); ?></p>
                                        </div>
                                        <div class="col-sm-6 clearfix">
                                            <label class="headingLable pull-left">Location Preference:</label>
                                            <p class="pull-left"><?php echo e($user_details->location_preference); ?></p>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Exp">
                        <div class="uploadingHolder borderBot">
                            <div class="uploadBlock">
                                Experience
                            </div>
                            
                            <?php if(isset($user_details->userExp) && count($user_details->userExp) > 0): ?>
                                <?php $__currentLoopData = $user_details->userExp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="eduDetails">
                                        <div class="row">
                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">Experience Title:</label>
                                                <p class="pull-left"><?php echo e($exp->title); ?></p>
                                            </div>


                                            <div class="col-sm-6 clearfix">
                                                <label class="headingLable pull-left">About Your Work:</label>
                                                <p class="pull-left">
                                                    <?php echo e($exp->about_your_work); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="eduDetails">
                                    <div class="row">
                                        <div class="col-sm-6 clearfix">
                                            <p class="">Not updated by the artist yet.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jcontent'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>