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

                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="success-message"></div>
                        <div class="card shadow mb-4">
                            <div class="card-header align-items-center text-white">
                                <h5 class="mb-0">My Digital Wallets Transactions</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4 p-4 rounded-4 shadow bg-gradient border border-2 border-primary">
                                    <h5 class="mb-4 text-primary fw-bold d-flex align-items-center">
                                        <i class="fas fa-wallet fa-lg me-2"></i>
                                        Elizabeth, here are your <span class="text-dark ms-1">Digital Wallets Transactions in <span class="text-primary fw-bolder">coopincome™</span></span>
                                    </h5>
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-2">
                                            <div class="d-flex align-items-center bg-white rounded-3 p-2 shadow-sm">
                                                <img width="32" class="me-3" alt="Ethereum Wallet ID" src="https://dev.coopincome.com/assets/img/ethereum.png">
                                                <div>
                                                    <span class="text-secondary fw-semibold">Ethereum Wallet:</span>
                                                    <span class="badge bg-success ms-2 px-3 py-2 fs-6">1008:7b8d6564fe58b7129f9bf6c2f7a9fa44</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="d-flex align-items-center bg-white rounded-3 p-2 shadow-sm">
                                                <img width="32" class="me-3" alt="Solana Wallet ID" src="https://dev.coopincome.com/assets/img/solana.png">
                                                <div>
                                                    <span class="text-secondary fw-semibold">Solana Wallet:</span>
                                                    <span class="badge bg-warning text-dark ms-2 px-3 py-2 fs-6">Not Linked</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <span class="fs-5 text-dark fw-semibold">Available Balance:</span>
                                        <span class="fs-4 fw-bold text-success bg-light px-4 py-2 rounded-pill shadow-sm">$29,432.46</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
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
                                    <input type="text" id="customSearch" class="form-control w-25" placeholder="Search transactions...">
                                </div>
                                <div class="table-responsive">
                                    <table id="invoicesTable" class="table table-striped table-bordered table-hover">
                                        <thead class="text-black">
                                            <tr>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Fees</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Deposit</td>
                                                <td>$500.00</td>
                                                <td>$2.00</td>
                                                <td>Initial deposit</td>
                                                <td>2024-06-01</td>
                                            </tr>
                                            <tr>
                                                <td>Withdrawal</td>
                                                <td>$200.00</td>
                                                <td>$1.00</td>
                                                <td>ATM withdrawal</td>
                                                <td>2024-06-03</td>
                                            </tr>
                                            <tr>
                                                <td>Transfer</td>
                                                <td>$1000.00</td>
                                                <td>$3.00</td>
                                                <td>Sent to John Doe</td>
                                                <td>2024-06-05</td>
                                            </tr>
                                            <tr>
                                                <td>Deposit</td>
                                                <td>$750.00</td>
                                                <td>$2.50</td>
                                                <td>Salary payment</td>
                                                <td>2024-06-07</td>
                                            </tr>
                                            <tr>
                                                <td>Withdrawal</td>
                                                <td>$150.00</td>
                                                <td>$1.00</td>
                                                <td>POS purchase</td>
                                                <td>2024-06-10</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Fees</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
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

                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#invoicesTable').DataTable({
                            "pagingType": "simple_numbers",
                            "lengthMenu": [10, 25, 50, 100],
                            "language": {
                                "search": "_INPUT_",
                                "searchPlaceholder": "Search invoices..."
                            },
                            "columnDefs": [
                                { "orderable": false, "targets": 3 }
                            ]
                        });
                    });
                    </script>

<script>
$(document).ready(function() {
    var table = $('#invoicesTable').DataTable();
    $('#customSearch').on('keyup', function() {
        table.search(this.value).draw();
    });
});
</script>
						

 
		
<?php require_once('inc/footer.php'); ?>