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

                    <div class="card shadow-lg border-0 rounded-lg mb-4">
                        <div class="card-header  text-white d-flex align-items-center justify-content-between">
                            <h5 class="mb-0"><i class="fas fa-file-invoice-dollar mr-2"></i>My Invoices</h5>
                        </div>
                        <div class="card-body bg-light">
                            <div class="mb-3">
                                <p class="font-weight-bold text-dark">
                                    <span class="text-primary">Elizabeth</span>, these are your <span class="text-warning">Invoices in coopincome™.</span>
                                </p>
                            </div>
                                                    
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
                                                            <input type="search" id="customSearch" class="form-control form-control-sm d-inline-block w-auto ms-1" placeholder="" aria-controls="datatable">
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            
                            <div class="table-responsive">
                                <table id="invoicesTable" class="table table-striped table-bordered table-hover" style="width:100%">
                                    <thead style=" color: #000;">
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Order ID</th>
                                            <th>Invoice Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="btn btn-primary btn-sm" href="#">2F01FECF28FEBDD03F</a></td>
                                            <td>e65d4ae7-0cb5-4aa5-9987-92f4c73cd4b9</td>
                                            <td>Nov 12, 2023 05:59:56</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">Pay</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-primary btn-sm" href="#">165CDF10ECA5DFECA8</a></td>
                                            <td>b808543a-8aed-4805-a2eb-d0b1edb7316f</td>
                                            <td>Nov 06, 2023 16:42:21</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">Pay</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-primary btn-sm" href="#">143ACC8DC36CA5CA6B</a></td>
                                            <td>203e1779-930c-489e-a65e-996fb631c35c</td>
                                            <td>Nov 02, 2023 09:43:28</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">Pay</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Order ID</th>
                                            <th>Invoice Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
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