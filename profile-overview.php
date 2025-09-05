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
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active" href="profile-overview.php">Overview</a>
								</li> 
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="profile-setting.php">Settings</a>
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
								   <div class="row">
										<div class="col-lg-12">
											 

											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-10">
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
														<h4 class="text-gray-900 fw-bold">Edit Your Personal Information!</h4>
														<div class="fs-6 text-gray-700">Your Business Name will appear on your Registration Link <a href="https://dev.coopincome.com/1008">https://dev.coopincome.com/1008</a> if you’ve chosen one instead of your personal name.  </div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>

											<div class="card shadow-sm">
												<div class="card-header">
													<h3 class="card-title">Edit Your Information</h3> 
												</div>
												<div class="card-body">
													<div class="row align-items-center">
														<div class="col-lg-12">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Enroller Name</label>
															</div>
														</div>

														<div class="col-lg-6">
															<label for="" class="form-label">Solana Digital Wallet ID</label>
															 <div class="input-group mb-7">
																<span class="input-group-text" id=""><img height="24" src="assets/images/solana.png" alt=""></span>
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for=""> </label>
															</div>
														</div>

														<div class="col-lg-6">
															<label for="" class="form-label">Ethereum  Digital Wallet ID</label>
															 <div class="input-group mb-7">
																<span class="input-group-text" id=""><img height="24" src="assets/images/ethereum.png" alt=""></span>
																<input type="text" class="form-control" id="" placeholder=""/> 
															</div>
														</div>

														<div class="col-lg-9 mb-7">
															 <div class="form-floating ">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Business Name</label>
															</div>
														</div>

														<div class="col-lg-3 mb-7">
															 <div class="form-check">
																<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
																<label class="form-check-label" for="flexCheckDefault">
																	 Use as Default
																</label>
															</div>
														</div>

														<div class="col-lg-6">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">First Name <span class="text-danger">*</span></label>
															</div>
														</div>

														<div class="col-lg-6">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Last Name<span class="text-danger">*</span></label>
															</div>
														</div>

														<div class="col-lg-6">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Email <span class="text-danger">*</span></label>
															</div>
														</div>

														<div class="col-lg-6">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Mobile <span class="text-danger">*</span></label>
															</div>
														</div>

														<div class="col-lg-4">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">FBMessenger </label>
															</div>
														</div>

														<div class="col-lg-4">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">WhatsApp </label>
															</div>
														</div>

														<div class="col-lg-4">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Telegram </label>
															</div>
														</div>

														<div class="col-lg-4">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Address </label>
															</div>
														</div>

														<div class="col-lg-4">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">City </label>
															</div>
														</div>

														<div class="col-lg-4">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">State or Province</label>
															</div>
														</div>

														<div class="col-lg-6">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Zip or Postal Code  </label>
															</div>
														</div>

														<div class="col-lg-6">
															 <div class="form-floating mb-7">
																<input type="text" class="form-control" id="" placeholder=""/>
																<label for="">Country </label>
															</div>
														</div>

														
													</div>
												</div>
												<div class="card-footer">
													<button class="btn btn-primary">Save Changes</button>
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