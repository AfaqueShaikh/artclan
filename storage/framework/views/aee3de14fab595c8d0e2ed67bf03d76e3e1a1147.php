<?php $__env->startSection('content'); ?>
<section class="dashboardSection">	
		<div class="container">
			<div class="dashPrifilerInfo clearfix">
				<div class="profilerImage relative">
					<?php if(isset(Auth::user()->profile_img)): ?>
                                    <img src="<?php echo e(url('storage/app/public/user_profile/'.Auth::user()->profile_img)); ?>" height="570">
						<?php else: ?>
						<img src="<?php echo e(url('public/image/noimagefound.png')); ?>" height="570">
					<?php endif; ?>

					<span class="uploadImage" onclick='$("#uploadProfilePicture").modal("show")'>
						<i class="fa fa-camera"></i>
						
					</span>
				</div>
                            
                            
				<div class="profilerInformation">
					<div class="profilerName">
						<h3><?php echo e($userData->name); ?></h3>
						<p><?php echo e($user_types[$userData->user_type]); ?> / <?php echo e($userData->city); ?></p>	
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
			<div class="searchByTag">			
				<p class="tagHead">Tags</p>
				<p class="desp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<a href="javascript:void(0);" class="tagsBtn"><i class="fa fa-plus"></i> Add Tags</a>
			</div>
			<div class="personLifeHistory">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#gallery" aria-controls="home" role="tab" data-toggle="tab">My Art Gallery</a></li>
					<li role="presentation"><a href="#bio" aria-controls="profile" role="tab" data-toggle="tab">Bio</a></li>
					<li role="presentation"><a href="#Exp" aria-controls="messages" role="tab" data-toggle="tab">Experience</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="gallery">
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Video
								<span class="addButtons" data-toggle="modal" data-target="#uploadVideo"><i class="fa fa-plus"></i></span>
							</div>	
							<div class="uploadedListing">
								<ul class="listUpload clearfix">
                                                                    
                                                                    <?php $__currentLoopData = $userData->userVideos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="relative">
										
                                                                               
                                                                            <iframe width="204" height="222" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="<?php echo e($video->video_url); ?>"></iframe>
										<span class="deleteBtn"><i class="fa fa-trash"></i></span>
										<p class="uplName"><?php echo e($video->title); ?></p>
									</li>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>	
						</div>	
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Photos
								<span class="addButtons" data-toggle="modal" data-target="#uploadphoto"><i class="fa fa-plus"></i></span>
							</div>	
							<div class="uploadedListing">
								<ul class="listUpload clearfix">
                                                                    <?php $__currentLoopData = $userData->userPhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="relative">
										<img src="<?php echo e(url('storage/app/public/user_photos/'.$photo->photo)); ?>">
										<span class="deleteBtn"><i class="fa fa-trash"></i></span>
										
									</li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>	
						</div>	
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Documents 
								<span class="addButtons" data-toggle="modal" data-target="#uploadDocument"><i class="fa fa-plus"></i></span>
							</div>	
							<div class="uploadedListing">
								<ul class="listUpload clearfix">
                                                                    
                                                                      <?php $__currentLoopData = $userData->userDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="relative">
										<div class="pdfIcon">
                                                                                    <a href='<?php echo e(url('storage/app/public/user_documents/'.$document->file_name)); ?>' download="<?php echo e($document->file_name); ?>"><img src="<?php echo e(url('public/image/pdf-icon.png')); ?>"></a>
										</div>
										<span class="deleteBtn"><i class="fa fa-trash"></i></span>
										<p class="uplName"><?php echo e($document->title); ?></p>
									</li>
                                                                        
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>	
						</div>				
					</div>
					<div role="tabpanel" class="tab-pane" id="bio">
						<div class="uploadingHolder">
							<div class="uploadBlock">
								About me
								<span class="addButtons" data-toggle="modal" data-target="#editAbout"><i class="fa fa-edit"></i></span>
							</div>
		<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Name</label>
										<p class="pull-left"><?php echo e(Auth::user()->name); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Residing City</label>
										<p class="pull-left"><?php echo e(Auth::user()->city); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Language known</label>
										<p class="pull-left"><?php echo e(Auth::user()->language); ?></p>
									</div>
									
								</div>
                    <div class="row">
                        <div class="col-sm-12 clearfix">
										<label class="headingLable pull-left">Know Me</label>
										<p class="pull-left"><?php echo e(Auth::user()->about_me); ?></p>
									</div>
                    </div>
							</div>
						</div>
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Education 
								<span class="addButtons" data-toggle="modal" data-target="#uploadEducation1"><i class="fa fa-plus"></i></span>
							</div>
                                                     <?php $__currentLoopData = $userData->userEducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Education Name</label>
										<p class="pull-left"><?php echo e($education->education_name); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Institute </label>
										<p class="pull-left"><?php echo e($education->institute); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">From</label>
										<p class="pull-left"><?php echo e($education->from); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">To</label>
										<p class="pull-left"><?php echo e($education->to); ?></p>
									</div>
								</div>
							</div>
                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>						
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Work & Location Preference
								<span class="addButtons" data-toggle="modal" data-target="#availableCity"><i class="fa fa-pencil"></i></span>
							</div>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Work Preference</label>
										<p class="pull-left"><?php echo e(Auth::user()->work_preference); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Location Preference</label>
										<p class="pull-left"><?php echo e(Auth::user()->location_preference); ?></p>
									</div>
									
								</div>
							</div>
						</div>						
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Physical Attributes 
								<span class="addButtons" data-toggle="modal" data-target="#PhysicalStats"><i class="fa fa-edit"></i></span>
							</div>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Height</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->height)?$userPhysicsData->height:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Weight</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->weight)?$userPhysicsData->weight:''); ?></p>
									</div>
                                                                    <?php if(Auth::user()->gender != '1'): ?>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Bust</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->bust)?$userPhysicsData->bust:''); ?></p>
									</div>
                                                                    <?php endif; ?>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Waist</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->waist)?$userPhysicsData->waist:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Hips</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->hips)?$userPhysicsData->hips:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Chest</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->chest)?$userPhysicsData->chest:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Biceps</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->biceps)?$userPhysicsData->biceps:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Hair Type</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->hair_type)?$userPhysicsData->hair_type:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Hair Length</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->hair_length)?$userPhysicsData->hair_length:''); ?></p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Complexion</label>
										<p class="pull-left"><?php echo e(isset($userPhysicsData->complexion)?$userPhysicsData->complexion:''); ?></p>
									</div>
								</div>
							</div>
						</div>
					
					</div>
					<div role="tabpanel" class="tab-pane" id="Exp">
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Add Experience 
								<span class="addButtons" data-toggle="modal" data-target="#addExpe"><i class="fa fa-plus"></i></span>
							</div>
                                                    
                                                    
                                                     <?php $__currentLoopData = $userData->userExp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Experience Title</label>
										<p class="pull-left"><?php echo e($exp->title); ?></p>
									</div>
									
								
									<div class="col-sm-12 clearfix">
										<label class="headingLable pull-left">About Your Work</label>
										<p class="pull-left">
											<?php echo e($exp->about_your_work); ?>

										</p>
									</div>
								</div>
							</div>
                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal_section'); ?>
