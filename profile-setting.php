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
					<div id="kt_app_toolbar" class="app-toolbar"> 
						<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch"> 
							<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold"> 
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 " href="profile-overview.php">Overview</a>
								</li> 
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active" href="profile-setting.php">Settings</a>
								</li>
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="change-password.php">Change Password</a>
								</li>
							 
							</ul> 
						</div> 
					</div> 
					 
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
								 <!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Stepper-->
											<div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
												<!--begin::Nav-->
												<div class="stepper-nav mb-5">
													<!--begin::Step 1-->
													<div class="stepper-item current" data-kt-stepper-element="nav">
														<h3 class="stepper-title">2FA</h3>
													</div>
													<!--end::Step 1-->
													<!--begin::Step 2-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<h3 class="stepper-title">Personal</h3>
													</div>
													<!--end::Step 2-->
													<!--begin::Step 3-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<h3 class="stepper-title">Enroller</h3>
													</div>
													<!--end::Step 3-->
													<!--begin::Step 4-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<h3 class="stepper-title">Verify Email</h3>
													</div>
													<!--end::Step 4-->
													<!--begin::Step 5-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<h3 class="stepper-title">Finish</h3>
													</div>
													<!--end::Step 5-->
												</div>
												<!--end::Nav-->
												<!--begin::Form-->
												<form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form">
													<!--begin::Step 1-->
													<div class="current" data-kt-stepper-element="content">
														<!--begin::Wrapper-->
														<div class="w-100">
															<!--begin::Heading-->
															<div class="pb-10 pb-lg-15">
																<!--begin::Title-->
																<h2 class="fw-bold d-flex align-items-center text-gray-900">Enter COOPPAY Google Auth Token: </h2>
																<!--end::Title--> 
															</div>
															<!--end::Heading-->
															<!--begin::Input group-->
															<div class="fv-row">
																<!--begin::Row-->
																<div class="row mb-7">
																	 <div class="col-lg-12">
																		<!--begin::Input group-->
																		<div class="input-group mb-5">
																			<input type="text" class="form-control" placeholder="Enter Your Six Digit Code" />
																			<span class="input-group-text" id="basic-addon2">
																				<i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span class="path2"></span></i>
																			</span>
																		</div>
																		<!--end::Input group-->

																		<button class="btn btn-primary">Verify Code</button>
																	 </div>
																</div>
																<!--end::Row-->

																<div class="row mb-7">
																	<div class="col-lg-12">
																		<div class="card card-bordered">
																			<div class="card-header">
																				<h3 class="card-title">How to set up, generate and validate Google Auth Token?</h3> 
																			</div>
																			<div class="card-body">
																				<ul>
																					<li>To generate Auth Token, click "Setup Google Authenticator" or enter the code from the mobile app.</li>
																					<li>If you already have Google Auth App, Please open to view Auth token. If you don't have Auth App, <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">Download Google Authenticator App</a> and scan the QR code to view the secret token.</li>
																					<li>Enter the six digit token to validate.</li>
																				</ul>
																			</div> 
																		</div>
																	</div>
																</div>
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 1-->
													<!--begin::Step 2-->
													<div data-kt-stepper-element="content">
														<!--begin::Wrapper-->
														<div class="w-100">
															 <div class="row">
																<div class="col-lg-6">
																	<h5 class="mb-7">Personal Information</h5>
																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">First Name: <span class="text-danger">*</span></label>
																	</div>

																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">Last Name: <span class="text-danger">*</span></label>
																	</div>

																	<div class="form-floating mb-7">
																		<input type="email" class="form-control" id=""/>
																		<label for="">Email: <span class="text-danger">*</span></label>
																	</div>

																	<div class="form-floating mb-7">
																		<input type="number" class="form-control" id=""/>
																		<label for="">Mobile Number: <span class="text-danger">*</span></label>
																	</div>

																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">WhatsApp Number: <span class="text-danger">*</span></label>
																	</div>
																</div>
																<div class="col-lg-6">
																	<h5 class="mb-7">Account Information</h5>
																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">Address: <span class="text-danger">*</span></label>
																	</div>
																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">City: <span class="text-danger">*</span></label>
																	</div>
																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">State/Prov: <span class="text-danger">*</span></label>
																	</div>
																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">Zip/Postal: <span class="text-danger">*</span></label>
																	</div>
																	<div class="form-floating mb-7">
																		<input type="text" class="form-control" id=""/>
																		<label for="">Country: <span class="text-danger">*</span></label>
																	</div>
																</div> 
																<div class="col-lg-12">
																	<button class="btn btn-primary">Update Password</button>
																</div>
															 </div>
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 2-->
													<!--begin::Step 3-->
													<div data-kt-stepper-element="content">
														<!--begin::Wrapper-->
														<div class="w-100">
															 <div class="row">
																<div class="col-lg-12 text-center">
																	<h4 class="text-success"> Your enroller is Hip To Be Smart!</h4>
																</div>
															 </div>
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 3-->
													<!--begin::Step 4-->
													<div data-kt-stepper-element="content">
														<!--begin::Wrapper-->
														<div class="w-100">
															 <div class="row">
																<div class="col-lg-12 text-center">
																	<h4 class="text-success">Your email address already verified!</h4>
																</div>
															 </div>
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 4-->
													<!--begin::Step 5-->
													<div data-kt-stepper-element="content">
														<!--begin::Wrapper-->
														<div class="w-100">
															<!--begin::Heading-->
															<div class="pb-8 pb-lg-10">
																<!--begin::Title-->
																<h2 class="fw-bold text-gray-900">Your Are Done!</h2>
																<!--end::Title-->
																<!--begin::Notice-->
																<div class="text-muted fw-semibold fs-6">If you need more info, please 
																<a href="#" class="link-primary fw-bold">Sign In</a>.</div>
																<!--end::Notice-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div class="mb-0">
																<!--begin::Text-->
																<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great & amazing audience.</div>
																<!--end::Text-->
																<!--begin::Alert-->
																<!--begin::Notice-->
																<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
																	<!--begin::Icon-->
																	<i class="ki-duotone ki-information fs-2tx text-warning me-4">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																	<!--end::Icon-->
																	<!--begin::Wrapper-->
																	<div class="d-flex flex-stack flex-grow-1">
																		<!--begin::Content-->
																		<div class="fw-semibold">
																			<h4 class="text-gray-900 fw-bold">We need your attention!</h4>
																			<div class="fs-6 text-gray-700">To start using great tools, please, 
																			<a href="utilities/wizards/vertical.html" class="fw-bold">Create Team Platform</a></div>
																		</div>
																		<!--end::Content-->
																	</div>
																	<!--end::Wrapper-->
																</div>
																<!--end::Notice-->
																<!--end::Alert-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 5-->
													<!--begin::Actions-->
													<div class="d-flex flex-stack pt-15">
														<!--begin::Wrapper-->
														<div class="mr-2">
															<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
															<i class="ki-duotone ki-arrow-left fs-4 me-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>Back</button>
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div>
															<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
																<span class="indicator-label">Submit 
																<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i></span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
															<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue 
															<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
																<span class="path1"></span>
																<span class="path2"></span>
															</i></button>
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Stepper-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div> 
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		
<?php require_once('inc/footer.php'); ?>