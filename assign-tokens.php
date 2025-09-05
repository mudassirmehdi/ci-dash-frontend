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
												<h3 class="fw-bold m-0">Assign Tokens</h3>
											</div>
											<!--end::Card title-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-primary align-self-center">Assign</a>
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
														<h4 class="text-gray-900 fw-bold">Assign Token</h4>
														<div class="fs-6 text-gray-700">Elizabeth, to assign CoopIncome Tokens, please enter recipient registration key, the number of tokens you want to assign and click the Assign button below.</div>
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
														<label class="col-lg-4 fw-semibold text-muted">Assign To</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
														<input type="text" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
													<!--begin::Input group-->
													<div class="row mb-7 align-items-center">
														<!--begin::Label-->
														<label class="col-lg-4 fw-semibold text-muted">Number of <span class="text-danger">Income6</span> token(s)</label>
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
														<label class="col-lg-4 fw-semibold text-muted">Number of <span class="text-danger">income22</span> token(s)</label>
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
														<label class="col-lg-4 fw-semibold text-muted">Number of <span class="text-danger">Income53</span> token(s)</label>
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
														<label class="col-lg-4 fw-semibold text-muted">Number of <span class="text-danger">income110</span> token(s)</label>
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
														<label class="col-lg-4 fw-semibold text-muted">Number of <span class="text-danger">income525</span> token(s)</label>
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
														<label class="col-lg-4 fw-semibold text-muted">Number of <span class="text-danger">income1050</span> token(s)</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<input type="number" class="form-control" placeholder=""/>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													 
													 
												</div>

												<div class="col-lg-4">
													<div class="card bg-primary h-md-100" data-bs-theme="light">
														<!--begin::Body-->
														<div class="card-body d-flex flex-column pt-13 pb-14">
															<!--begin::Heading-->
															<div class="m-0">
																<!--begin::Title-->
																<h1 class="fw-semibold text-white text-center lh-lg mb-9">Quick Access to
																<br>
																<span class="fw-bolder">My token & Buy Tokens</span></h1>
																<!--end::Title-->
																<!--begin::Illustration-->
																<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12" style="background-image:url('assets/media/svg/illustrations/easy/5.svg')"></div>
																<!--end::Illustration-->
															</div>
															<!--end::Heading-->
															<!--begin::Links-->
															<div class="text-center">
																<!--begin::Link-->
																<a class="btn btn-sm bg-white btn-color-gray-800 me-2" href="my-tokens.php">My Tokens</a>
																<!--end::Link-->
																<!--begin::Link-->
																<a class="btn btn-sm bg-white btn-color-white bg-opacity-20" href="buy-tokens.php">Buy Tokens</a>
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