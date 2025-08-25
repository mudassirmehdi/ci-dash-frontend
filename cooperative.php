<?php require_once ('inc/header.php'); ?>

<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		 <style>
            .form-select.form-select-solid{
                display:none;
            }
         </style>
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
								
                           

                    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                    <div class="card shadow-lg border-0 rounded-lg mb-5">
                        <div class="card-header bg-gradient-primary text-white py-4">
                            <h3 class="mb-0">My coopincome Cooperative Team</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-2 col-md-3 col-6 mb-3">
                                    <a href="#" class="btn btn-primary w-100 py-3 rounded-3 fw-bold fs-4">
                                        i6
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 mb-3">
                                    <a href="#" class="btn btn-light w-100 py-3 rounded-3 fw-bold fs-4">
                                        i22
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 mb-3">
                                    <a href="#" class="btn btn-light w-100 py-3 rounded-3 fw-bold fs-4">
                                        i53
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 mb-3">
                                    <a href="#" class="btn btn-light w-100 py-3 rounded-3 fw-bold fs-4">
                                        i110
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 mb-3">
                                    <a href="#" class="btn btn-light w-100 py-3 rounded-3 fw-bold fs-4">
                                        i525
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 mb-3">
                                    <a href="#" class="btn btn-light w-100 py-3 rounded-3 fw-bold fs-4">
                                        i1050
                                    </a>
                                </div>
                            </div>
                            <div class="alert alert-success mb-4">
                                Welcome <b>Elizabeth</b> to your <b>coopincome</b> Cooperative <b>you have 64 coopincome GBO's</b> in your team!
                                <br>
                                This is where you can view how many people are in each of your Crowd Stages. Your Personal coopincome GBO's are in <b>BOLD</b> and you can see their Registration Key. <br>Use this important information effectively to help grow your Active GBO team by <b>turning free into REAL Cash</b>.
                            </div>
                            <div class="mb-4">
                                <div class="mb-4">
                                    <ul class="nav nav-tabs nav-fill rounded-pill bg-light p-2 shadow-sm" id="coopTabs" role="tablist" style="gap: 8px;">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active rounded-pill fw-bold" id="level1-tab" data-bs-toggle="tab" data-bs-target="#level1" type="button" role="tab" aria-controls="level1" aria-selected="true" style="background: linear-gradient(90deg,#7f00ff,#e100ff); color: #fff;">
                                                Level 1<br>
                                                <span class="badge bg-white text-primary shadow-sm" style="font-size: 1rem;">3 GBOs</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-pill fw-bold" id="level2-tab" data-bs-toggle="tab" data-bs-target="#level2" type="button" role="tab" aria-controls="level2" aria-selected="false" style="background: linear-gradient(90deg,#00c6ff,#0072ff); color: #fff;">
                                                Level 2<br>
                                                <span class="badge bg-white text-primary shadow-sm" style="font-size: 1rem;">9 GBOs</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-pill fw-bold" id="level3-tab" data-bs-toggle="tab" data-bs-target="#level3" type="button" role="tab" aria-controls="level3" aria-selected="false" style="background: linear-gradient(90deg,#43cea2,#185a9d); color: #fff;">
                                                Level 3<br>
                                                <span class="badge bg-white text-primary shadow-sm" style="font-size: 1rem;">6 GBOs</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-pill fw-bold" id="level4-tab" data-bs-toggle="tab" data-bs-target="#level4" type="button" role="tab" aria-controls="level4" aria-selected="false" style="background: linear-gradient(90deg,#f7971e,#ffd200); color: #fff;">
                                                Level 4<br>
                                                <span class="badge bg-white text-primary shadow-sm" style="font-size: 1rem;">8 GBOs</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-pill fw-bold" id="level5-tab" data-bs-toggle="tab" data-bs-target="#level5" type="button" role="tab" aria-controls="level5" aria-selected="false" style="background: linear-gradient(90deg,#f953c6,#b91d73); color: #fff;">
                                                Level 5<br>
                                                <span class="badge bg-white text-primary shadow-sm" style="font-size: 1rem;">18 GBOs</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-pill fw-bold" id="level6-tab" data-bs-toggle="tab" data-bs-target="#level6" type="button" role="tab" aria-controls="level6" aria-selected="false" style="background: linear-gradient(90deg,#00f2fe,#4facfe); color: #fff;">
                                                Level 6<br>
                                                <span class="badge bg-white text-primary shadow-sm" style="font-size: 1rem;">20 GBOs</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <style>
                                    #coopTabs .nav-link {
                                        border: none !important;
                                        margin: 0 2px;
                                        transition: box-shadow 0.2s;
                                        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
                                    }
                                    #coopTabs .nav-link.active {
                                        box-shadow: 0 4px 16px rgba(127,0,255,0.15);
                                        font-weight: bold;
                                        outline: none;
                                    }
                                    #coopTabs .nav-link:focus {
                                        outline: none;
                                        box-shadow: 0 0 0 2px #7f00ff33;
                                    }
                                </style>
                            </div>

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
                                                            <input type="search" class="form-control form-control-sm d-inline-block w-auto ms-1" placeholder="" aria-controls="datatable" id="customSearchInput">
                                                        </label>
                                                    </div>
                                                </div>
                                 
                                            </div>

                            
                            <div class="tab-content" id="coopTabsContent">
                                <div class="tab-pane fade show active" id="level1" role="tabpanel" aria-labelledby="level1-tab">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered cooperative_team" id="datatable-level1">
                                            <thead>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="font-bold">
                                                    <td>1</td>
                                                    <td>Student Loan Fund</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Tenille Littlejohn</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Xenia Marketing</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="level2" role="tabpanel" aria-labelledby="level2-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered cooperative_team" id="datatable-level2">
                                            <thead>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>4</td>
                                                    <td>David Chalk</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Donald McClendon</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Chris asey</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>JOIN MY BIZ 8288</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>King Midas</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>PWilliam Fils</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Larry Kuntz</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Kat Barnes</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Sonia McLean</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="level3" role="tabpanel" aria-labelledby="level3-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered cooperative_team" id="datatable-level3">
                                            <thead>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="font-bold">
                                                    <td>13</td>
                                                    <td>Frederick Powlett</td>
                                                </tr>
                                                <tr class="font-bold">
                                                    <td>16</td>
                                                    <td>jacqueline ralph</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Scott Smith</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>Ronald Worsley</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>Ron Worsley</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>Robert  Bellot</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="level4" role="tabpanel" aria-labelledby="level4-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered cooperative_team" id="datatable-level4">
                                            <thead>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>40</td>
                                                    <td>Margaret Howard-Powlett</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>Tryvonn Powlett in trust Frederick Powlett</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>Adrian Powlett in trust Frederick Powlett</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>Caron Mogan</td>
                                                </tr>
                                                <tr>
                                                    <td>115</td>
                                                    <td>ROBERT WALTHER</td>
                                                </tr>
                                                <tr>
                                                    <td>116</td>
                                                    <td>jerry richardson</td>
                                                </tr>
                                                <tr>
                                                    <td>117</td>
                                                    <td>VICTORIA SHEPPARD</td>
                                                </tr>
                                                <tr>
                                                    <td>118</td>
                                                    <td>Lisa Ross</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="level5" role="tabpanel" aria-labelledby="level5-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered cooperative_team" id="datatable-level5">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>Abigail Powlett in trust Frederick Powlett</td></tr>
                                                <tr><td>ABUNDANCE 88</td></tr>
                                                <tr><td>Akeem Callender</td></tr>
                                                <tr><td>Alexander Powlett in trust Margaret Howard-Powlett</td></tr>
                                                <tr><td>Alexis Powlett in trust Frederick Powlett</td></tr>
                                                <tr><td>Amelia  Powlett in trust Margaret Howard-Powlett</td></tr>
                                                <tr><td>Boingotlo Banda</td></tr>
                                                <tr><td>Deiann TAYLOR</td></tr>
                                                <tr><td>Edita Cardeiro</td></tr>
                                                <tr><td>Emmanuel  Molapo</td></tr>
                                                <tr><td>farouk mokdad</td></tr>
                                                <tr><td>Frederick Powlett</td></tr>
                                                <tr><td>George Newton</td></tr>
                                                <tr><td>Margaret Howard-Powlett</td></tr>
                                                <tr><td>Melinda Marker</td></tr>
                                                <tr><td>Robert Herbert</td></tr>
                                                <tr><td>Stanley Mgbabu</td></tr>
                                                <tr><td>Willis Kioko</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="level6" role="tabpanel" aria-labelledby="level6-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered cooperative_team" id="datatable-level6">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>Andre Howard</td></tr>
                                                <tr><td>Angella Martelly</td></tr>
                                                <tr><td>BERTRAM HOLDER</td></tr>
                                                <tr><td>Cherifa  Taileb</td></tr>
                                                <tr><td>Edwin Lawrence</td></tr>
                                                <tr><td>Faith Adams in trust Tryvonn Powlett</td></tr>
                                                <tr><td>Fernando Sealy</td></tr>
                                                <tr><td>Honor Chase</td></tr>
                                                <tr><td>Juanita Leacock</td></tr>
                                                <tr><td>Kevin Curtis</td></tr>
                                                <tr><td>Louis Ifrene</td></tr>
                                                <tr><td>Mary Gathege</td></tr>
                                                <tr><td>Melvin Muthama</td></tr>
                                                <tr><td>Mohamed Boussetta</td></tr>
                                                <tr><td>NBO  Investments in trust Frederick Powlett</td></tr>
                                                <tr><td>R.A.D.M.I In trust Robert Herbert</td></tr>
                                                <tr><td>Solomon  Dludlu</td></tr>
                                                <tr><td>Sylvia Chandler</td></tr>
                                                <tr><td>Trydeijha Carter in trust Tryvonn Powlett</td></tr>
                                                <tr><td>ÜNAL DANIŞMAN</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
                <script>
                // Enable pagination for all DataTables
                $(document).ready(function() {
                    // Initialize DataTables for all cooperative_team tables
                    $('.cooperative_team').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false
                    });
                });
                
                </script>

               <script>
                                                $(document).ready(function() {
                                                    // Attach custom search to all DataTables
                                                    $('#customSearchInput').on('keyup', function() {
                                                        $('.cooperative_team').each(function() {
                                                            $(this).DataTable().search($('#customSearchInput').val()).draw();
                                                        });
                                                    });
                                                });
                                                </script>

                        </div>




								</div> 
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

          

						

 
		
<?php require_once('inc/footer.php'); ?>