<div class="modal" id="shareLink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
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
				<label>Copy link to share</label>
				<div class="form-group input-group">
				  <span class="input-group-addon" id="basic-addon1">
				  	<i class="fa fa-link"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="copy link" value="https://www.youtube.com/watch?v=Ix2fG8qAlbc" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
	</div>
</div>
<!---------upload video-------->
<div class="modal" id="uploadVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
                            
                            <form action='<?php echo e(url('user/videos/create')); ?>' method="post">
				<div class="form-group">
					<label>Video title</label>
                                        <input type="text" name='video_title' class="form-control" required="" placeholder="Video Title">
				</div>
				<div class="form-group">
					<label>YouTube video link</label>
                                        <input type="url" name='video_url' required="" class="form-control" placeholder="Youtube Video Link">
				</div>
				<div class="form-group text-center">
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                            </form>
			</div>			
		</div>
	</div>
</div>
<!---------photo video-------->
<div class="modal" id="uploadphoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
                            <form action='<?php echo e(url('user/photos/create')); ?>' enctype="multipart/form-data" method="post">
				<div class="form-group">
					<label>Add Photo</label>
					<p>(Maximum photo upload size is 10MB. The width and height of the image should be at least 350px)</p>
				</div>
				<div class="form-group text-center">					
					
                                    <input type="file" name="photo" required="" >
				
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
						
					</button>
				</div>
                              </form>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="uploadProfilePicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
                            <form action='<?php echo e(url('user/profile-picture/update')); ?>' enctype="multipart/form-data" method="post">
				<div class="form-group">
					<label>Add Profile Picture</label>
					
				</div>
				<div class="form-group text-center">					
					
                                    <input type="file" name="photo" required="" >
				
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                              </form>
			</div>
		</div>
	</div>
