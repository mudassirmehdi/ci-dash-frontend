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
								
                               
                            <div class="card shadow-lg mb-5">
                                <div class="card-header align-items-center text-white">
                                    <h5 class="mb-0">Assign Tokens</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <p>
                                            <b>Elizabeth,</b> to assign <b>CoopIncome Tokens</b>,
                                            please enter recipient registration key, the number of tokens you want to assign and click the <b>Assign</b> button below.
                                        </p>
                                    </div>
                                    <div class="alert alert-success mb-4" role="alert">
                                        You have <span class="fw-bold">19 <span class="text-danger">Income6</span></span>,
                                        <span class="fw-bold">0 <span class="text-danger">Income22</span></span>,
                                        <span class="fw-bold">0 <span class="text-danger">Income53</span></span>,
                                        <span class="fw-bold">0 <span class="text-danger">Income110</span></span>,
                                        <span class="fw-bold">0 <span class="text-danger">Income525</span></span> and
                                        <span class="fw-bold">0 <span class="text-danger">Income1050</span></span> token(s) available.
                                    </div>
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="donorKey" class="form-label">Assign To</label>
                                                <input type="text" class="form-control" id="donorKey" name="donorKey" placeholder="Enter recipient registration key">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="income6Count" class="form-label">Number of <b class="text-danger">Income6</b> token(s)</label>
                                                <input type="number" class="form-control" id="income6Count" name="income6Count" min="0" max="19" placeholder="Enter number of Income6 Tokens">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="income22Count" class="form-label">Number of <b class="text-danger">Income22</b> token(s)</label>
                                                <input type="number" class="form-control" id="income22Count" name="income22Count" min="0" max="0" placeholder="Enter number of Income22 Tokens">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="income53Count" class="form-label">Number of <b class="text-danger">Income53</b> token(s)</label>
                                                <input type="number" class="form-control" id="income53Count" name="income53Count" min="0" max="0" placeholder="Enter number of Income53 Tokens">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="income110Count" class="form-label">Number of <b class="text-danger">Income110</b> token(s)</label>
                                                <input type="number" class="form-control" id="income110Count" name="income110Count" min="0" max="0" placeholder="Enter number of Income110 Tokens">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="income525Count" class="form-label">Number of <b class="text-danger">Income525</b> token(s)</label>
                                                <input type="number" class="form-control" id="income525Count" name="income525Count" min="0" max="0" placeholder="Enter number of Income525 Tokens">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="income1050Count" class="form-label">Number of <b class="text-danger">Income1050</b> token(s)</label>
                                                <input type="number" class="form-control" id="income1050Count" name="income1050Count" min="0" max="0" placeholder="Enter number of Income1050 Tokens">
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn btn-warning px-5">Assign</button>
                                        </div>
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