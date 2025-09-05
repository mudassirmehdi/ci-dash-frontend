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
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Buy Tokens</h3>
											</div>
											<!--end::Card title-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-primary align-self-center">Continue</a>
											<!--end::Action-->
										</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
										<div class="card-body p-9">
											<!--begin::Notice-->
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
														<h4 class="text-gray-900 fw-bold">CoopIncome Token can be used to activate, renew or transferred to others.</h4>
														<div class="fs-6 text-gray-700">Elizabeth, to purchase CoopIncome Token, please enter the number of tokens you want to purchase and click the Continue button below. </div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->

											<div class="row">
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of Income6 Tokens</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
														<input type="number" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of income22 Tokens</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="number" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of Income53 Tokens</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 d-flex align-items-center">
															<input type="number" class="form-control" placeholder=""/> 
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of Income110 Tokens</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<input type="number" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of Income525 Tokens  </label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<input type="number" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of Income1050 Tokens</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<input type="number" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Method</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-8">
															<select class="form-select" aria-label="Select example"> 
																<option value="1">Cryptocurrency</option>
																<option value="2">CoopWallet</option>
																<option value="3">CoopDollar</option>
															</select>
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Blockchain</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-8">
															<select class="form-select" aria-label="Select example"> 
																<option value="1">Tron</option>
																<option value="2">Ethereum</option>
																<option value="3">Bitcoin</option>
															</select>
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Cryptocurrency</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-8">
															<select class="form-select" aria-label="Select example"> 
																<option value="1">TRX | Tron Blockchain</option>
																<option value="2">USDTTRX | Tron Blockchain</option> 
															</select>
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Total </label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-8">
															<span class="fw-semibold fs-6 text-gray-800">$0</span>
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">CoopWallet Balance</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-8">
															<span class="fw-semibold fs-6 text-gray-800"> $29230.04</span>
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->
												</div>
												<div class="col-lg-4">
													<div class="card h-md-100" dir="ltr">
														<!--begin::Body-->
														<div class="card-body d-flex flex-column flex-center">
															<!--begin::Heading-->
															<div class="mb-2">
																<!--begin::Title-->
																<h1 class="fw-semibold text-gray-800 text-center lh-lg">Quick Access to 
																<br>
																<span class="fw-bolder">My token & Assign Tokens</span></h1>
																<!--end::Title-->
																<!--begin::Illustration-->
																<div class="py-10 text-center">
																	<img src="assets/media/svg/illustrations/easy/3.svg" class="theme-light-show w-200px" alt="">
																	<img src="assets/media/svg/illustrations/easy/3-dark.svg" class="theme-dark-show w-200px" alt="">
																</div>
																<!--end::Illustration-->
															</div>
															<!--end::Heading-->
															<!--begin::Links-->
															<div class="text-center mb-1">
																<!--begin::Link-->
																<a class="btn btn-sm btn-primary me-2" href="my-tokens.php">My Tokens</a>
																<!--end::Link-->
																<!--begin::Link-->
																<a class="btn btn-sm btn-light" href="assign-tokens.php">Assign Tokens</a>
																<!--end::Link-->
															</div>
															<!--end::Links-->
														</div>
														<!--end::Body-->
													</div>

												</div>
											</div>
											
										</div>
										<!--end::Card body-->
									</div>
								</div> 
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		
<?php require_once('inc/footer.php'); ?>