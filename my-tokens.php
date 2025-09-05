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
									  <div class="card mb-5">
										<div class="card-header align-items-center text-black">
											<h5 class="mb-0">My CoopIncome Tokens</h5>
										</div>
										<div class="card-body"> 
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
														<h4 class="text-gray-900 fw-bold"><b>Elizabeth</b>, this is your CoopIncome Tokens list.</h4>
														<div class="fs-6 text-gray-700">To search, please start typing in the search field - any token that has the value you are entering is automatically shown.</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->

											<p>To <b>Sort by any column</b>, click on any column name.</p>

											<ul class="nav nav-tabs mb-4" id="tokenTabs" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active fw-bold text-white me-2" id="income6-tab" data-bs-toggle="tab" data-bs-target="#income6" type="button" role="tab" aria-controls="income6" aria-selected="true" style="background: #1dbdef;">Income6</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fw-bold text-white me-2" id="income22-tab" data-bs-toggle="tab" data-bs-target="#income22" type="button" role="tab" aria-controls="income22" aria-selected="false" style="background: #7f00ff;">Income22</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fw-bold text-white me-2" id="income53-tab" data-bs-toggle="tab" data-bs-target="#income53" type="button" role="tab" aria-controls="income53" aria-selected="false" style="background: #DA291C;">Income53</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fw-bold text-white me-2" id="income110-tab" data-bs-toggle="tab" data-bs-target="#income110" type="button" role="tab" aria-controls="income110" aria-selected="false" style="background: #ffc72c;">Income110</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fw-bold text-white me-2" id="income525-tab" data-bs-toggle="tab" data-bs-target="#income525" type="button" role="tab" aria-controls="income525" aria-selected="false" style="background: #3DDC84;">Income525</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link fw-bold text-white" id="income1050-tab" data-bs-toggle="tab" data-bs-target="#income1050" type="button" role="tab" aria-controls="income1050" aria-selected="false" style="background: #e6c200;">Income1050</button>
												</li>
											</ul>
											<div class="mb-4">
												<b>View:</b>
												<div class="form-check form-check-inline ms-2">
													<input class="form-check-input" type="radio" name="radio-token-view" id="token-view-all" checked>
													<label class="form-check-label" for="token-view-all">All Tokens</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="radio-token-view" id="token-view-assigned">
													<label class="form-check-label" for="token-view-assigned">Assigned Tokens</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="radio-token-view" id="token-view-used">
													<label class="form-check-label" for="token-view-used">Used Tokens</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="radio-token-view" id="token-view-unused">
													<label class="form-check-label" for="token-view-unused">Unused Tokens</label>
												</div>
											</div>
											<div class="tab-content" id="tokenTabsContent">
												<!-- Unified DataTables controls for all tabs -->
												<div class="row mb-4">
													<div class="col-sm-12 col-md-6 mb-2 mb-md-0">
														<div class="dataTables_length" id="datatable_length">
															<label>Show
																<select name="datatable_length" aria-controls="datatable" class="form-select form-select-sm d-inline-block w-auto mx-1">
																	<option value="10">10</option>
																	<option value="25">25</option>
																	<option value="50">50</option>
																	<option value="100">100</option>
																</select>
																entries
															</label>
														</div>
													</div>
													<div class="col-sm-12 col-md-6">
														<div id="datatable_filter" class="dataTables_filter text-end">
															<label>Search:
																<input type="search" class="form-control form-control-sm d-inline-block w-auto ms-1" placeholder="" aria-controls="datatable">
															</label>
														</div>
													</div>
												</div>
												
											
												<div class="tab-pane fade show active" id="income6" role="tabpanel" aria-labelledby="income6-tab">
													<div class="table-responsive mt-3">
														<table id="datatable-income6" class="table table-striped table-bordered align-middle" style="width:100%">
															<thead>
																<tr>
																	<th>Token</th>
																	<th>Issue Date</th>
																	<th>Owner</th>
																	<th>Assignee Name</th>
																	<th>Expiry Date</th>
																	<th>Is Used</th>
																</tr>
															</thead>
															<tbody>
																<tr class="table-info text-white fw-bold" style="background: #1dbdef;">
																	<td>UNO 6-41a8d3ea-e119-428a-9c05-7bc134a7885f</td>
																	<td>Jul 05, 2025 19:42:38</td>
																	<td>7084596</td>
																	<td>Faith Adams in trust Tryvonn Powlett</td>
																	<td>N/A</td>
																	<td><span class="badge bg-success">Yes</span></td>
																</tr>
																<tr class="table-info text-white fw-bold" style="background: #1dbdef;">
																	<td>UNO 6-44e445be-ac30-4589-bec4-5d78f2b72c28</td>
																	<td>Jul 25, 2025 03:24:49</td>
																	<td>21678765</td>
																	<td>Frederick Powlett</td>
																	<td>Jan 25, 2026</td>
																	<td><span class="badge bg-danger">No</span></td>
																</tr>
																<tr class="table-info text-white fw-bold" style="background: #1dbdef;">
																	<td>UNO 6-67afe2d1-bb1b-4fb6-bcb6-488563af6d56</td>
																	<td>Jun 20, 2025 23:51:34</td>
																	<td>2357798</td>
																	<td>George Newton</td>
																	<td>N/A</td>
																	<td><span class="badge bg-success">Yes</span></td>
																</tr>
																<tr class="table-info text-white fw-bold" style="background: #1dbdef;">
																	<td>UNO 6-f0b8bb29-117a-4107-9985-51a021a267d9</td>
																	<td>Jun 20, 2025 23:51:17</td>
																	<td>48662882</td>
																	<td>Robert Herbert</td>
																	<td>N/A</td>
																	<td><span class="badge bg-success">Yes</span></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="tab-pane fade" id="income22" role="tabpanel" aria-labelledby="income22-tab">
													<div class="table-responsive mt-3">
														<table id="datatable-income22" class="table table-striped table-bordered align-middle" style="width:100%">
															<thead>
																<tr>
																	<th>Token</th>
																	<th>Issue Date</th>
																	<th>Owner</th>
																	<th>Assignee Name</th>
																	<th>Expiry Date</th>
																	<th>Is Used</th>
																</tr>
															</thead>
															<tbody style="background: #7f00ff; color: white; font-weight: bold;">
																<!-- No data available, but keep empty row for DataTables -->
															</tbody>
														</table>
													</div>
												</div>
												<div class="tab-pane fade" id="income53" role="tabpanel" aria-labelledby="income53-tab">
													<div class="table-responsive mt-3">
														<table id="datatable-income53" class="table table-striped table-bordered align-middle" style="width:100%">
															<thead>
																<tr>
																	<th>Token</th>
																	<th>Issue Date</th>
																	<th>Owner</th>
																	<th>Assignee Name</th>
																	<th>Expiry Date</th>
																	<th>Is Used</th>
																</tr>
															</thead>
															<tbody style="background: #DA291C; color: white; font-weight: bold;">
																<tr>
																	<td>CIN-53-5cda4115-a1b4-42a6-9dad-61ba07e30448</td>
																	<td>Aug 18, 2025 21:53:46</td>
																	<td>41768</td>
																	<td>Keith Sutherland</td>
																	<td>Feb 18, 2026</td>
																	<td>No</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="tab-pane fade" id="income110" role="tabpanel" aria-labelledby="income110-tab">
													<div class="table-responsive mt-3">
														<table id="datatable-income110" class="table table-striped table-bordered align-middle" style="width:100%">
															<thead>
																<tr>
																	<th>Token</th>
																	<th>Issue Date</th>
																	<th>Owner</th>
																	<th>Assignee Name</th>
																	<th>Expiry Date</th>
																	<th>Is Used</th>
																</tr>
															</thead>
															<tbody style="background: #ffc72c; color: white; font-weight: bold;">
																<tr>
																	<td>MEGA-100-f717a455-0ae2-4f66-bdd3-45419009ec53</td>
																	<td>Jun 14, 2025 11:19:59</td>
																	<td>94214547</td>
																	<td>Mel Mary</td>
																	<td>N/A</td>
																	<td>Yes</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="tab-pane fade" id="income525" role="tabpanel" aria-labelledby="income525-tab">
													<div class="table-responsive mt-3">
														<table id="datatable-income525" class="table table-striped table-bordered align-middle" style="width:100%">
															<thead>
																<tr>
																	<th>Token</th>
																	<th>Issue Date</th>
																	<th>Owner</th>
																	<th>Assignee Name</th>
																	<th>Expiry Date</th>
																	<th>Is Used</th>
																</tr>
															</thead>
															<tbody style="background: #3DDC84; color: white; font-weight: bold;">
																<!-- No data available, but keep empty row for DataTables -->
															</tbody>
														</table>
													</div>
												</div>
												<div class="tab-pane fade" id="income1050" role="tabpanel" aria-labelledby="income1050-tab">
													<div class="table-responsive mt-3">
														<table id="datatable-income1050" class="table table-striped table-bordered align-middle" style="width:100%">
															<thead>
																<tr>
																	<th>Token</th>
																	<th>Issue Date</th>
																	<th>Owner</th>
																	<th>Assignee Name</th>
																	<th>Expiry Date</th>
																	<th>Is Used</th>
																</tr>
															</thead>
															<tbody style="background: #e6c200; color: white; font-weight: bold;">
																<!-- No data available, but keep empty row for DataTables -->
															</tbody>
														</table>
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