</div>
<!---------document video-------->
<div class="modal" id="uploadDocument" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
                                 <form action='<?php echo e(url('user/documents/create')); ?>' enctype="multipart/form-data" method="post">
                                     <div class="form-group">
					<label>Title</label>
                                        <input type="text" name='title' class="form-control" required="" placeholder="Title">
				</div>
				<div class="form-group">
					<label>Add Document</label>
					
				</div>
				<div class="form-group text-center">					
					
					
                                    <input type="file" name="document" required="" >
					
					
				</div>
				<div class="form-group text-center">					
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                                 </form>
			</div>
		</div>
	</div>
</div>
<!-----------edit about info--------->
<!---------upload video-------->
<div class="modal" id="editAbout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
				<div class="modal-body">
                                    <form action="<?php echo e(url('user/about-me/update')); ?>" method="post">
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Name</label>
                                                        <input type="text" value="<?php echo e(Auth::user()->name); ?>" name="name" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Residing City</label>
                                                        <input type="text" name="city" required=""  value="<?php echo e(Auth::user()->city); ?>"class="form-control">
						</div>
						<div class="form-group">
							<label>Language known</label>
                                                        <select name="language[]" class="form-control" multiple="" required="">
								<option value="English" <?php if(str_contains('English', explode(',', Auth::user()->language))): ?> selected <?php endif; ?>>English</option>
								<option value="Hindi" <?php if(str_contains('Hindi', explode(',', Auth::user()->language))): ?> selected <?php endif; ?>>Hindi</option>
								<option value="Marathi" <?php if(str_contains('Marathi', explode(',', Auth::user()->language))): ?> selected <?php endif; ?>>Marathi</option>
								<option value="Bengali" <?php if(str_contains('Bengali', explode(',', Auth::user()->language))): ?> selected <?php endif; ?>>Bengali</option>
								
							</select>
						</div>
						<div class="form-group">
							<label>Know Me</label>
							
                                                        <textarea class="form-control" required="" name="about_me"><?php echo e(Auth::user()->about_me); ?></textarea>
						</div>
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                                        </form>
			</div>			
		</div>
	</div>
</div>
<div class="modal" id="uploadEducation1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
                            
                            <form action="<?php echo e(url('user/education/create')); ?>" method="post">
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Education Name</label>
							<input type="text" name='education_name' required class="form-control">
						</div>
						<div class="form-group">
							<label>Institute Name</label>
                                                        <input type="text" name='institute' required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Start Date</label>
                                                        <input type="date" name="from" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>End Date</label>
                                                        <input type="date" name="to" required="" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                                </form>
			</div>			
		</div>
	</div>
</div>
<div class="modal" id="uploadLang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Experties</label>
							<select name="" class="form-control">
								<option value="">Actor</option>
								<option value="">Writer</option>
								<option value="">Singer</option>
							</select>
						</div>
						<div class="form-group">
							<label>Language</label>
							<select name="" class="form-control">
								<option value="">Actor</option>
								<option value="">Writer</option>
								<option value="">Singer</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn custom-btn" type="button">
						<span>Submit</span>
					</button>
				</div>
			</div>			
		</div>
	</div>
