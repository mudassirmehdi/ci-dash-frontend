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
								<?php require_once('inc/sidebar.php'); ?>
								<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
									<div class="d-flex flex-column flex-column-fluid">
										<div id="kt_app_content" class="app-content flex-column-fluid">
											<div id="kt_app_content_container" class="app-container container-fluid">
											 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<?php require_once('inc/footer.php'); ?>
	
					 