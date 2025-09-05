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
										<div class="col-lg-12">
											<div class="mx-auto mb-10 row">
												<div class="col-lg-4"><button class="w-100 btn btn-color-gray-600 px-20 py-3 bg-info text-white">Pay It Forword</button></div>
												<div class="col-lg-4"><button class="w-100 btn btn-color-gray-600 px-20 py-3 bg-warning text-white">Renew Teammate</button></div>
												<div class="col-lg-4"><button class="w-100 btn btn-color-gray-600 px-20 py-3 bg-primary text-white">Register A Teammate</button></div>
											</div>
										</div>

										<div class="col-lg-12">
											<div class="nav-group nav-group-outline mx-auto mb-15 d-flex justify-content-between">
												<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-20 py-3 me-2 active">i6</button>
												<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-20 py-3 bg-info text-white">i22</button>
												<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-20 py-3">i53</button>
												<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-20 py-3">i110</button>
												<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-20 py-3">i525</button>
												<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-20 py-3">i1050</button>
											</div>
										</div> 

										<div class="col-lg-12">
											<div class="card shadow-sm">
												<div class="card-header">
													<h3 class="card-title">My Personally Registered CoopIncome™ Members </h3> 
												</div>
												<div class="card-body">  
													<ul class="nav nav-tabs gap-5 nav-line-tabs mb-5 fs-6">
														<li class="nav-item ">
															<a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_0">
																All
															</a>
														</li>

														<li class="nav-item ">
															<a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_1">
																Active
															</a>
														</li>

														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">
																Lapsed
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">
																Free
															</a>
														</li>
													</ul>

													<div class="tab-content" id="myTabContent">
														<div class="tab-pane fade show active" id="kt_tab_pane_0" role="tabpanel">
															<table id="datatable_level0" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
																<thead>
																	<tr class="fw-bold fs-6 text-gray-800 px-7">
																		<th>Position</th>
																		<th>Name</th> 
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>1</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>2</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>3</td>
																		<td>Tiger Nixon</td> 
																	</tr>  
																</tbody>
															</table>
														</div>

														<div class="tab-pane fade" id="kt_tab_pane_1" role="tabpanel">
															<table id="datatable_level1" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
																<thead>
																	<tr class="fw-bold fs-6 text-gray-800 px-7">
																		<th>Position</th>
																		<th>Name</th> 
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>1</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>2</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>3</td>
																		<td>Tiger Nixon</td> 
																	</tr>  
																</tbody>
															</table>
														</div>

														<div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
															<table id="datatable_level1" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
																<thead>
																	<tr class="fw-bold fs-6 text-gray-800 px-7">
																		<th>Position</th>
																		<th>Name</th> 
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>1</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>2</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>3</td>
																		<td>Tiger Nixon</td> 
																	</tr>

																	<tr>
																		<td>4</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>5</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>6</td>
																		<td>Tiger Nixon</td> 
																	</tr>  

																	<tr>
																		<td>7</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>8</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>9</td>
																		<td>Tiger Nixon</td> 
																	</tr>  
																</tbody>
															</table>
														</div>
														<div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
															<table id="datatable_level1" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
																<thead>
																	<tr class="fw-bold fs-6 text-gray-800 px-7">
																		<th>Position</th>
																		<th>Name</th> 
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>1</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>2</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>3</td>
																		<td>Tiger Nixon</td> 
																	</tr>  

																	<tr>
																		<td>4</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>5</td>
																		<td>Tiger Nixon</td> 
																	</tr> 

																	<tr>
																		<td>6</td>
																		<td>Tiger Nixon</td> 
																	</tr>
																</tbody>
															</table>
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