</div>
<div class="modal" id="availableCity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">
                            
                            <form action="<?php echo e(url('user/work-preference/update')); ?>" method="post">
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Location Preference</label>
                                                        <select name="location_preference" required="" class="form-control">
                                                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($city->name); ?>" <?php if(Auth::user()->location_preference == $city->name): ?> selected <?php endif; ?>><?php echo e($city->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<label>Work Preference</label>
                                                        <select name="work_preference" required="" class="form-control">
								<option value="Part Time" <?php if(Auth::user()->work_preference == 'Part Time'): ?> selected <?php endif; ?>>Part Time</option>
								<option value="Full Time" <?php if(Auth::user()->work_preference == 'Full Time'): ?> selected <?php endif; ?>>Full Time</option>
							</select>
						</div>
					</div>
				</div>
                          
				<div class="form-group text-center">
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                                  </form>
			</div>			
		</div>
	</div>
</div>
<div class="modal" id="PhysicalStats" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">	
                            <form action="<?php echo e(url('user/physical-attributes/create')); ?>" method="post">
				<div class="eduDetails">
					<div class="eduDetails">
						
						<div class="form-group">
							<label>Height</label>
                                                        <input name="height" required=""  value="<?php echo e(isset($userPhysicsData->height)?$userPhysicsData->height:""); ?>" class="form-control" >
						</div>	
						<div class="form-group">
							<label>Weight	</label>
                                                        <input name="weight" required="" value="<?php echo e(isset($userPhysicsData->weight)?$userPhysicsData->weight:""); ?>" class="form-control" >
						</div>	
                                            <?php if(Auth::user()->gender != '1'): ?>
						<div class="form-group">
							<label>Bust	</label>
                                                        <input name="bust" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->bust)?$userPhysicsData->bust:""); ?>" >
						</div>	
                                            <?php endif; ?>
						<div class="form-group">
							<label>Waist	</label>
                                                        <input name="waist" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->waist)?$userPhysicsData->waist:""); ?>" >
						</div>	
						<div class="form-group">
							<label>Hips	</label>
                                                        <input name="hips" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->hips)?$userPhysicsData->hips:""); ?>" >
						</div>	
						<div class="form-group">
							<label>Chest	</label>
                                                        <input name="chest" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->chest)?$userPhysicsData->chest:""); ?>" >
						</div>	
						<div class="form-group">
							<label>Biceps	</label>
                                                        <input name="biceps" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->biceps)?$userPhysicsData->biceps:""); ?>" >
						</div>	
						<div class="form-group">
							<label>Hair Type	</label>
                                                        <input name="hair_type" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->hair_type)?$userPhysicsData->hair_type:""); ?>" >
						</div>	
						<div class="form-group">
							<label>Hair Length	</label>
                                                        <input name="hair_length" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->hair_length)?$userPhysicsData->hair_length:""); ?>" >
						</div>
                                            
						<div class="form-group">
							<label>Complexion	</label>
                                                        <input name="complexion" required="" class="form-control" value="<?php echo e(isset($userPhysicsData->complexion)?$userPhysicsData->complexion:""); ?>" >
						</div>	
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                            </form>
			</div>			
		</div>
	</div>
</div>
<div class="modal" id="addExpe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-md signUpPopUp" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
					<img src="<?php echo e(url('public/image/close.png')); ?>"/></span>
				</button>
			</div>
			<div class="modal-body">				
                            <form action="<?php echo e(url('user/experience/create')); ?>" method="post">
				<div class="eduDetails">
					<div class="eduDetails">
						<div class="form-group">
							<label>Project Title</label>
                                                        <input type="text" required="" class="form-control" name="title">
						</div>
						<div class="form-group">
							<label>About Your Work</label>
                                                        <textarea name="about_work" required="" class="form-control" ></textarea>
						</div>
						
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn custom-btn" type="submit">
						<span>Submit</span>
					</button>
				</div>
                            </form>
			</div>			
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>