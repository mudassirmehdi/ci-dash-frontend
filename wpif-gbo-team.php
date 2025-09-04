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
                        <div class="card mb-4">
                            <div class="card-header align-items-center text-white">
                                <div class="row w-100">
                                    <div class="col-md-4 mb-2 mb-md-0">
                                        <button class="btn btn-danger w-100 font-weight-bold" onclick="openModalAST()">Pay It Forward</button>
 
                                    </div>
                                    <div class="col-md-4 mb-2 mb-md-0">
                                        <button class="btn btn-info w-100 font-weight-bold" data-bs-toggle="modal" data-bs-target="#renewTeammateModal">Renew Teammate</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-warning w-100 font-weight-bold" data-bs-toggle="modal" data-bs-target="#addNewMember">Register A Teammate</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                             
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
                                    <table class="table table-striped table-bordered dataTable no-footer dtr-inline" id="invoicesTable" role="grid" aria-describedby="invoicesTable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Name</th>
                                                <th>Joined</th>
                                                <th>Total/Active</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-all">
                                            <?php
                                            // Example data array (replace with your actual data source)
                                            $members = [
                                                ["name" => "fssdf adssada", "joined" => "Aug 25, 2025 12:37:42", "total_active" => "0 / 0"],
                                                ["name" => "Yo Hey", "joined" => "Aug 24, 2025 01:25:18", "total_active" => "0 / 0"],
                                                ["name" => "Mudassar Mehdi", "joined" => "Aug 23, 2025 20:51:09", "total_active" => "0 / 0"],
                                                ["name" => "Amity Patton Edan Odonnell", "joined" => "Aug 23, 2025 20:49:40", "total_active" => "0 / 0"],
                                                ["name" => "MacKensie Lynn Ursula Austin", "joined" => "Aug 23, 2025 20:49:35", "total_active" => "0 / 0"],
                                                ["name" => "Zia Riley Colby Hodge", "joined" => "Aug 23, 2025 20:49:30", "total_active" => "0 / 0"],
                                                ["name" => "Indira Mason Dacey Mcclure", "joined" => "Aug 23, 2025 19:41:13", "total_active" => "0 / 0"],
                                                ["name" => "Bell Reynolds Brielle Coleman", "joined" => "Aug 23, 2025 19:41:07", "total_active" => "0 / 0"],
                                                ["name" => "Genevieve Roth Cailin Dixon", "joined" => "Aug 23, 2025 19:41:02", "total_active" => "0 / 0"],
                                                ["name" => "Kendall Berry", "joined" => "Aug 23, 2025 17:40:47", "total_active" => "0 / 0"],
                                                ["name" => "Bob Danker", "joined" => "Aug 23, 2025 17:33:56", "total_active" => "0 / 0"],
                                                ["name" => "Bill styles", "joined" => "Aug 23, 2025 17:32:36", "total_active" => "0 / 0"],
                                                ["name" => "88812412 41412", "joined" => "Aug 23, 2025 17:32:03", "total_active" => "0 / 0"],
                                                ["name" => "roger roger", "joined" => "Aug 23, 2025 17:29:43", "total_active" => "0 / 0"],
                                                ["name" => "new user", "joined" => "Aug 23, 2025 11:53:09", "total_active" => "0 / 0"],
                                            ];
                                            foreach ($members as $i => $member):
                                                $row_class = ($i % 2 == 0) ? "odd clickable" : "even clickable";
                                            ?>
                                            <tr role="row" class="<?= $row_class ?>" style="color: rgb(0, 0, 0);" data-member-name="<?= htmlspecialchars($member['name']) ?>">
                                                <td>
                                                    <span class="name-pill" style="font-weight: bold; color: inherit;">
                                                        <?= htmlspecialchars($member['name']) ?>
                                                    </span>
                                                </td>
                                                <td><?= htmlspecialchars($member['joined']) ?></td>
                                                <td><?= htmlspecialchars($member['total_active']) ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                       
                        <!-- Pay It Forward Modal -->
                        <div class="modal fade" id="payItForwardModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="text-align: center">
                                        <h4 class="modal-title" id="activateSingleTokenLabel">Pay It Forward for Free Member</h4>
                                    </div>
                                    <div class="modal-body">
                                        <section class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col-lg-8">
                                                    <div class="card mb-4">
                                                        <div class="card-body p-4">
                                                            <div id="errorMessageAST" style="display: none; font-weight: bold" class="alert alert-danger mb-3" role="alert"></div>
                                                            <div id="successMessageAST" style="display: none; font-weight: bold" class="alert alert-success mb-3" role="alert"></div>
                                                            <h4 class="mb-4 text-center" style="color: #5A2119">Pay It Forward Activation</h4>
                                                            <div class="form-group mb-3">
                                                                <label for="AST_donor_key" class="font-weight-bold mb-2" style="color: #1dbdef; font-size: 1.1rem; letter-spacing: 0.5px;">
                                                                    Recipient Registration Key
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                    <input name="AST_donor_key" maxlength="10" class="form-control" id="AST_donor_key" placeholder="Enter Recipient Registration Key" type="text" required>
                                                                    <div class="invalid-feedback">Please enter right recipient registration key.</div>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="activateSingleToken(1)" id="butAST1" style="background-color: #1dbdef !important; color: white; font-weight: bold">Activate Income6</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="activateSingleToken(2)" id="butAST3" style="background-color: #7f00ff !important; color: white; font-weight: bold">Activate income22</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="activateSingleToken(3)" id="butAST6" style="background-color: #DA291C !important; color: white; font-weight: bold">Activate Income53</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="activateSingleToken(4)" id="butAST100" style="background-color: #ffc72c !important; color: white; font-weight: bold">Activate income110</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="activateSingleToken(5)" id="butAST500" style="background-color: #3DDC84 !important; color: white; font-weight: bold">Activate income525</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="activateSingleToken(6)" id="butAST1000" style="background-color: #e6c200 !important; color: white; font-weight: bold">Activate income1050</button>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-dark w-100" id="cenAST" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Renew Teammate Modal -->
                        <div class="modal fade" id="renewTeammateModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="text-align: center">
                                        <h4 class="modal-title" id="renewTeammateLabel">Renew Teammate</h4>
                                    </div>
                                    <div class="modal-body">
                                        <section class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col-lg-8">
                                                    <div class="card  mb-4">
                                                        <div class="card-body p-4">
                                                            <div id="errorMessageRenew" style="display: none; font-weight: bold" class="alert alert-danger mb-3" role="alert"></div>
                                                            <div id="successMessageRenew" style="display: none; font-weight: bold" class="alert alert-success mb-3" role="alert"></div>
                                                            <h4 class="mb-4 text-center" style="color: #5A2119">Renew Teammate Activation</h4>
                                                            <div class="form-group mb-3">
                                                                <label for="renew_key" class="font-weight-bold mb-2" style="color: #1dbdef; font-size: 1.1rem; letter-spacing: 0.5px;">
                                                                    Recipient Registration Key
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                    <input name="renew_key" maxlength="10" class="form-control" id="renew_key" placeholder="Enter Recipient Registration Key" type="text" required>
                                                                    <div class="invalid-feedback">Please enter right recipient registration key.</div>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2 mb-3">
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="renewSingleToken(1)" id="butRenew1" style="background-color: #1dbdef !important; color: white; font-weight: bold">Renew Income6</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="renewSingleToken(2)" id="butRenew3" style="background-color: #7f00ff !important; color: white; font-weight: bold">Renew income22</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="renewSingleToken(3)" id="butRenew6" style="background-color: #DA291C !important; color: white; font-weight: bold">Renew Income53</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="renewSingleToken(4)" id="butRenew100" style="background-color: #ffc72c !important; color: white; font-weight: bold">Renew income110</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="renewSingleToken(5)" id="butRenew500" style="background-color: #3DDC84 !important; color: white; font-weight: bold">Renew income525</button>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="renewSingleToken(6)" id="butRenew1000" style="background-color: #e6c200 !important; color: white; font-weight: bold">Renew income1050</button>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-dark w-100" id="cenRenew" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
<script>
function openModalAST() {
    $('#payItForwardModal').modal('show');
}
</script>
<!-- Register A Teammate Modal -->
<div class="modal fade" id="addNewMember" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center">
                <h4 class="modal-title" id="addNewMemberLabel">Register A Teammate</h4>
            </div>
            <div class="modal-body">
                <section class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="card  mb-4">
                                <div class="card-body p-4">
                                    <div id="errorMessageRegister" style="display: none; font-weight: bold" class="alert alert-danger mb-3" role="alert"></div>
                                    <div id="successMessageRegister" style="display: none; font-weight: bold" class="alert alert-success mb-3" role="alert"></div>
                                    <h4 class="mb-4 text-center" style="color: #5A2119">Register New Teammate</h4>
                                    <form id="registerTeammateForm">
                                        <div class="form-group mb-3">
                                            <label for="teammate_name" class="font-weight-bold mb-2" style="color: #1dbdef; font-size: 1.1rem; letter-spacing: 0.5px;">
                                                Teammate Name
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                <input name="teammate_name" maxlength="50" class="form-control" id="teammate_name" placeholder="Enter Teammate Name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="teammate_email" class="font-weight-bold mb-2" style="color: #1dbdef; font-size: 1.1rem; letter-spacing: 0.5px;">
                                                Email Address
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                <input name="teammate_email" maxlength="100" class="form-control" id="teammate_email" placeholder="Enter Email Address" type="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="teammate_phone" class="font-weight-bold mb-2" style="color: #1dbdef; font-size: 1.1rem; letter-spacing: 0.5px;">
                                                Phone Number
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                <input name="teammate_phone" maxlength="20" class="form-control" id="teammate_phone" placeholder="Enter Phone Number" type="text">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success w-100 font-weight-bold">Register</button>
                                    </form>
                                    <button type="button" class="btn btn-dark w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


