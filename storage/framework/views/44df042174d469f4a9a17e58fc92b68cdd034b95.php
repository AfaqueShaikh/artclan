<?php $__env->startSection('content'); ?>

    <!-------------Banner------------>
    <section class="banner">
        <div id="banner-slider" class="owl-carousel">
            <?php $__currentLoopData = $banner_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item" style="background-image: url('<?php echo e(url('/storage/app/public/banner_images/'.$banner_image->banner_image)); ?>')">
                    <div class="banner-caption">
                        <h2>20 years of quality! service in <span class="cng-clr">KITGREEN</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button class="btn custom-btn" type="submit"><span>GET A QUOTE NOW</span></button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-----Registration both user------->
    <section class="bothUsers">
        <div class="clearfix">
            <a href="javascript:void(0);" class="quickRegister artistRegister">REGISTER AS ARTIST</a>
            <a href="javascript:void(0);" class="quickRegister requiterRegister">REGISTER AS RECRUITER</a>
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
                                        <img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist2.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist2.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist2.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist2.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist2.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
                                        <img src="<?php echo e(url('public/image/artist2.jpg')); ?>" alt="Artist Image"/>
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
                
                <span class="cng-clr">Artist's Testimonial</span>
            </h3>
        </div>
        <div class="client-right">
            <div id="clientSay" class="client-says owl-carousel">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item" >
                        <div class="client-block">
                            <div class="clearfix">
                                <div class="client-image pull-left">
                                    <img src="<?php echo e(url('storage/app/public/testimonial/'.$testimonial->image)); ?>">
                                </div>
                                <div class="client-posts pull-left">
                                    <h3>John Doe</h3>
                                    <p>Actor</p>
                                </div>
                            </div>
                            <div class="client-tell">
                                <?php echo e($testimonial->description); ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </section>

    <!---------featured partner------------->
    <section class="featuredPartner" style="background-image: url('<?php echo e(url('public/image/featureBg.jpg')); ?>');">
        <div class="home-heading">
            <h3 class="text-center">
                Featured
                <span class="cng-clr">Partner's</span>
            </h3>
        </div>
        <div id="partnerSlider" class="owl-carousel">
            <?php $__currentLoopData = $featured_partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <div class="partnerImage">
                        <img src="<?php echo e(url('storage/app/public/featured_partners/'.$featured_partner->image)); ?>"/>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!---------quick help------------------->
    <div class="quickHelp">
        <a href="#." data-toggle="modal" data-target="#chatModal">
            <i class="fa fa-headphones"></i>
        </a>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jcontent'); ?>
    <script>
        $(function () {
            console.log(123);
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>