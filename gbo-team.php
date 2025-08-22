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
								
                        <?php
                        // Example: Fetch member data from backend (replace with actual DB/API calls)
                        function getMembers($status = 'all') {
                            // Dummy data for demonstration
                            $members = [
                                'all' => [
                                    ['name' => 'Zak Lio', 'total' => 3, 'active' => 0],
                                    ['name' => 'Zackary Makcery', 'total' => 0, 'active' => 0],
                                    // ... add more as needed
                                ],
                                'active' => [
                                    ['name' => 'Will Sears', 'total' => 10, 'active' => 0],
                                    // ... add more as needed
                                ],
                                'lapsed' => [],
                                'suspended' => [],
                                'cancelled' => [],
                            ];
                            return $members[$status] ?? [];
                        }
                        ?>
                       
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
                                                    <div class="card shadow-sm mb-4">
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
                                                    <div class="card shadow-sm mb-4">
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
                            <div class="card shadow-sm mb-4">
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
<script>
$(function() {
    $('#registerTeammateForm').on('submit', function(e) {
        e.preventDefault();
        $('#errorMessageRegister').hide();
        $('#successMessageRegister').hide();
        // Example: AJAX call to register teammate (replace URL and logic as needed)
        $.ajax({
            url: 'register_teammate.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Demo: show success message
                $('#successMessageRegister').text('Teammate registered successfully!').show();
                $('#registerTeammateForm')[0].reset();
            },
            error: function() {
                $('#errorMessageRegister').text('Registration failed. Please try again.').show();
            }
        });
    });
});
</script>

                        <div class="card shadow mb-4">
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
                                <div class="mb-4">
                                    <div class="btn-group w-100" role="group" aria-label="Team Buttons">
                                        <button id="ci6But" class="btn btn-outline-dark font-weight-bold active" type="button" onclick="showTeamTab('ci6')">i6</button>
                                        <button id="ci22But" class="btn btn-outline-dark font-weight-bold" type="button" onclick="showTeamTab('ci22')">i22</button>
                                        <button id="ci53But" class="btn btn-outline-dark font-weight-bold" type="button" onclick="showTeamTab('ci53')">i53</button>
                                        <button id="ci110But" class="btn btn-outline-dark font-weight-bold" type="button" onclick="showTeamTab('ci110')">i110</button>
                                        <button id="ci525But" class="btn btn-outline-dark font-weight-bold" type="button" onclick="showTeamTab('ci525')">i525</button>
                                        <button id="ci1050But" class="btn btn-outline-dark font-weight-bold" type="button" onclick="showTeamTab('ci1050')">i1050</button>
