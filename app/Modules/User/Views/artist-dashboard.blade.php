@extends('layouts.dashboard')

@section('content')
<section class="dashboardSection">	
		<div class="container">
			<div class="dashPrifilerInfo clearfix">
				<div class="profilerImage relative">
					<img src="{{url('public/image/artist2.jpg')}}">
					<span class="uploadImage">
						<i class="fa fa-camera"></i>
						<input type="file" class="uploadInp">
					</span>
				</div>
				<div class="profilerInformation">
					<div class="profilerName">
						<h3>Harshad</h3>
						<p>Modal / Pune</p>	
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
					<li role="presentation" class="active"><a href="#gallery" aria-controls="home" role="tab" data-toggle="tab">Gallery</a></li>
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
									<li class="relative">
										<img src="{{url('public/image/artist1.jpg')}}">
										<span class="deleteBtn"><i class="fa fa-trash"></i></span>
										<p class="uplName">Video1</p>
									</li>
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
									<li class="relative">
										<img src="{{url('public/image/artist1.jpg')}}">
										<span class="deleteBtn"><i class="fa fa-trash"></i></span>
										<p class="uplName">Photo1</p>
									</li>
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
									<li class="relative">
										<div class="pdfIcon">
											<img src="{{url('public/image/pdf-icon.png')}}">
										</div>
										<span class="deleteBtn"><i class="fa fa-trash"></i></span>
										<p class="uplName">Document1</p>
									</li>
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
							<div class="insertedData">

							</div>
						</div>
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Education 
								<span class="addButtons" data-toggle="modal" data-target="#uploadEducation1"><i class="fa fa-plus"></i></span>
							</div>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Course Name</label>
										<p class="pull-left">Web designing</p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Institute Name</label>
										<p class="pull-left">Web designing</p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Start Date</label>
										<p class="pull-left">08.05.2019</p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">End Date</label>
										<p class="pull-left">10.05.2019</p>
									</div>
								</div>
							</div>
						</div>						
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Physical Stats 
								<span class="addButtons" data-toggle="modal" data-target="#PhysicalStats"><i class="fa fa-plus"></i></span>
							</div>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Language</label>
										<p class="pull-left">Hindi, English, Marathi</p>
									</div>
								</div>
							</div>
						</div>
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Skill 
								<span class="addButtons" data-toggle="modal" data-target="#uploadLang"><i class="fa fa-plus"></i></span>
							</div>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Language</label>
										<p class="pull-left">Hindi, English, Marathi</p>
									</div>
								</div>
							</div>
						</div>						
						<div class="uploadingHolder">
							<div class="uploadBlock">
								Skill 
								<span class="addButtons" data-toggle="modal" data-target="#availableCity"><i class="fa fa-plus"></i></span>
							</div>
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Language</label>
										<p class="pull-left">Hindi, English, Marathi</p>
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
							<div class="eduDetails">
								<div class="row">
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Project Name</label>
										<p class="pull-left">Web designing</p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Role</label>
										<p class="pull-left">Web designing</p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">Start Date</label>
										<p class="pull-left">08.05.2019</p>
									</div>
									<div class="col-sm-6 clearfix">
										<label class="headingLable pull-left">End Date</label>
										<p class="pull-left">10.05.2019</p>
									</div>
									<div class="col-sm-12 clearfix">
										<label class="headingLable pull-left">Description</label>
										<p class="pull-left">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section>
@endsection