<!-- Member Details Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="memberModalTitle">
                    <i class="fa fa-user-circle me-2"></i>
                    Member Details - <span id="modalTableName"></span>
                </h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <!-- <div id="modalLoading" class="d-flex justify-content-center align-items-center" style="min-height:150px; display:none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div> -->
                <div id="modalTableWrapper" style="display:none;">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card  border-0">
                                <div class="card-body">
                                    <h5 class="card-title mb-3"><i class="fa fa-id-badge me-2"></i>Basic Info</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Name:</strong> <span id="modalName"></span></li>
                                        <li class="list-group-item"><strong>Email:</strong> <span id="modalEmail"></span></li>
                                        <li class="list-group-item"><strong>Registration Key:</strong> <span id="modalRegKey"></span></li>
                                        <li class="list-group-item"><strong>Mobile:</strong> <span id="modalMobile"></span></li>
                                        <li class="list-group-item"><strong>Joined:</strong> <span id="modalJoined"></span></li>
                                        <li class="list-group-item"><strong>Total/Active:</strong> <span id="modalTotalActive"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card  border-0">
                                <div class="card-body">
                                    <h5 class="card-title mb-3"><i class="fa fa-chart-bar me-2"></i>Status</h5>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="bg-light rounded p-2 mb-2">
                                                <span class="fw-bold text-primary">i6:</span>
                                                <span id="modalI6"></span>
                                            </div>
                                            <div class="bg-light rounded p-2 mb-2">
                                                <span class="fw-bold text-purple">i22:</span>
                                                <span id="modalI22"></span>
                                            </div>
                                            <div class="bg-light rounded p-2 mb-2">
                                                <span class="fw-bold text-danger">i53:</span>
                                                <span id="modalI53"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-light rounded p-2 mb-2">
                                                <span class="fw-bold text-warning">i110:</span>
                                                <span id="modalI110"></span>
                                            </div>
                                            <div class="bg-light rounded p-2 mb-2">
                                                <span class="fw-bold text-success">i525:</span>
                                                <span id="modalI525"></span>
                                            </div>
                                            <div class="bg-light rounded p-2 mb-2">
                                                <span class="fw-bold text-gold">i1050:</span>
                                                <span id="modalI1050"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fa fa-times me-1"></i>Close
                </button>
            </div> -->
        </div>
    </div>
