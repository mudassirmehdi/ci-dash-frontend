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
							<div class="container-fluid py-4">
								<!-- Section: We Prove It Free -->
								<div class="row mb-4">
									<div class="col-lg-10">
										<h1 class="fw-bold text-start" style="color: #f26f22;">We Prove It Free - (Non-Redeemable)</h1>
									</div>
								</div>
								<div class="row g-3 mb-4">
									<!-- Ignite Cards -->
									<?php
									$ignites = [
										[
											'id'=>'ignite6',
											'label'=>'i6',
											'amount'=>'$2,866.57',
											'modal'=>'ignite6',
											'title'=>'CoopIgnite 6 Potential Royalties',
											'today'=>'$1.6775',
											'week'=>'$1.6775',
											'month'=>'$2783.4125',
											'year'=>'$2866.5675',
											'overall'=>'$2866.5675'
										],
										[
											'id'=>'ignite22',
											'label'=>'i22',
											'amount'=>'$11,466.27',
											'modal'=>'ignite22',
											'title'=>'CoopIgnite 22 Potential Royalties',
											'today'=>'$8.6775',
											'week'=>'$8.6775',
											'month'=>'$11083.4125',
											'year'=>'$11466.2675',
											'overall'=>'$11466.2675'
										],
										[
											'id'=>'ignite53',
											'label'=>'i53',
											'amount'=>'$28,665.68',
											'modal'=>'ignite53',
											'title'=>'CoopIgnite 53 Potential Royalties',
											'today'=>'$21.6775',
											'week'=>'$21.6775',
											'month'=>'$27843.4125',
											'year'=>'$28665.6875',
											'overall'=>'$28665.6875'
										],
										[
											'id'=>'ignite110',
											'label'=>'i110',
											'amount'=>'$57,331.35',
											'modal'=>'ignite110',
											'title'=>'CoopIgnite 110 Potential Royalties',
											'today'=>'$45.6775',
											'week'=>'$45.6775',
											'month'=>'$55683.4125',
											'year'=>'$57331.3575',
											'overall'=>'$57331.3575'
										],
										[
											'id'=>'ignite525',
											'label'=>'i525',
											'amount'=>'$286,656.75',
											'modal'=>'ignite525',
											'title'=>'CoopIgnite 525 Potential Royalties',
											'today'=>'$218.6775',
											'week'=>'$218.6775',
											'month'=>'$278343.4125',
											'year'=>'$286656.7575',
											'overall'=>'$286656.7575'
										],
										[
											'id'=>'ignite1050',
											'label'=>'i1050',
											'amount'=>'$573,313.50',
											'modal'=>'ignite1050',
											'title'=>'CoopIgnite 1050 Potential Royalties',
											'today'=>'$437.6775',
											'week'=>'$437.6775',
											'month'=>'$556683.4125',
											'year'=>'$573313.5075',
											'overall'=>'$573313.5075'
										],
									];
									foreach($ignites as $ignite): ?>
									<div class="col-md-4 col-lg-2">
										<div class="card border-primary shadow h-100">
											<a href="#" data-bs-toggle="modal" data-bs-target="#<?= $ignite['modal'] ?>" class="text-decoration-none">
												<div class="card-body text-center">
													<div class="fw-bold fs-4 text-primary"><?= $ignite['label'] ?></div>
													<div class="fw-bold fs-5 text-dark"><?= $ignite['amount'] ?></div>
												</div>
											</a>
										</div>
									</div>
									<!-- Modal for Ignite -->
									<div class="modal fade" id="<?= $ignite['modal'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $ignite['modal'] ?>Label" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content rounded-4 shadow-lg border-0">
												<div class="modal-header bg-gradient-primary text-white rounded-top-4">
													<div class="d-flex align-items-center w-100">
														<div class="me-2">
															<i class="fa fa-fire fs-3 text-warning"></i>
														</div>
														<h5 class="modal-title flex-grow-1" style="font-size: 18px; font-weight: bold;" id="<?= $ignite['modal'] ?>Label">
															<?= $ignite['title'] ?> <span class="badge bg-danger ms-2">(Non-Redeemable)</span>
														</h5>
														<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												</div>
												<div class="modal-body p-4 bg-light">
													<div class="row g-3">
														<div class="col-12">
															<div class="card border-0 shadow-sm mb-2">
																<div class="card-body py-2 px-3 d-flex justify-content-between align-items-center">
																	<span class="fw-bold text-primary"><i class="fa fa-calendar-day me-2"></i>Today Aug 25</span>
																	<span class="fw-bold fs-5 text-dark"><?= $ignite['today'] ?></span>
																</div>
															</div>
														</div>
														<div class="col-12">
															<div class="card border-0 shadow-sm mb-2">
																<div class="card-body py-2 px-3 d-flex justify-content-between align-items-center">
																	<span class="fw-bold text-info"><i class="fa fa-calendar-week me-2"></i>Week of Aug 25</span>
																	<span class="fw-bold fs-5 text-dark"><?= $ignite['week'] ?></span>
																</div>
															</div>
														</div>
														<div class="col-12">
															<div class="card border-0 shadow-sm mb-2">
																<div class="card-body py-2 px-3 d-flex justify-content-between align-items-center">
																	<span class="fw-bold text-warning"><i class="fa fa-calendar-alt me-2"></i>Month of Aug</span>
																	<span class="fw-bold fs-5 text-dark"><?= $ignite['month'] ?></span>
																</div>
															</div>
														</div>
														<div class="col-12">
															<div class="card border-0 shadow-sm mb-2">
																<div class="card-body py-2 px-3 d-flex justify-content-between align-items-center">
																	<span class="fw-bold text-success"><i class="fa fa-calendar me-2"></i>Year 2025</span>
																	<span class="fw-bold fs-5 text-dark"><?= $ignite['year'] ?></span>
																</div>
															</div>
														</div>
														<div class="col-12">
															<div class="card border-0 shadow-sm mb-2 bg-gradient-info">
																<div class="card-body py-2 px-3 d-flex justify-content-between align-items-center">
																	<span class="fw-bold text-dark"><i class="fa fa-trophy me-2 text-warning"></i>Overall</span>
																	<span class="fw-bold fs-4 text-success currency-field"><?= $ignite['overall'] ?></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<!-- Section: CoopINCOME -->
							<div class="row align-items-center mb-4 user_acc_info">
								<div class="col-md-6">
									<h1 class="fw-bold text-start mb-0" style="color: #7f00ff;">
										 CoopINCOME <span class="badge bg-success ms-2">(Real Earning)</span>
									</h1>
								</div>
								<div class="col-md-6 text-end">
									<div class="d-inline-flex align-items-center gap-10">
										<h2 class="fw-bold mb-0 me-3">Pay It Forward:</h2>

										<div class="form-check form-switch d-flex align-items-center">
											<input class="form-check-input" type="checkbox" id="allowCiPifSwitch" checked onchange="setRenewUpgrade('allowCiPif', this.checked ? 'Y' : 'N'); updateAutoRenewLabel('allowCiPifStatus', this.checked)">
											<label class="form-check-label fw-bold ms-2" for="allowCiPifSwitch">
												<span id="allowCiPifStatus" style="color: #198754;">Auto Renew</span>
											</label>
										</div>
	
									</div>
								</div>
							</div>
							<div class="row user_acc_info mb-4">
								<?php
								$incomeLevels = [
									[
										'id' => 'income6',
										'label' => 'i6',
										'amount' => '$50.25',
										'qualified' => 'No',
										'exp' => 'Dec 31',
										'year' => '$50.25',
										'overall' => '$50.25',
										'modalId' => 'income6',
										'autoRenew' => true,
									],
									[
										'id' => 'income22',
										'label' => 'i22',
										'amount' => '$89.25',
										'qualified' => 'No',
										'exp' => 'Dec 31',
										'year' => '$89.25',
										'overall' => '$89.25',
										'modalId' => 'income22',
										'autoRenew' => true,
									],
									[
										'id' => 'income53',
										'label' => 'i53',
										'amount' => '$192.50',
										'qualified' => 'No',
										'exp' => 'Dec 31',
										'year' => '$192.50',
										'overall' => '$192.50',
										'modalId' => 'income53',
										'autoRenew' => true,
									],
									[
										'id' => 'income110',
										'label' => 'i110',
										'amount' => '$325.00',
										'qualified' => 'No',
										'exp' => 'Dec 31',
										'year' => '$325.00',
										'overall' => '$325.00',
										'modalId' => 'income110',
										'autoRenew' => true,
									],
									[
										'id' => 'income525',
										'label' => 'i525',
										'amount' => '$700.00',
										'qualified' => 'No',
										'exp' => 'Dec 31',
										'year' => '$700.00',
										'overall' => '$700.00',
										'modalId' => 'income525',
										'autoRenew' => true,
									],
									[
										'id' => 'income1050',
										'label' => 'i1050',
										'amount' => '$1,650.00',
										'qualified' => 'No',
										'exp' => 'Dec 31',
										'year' => '$1,650.00',
										'overall' => '$1,650.00',
										'modalId' => 'income1050',
										'autoRenew' => true,
									],
								];
								foreach ($incomeLevels as $income):
								?>
								<div class="col-lg-4 col-md-4 mb-3">
									<div class="card shadow-sm h-100 text-center border-primary">
										<div class="card-body">
											<div class="d-flex justify-content-between align-items-center mb-2">
												<span class="fw-bold fs-4 text-primary"><?= $income['label'] ?></span>
												<span class="badge bg-secondary"><?= $income['exp'] ?></span>
											</div>
											<div class="fw-bold fs-5 text-dark mb-1"><?= $income['amount'] ?></div>
											<small class="text-muted">Qualified: <span class="fw-bold"><?= $income['qualified'] ?></span></small>
											<div class="mt-2 mb-2">
												<button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="modal" data-bs-target="#<?= $income['modalId'] ?>">
													Details
												</button>
											</div>
											<div class="d-flex justify-content-center align-items-center mt-2">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="<?= $income['id'] ?>_autoRenew" <?= $income['autoRenew'] ? 'checked' : '' ?> onchange="setRenewUpgrade('<?= $income['label'] ?>_Auto', this.checked ? 'Y' : 'N'); updateAutoRenewLabel('<?= $income['id'] ?>_autoRenewLabel', this.checked)">
													<label class="form-check-label fw-bold ms-2" for="<?= $income['id'] ?>_autoRenew" id="<?= $income['id'] ?>_autoRenewLabel" style="color: <?= $income['autoRenew'] ? '#198754' : '#dc3545' ?>;">
														Auto Renew <?= $income['autoRenew'] ? '' : '(inactive)' ?>
													</label>
												</div>
											</div>
										
										</div>
									</div>
									<!-- Modal -->
									<div class="modal fade" id="<?= $income['modalId'] ?>" tabindex="-1" aria-labelledby="<?= $income['modalId'] ?>Label" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content rounded-4 shadow-lg border-0">
												<div class="modal-header bg-gradient-primary text-white rounded-top-4">
													<h5 class="modal-title fw-bold" id="<?= $income['modalId'] ?>Label">CoopINCOME <?= $income['label'] ?></h5>
													<button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body p-4 bg-light">
													<div class="row g-2">
														<div class="col-12">
															<div class="d-flex justify-content-between">
																<span class="fw-bold text-primary"><i class="fa fa-calendar-day me-2"></i>Today Aug 27</span>
																<span class="fw-bold fs-5 text-dark">$0.00</span>
															</div>
														</div>
														<div class="col-12">
															<div class="d-flex justify-content-between">
																<span class="fw-bold text-info"><i class="fa fa-calendar-week me-2"></i>Week of Aug 25</span>
																<span class="fw-bold fs-5 text-dark">$0.00</span>
															</div>
														</div>
														<div class="col-12">
															<div class="d-flex justify-content-between">
																<span class="fw-bold text-warning"><i class="fa fa-calendar-alt me-2"></i>Month of Aug</span>
																<span class="fw-bold fs-5 text-dark">$0.00</span>
															</div>
														</div>
														<div class="col-12">
															<div class="d-flex justify-content-between">
																<span class="fw-bold text-success"><i class="fa fa-calendar me-2"></i>Year 2025</span>
																<span class="fw-bold fs-5 text-dark"><?= $income['year'] ?></span>
															</div>
														</div>
														<div class="col-12">
															<div class="d-flex justify-content-between">
																<span class="fw-bold text-dark"><i class="fa fa-trophy me-2 text-warning"></i>Overall</span>
																<span class="fw-bold fs-4 text-success"><?= $income['overall'] ?></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>




								<!-- Section: 3 Minutes-A-Day Steps -->
								<div class="row mt-20">
									<div class="col-lg-12">
										<div class="card shadow border-0 mb-4">
											<div class="card-header align-items-center text-white">
												<h2 class="fw-bold mb-0">Your coopincome <span style="color: #7f00ff">3 Minutes-A-Day</span></h2>
											</div>
											<div class="card-body">
												<ul class="nav nav-pills mb-10" id="stepsTab" role="tablist" >
													<li class="nav-item" role="presentation">
														<button class="nav-link active fw-bold" id="step1-tab" data-bs-toggle="pill" data-bs-target="#step1" type="button" role="tab">Step 1 - INVITE</button>
													</li>
													<li class="nav-item" role="presentation">
														<button class="nav-link fw-bold" id="step2-tab" data-bs-toggle="pill" data-bs-target="#step2" type="button" role="tab">Step 2 - SHARE</button>
													</li>
													<li class="nav-item" role="presentation">
														<button class="nav-link fw-bold" id="step3-tab" data-bs-toggle="pill" data-bs-target="#step3" type="button" role="tab">Step 3 - FOLLOW-UP</button>
													</li>
												</ul>
												<div class="tab-content" id="stepsTabContent">
													<div class="tab-pane fade show active" id="step1" role="tabpanel">
														<h3 class="fw-bold mb-3">Coop <span style="color: #7f00ff">3 Minutes-A-Day</span> - Continue to help your team, build your business and grow your income!</h3>
														<div class="col-lg-12 error-message mb-4">
															<div class="alert alert-info d-flex align-items-center justify-content-center shadow-lg rounded-3 p-3 fw-bold fs-5">
																<i class="fa fa-bullhorn fa-2x me-3"></i>
																<span>
																	You have not invited any new members today.
																	<span class="fw-bold text-warning">Get started now!</span>
																</span>
															</div>
														</div>
														<form class="row g-3">
															<!-- <div class="col-12">
																<div class="alert alert-success fw-bold" style="background-color:#f36f22; color: white; font-size: 16px;">
																	Congratulations you've invited <b>1</b> new person to coopincome today!
																</div>
															</div> -->
															<?php for($i=1;$i<=3;$i++): ?>
															<div class="col-md-4">
																<div class="card border-info mb-3">
																	<div class="card-header align-items-center bg-info text-white">
																		<h5 class="mb-0"><i class="fa fa-user"></i> #<?= $i ?></h5>
																	</div>
																	<div class="card-body">
																		<div class="mb-2">
																			<label class="form-label">First Name</label>
																			<input type="text" class="form-control" name="fname<?= $i ?>">
																		</div>
																		<div class="mb-2">
																			<label class="form-label">Last Name</label>
																			<input type="text" class="form-control" name="lname<?= $i ?>">
																		</div>
																		<div class="mb-2">
																			<label class="form-label">Email Address</label>
																			<input type="email" class="form-control" name="email<?= $i ?>">
																			<span class="text-danger small"></span>
																		</div>
																		<div class="mb-2">
																			<label class="form-label">Phone Number</label>
																			<input type="text" class="form-control" name="phone<?= $i ?>">
																		</div>
																	</div>
																</div>
															</div>
															<?php endfor; ?>
															<div class="col-12">
																<div class="d-flex flex-column align-items-end">
																	<strong>Type the text in the image to prove you are not a robot</strong>
																	<div class="d-flex align-items-center mt-2">
																		<button type="button" class="btn btn-outline-secondary me-2" id="captchaImageB"><i class="fa fa-refresh"></i></button>
																		<!-- <img src="../inc/captcha.php" id="captchaImage" alt="captcha"> -->
																		<input type="text" name="captchacheck" class="form-control ms-2" style="width: 160px;">
																	</div>
																	<span class="text-danger small mt-2"></span>
																</div>
															</div>
															<div class="col-12 text-end">
																<button type="button" class="btn btn-primary fw-bold invite-submit">INVITE!</button>
															</div>
														</form>
													</div>
													<div class="tab-pane fade" id="step2" role="tabpanel">
														<h3 class="mb-4">Share your guest link 
															<a target="_blank" href="https://dev.coopincome.com/1008" class="fw-bold text-primary">dev.coopincome.com/1008</a> 
															daily to help others.
														</h3>
														<div class="mb-3">
															<p class="fw-bold"><i class="fa fa-bullhorn"></i> Let the world know your earnings:</p>
														</div>
														<div class="row g-3">
															<div class="col-6 col-md-4 col-lg-2">
																<a href="#" class="btn btn-outline-primary w-100 mb-2"><i class="fab fa-facebook-f"></i> Facebook</a>
															</div>
															<div class="col-6 col-md-4 col-lg-2">
																<a href="#" class="btn btn-outline-info w-100 mb-2"><i class="fab fa-twitter"></i> Twitter</a>
															</div>
															<div class="col-6 col-md-4 col-lg-2">
																<a href="#" class="btn btn-outline-danger w-100 mb-2"><i class="fab fa-pinterest"></i> Pinterest</a>
															</div>
															<div class="col-6 col-md-4 col-lg-2">
																<a href="#" class="btn btn-outline-primary w-100 mb-2"><i class="fab fa-linkedin"></i> Linkedin</a>
															</div>
															<div class="col-6 col-md-4 col-lg-2">
																<a href="#" class="btn btn-outline-secondary w-100 mb-2"><i class="fab fa-telegram"></i> Telegram</a>
															</div>
															<div class="col-6 col-md-4 col-lg-2">
																<a href="#" class="btn btn-outline-warning w-100 mb-2"><i class="fab fa-reddit"></i> Reddit</a>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="step3" role="tabpanel">
														<h3>Make contact with your team (ACTIVE, FREE, and LAPSED GBO's).</h3>
													</div>
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
						


<script>
function setRenewUpgrade(type, value) {
	// Example: AJAX call to update auto-renew status (replace URL and logic as needed)
	$.ajax({
		url: 'update_auto_renew.php',
		method: 'POST',
		data: { type: type, value: value },
		success: function(response) {
			// Optionally handle response
			// For demo, you can log or show a message
			// console.log('Auto renew updated:', response);
		},
		error: function() {
			// Optionally handle error
			// console.error('Failed to update auto renew');
		}
	});
}

function updateAutoRenewLabel(labelId, checked) {
	var label = document.getElementById(labelId);
	if (checked) {
		label.textContent = 'Auto Renew';
		label.style.color = '#198754'; // green
	} else {
		label.textContent = ' Inactive';
		label.style.color = '#dc3545'; // red
	}
}
</script>

<?php require_once('inc/footer.php'); ?>
