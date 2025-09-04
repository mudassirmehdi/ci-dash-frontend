<?php require_once ('inc/header.php'); ?>

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
	 <style>
		.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background-color: var(--bs-gray-100);
			position: relative;
			color:#1b84ff!important;

		}
.nav-pills .nav-link{
	position: relative;
}
.nav-pills .nav-link::after {
	content: " ";
    position: absolute;
    top: 2.3rem;
    left: 0;
    height: 2px;
    width: 100%;
    background-color: transparent;
    transition: color .2s ease;
}
.nav-pills .nav-link.active::after {
	background-color: var(--bs-primary);
}
	 </style>
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
												<div class="card mx-auto mb-5">
													<div class="card-header text-center align-items-center">
														<h5 class="mb-0 lh-1">Account Settings</h5>
													</div>
													<div class="card-body">
														<!-- Bootstrap Progress Bar -->
														<!-- Bootstrap Stepper -->
														<div class="mb-4">
															<div class="d-flex justify-content-center align-items-center w-100" id="stepper">
																<ul class="nav nav-pills justify-content-center align-items-center w-100 mb-4" style="gap: 2rem;">
																	<h3 class="nav-link" id="stepper-2fa" style="color: var(--bs-gray-900); font-weight: 600; font-size: 1.25rem;">2FA</h3>
																	<h3 class="nav-link" id="stepper-personal" style="color: var(--bs-gray-900); font-weight: 600; font-size: 1.25rem;">Personal</h3>
																	<h3 class="nav-link" id="stepper-enroller" style="color: var(--bs-gray-900); font-weight: 600; font-size: 1.25rem;">Enroller</h3>
																	<h3 class="nav-link" id="stepper-email" style="color: var(--bs-gray-900); font-weight: 600; font-size: 1.25rem;">Verify Email</h3>
																	<h3 class="nav-link" id="stepper-finish" style="color: var(--bs-gray-900); font-weight: 600; font-size: 1.25rem;">Finish</h3>
																</ul>
															</div>
															<!-- <div class="progress" style="height: 30px;">
																<div id="progress-bar-step" class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2FA</div>
															</div> -->
														</div>
														<script>
															// Highlight stepper nav on step change
															function showStep(stepId) {
																$('#step-2fa, #step-personal, #step-enroller, #step-email, #step-finish').hide();
																$('#' + stepId).show();

																var steps = [
																	'step-2fa',
																	'step-personal',
																	'step-enroller',
																	'step-email',
																	'step-finish'
																];
																var stepLabels = {
																	'step-2fa': '2FA',
																	'step-personal': 'Personal',
																	'step-enroller': 'Enroller',
																	'step-email': 'Verify Email',
																	'step-finish': 'Finish'
																};
																var stepWidths = {
																	'step-2fa': '20%',
																	'step-personal': '40%',
																	'step-enroller': '60%',
																	'step-email': '80%',
																	'step-finish': '100%'
																};

																// Update progress bar
																if (stepWidths[stepId]) {
																	$('#progress-bar-step')
																		.css('width', stepWidths[stepId])
																		.attr('aria-valuenow', parseInt(stepWidths[stepId]))
																		.text(stepLabels[stepId]);
																}

																// Update stepper nav
																steps.forEach(function(s) {
																	$('#stepper-' + s.replace('step-', '')).removeClass('active');
																});
																$('#stepper-' + stepId.replace('step-', '')).addClass('active');
															}
														</script>
														<!-- Step 1: 2FA -->
														<!-- Step 1: 2FA as separate card -->
														<div id="step-2fa" class="mb-4 mt-4">
															<div class="card mt-10">
																<div class="card-header text-center align-items-center">
																	<h4 class="mb-0">Enter COOPPAY Google Auth Token</h4>
																</div>
																<div class="card-body">
																	<form class="mb-4">
																		<div class="form-group mb-3">
																			<input type="text" class="form-control" placeholder="Enter Your Six Digit Code">
																		</div>
																		<button type="submit" class="btn btn-primary mb-3">Verify Code</button>
																	</form>
																	<div class="mb-4">
																		<h5 class="alert-heading mb-3">How to Use Google Authenticator</h5>
																		<div class="alert alert-info">
																			<ol class="pl-3 mb-0">
																				<li>To generate Auth Token, click "Setup Google Authenticator" or enter the code from the mobile app.</li>
																				<li>If you don't have the app, <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Download Google Authenticator App</a> and scan the QR code.</li>
																				<li>Enter the six digit token to validate.</li>
																			</ol>
																		</div>
																	</div>
																	<div class="d-flex justify-content-end">
																		<button class="btn btn-secondary" onclick="showStep('step-personal')">Next Step</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Step 2: Personal Information -->
														<div id="step-personal" style="display:none;">
															
															<div class="card">
																<div class="card-header text-center align-items-center">
																	<h4 class="mb-0">Personal & Account Information</h4>
																</div>
																<div class="card-body">
																	<form class="w-100 row g-10 justify-content-center">
																		<div class="col-md-6">
																			<h4 class="mb-4">Personal Information</h4>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="firstName" placeholder="First Name" required>
																				<label for="firstName">First Name <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
																				<label for="lastName">Last Name <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="email" class="form-control" id="email" placeholder="Email" required>
																				<label for="email">Email <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
																				<label for="mobile">Mobile Number <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="whatsapp" placeholder="Enter WhatsApp Number" required>
																				<label for="whatsapp">WhatsApp Number <span class="text-danger">*</span></label>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<h4 class="mb-4 text-center">Account Information</h4>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="address" placeholder="Enter Address" required>
																				<label for="address">Address <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="city" placeholder="Enter City" required>
																				<label for="city">City <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="state" placeholder="State/Prov" required>
																				<label for="state">State/Prov <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<input type="text" class="form-control" id="zip" placeholder="Zip/Postal" required>
																				<label for="zip">Zip/Postal <span class="text-danger">*</span></label>
																			</div>
																			<div class="form-floating mb-3">
																				<select class="form-select" id="country" required>
																					<option value="">Choose Country</option>
																					<option value="CAN">Canada</option>
																					<option value="USA">United States</option>
																					<!-- Add more countries as needed -->
																				</select>
																				<label for="country">Country <span class="text-danger">*</span></label>
																			</div>
																		</div>
																		<div class="col-12 d-flex justify-content-end mt-3">
																			<button type="submit" class="btn btn-success px-5 me-2">Update Profile</button>
																			<button type="button" class="btn btn-secondary px-5" onclick="showStep('step-enroller')">Next Step</button>
																		</div>
																	</form>
																</div>
															</div>
														
														</div>
														<!-- Step 3: Enroller -->
														<div id="step-enroller" style="display:none;">
															<div class="card">
																<div class="card-header text-center align-items-center">
																	<h4 class="mb-0">Enroller Information</h4>
																</div>
																<div class="card-body">
																	<h4 class="mb-3 text-success text-center">Your enroller is Hip To Be Smart!</h4>
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-warning me-2" onclick="showStep('step-personal')">Previous</button>
																		<button type="button" class="btn btn-secondary" onclick="showStep('step-email')">Next</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Step 4: Verify Email -->
														<div id="step-email" style="display:none;">
															<div class="card">
																<div class="card-header text-center align-items-center">
																	<h4 class="mb-0">Verify Email</h4>
																</div>
																<div class="card-body">
																	<h4 class="mb-3 text-success text-center">Your email address already verified!</h4>
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-warning me-2" onclick="showStep('step-enroller')">Previous</button>
																		<button type="button" class="btn btn-secondary" onclick="showStep('step-finish')">Next</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Step 5: Finish -->
														<div id="step-finish" style="display:none;">
															<div class="card text-center mb-4">
																<div class="card-body">
																	<h2 class="text-success mb-3">Success!</h2>
																</div>
															
															<div class="row justify-content-center">
																<div class="col-4">
																	<img src="https://dev.coopincome.com/assets/ok.png" class="img-fluid" alt="Success">
																</div>
															</div>
															<div class="row justify-content-center mt-4 mb-10">
																<div class="col-8 text-center">
																	<h5>Account Settings Completed Successfully!</h5>
																</div>
															</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php require_once('inc/footer.php'); ?>
	
					<script>
						function showStep(stepId) {
							$('#step-2fa, #step-personal, #step-enroller, #step-email, #step-finish').hide();
							$('#' + stepId).show();
						}
					</script>
					
	
					<script>
						// Update progress bar on step change
						function showStep(stepId) {
							$('#step-2fa, #step-personal, #step-enroller, #step-email, #step-finish').hide();
							$('#' + stepId).show();

							var steps = {
								'step-2fa': {width: '20%', label: '2FA'},
								'step-personal': {width: '40%', label: 'Personal'},
								'step-enroller': {width: '60%', label: 'Enroller'},
								'step-email': {width: '80%', label: 'Verify Email'},
								'step-finish': {width: '100%', label: 'Finish'}
							};
							if (steps[stepId]) {
								$('#progress-bar-step')
									.css('width', steps[stepId].width)
									.attr('aria-valuenow', parseInt(steps[stepId].width))
									.text(steps[stepId].label);
							}
						}
					</script>
					<script>
																	// Set active class on current step
																	function updateStepperNav(activeStep) {
																		const steps = ['2fa', 'personal', 'enroller', 'email', 'finish'];
																		steps.forEach(function(step) {
																			const el = document.getElementById('stepper-' + step);
																			if (el) {
																				el.classList.remove('active');
																			}
																		});
																		const activeEl = document.getElementById('stepper-' + activeStep.replace('step-', ''));
																		if (activeEl) {
																			activeEl.classList.add('active');
																		}
																	}
																	// Patch showStep to update stepper nav
																	const origShowStep = window.showStep;
																	window.showStep = function(stepId) {
																		if (typeof origShowStep === 'function') origShowStep(stepId);
																		updateStepperNav(stepId);
																	};
																	// Initial highlight and show first step
																	document.addEventListener('DOMContentLoaded', function() {
																		updateStepperNav('step-2fa');
																		// Ensure first step is visible and others are hidden
																		$('#step-2fa').show();
																		$('#step-personal, #step-enroller, #step-email, #step-finish').hide();
																	});
																</script>
				</body>