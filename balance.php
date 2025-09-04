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
								

                                <div class="row justify-content-center mt-5">
                                    <div class="col-md-6">
                                        <div class="card border rounded-4">
                                            <div class="card-header align-items-center text-center rounded-top-4">
                                                <h3 class="mb-0"><i class="bi bi-wallet2 me-2"></i>CoopWallet Balance Information</h3>
                                            </div>
                                            <div class="card-body bg-light">
                                                <h5 class="fw-bold text-black mb-4 text-center">Here you can see your account current balances.</h5>
                                                <div class="mb-3 p-3 rounded-3 bg-white shadow-sm d-flex align-items-center justify-content-between">
                                                    <span class="fs-5 fw-semibold text-dark"><i class="bi bi-currency-dollar text-success me-2"></i>USD</span>
                                                    <span class="fs-4 fw-bold text-success">$29,432.46</span>
                                                </div>
                                                <div class="mb-3 p-3 rounded-3 bg-white shadow-sm d-flex align-items-center justify-content-between">
                                                    <span class="fs-5 fw-semibold text-dark"><img src="https://img.icons8.com/color/24/000000/coins.png" class="me-2"/>CoopDollar</span>
                                                    <span class="fs-4 fw-bold text-primary">$85.74</span>
                                                </div>
                                                <div class="p-3 rounded-3 bg-white shadow-sm d-flex align-items-center justify-content-between">
                                                    <span class="fs-5 fw-semibold text-dark"><img src="https://img.icons8.com/color/24/000000/bitcoin.png" class="me-2"/>CoopBits</span>
                                                    <span>
                                                        <span class="fs-4 fw-bold text-warning">125,653</span>
                                                        <span class="fs-6 text-muted ms-2">(Current Value $0.075 USD)</span>
                                                    </span>
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