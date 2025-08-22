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
								
                                <div class="card shadow-lg border-0 mb-5" style="max-width: 700px; margin: auto;">
                                    <div class="card-header align-items-center text-center">
                                        <h5 class="mb-0">Add Funds To My Digital Wallet</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <div class="mb-4 text-start">
                                            <p class="fw-bold mb-1" style="font-size: 1.1rem;">Elizabeth,</p>
                                            <p class="text-muted">This is where you can add funds to your digital wallet.</p>
                                        </div>
                                        <form class="addFundsToWallet-form">
                                            <div class="mb-3 text-danger show-error-message"></div>
                                            <div class="row g-3 align-items-center mb-3">
                                                <div class="col-md-3 text-start">
                                                    <label for="amount" class="form-label fw-bold text-danger">Amount:<span>*</span></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control " name="amount" id="amount" type="number" min="10" placeholder="Enter amount">
                                                    <span class="amount-status error small text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center mb-3">
                                                <div class="col-md-3 text-start">
                                                    <label for="blockChainType" class="form-label fw-bold text-danger">Blockchain</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-select " id="blockChainType">
                                                        <option value="Tron" selected>Tron</option>
                                                        <option value="Ethereum">Ethereum</option>
                                                        <option value="Bitcoin">Bitcoin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-center mb-4">
                                                <div class="col-md-3 text-start">
                                                    <label class="form-label fw-bold text-danger">Cryptocurrency</label>
                                                </div>
                                                <div class="col-md-8">
                                          
                                                    <select class="form-select mb-2" id="selectTron">
                                                        <option value="TRX" selected>TRX | Tron Blockchain</option>
                                                        <option value="USDTRX">USDTTRX | Tron Blockchain</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                                <button type="button" class="btn btn-danger btn-lg rounded-pill shadow">Submit</button>
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