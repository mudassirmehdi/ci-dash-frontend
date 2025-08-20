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
                                    <div class="card-header text-white align-items-center">
                                        <h5 class="mb-0">Buy Tokens</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <p>
                                                <b>Elizabeth,</b> to purchase <b>CoopIncome Token</b>, please enter the number of tokens you want to purchase and click the <b>Continue</b> button below.
                                            </p>
                                        </div>
                                        <form>
                                            <div class="row g-4 mb-3">
                                                <div class="col-md-6">
                                                    <label for="income6TokenCount" class="form-label fw-bold text-primary">Income6 Tokens</label>
                                                    <input type="number" class="form-control" id="income6TokenCount" placeholder="Enter number" min="0" value="0">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="income22TokenCount" class="form-label fw-bold text-info">Income22 Tokens</label>
                                                    <input type="number" class="form-control" id="income22TokenCount" placeholder="Enter number" min="0" value="0">
                                                </div>
                                            </div>
                                            <div class="row g-4 mb-3">
                                                <div class="col-md-6">
                                                    <label for="income53TokenCount" class="form-label fw-bold text-danger">Income53 Tokens</label>
                                                    <input type="number" class="form-control" id="income53TokenCount" placeholder="Enter number" min="0" value="0">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="income110TokenCount" class="form-label fw-bold text-warning">Income110 Tokens</label>
                                                    <input type="number" class="form-control" id="income110TokenCount" placeholder="Enter number" min="0" value="0">
                                                </div>
                                            </div>
                                            <div class="row g-4 mb-3">
                                                <div class="col-md-6">
                                                    <label for="income525TokenCount" class="form-label fw-bold text-success">Income525 Tokens</label>
                                                    <input type="number" class="form-control" id="income525TokenCount" placeholder="Enter number" min="0" value="0">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="income1050TokenCount" class="form-label fw-bold text-primary">Income1050 Tokens</label>
                                                    <input type="number" class="form-control" id="income1050TokenCount" placeholder="Enter number" min="0" value="0">
                                                </div>
                                            </div>
                                            <div class="row g-4 mb-3">
                                                <div class="col-md-6">
                                                    <label for="paymentMethod" class="form-label fw-bold text-warning">Payment Method</label>
                                                    <select class="form-select" id="paymentMethod">
                                                        <option value="crypto" selected>Cryptocurrency</option>
                                                        <option value="wallet">CoopWallet</option>
                                                        <option value="dollar">CoopDollar</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="blockChainType" class="form-label fw-bold text-danger">Blockchain</label>
                                                    <select class="form-select" id="blockChainType">
                                                        <option value="Tron" selected>Tron</option>
                                                        <option value="Ethereum">Ethereum</option>
                                                        <option value="Bitcoin">Bitcoin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-4 mb-3">
                                                <div class="col-md-6">
                                                    <label for="cryptoType" class="form-label fw-bold text-danger">Cryptocurrency</label>
                                                    <select class="form-select" id="cryptoType">
                                                        <option value="TRX" selected>TRX | Tron Blockchain</option>
                                                        <option value="USDTRX">USDTTRX | Tron Blockchain</option>
                                                        <option value="USDC20">USDC | Ethereum Blockchain</option>
                                                        <option value="USDT20">USDT | Ethereum Blockchain</option>
                                                        <option value="PYUSD">PYUSD | Ethereum Blockchain</option>
                                                        <option value="ETH">ETH | Ethereum Blockchain</option>
                                                        <option value="BTC">BTC | Bitcoin Blockchain</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 fw-bold text-danger">Total = $<span id="sum">0</span></p>
                                                        <p class="mb-0 fw-bold text-success">CoopWallet Balance $<span>29518.2</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mt-4">
                                                <button type="button" class="btn btn-success px-5 py-2 fw-bold">Continue</button>
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