</div>
<style>
.text-purple { color: #7f00ff !important; }
.text-gold { color: #e6c200 !important; }
</style>




                
              
                




                     
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
                                { "orderable": false, "targets": [] }
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
						
<script>
$(function() {
  // Table row/cell click handler for member details
  $('#invoicesTable tbody').on('click', 'tr, td', function() {
    var row = $(this).closest('tr');
    var name = row.find('td').eq(0).text().trim();
    // Show modal and loading spinner
    var modal = new bootstrap.Modal(document.getElementById('memberModal'));
    $('#modalTableName').text(name); // Set name in modal title
    $('#modalTableWrapper').hide();
    $('#modalLoading').show();
    modal.show();
    // AJAX to fetch member details
    $.ajax({
      url: 'get_member_details.php', // You must create this PHP endpoint
      method: 'POST',
      data: { name: name },
      dataType: 'json',
      success: function(data) {
        // Fill modal fields
        $('#modalName').text(data.name || '');
        $('#modalEmail').text(data.email || '');
        $('#modalRegKey').text(data.registration_key || '');
        $('#modalMobile').text(data.mobile || '');
        $('#modalJoined').text(data.joined || '');
        $('#modalTotalActive').text(data.total_active || '');
        $('#modalI6').text(data.i6_status || '');
        $('#modalI22').text(data.i22_status || '');
        $('#modalI53').text(data.i53_status || '');
        $('#modalI110').text(data.i110_status || '');
        $('#modalI525').text(data.i525_status || '');
        $('#modalI1050').text(data.i1050_status || '');
        $('#modalLoading').hide();
        $('#modalTableWrapper').show();
      },
      error: function() {
        $('#modalLoading').hide();
        $('#modalTableWrapper').show();
        $('#modalTableName').text('Error');
        $('#memberFieldsTable td').text('Could not load member details.');
      }
    });
  });
});
</script>
 
		
<?php require_once('inc/footer.php'); ?>