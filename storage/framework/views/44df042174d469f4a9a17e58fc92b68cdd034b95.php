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


    <!---------Platinum artist-------->
    
<section class="platinumArtist">
<<<<<<< HEAD
			<div class="home-heading">
=======
<!--			<div class="home-heading">
>>>>>>> 9c478101254134beab6586cf1cad2734baae2951
				<h3 class="text-center">
				PLATINUM
				<span class="cng-clr">ARTISTS</span>
				</h3>
<<<<<<< HEAD
			</div>
=======
			</div>-->
>>>>>>> 9c478101254134beab6586cf1cad2734baae2951
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
									<a class="btn custom-btn" href="<?php echo e(url('/artist/registration/13')); ?>" type="button"><span>REGISTER</span></a>
									<a href="<?php echo e(url('/artist/listing/'.base64_encode(13))); ?>" class="btn custom-btn" type="button"><span>Hire</span></a>
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
                                                                    <a class="btn custom-btn" href="<?php echo e(url('/artist/registration/12')); ?>" type="button"><span>REGISTER</span></a>
									<a href="<?php echo e(url('/artist/listing/'.base64_encode(12))); ?>" class="btn custom-btn" type="button"><span>Hire</span></a>
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
									<a class="btn custom-btn" href="<?php echo e(url('/artist/registration/10')); ?>" type="button"><span>REGISTER</span></a>
									<a href="<?php echo e(url('/artist/listing/'.base64_encode(10))); ?>" class="btn custom-btn" type="button"><span>Hire</span></a>
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
									<a class="btn custom-btn" href="<?php echo e(url('/artist/registration/9')); ?>" type="button"><span>REGISTER</span></a>
									<a href="<?php echo e(url('/artist/listing/'.base64_encode(9))); ?>" class="btn custom-btn" type="button"><span>Hire</span></a>
								</div>
								
							</div>
						</li>
						
					</ul>
				</div>
				<div class="artTestRight">
					<div class="home-heading">
<<<<<<< HEAD
						<h3 class="text-center">
							<span class="cng-clr">Testimonial</span>
						</h3>
=======
<!--						<h3 class="text-center">
							<span class="cng-clr">Testimonial</span>
						</h3>-->
>>>>>>> 9c478101254134beab6586cf1cad2734baae2951
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
                                    <h3><?php echo e($testimonial->name); ?></h3>
                                    
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
									<img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
<<<<<<< HEAD
=======
					<li>
						<div class="artPortfolio">
							<div class="artImage relative text-center">
								<a href="javascript:void(0);">
									<img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
					<li>
						<div class="artPortfolio">
							<div class="artImage relative text-center">
								<a href="javascript:void(0);">
									<img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
					<li>
						<div class="artPortfolio">
							<div class="artImage relative text-center">
								<a href="javascript:void(0);">
									<img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
					<li>
						<div class="artPortfolio">
							<div class="artImage relative text-center">
								<a href="javascript:void(0);">
									<img src="<?php echo e(url('public/image/artist1.jpg')); ?>" alt="Artist Image"/>
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
>>>>>>> 9c478101254134beab6586cf1cad2734baae2951
					
				</ul>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>