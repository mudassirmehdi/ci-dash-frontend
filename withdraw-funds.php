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
									<div class="row justify-content-center">
										<div class="col-lg-7 col-md-10">
											<div class="card border mb-5">
												<div class="card-header align-items-center text-center py-4">
													<h2 class="mb-0 fw-bold">Withdraw Funds</h2>
												</div>
												<div class="card-body p-4">
													<div class="mb-5">
														<div class="card">
															<div class="card-header bg-info bg-gradient align-items-center text-white text-center py-3">
																<h5 class="mb-0 fw-semibold text-white">Verify Google Authenticator Token</h5>
															</div>
															<div class="card-body">
																<form id="verify-authy-code">
																	<div class="mb-4">
																		<label class="form-label fw-bold">Enter COOPPAY Google Auth Token:</label>
																		<input type="text" class="form-control form-control-lg border-info" placeholder="Enter Your Six Digit Code" maxlength="6" required>
																	</div>
																	<input type="hidden" name="wallet-withdraw-transaction" value="true">
																	<div class="d-grid gap-2">
																		<button type="submit" class="btn btn-info btn-lg fw-bold">
																			<i class="bi bi-check-circle me-1"></i>Verify Code
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<div>
														<div class="card">
															<div class="card-header align-items-center bg-secondary bg-gradient text-white py-3">
																<h6 class="mb-0 fw-semibold text-dark"><i class="bi bi-question-circle me-2"></i>How to set up, generate and validate Google Auth Token?</h6>
															</div>
															<div class="card-body">
																<ol class="list-group list-group-numbered">
																	<li class="list-group-item">To generate Auth Token, click <span class="fw-bold text-primary">"Setup Google Authenticator"</span> or enter the code from the mobile app.</li>
																	<li class="list-group-item">If you already have Google Auth App, open to view Auth token. If you don't have Auth App, <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank" class="link-info fw-bold">Download Google Authenticator App</a> and scan the QR code to view the secret token.</li>
																	<li class="list-group-item">Enter the six digit token to validate.</li>
																</ol>
															</div>
														</div>
													</div>
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