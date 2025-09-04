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
                                                    <div class="card mb-4">
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
                            <div class="card mb-4">
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
                                <div class="mb-4">
                                    <div class="btn-group w-100 mb-3" role="group" aria-label="Team Buttons" style="gap: 8px;">
                                        <button id="ci6But" class="btn btn-outline-primary fw-bold py-2 team-btn active" type="button" onclick="showTeamTab('ci6')">i6</button>
                                        <button id="ci22But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci22')">i22</button>
                                        <button id="ci53But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci53')">i53</button>
                                        <button id="ci110But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci110')">i110</button>
                                        <button id="ci525But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci525')">i525</button>
                                        <button id="ci1050But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci1050')">i1050</button>
                                    </div>
                                    <style>
                                    .team-btn {
                                        border-radius: 0.5rem !important;
                                        margin-right: 0 !important;
                                        transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                                        font-size: 1.1rem;
                                        box-shadow: 0 2px 8px rgba(30,45,100,0.08);
                                        background: #fff;
                                        border: 2px solid #1dbdef;
                                    }
                                    .team-btn.active, .team-btn.btn-dark {
                                        background: #0d6efd;
                                        color: #fff !important;
                                        border-color: #7f00ff;
                                        box-shadow: 0 4px 16px rgba(30,45,100,0.12);
                                    }
                                    .team-btn:hover, .team-btn:focus {
                                        background: #1dbdef;
                                        color: #fff !important;
                                        border-color: #7f00ff;
                                    }
                                    .btn-group.w-100 {
                                        display: flex;
                                        flex-wrap: wrap;
                                        gap: 8px;
                                    }
                                    </style>
                    <div class="mb-4">
                        <div class="card border-0 bg-light">
                            <div class="card-body py-3 px-4">
                                <h5 class="mb-0 fw-semibold text-primary" style="letter-spacing:0.5px;">
                                    My Personally Registered CoopIncome™ Members
                                </h5>
                            </div>
                        </div>
                    </div>
                    </div>
                              
                                    <div class="p_top_30 mt-10">
                                        <ul class="nav nav-tabs nav-justified mb-3" id="teamInnerTabs" style="background: #f8f9fa; border-radius: 0.5rem;">
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#level_all" id="action_level_all" data-toggle="tab" class="nav-link active show text-primary fw-bold" onclick="showInnerTab('all')" style="font-size: 1.1rem; border-radius: 0.5rem 0 0 0.5rem;">
                                                    <i class="fa fa-users me-1"></i> All
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#level_active" id="action_level_active" data-toggle="tab" class="nav-link text-success fw-bold" onclick="showInnerTab('active')" style="font-size: 1.1rem;">
                                                    <i class="fa fa-check-circle me-1"></i> Active
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#level_lapsed" id="action_level_lapsed" data-toggle="tab" class="nav-link text-warning fw-bold" onclick="showInnerTab('lapsed')" style="font-size: 1.1rem;">
                                                    <i class="fa fa-clock me-1"></i> Lapsed
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#level_free" id="action_level_free" data-toggle="tab" class="nav-link text-info fw-bold" onclick="showInnerTab('free')" style="font-size: 1.1rem; border-radius: 0 0.5rem 0.5rem 0;">
                                                    <i class="fa fa-gift me-1"></i> Free
                                                </a>
                                            </li>
                                        </ul>
                                        <style>
                                            #teamInnerTabs .nav-link {
                                                transition: background 0.2s, color 0.2s;
                                                margin-right: 2px;
                                                background: #fff;
                                                border: 1px solid #dee2e6;
                                            }
                                            #teamInnerTabs .nav-link.active,
                                            #teamInnerTabs .nav-link.show {
                                                background: #0d6efd;
                                                color: #fff !important;
                                               
                                                box-shadow: 0 2px 8px rgba(30, 45, 100, 0.08);
                                            }
                                            #teamInnerTabs .nav-link i {
                                                font-size: 1rem;
                                                vertical-align: middle;
                                            }
                                        </style>
                                    </div>
                                </div>

                                <div id="teamTablesArea">
    <!-- For each team and tab, create a dummy table. Only the selected team and tab's table is shown. -->
    <div id="teamTable-ci6-all" class="team-table-inner" style="display:block;">
        <table id="datatable-ci6-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Name</th><th>Total/Active</th></tr></thead>
            <tbody>
                <tr><td>Zak Lio</td><td>3 / 0</td></tr>
                <tr><td>Zackary Makcery</td><td>0 / 0</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci6-active" class="team-table-inner" style="display:none;">
        <table id="datatable-ci6-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Name</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Zak Lio</td><td>Active</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci6-lapsed" class="team-table-inner" style="display:none;">
        <table id="datatable-ci6-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Name</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Zackary Makcery</td><td>Lapsed</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci6-free" class="team-table-inner" style="display:none;">
        <table id="datatable-ci6-free" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Name</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Jane Doe</td><td>Free</td></tr>
            </tbody>
        </table>
    </div>
    <!-- Repeat for ci22, ci53, ci110, ci525, ci1050 with different dummy data -->
    <div id="teamTable-ci22-all" class="team-table-inner" style="display:none;">
        <table id="datatable-ci22-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Product</th><th>Qty</th><th>Price</th></tr></thead>
            <tbody>
                <tr><td>Apple</td><td>10</td><td>$5</td></tr>
                <tr><td>Banana</td><td>20</td><td>$3</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci22-active" class="team-table-inner" style="display:none;">
        <table id="datatable-ci22-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Product</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Apple</td><td>Active</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci22-lapsed" class="team-table-inner" style="display:none;">
        <table id="datatable-ci22-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Product</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Banana</td><td>Lapsed</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci22-free" class="team-table-inner" style="display:none;">
        <table id="datatable-ci22-free" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Product</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Orange</td><td>Free</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci53-all" class="team-table-inner" style="display:none;">
        <table id="datatable-ci53-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Country</th><th>Capital</th><th>Population</th></tr></thead>
            <tbody>
                <tr><td>USA</td><td>Washington</td><td>330M</td></tr>
                <tr><td>UK</td><td>London</td><td>67M</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci53-active" class="team-table-inner" style="display:none;">
        <table id="datatable-ci53-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Country</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>USA</td><td>Active</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci53-lapsed" class="team-table-inner" style="display:none;">
        <table id="datatable-ci53-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Country</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>UK</td><td>Lapsed</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci53-free" class="team-table-inner" style="display:none;">
        <table id="datatable-ci53-free" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Country</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Canada</td><td>Free</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci110-all" class="team-table-inner" style="display:none;">
        <table id="datatable-ci110-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Course</th><th>Duration</th><th>Fee</th></tr></thead>
            <tbody>
                <tr><td>Math</td><td>3 Months</td><td>$100</td></tr>
                <tr><td>Science</td><td>6 Months</td><td>$200</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci110-active" class="team-table-inner" style="display:none;">
        <table id="datatable-ci110-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Course</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Math</td><td>Active</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci110-lapsed" class="team-table-inner" style="display:none;">
        <table id="datatable-ci110-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Course</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Science</td><td>Lapsed</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci110-free" class="team-table-inner" style="display:none;">
        <table id="datatable-ci110-free" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Course</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>English</td><td>Free</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci525-all" class="team-table-inner" style="display:none;">
        <table id="datatable-ci525-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>City</th><th>State</th><th>Zip</th></tr></thead>
            <tbody>
                <tr><td>New York</td><td>NY</td><td>10001</td></tr>
                <tr><td>Los Angeles</td><td>CA</td><td>90001</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci525-active" class="team-table-inner" style="display:none;">
        <table id="datatable-ci525-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>City</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>New York</td><td>Active</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci525-lapsed" class="team-table-inner" style="display:none;">
        <table id="datatable-ci525-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>City</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Los Angeles</td><td>Lapsed</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci525-free" class="team-table-inner" style="display:none;">
        <table id="datatable-ci525-free" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>City</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Chicago</td><td>Free</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci1050-all" class="team-table-inner" style="display:none;">
        <table id="datatable-ci1050-all" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Company</th><th>Industry</th><th>Employees</th></tr></thead>
            <tbody>
                <tr><td>Acme Corp</td><td>Tech</td><td>500</td></tr>
                <tr><td>Beta LLC</td><td>Finance</td><td>200</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci1050-active" class="team-table-inner" style="display:none;">
        <table id="datatable-ci1050-active" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Company</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Acme Corp</td><td>Active</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci1050-lapsed" class="team-table-inner" style="display:none;">
        <table id="datatable-ci1050-lapsed" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Company</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Beta LLC</td><td>Lapsed</td></tr>
            </tbody>
        </table>
    </div>
    <div id="teamTable-ci1050-free" class="team-table-inner" style="display:none;">
        <table id="datatable-ci1050-free" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead><tr><th>Company</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td>Gamma Inc</td><td>Free</td></tr>
            </tbody>
        </table>
    </div>
