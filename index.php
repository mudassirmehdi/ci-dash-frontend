<?php require_once ('inc/header.php'); ?>

<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		 
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			     
			    <!--begin::Header-->
				<?php require_once('inc/navbar.php'); ?>
				<!--end::Header-->

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					 
					<!--begin::Sidebar-->
					<?php require_once('inc/sidebar.php'); ?>
					<!--end::Sidebar-->

                    <!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container--> 
								<div id="kt_app_content_container" class="app-container container-fluid">
									<div class="row">
										<div class="col-lg-8">
											<div class="card card-flush mb-5">
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="welcome-content">
																<div>
																	<h1>Hey David!👋</h1>
																	<p>Ready to make today count? Let’s see how you’re doing</p>
																</div>
																<div class="w-action">
																	<a href="#" type="button" class="btn btn-primary">Register a Teammate</a>
																</div>
															</div>
														</div>
														<div class="col-4">
															<img src="assets/images/welcome-cryptowallets.svg" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="card card-flush mb-5">
												<div class="card-header"> 
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Success stories of the week </span> 
													</h3>  

													<div class="slider-actions">
														<!--begin::Slider button-->
														<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
															<span class="svg-icon fs-3x">
                                                               <img src="assets/images/kt_team_slider_prev1.svg" alt="">
															</span>
														</button>
														<!--end::Slider button-->

														<!--begin::Slider button-->
														<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
															<span class="svg-icon fs-3x">
                                                               <img src="assets/images/kt_team_slider_next1.svg" alt="">
															</span>
														</button>
														<!--end::Slider button-->
													</div>
												</div>
												<div class="card-body">
													<div class="tns tns-default" style="direction: ltr">
														<!--begin::Slider-->
														<div
														data-tns="true"
														data-tns-loop="true"
														data-tns-swipe-angle="false"
														data-tns-speed="2000"
														data-tns-autoplay="true"
														data-tns-autoplay-timeout="18000"
														data-tns-controls="true"
														data-tns-nav="false"
														data-tns-items="2"
														data-tns-center="false"
														data-tns-dots="false"
														data-tns-prev-button="#kt_team_slider_prev1"
														data-tns-next-button="#kt_team_slider_next1">

															<!--begin::Item-->
															<div class="text-center slider-img-wrapper">
																<img src="assets/images/silder-1.png" class="card-rounded mw-100" alt=""/>
															</div>
															<!--end::Item--> 

															<!--begin::Item-->
															<div class="text-center slider-img-wrapper">
																<img src="assets/images/silder-2.png" class="card-rounded mw-100" alt=""/>
															</div>
															<!--end::Item--> 

															<!--begin::Item-->
															<div class="text-center slider-img-wrapper">
																<img src="assets/images/silder-1.png" class="card-rounded mw-100" alt=""/>
															</div>
															<!--end::Item--> 

															<!--begin::Item-->
															<div class="text-center slider-img-wrapper">
																<img src="assets/images/silder-2.png" class="card-rounded mw-100" alt=""/>
															</div>
															<!--end::Item--> 
														</div>
														<!--end::Slider-->  
														
													</div>

													
												</div>
											</div>

											<div class="card card-flush mb-5 3m-form">
												<div class="card-header"> 
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Your CoopC 3 Minutes-A-Day</span>
														<small>You have not invited any new members today. Get started now.</small> 
													</h3> 
												</div>
												<div class="card-body">
													<form action="" method="" class="invite-form">
														<!-- 1st -->
															<div class="form-section">
																<h6>1st</h6>
																<div class="row g-3">
																	<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="Enter your First Name">
																	</div>
																	<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="Enter your Last Name">
																	</div>
																	<div class="col-md-6">
																	<input type="email" class="form-control" placeholder="Enter your Email">
																	</div>
																	<div class="col-md-6">
																	<input type="tel" class="form-control" placeholder="Enter your Phone Number">
																	</div>
																</div>
															</div>

															<!-- 2nd -->
															<div class="form-section">
																<h6>2nd</h6>
																<div class="row g-3">
																	<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="Enter your First Name">
																	</div>
																	<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="Enter your Last Name">
																	</div>
																	<div class="col-md-6">
																	<input type="email" class="form-control" placeholder="Enter your Email">
																	</div>
																	<div class="col-md-6">
																	<input type="tel" class="form-control" placeholder="Enter your Phone Number">
																	</div>
																</div>
															</div>

															<!-- 3rd -->
															<div class="form-section">
															    <h6>3rd</h6>
																<div class="row g-3">
																	<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="Enter your First Name">
																	</div>
																	<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="Enter your Last Name">
																	</div>
																	<div class="col-md-6">
																	<input type="email" class="form-control" placeholder="Enter your Email">
																	</div>
																	<div class="col-md-6">
																	<input type="tel" class="form-control" placeholder="Enter your Phone Number">
																	</div>
																</div>
															</div>

															<!-- Captcha + Button -->
															<div class="d-flex align-items-center justify-content-between">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" id="captcha">
																	<label class="form-check-label captcha" for="captcha">Fill the Captcha</label>
																</div>
																<button class="btn btn-primary">👥 Invite</button>
														    </div>
													</form>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<!-- Progress -->
											<div class="card card-flush mb-5"> 
												<div class="card-header"> 
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Progress</span> 
													</h3> 
													<div class="card-toolbar">
														<ul class="nav">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold" >Day</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold">Week</a>
															</li>

															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold">Month</a>
															</li>
														</ul>
													</div> 
												</div> 
												<div class="card-body pt-2">
													 <div id="kt_charts_widget_15_chart" class="min-h-auto h-200px"></div>
												</div> 
											</div>
											<!-- Announcements -->
											<div class="card card-flush mb-5"> 
												<div class="card-header"> 
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Announcements</span> 
													</h3>  
												</div> 
												<div class="card-body pt-2">
													<div class="d-flex flex-stack mb-5"> 
														<div class="symbol symbol-50px me-2">
															<span class="symbol-label bg-info">
																<i class="ki-duotone ki-notification fs-2x text-white">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</div>
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Referral Bonus Alert!</a>
																<span class="text-muted fw-semibold d-block fs-7">Earn 20% extra for every new...</span>
															</div>  
														</div> 
													</div>

													<div class="d-flex flex-stack mb-5"> 
														<div class="symbol symbol-50px me-2">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-notification fs-2x text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</div>
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Platform Upgrade Coming</a>
																<span class="text-muted fw-semibold d-block fs-7">Earn 20% extra for every new...</span>
															</div>  
														</div> 
													</div>

													<div class="d-flex flex-stack mb-5"> 
														<div class="symbol symbol-50px me-2">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-notification fs-2x text-success">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</div>
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Team Challenge Week</a>
																<span class="text-muted fw-semibold d-block fs-7">Earn 20% extra for every new...</span>
															</div>  
														</div> 
													</div>
												</div> 
											</div>
											<!-- Recent Posts -->
											 <div class="card card-flush mb-5"> 
												<div class="card-header"> 
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Featured Reads</span> 
													</h3>  
												</div> 
												<div class="card-body pt-2">
													 <!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/images/post-thumbnail.png')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">5 Ways to Boost Your Invite Success Rate</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">Growth Tips | 3 min read</span>
															</div>
															<!--end::Title-->
														</div>
													<!--end::Item-->

													<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/images/post-thumbnail.png')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Top earners manage daily 3 minutes.</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">Growth Tips | 3 min read</span>
															</div>
															<!--end::Title-->
														</div>
													<!--end::Item-->

													<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/images/post-thumbnail.png')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">The Psychology of a Great Invitation</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">Growth Tips | 3 min read</span>
															</div>
															<!--end::Title-->
														</div>
													<!--end::Item-->

													<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/images/post-thumbnail.png')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">The Psychology of a Great Invitation</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">Growth Tips | 3 min read</span>
															</div>
															<!--end::Title-->
														</div>
													<!--end::Item-->

													<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/images/post-thumbnail.png')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">The Psychology of a Great Invitation</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">Growth Tips | 3 min read</span>
															</div>
															<!--end::Title-->
														</div>
													<!--end::Item-->

													<!--begin::Item-->
														<div class="d-flex flex-stack mb-7">
															<!--begin::Symbol-->
															<div class="symbol symbol-60px symbol-2by3 me-4">
																<div class="symbol-label" style="background-image: url('assets/images/post-thumbnail.png')"></div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="m-0">
																<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">The Psychology of a Great Invitation</a>
																<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">Growth Tips | 3 min read</span>
															</div>
															<!--end::Title-->
														</div>
													<!--end::Item-->

													<a href="#" type="button" class="w-100 btn-sm btn btn-primary">View All</a>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		
<?php require_once('inc/footer.php'); ?>