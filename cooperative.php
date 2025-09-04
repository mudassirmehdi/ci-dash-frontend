<?php require_once ('inc/header.php'); ?>

<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		 <style>
                                    .team-btn {
                                        border-radius: 0.5rem !important;
                                        margin-right: 0 !important;
                                        transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                                        font-size: 1.1rem;
                                        box-shadow: 0 2px 8px rgba(30,45,100,0.08);
                                        background: #fff;
                                        border: 2px solid #0d6efd;;
                                    }
                                    .team-btn.active, .team-btn.btn-dark {
                                        background: #0d6efd !important;
                                        color: #fff !important;
                                        border-color: #7f00ff;
                                        box-shadow: 0 4px 16px rgba(30,45,100,0.12);
                                    }
                                    .team-btn:hover, .team-btn:focus {
                                        background: #0d6efd;
                                        color: #fff !important;
                                        border-color: #7f00ff;
                                    }
                                    .btn-group.w-100 {
                                        display: flex;
                                        flex-wrap: wrap;
                                        gap: 8px;
                                    }
                                    </style>
                                            <!-- DataTables CDN CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
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
								
                 
                                                <div class="card  mb-4">
                            <div class="card-header align-items-center text-white">
                                <div class="row w-100">
                                <div class="btn-group w-100" role="group" aria-label="Team Buttons" style="gap: 8px;">
                                        <button id="ci6But" class="btn btn-outline-primary fw-bold py-2 team-btn active" type="button" onclick="showTeamTab('ci6')">i6</button>
                                        <button id="ci22But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci22')">i22</button>
                                        <button id="ci53But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci53')">i53</button>
                                        <button id="ci110But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci110')">i110</button>
                                        <button id="ci525But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci525')">i525</button>
                                        <button id="ci1050But" class="btn btn-outline-primary fw-bold py-2 team-btn" type="button" onclick="showTeamTab('ci1050')">i1050</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                 
                                    <div class="coop-info-box mb-4 p-4 rounded-3  text-center bg-white border border-2 border-primary" style="max-width: 600px; margin: 0 auto;">
                                        <h3 class="fw-bold text-primary mb-3">
                                            My CoopIncome Cooperative Team
                                        </h3>
                                        <div class="mb-2 fs-5">
                                            <span class="text-success fw-semibold">Welcome, Elizabeth!</span>
                                            <span class="mx-1">to your</span>
                                            <span class="text-primary fw-bold">CoopIncome Cooperative</span>
                                        </div>
                                        <div class="mb-3">
                                            <span class="badge bg-primary fs-5 px-4 py-2  text-white">
                                                64 CoopIncome GBO's in your team!
                                            </span>
                                        </div>
                                        <div class="mb-3 fs-6 text-secondary">
                                            View your <span class="fw-bold text-primary">Crowd Stages</span> and see how many people are in each.<br>
                                            <span class="fw-bold text-dark">Your Personal CoopIncome GBO's</span> are <span class="fw-bold text-dark">BOLD</span>.<br>
                                            See their <span class="fw-bold text-warning">Registration Key</span>.
                                        </div>
                                        <div class="fs-6 text-success fw-semibold">
                                            Use this info to grow your Active GBO team and turn free into <span class="fw-bold text-primary">REAL Cash</span>.
                                        </div>
                                    </div>
                                    <style>
                                    .text-gradient {
                                        background: #0d6efd !important;
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;
                                    }
                                    .bg-gradient {
                                        background: linear-gradient(90deg, #1dbdef 0%, #7f00ff 100%) !important;
                                    }
                                    </style>
                      
                              
                                    <div class="p_top_30 mt-10">
                                        <ul class="nav nav-tabs nav-justified mb-3" id="teamInnerTabs" style="background: #f8f9fa; border-radius: 0.5rem;">
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#tab-1" id="action_level_1" data-toggle="tab" class="nav-link active show text-primary fw-bold" onclick="showInnerTab('1')" style="font-size: 1.1rem; border-radius: 0.5rem 0 0 0.5rem;">
                                                    Level 1<br><span>3 GBOs</span>
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#tab-2" id="action_level_2" data-toggle="tab" class="nav-link   text-success fw-bold" onclick="showInnerTab('2')" style="font-size: 1.1rem;">
                                                    Level 2<br><span>9 GBOs</span>
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#tab-3" id="action_level_3" data-toggle="tab" class="nav-link text-warning fw-bold" onclick="showInnerTab('3')" style="font-size: 1.1rem;">
                                                    Level 3<br><span>6 GBOs</span>
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#tab-4" id="action_level_4" data-toggle="tab" class="nav-link text-info fw-bold" onclick="showInnerTab('4')" style="font-size: 1.1rem;">
                                                    Level 4<br><span>8 GBOs</span>
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#tab-5" id="action_level_5" data-toggle="tab" class="nav-link text-dark fw-bold" onclick="showInnerTab('5')" style="font-size: 1.1rem;">
                                                    Level 5<br><span>18 GBOs</span>
                                                </a>
                                            </li>
                                            <li class="nav-item parent-nav-item font-weight-bold">
                                                <a href="#tab-6" id="action_level_6" data-toggle="tab" class="nav-link text-secondary fw-bold" onclick="showInnerTab('6')" style="font-size: 1.1rem; border-radius: 0 0.5rem 0.5rem 0;">
                                                    Level 6<br><span>20 GBOs</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Add tables for each level tab below (example for ci6 team, repeat for other teams as needed) -->
                                        <div id="teamTable-ci6-1" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci6-1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zak Lio</td><td>3</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci6-2" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci6-2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zackary Makcery</td><td>9</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci6-3" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci6-3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Jane Doe</td><td>6</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci6-4" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci6-4" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>John Smith</td><td>8</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci6-5" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci6-5" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Emily Clark</td><td>18</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci6-6" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci6-6" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Michael Lee</td><td>20</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci22-1" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci22-1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Apple</td><td>3</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci22-2" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci22-2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Banana</td><td>9</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci22-3" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci22-3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Orange</td><td>6</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci22-4" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci22-4" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Grape</td><td>8</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci22-5" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci22-5" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Pineapple</td><td>18</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci22-6" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci22-6" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Watermelon</td><td>20</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci53-1" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci53-1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zak Lio</td><td>3</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci53-2" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci53-2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zackary Makcery</td><td>9</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci53-3" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci53-3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Jane Doe</td><td>6</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci53-4" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci53-4" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>John Smith</td><td>8</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci53-5" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci53-5" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Emily Clark</td><td>18</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci53-6" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci53-6" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Michael Lee</td><td>20</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci110-1" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci110-1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zak Lio</td><td>3</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci110-2" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci110-2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zackary Makcery</td><td>9</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci110-3" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci110-3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Jane Doe</td><td>6</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci110-4" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci110-4" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>John Smith</td><td>8</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci110-5" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci110-5" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Emily Clark</td><td>18</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci110-6" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci110-6" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Michael Lee</td><td>20</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci525-1" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci525-1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zak Lio</td><td>3</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci525-2" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci525-2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zackary Makcery</td><td>9</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci525-3" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci525-3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Jane Doe</td><td>6</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci525-4" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci525-4" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>John Smith</td><td>8</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci525-5" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci525-5" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Emily Clark</td><td>18</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci525-6" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci525-6" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Michael Lee</td><td>20</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci1050-1" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci1050-1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zak Lio</td><td>3</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci1050-2" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci1050-2" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Zackary Makcery</td><td>9</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci1050-3" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci1050-3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Jane Doe</td><td>6</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci1050-4" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci1050-4" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>John Smith</td><td>8</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci1050-5" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci1050-5" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Emily Clark</td><td>18</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="teamTable-ci1050-6" class="team-table-inner" style="display:none;">
                                            <table id="datatable-ci1050-6" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                <thead><tr><th>Name</th><th>GBOs</th></tr></thead>
                                                <tbody>
                                                    <tr><td>Michael Lee</td><td>20</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <script>
                                        var currentTeam = 'ci6';
                                        var currentTab = '1';
                                        function showInnerTab(tab) {
                                            currentTab = tab;
                                            $('#teamInnerTabs .nav-link').removeClass('active show');
                                            $('#action_level_' + tab).addClass('active show');
                                            $('.team-table-inner').hide();
                                            $('#teamTable-' + currentTeam + '-' + tab).show();
                                        }
                                        </script>
                                        <style>
                                            #teamInnerTabs .nav-link {
                                                transition: background 0.2s, color 0.2s;
                                                margin-right: 2px;
                                                background: #fff;
                                                border: 1px solid #dee2e6;
                                            }
                                            #teamInnerTabs .nav-link.active,
                                            #teamInnerTabs .nav-link.show {
                                                background: #0d6efd !important;
                                                color: #fff !important;
                                
                                                
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
    // Initialize DataTables for all team tables with pagination
    $('table[id^="datatable-"]').each(function() {
        if (!$.fn.DataTable.isDataTable(this)) {
            $(this).DataTable({
                responsive: true,
                paging: true,
                pageLength: 5,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                dom: 'lrtip' // Show pagination below table
            });
        }
    });
    // Show default table
    $('#teamTable-ci6-1').show();
});
</script>







								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		

        <!-- DataTables CDN JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/2.3.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.min.js"></script>
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