<script>
var currentTeam = 'ci6';
var currentTab = 'all';
$(document).ready(function() {
    // Set initial active button for .btn-group.w-100
    $('.btn-group.w-100 > button').removeClass('active btn-dark').addClass('btn-outline-dark');
    $('#ci6But').addClass('active btn-dark').removeClass('btn-outline-dark');
});
function showTeamTab(team) {
    currentTeam = team;
    // Remove active class from all .btn-group.w-100 buttons
    $('.btn-group.w-100 > button').removeClass('active btn-dark').addClass('btn-outline-dark');
    // Add active class to the selected button
    $('#ci' + team + 'But').addClass('active btn-dark').removeClass('btn-outline-dark');
    // Hide all team tables
    $('.team-table-inner').hide();
    // Show current tab for selected team
    $('#teamTable-' + team + '-' + currentTab).show();
}
function showInnerTab(tab) {
    currentTab = tab;
    // Set active tab
    $('#teamInnerTabs .nav-link').removeClass('active show');
    $('#action_level_' + tab).addClass('active show');
    // Hide all team tables
    $('.team-table-inner').hide();
    // Show current team and tab
    $('#teamTable-' + currentTeam + '-' + tab).show();
}
$(document).ready(function() {
    // Initialize DataTables for all dummy tables
    $('table').each(function() {
        if (!$.fn.DataTable.isDataTable(this)) {
            $(this).DataTable({responsive: true});
        }
    });
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