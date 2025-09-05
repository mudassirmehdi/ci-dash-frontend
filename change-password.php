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
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="profile-setting.php">Settings</a>
								</li>
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active" href="change-password.php">Change Password</a>
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
												<div class="alert alert-info d-flex align-items-center p-5 mb-10">
													 
													<i class="ki-duotone ki-lock-2 fs-4hx text-info me-4">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
													</i>                  
													<div class="d-flex flex-column">
														<h4 class="mb-1 text-info mb-4">Elizabeth, this is where you can change your CoopIncome™ Business account password.</h4>
														<span>Security is important, feel free to change your password as often as possible. Some of the worst examples include "qwerty", "12345" and any variation of your birthday. Think of a word in another language or a string of unrelated characters. A secure password should include at both uppercase and lowercase letters, a punctuation character and at least one number.</span>
													</div>
												</div>

												<div class="card shadow-sm">
													<div class="card-header">
														<h3 class="card-title">Change Password</h3> 
													</div>
													<div class="card-body">
														 <div class="form-floating mb-7">
															<input type="password" class="form-control" id="old_password" placeholder=""/>
															<label for="old_password">Old Password</label>
														</div>

														<div class="form-floating mb-7">
															<input type="password" class="form-control" id="new_password" placeholder=""/>
															<label for="new_password">New Password</label>
														</div>

														<div class="form-floating mb-7">
															<input type="password" class="form-control" id="conf_password" placeholder=""/>
															<label for="conf_password">Confirm Password</label>
														</div>
													</div>
													<div class="card-footer">
														<button class="btn btn-primary">Change My Password</button>
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