<script>
function showTeamTab(team) {
    $('.btn-group button').removeClass('active');
    $('#' + team + 'But').addClass('active');
    var tabId = '#team_' + team;
    $('#teamTabsContent .tab-pane').removeClass('show active');
    $(tabId).addClass('show active');
    var table = $('#table-' + team).DataTable();
    if (table) table.draw(false);
}
$(document).ready(function() {
    $('#table-ci6').DataTable({responsive: true});
    $('#table-ci22').DataTable({responsive: true});
    $('#table-ci53').DataTable({responsive: true});
    $('#table-ci110').DataTable({responsive: true});
    $('#table-ci525').DataTable({responsive: true});
    $('#table-ci1050').DataTable({responsive: true});
});
</script>
                                    </div>
                                    <!-- Removed duplicate loadTeam and updateTable function definitions to prevent conflicts -->
                                </div>

                                <script>
                                function loadTeam(team) {
                                    $('.btn-group button').removeClass('active');
                                    $('#' + team + 'But').addClass('active');
                                    // Activate the 'All' tab using Bootstrap's tab API
                                    var allTab = document.querySelector('#level_all_tab');
                                    if (allTab) {
                                        var tabInstance = bootstrap.Tab.getOrCreateInstance(allTab);
                                        tabInstance.show();
                                    }
                                    // AJAX to fetch team members and update tables
                                    $.ajax({
                                        url: 'get_team_members.php',
                                        method: 'POST',
                                        data: { team: team },
                                        dataType: 'json',
                                        success: function(data) {
                                            updateTable('all', data.all);
                                            updateTable('active', data.active);
                                            updateTable('lapsed', data.lapsed);
                                            updateTable('suspended', data.suspended);
                                            updateTable('cancelled', data.cancelled);
                                            // Redraw DataTables after updating
                                            $('#table-all').DataTable().draw();
                                            $('#table-active').DataTable().draw();
                                            $('#table-lapsed').DataTable().draw();
                                            $('#table-suspended').DataTable().draw();
                                            $('#table-cancelled').DataTable().draw();
                                        }
                                    });
                                }

                                function updateTable(type, members) {
                                    var tbody = $('#tbody-' + type);
                                    tbody.empty();
                                    if (!members || members.length === 0) {
                                        tbody.append('<tr><td>No records</td><td></td></tr>');
                                    } else {
                                        members.forEach(function(member) {
                                            tbody.append('<tr><td>' + $('<div>').text(member.name).html() + '</td><td>' + member.total + ' / ' + member.active + '</td></tr>');
                                        });
                                    }
                                    // Redraw DataTable after DOM update
                                    var table = $('#table-' + type).DataTable();
                                    if (table) table.draw(false);
                                }
                                </script>
                                <div class="mb-3">
                                    <h5 class="font-weight-bold text-orange">My Personally Registered coopincome™ Members</h5>
                                </div>
                                <ul class="nav nav-tabs mb-3" id="memberTabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-weight-bold" id="level_all_tab" data-bs-toggle="tab" href="#level_all" role="tab">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" id="level_active_tab" data-bs-toggle="tab" href="#level_active" role="tab">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" id="level_lapsed_tab" data-bs-toggle="tab" href="#level_lapsed" role="tab">Lapsed</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" id="level_suspended_tab" data-bs-toggle="tab" href="#level_suspended" role="tab">Suspended</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold" id="level_cancelled_tab" data-bs-toggle="tab" href="#level_cancelled" role="tab">Cancelled</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="memberTabsContent">
                                    <div class="tab-pane fade show active" id="level_all" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="table-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Total/Active</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody-all">
                                                    <tr>
                                                        <td>Zak Lio</td>
                                                        <td>3 / 0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Zackary Makcery</td>
                                                        <td>0 / 0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Doe</td>
                                                        <td>5 / 2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="level_active" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="table-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Total/Active</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody-active">
                                                    <?php foreach(getMembers('active') as $member): ?>
                                                        <tr>
                                                            <td><?= htmlspecialchars($member['name']) ?></td>
                                                            <td><?= $member['total'] ?> / <?= $member['active'] ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="level_lapsed" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="table-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Total/Active</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody-lapsed">
                                                    <?php $lapsed = getMembers('lapsed'); ?>
                                                    <?php if(empty($lapsed)): ?>
                                                        <tr><td>No records</td><td></td></tr>
                                                    <?php else: ?>
                                                        <?php foreach($lapsed as $member): ?>
                                                            <tr>
                                                                <td><?= htmlspecialchars($member['name']) ?></td>
                                                                <td><?= $member['total'] ?> / <?= $member['active'] ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="level_suspended" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="table-suspended" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Total/Active</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody-suspended">
                                                    <?php $suspended = getMembers('suspended'); ?>
                                                    <?php if(empty($suspended)): ?>
                                                        <tr><td>No records</td><td></td></tr>
                                                    <?php else: ?>
                                                        <?php foreach($suspended as $member): ?>
                                                            <tr>
                                                                <td><?= htmlspecialchars($member['name']) ?></td>
                                                                <td><?= $member['total'] ?> / <?= $member['active'] ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="level_cancelled" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="table-cancelled" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Total/Active</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody-cancelled">
                                                    <?php $cancelled = getMembers('cancelled'); ?>
                                                    <?php if(empty($cancelled)): ?>
                                                        <tr><td>No records</td><td></td></tr>
                                                    <?php else: ?>
                                                        <?php foreach($cancelled as $member): ?>
                                                            <tr>
                                                                <td><?= htmlspecialchars($member['name']) ?></td>
                                                                <td><?= $member['total'] ?> / <?= $member['active'] ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                     

  

                        <!-- DataTables JS initialization -->
                        <script>
                        $(document).ready(function() {
                            $('#table-all').DataTable();
                            $('#table-active').DataTable();
                            $('#table-lapsed').DataTable();
                            $('#table-suspended').DataTable();
                            $('#table-cancelled').DataTable();
                        });
                        </script>








								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		
        <!-- DataTables CDN CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
        <!-- DataTables CDN JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.3.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#table-all').DataTable({responsive: true});
            $('#table-active').DataTable({responsive: true});
            $('#table-lapsed').DataTable({responsive: true});
            $('#table-suspended').DataTable({responsive: true});
            $('#table-cancelled').DataTable({responsive: true});
        });
        </script>

<?php require_once('inc/footer.php'); ?>