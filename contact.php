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
									<div class="card card-flush">
                                        <div class="card-header">
                                           <h3 class="card-title align-items-start flex-column">
                                               <span class="card-label fw-bold text-gray-900">Contact Us</span>  
                                           </h3> 
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="notice d-flex bg-light-info rounded border-info border border-dashed p-6"> 
												<i class="ki-duotone ki-information fs-2tx text-info me-4">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i> 
												<div class="d-flex flex-stack flex-grow-1"> 
													<div class="fw-semibold">
														<h4 class="text-gray-900 "><strong>Robert</strong>, Please be sure to clearly state your question and include your: <strong>NAME, EMAIL ADDRESS</strong> </h4>
														<div class="fs-6 text-gray-700">We will do our best to answer your question within 24Hrs, however, expect delays. All questions will be answered as quickly as possible.</div>
													</div> 
												</div> 
											</div>
                                            <form action="" method="" class="invite-form mt-10"> 
                                                <div class="row g-3">
                                                    <div class="col-md-6"> 
                                                        <div class="mb-5">
                                                            <label class="required form-label">My Name:</label>
                                                            <input type="text" class="form-control form-control-solid" readonly placeholder="Your Name" value="Robert Parker">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-5">
                                                            <label class="required form-label">My Email:</label>
                                                            <input type="email" class="form-control form-control-solid" readonly placeholder="Email Address" value="eba247@coopcf.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-10">
                                                            <label class="required form-label">Please State Your Questions Clearly: *</label>
                                                            <textarea name=""  class="form-control"  id="" rows="4"></textarea> 
                                                        </div>
                                                    
                                                    </div> 
                                                </div> 

                                                <!-- Button -->
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="btn btn-primary">Send Message</button>
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