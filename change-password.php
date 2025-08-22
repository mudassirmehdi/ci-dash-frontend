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
								<div class="card mx-auto mt-5" style="max-width: 400px;">
									<div class="card-body">
										<h3 class="card-title text-center mb-3">Change Password</h3>
										<p class="card-text text-muted mb-4" style="font-size:14px;">
											Elizabeth, change your <b>coopincome™</b> Business account password here.<br>
											Use a strong password: mix uppercase, lowercase, numbers, and symbols.
										</p>
										<form method="post" action="change-password.php" novalidate>
											<input type="hidden" name="action" value="setpassword">
											<div class="mb-3">
												<label for="old_password" class="form-label">Old Password</label>
												<input type="password" id="old_password" name="old_password" required class="form-control">
											</div>
											<div class="mb-3">
												<label for="new_password" class="form-label">New Password</label>
												<input type="password" id="new_password" name="new_password" required class="form-control">
											</div>
											<div class="mb-4">
												<label for="confirm_new_password" class="form-label">Confirm New Password</label>
												<input type="password" id="confirm_new_password" name="confirm_new_password" required class="form-control">
											</div>
											<button type="submit" class="btn btn-primary w-100">Change My Password</button>
										</form>
									</div>
								</div>
								</div> 
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		
<?php require_once('inc/footer.php'); ?>