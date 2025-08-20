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
					<div id="kt_app_toolbar" class="app-toolbar"> 
						<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch"> 
							<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold"> 
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active" href="profile-overview.php">Overview</a>
								</li> 
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="profile-setting.php">Settings</a>
								</li>
								<li class="nav-item mt-2">
									<a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5" href="change-password.php">Change Password</a>
								</li>
							 
							</ul> 
						</div> 
					</div> 
					 
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
									<!--begin::Profile Overview Content-->
									<div class="wrapper wrapper-content py-4">
										<div class="row g-4">
											<div class="col-lg-12">
												<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mt-4">
													<!--begin::Icon-->
													<i class="ki-duotone ki-information fs-2tx text-warning me-4">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-semibold">
															<h4 class="text-gray-900 fw-bold" style="color: #ff9800;">My Information</h4>
															<ul style="list-style: none;padding: 0;">
																<li>Edit Your Personal Information</li>
															</ul>
															<p class="mt-3">Your <b>Business Name</b> will appear on your Registration Link 
																<a href="https://dev.coopincome.com/1008" class="dash_link" style="color: #1976d2;">https://dev.coopincome.com/1008</a> 
																if you’ve chosen one instead of your personal name.
															</p>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
											<div class="col-lg-12">
												<div class="success-message mb-3"></div>
												<div class="card mb-4">
													<div class="card-header px-4 py-3" style="align-items: center; border-radius: 8px 8px 0 0;">
														<h5 class="mb-0" style="line-height: 0;">Edit Your Information</h5>
													</div>
													<div class="card-body px-4 py-4" style="background: #fff; border-radius: 0 0 8px 8px;">
														<div class="dash_form_root dash_form_myinfo">
															<form method="post" class="form-horizontal profile-update" novalidate="novalidate" >
																<fieldset >
																	<div class="row g-3">
																		<div class="col-md-12 form-group mb-3">
																			<label class="form-label">Enroller Name</label>
																			<input type="text" name="enroller" disabled id="enroller" value="Hip To Be Smart" class="form-control" style="background: #f5f5f5;">
																		</div>
																	</div>
																	<div class="row g-3">
																		<div class="col-md-8 form-group mb-3">
																			<label class="form-label">Business Name</label>
																			<input type="text" name="business_name" id="business_name" value="" class="form-control" >
																		</div>
																		<div class="col-md-4 business_name_default_checkbox d-flex align-items-end mb-3">
																			<div class="i-checks">
																				<label class="form-check-label" for="business_name_default">
																																<input class="form-check-input h-20px w-20px" type="checkbox" id="business_name_default" name="business_name_default">
																					Use as Default
																				</label>
																			</div>
																		</div>
																	</div>
																	<div class="row g-3 mt-3 mb-3">
																		<?php
																		$autoUpgrades = [
																			'ci6_Auto' => 'CoopIncome6',
																			'ci22_Auto' => 'CoopIncome22',
																			'ci53_Auto' => 'CoopIncome53',
																			'ci110_Auto' => 'CoopIncome110',
																			'ci525_Auto' => 'CoopIncome525',
																			'ci1050_Auto' => 'CoopIncome1050'
																		];
																		foreach ($autoUpgrades as $key => $label): ?>
																		<div class="col-md-4 form-group text-left mb-3">
																			<label class="form-label font-weight-bold mr-3 mb-2">Auto Upgrade/Renew to <?= $label ?>:</label>
																			<div class="form-check form-switch form-check-custom form-check-solid d-flex align-items-center">
																				<input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked-<?= $key ?>" checked="checked" onchange="document.getElementById('status-<?= $key ?>').textContent = this.checked ? '(enabled)' : '(disabled)'; document.getElementById('status-<?= $key ?>').style.color = this.checked ? 'green' : 'red';" />
																				<span id="status-<?= $key ?>" style="color: green; margin-left: 8px;">(enabled)</span>
																			</div>
																		</div>
																		<?php endforeach; ?>
																	</div>
															
																	<div class="row g-3 mt-3 mb-3">
																		<div class="col-md-4 form-group text-left mb-3">
																			<label class="form-label font-weight-bold mr-3 mb-2">Enable Pay It Forward:</label>
																			<div class="form-check form-switch form-check-custom form-check-solid d-flex align-items-center">
																				<input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked-payitforward" checked="checked"
																					onchange="document.getElementById('status-payitforward').textContent = this.checked ? '(enabled)' : '(disabled)'; document.getElementById('status-payitforward').style.color = this.checked ? 'green' : 'red';">
																				<span id="status-payitforward" style="color: green; margin-left: 8px;">(enabled)</span>
																			</div> 
																		</div>
																	</div>
												
																	<div class="row g-3">
																		<?php
																		$qualified = [
																			'ci6_MatchStatus' => 'CoopIncome6',
																			'ci22_MatchStatus' => 'CoopIncome22',
																			'ci53_MatchStatus' => 'CoopIncome53',
																			'ci110_MatchStatus' => 'CoopIncome110',
																			'ci525_MatchStatus' => 'CoopIncome525',
																			'ci1050_MatchStatus' => 'CoopIncome1050'
																		];
																		foreach ($qualified as $key => $label): ?>
																		<div class="col-md-4 form-group mb-3">
																			<label class="form-label"><?= $label ?> Qualified</label>
																			<input type="text" name="<?= $key ?>" id="<?= $key ?>" value="No" class="form-control" readonly disabled style="background: #f5f5f5;">
																		</div>
																		<?php endforeach; ?>
																	</div>
																	<div class="row g-3">
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">First Name</label>
																			<input type="text" name="fname" id="fname" value="Elizabeth" class="form-control">
																		</div>
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">Last Name</label>
																			<input type="text" name="lname" id="lname" value="Grace" class="form-control">
																		</div>
																	</div>
																	<div class="row g-3">
																		<div class="col-md-6 form-group email_group mb-3" data-error="0">
																			<label class="form-label">Email</label>
																			<input type="email" name="email" id="email" value="coopcuir@gmail.com" class="form-control" placeholder="name@example.com" autocomplete="email">
																			<label id="email_status" class="error"></label>
																		</div>
																		<div class="col-md-6 form-group mb-3"></div>
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">
																				 Solana Digital Wallet ID
																			</label>
<div class="input-group input-group-solid mb-5">
	<span class="input-group-text" id="basic-addon1"><img alt="Solana Wallet ID" src="https://dev.coopincome.com/assets/img/solana.png"></span>
	<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" disabled />
</div>
																		</div>
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">
																				 Ethereum Digital Wallet ID
																			</label>
																			<div class="input-group input-group-solid mb-5">
    <span class="input-group-text" id="basic-addon1"><img alt="Ethereum Wallet ID" src="https://dev.coopincome.com/assets/img/ethereum.png"></span>
    <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" disabled/>
</div>
																		</div>
																	</div>
																	<div class="row g-3">
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">Phone</label>
																			<input type="text" name="mobile" id="mobile" value="1234567" class="form-control">
																		</div>
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">Address</label>
																			<input type="text" name="address" id="address" value="75-1. new street" class="form-control">
																		</div>
																	</div>
																	<div class="row g-3">
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">City</label>
																			<input type="text" name="city" id="city" value="Toronto" class="form-control">
																		</div>
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">State or Province</label>
																			<input type="text" name="state" id="state" value="ON" class="form-control">
																		</div>
																	</div>
																	<div class="row g-3">
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">Zip or Postal Code</label>
																			<input type="text" name="zip" id="zip" value="m5j 1r8" class="form-control">
																		</div>
																		<div class="col-md-6 form-group mb-3">
																			<label class="form-label">Country</label>
																			<select name="country" class="form-control" id="country">
																				<option value="">Choose Country</option>
																				<option value="AFG">Afghanistan</option>
																				<option value="ALB">Albania</option>
																				<option value="DZA">Algeria</option>
																				<option value="AND">Andorra</option>
																				<option value="AGO">Angola</option>
																				<option value="ATG">Antigua and Barbuda</option>
																				<option value="ARG">Argentina</option>
																				<option value="ARM">Armenia</option>
																				<option value="AUS">Australia</option>
																				<option value="AUT">Austria</option>
																				<option value="AZE">Azerbaijan</option>
																				<option value="BHS">Bahamas</option>
																				<option value="BHR">Bahrain</option>
																				<option value="BGD">Bangladesh</option>
																				<option value="BRB">Barbados</option>
																				<option value="BLR">Belarus</option>
																				<option value="BEL">Belgium</option>
																				<option value="BLZ">Belize</option>
																				<option value="BEN">Benin</option>
																				<option value="BTN">Bhutan</option>
																				<option value="BOL">Bolivia</option>
																				<option value="BIH">Bosnia and Herzegovina</option>
																				<option value="BWA">Botswana</option>
																				<option value="BRA">Brazil</option>
																				<option value="BRN">Brunei</option>
																				<option value="BGR">Bulgaria</option>
																				<option value="BFA">Burkina Faso</option>
																				<option value="BDI">Burundi</option>
																				<option value="KHM">Cambodia</option>
																				<option value="CMR">Cameroon</option>
																				<option value="CAN" selected="selected">Canada</option>
																				<option value="CPV">Cape Verde</option>
																				<option value="CAF">Central African Republic</option>
																				<option value="TCD">Chad</option>
																				<option value="CHL">Chile</option>
																				<option value="CHN">China</option>
																				<option value="COL">Colombia</option>
																				<option value="COM">Comoros</option>
																				<option value="COG">Congo</option>
																				<option value="CRI">Costa Rica</option>
																				<option value="CIV">Côte d'Ivoire</option>
																				<option value="HRV">Croatia</option>
																				<option value="CUB">Cuba</option>
																				<option value="CYP">Cyprus</option>
																				<option value="CZE">Czech Republic</option>
																				<option value="DNK">Denmark</option>
																				<option value="DJI">Djibouti</option>
																				<option value="DMA">Dominica</option>
																				<option value="DOM">Dominican Republic</option>
																				<option value="ECU">Ecuador</option>
																				<option value="EGY">Egypt</option>
																				<option value="SLV">El Salvador</option>
																				<option value="GNQ">Equatorial Guinea</option>
																				<option value="ERI">Eritrea</option>
																				<option value="EST">Estonia</option>
																				<option value="SWZ">Eswatini</option>
																				<option value="ETH">Ethiopia</option>
																				<option value="FJI">Fiji</option>
																				<option value="FIN">Finland</option>
																				<option value="FRA">France</option>
																				<option value="GAB">Gabon</option>
																				<option value="GMB">Gambia</option>
																				<option value="GEO">Georgia</option>
																				<option value="DEU">Germany</option>
																				<option value="GHA">Ghana</option>
																				<option value="GRC">Greece</option>
																				<option value="GRD">Grenada</option>
																				<option value="GTM">Guatemala</option>
																				<option value="GIN">Guinea</option>
																				<option value="GNB">Guinea-Bissau</option>
																				<option value="GUY">Guyana</option>
																				<option value="HTI">Haiti</option>
																				<option value="HND">Honduras</option>
																				<option value="HUN">Hungary</option>
																				<option value="ISL">Iceland</option>
																				<option value="IND">India</option>
																				<option value="IDN">Indonesia</option>
																				<option value="IRN">Iran</option>
																				<option value="IRQ">Iraq</option>
																				<option value="IRL">Ireland</option>
																				<option value="ISR">Israel</option>
																				<option value="ITA">Italy</option>
																				<option value="JAM">Jamaica</option>
																				<option value="JPN">Japan</option>
																				<option value="JOR">Jordan</option>
																				<option value="KAZ">Kazakhstan</option>
																				<option value="KEN">Kenya</option>
																				<option value="KIR">Kiribati</option>
																				<option value="KWT">Kuwait</option>
																				<option value="KGZ">Kyrgyzstan</option>
																				<option value="LAO">Laos</option>
																				<option value="LVA">Latvia</option>
																				<option value="LBN">Lebanon</option>
																				<option value="LSO">Lesotho</option>
																				<option value="LBR">Liberia</option>
																				<option value="LBY">Libya</option>
																				<option value="LIE">Liechtenstein</option>
																				<option value="LTU">Lithuania</option>
																				<option value="LUX">Luxembourg</option>
																				<option value="MDG">Madagascar</option>
																				<option value="MWI">Malawi</option>
																				<option value="MYS">Malaysia</option>
																				<option value="MDV">Maldives</option>
																				<option value="MLI">Mali</option>
																				<option value="MLT">Malta</option>
																				<option value="MHL">Marshall Islands</option>
																				<option value="MRT">Mauritania</option>
																				<option value="MUS">Mauritius</option>
																				<option value="MEX">Mexico</option>
																				<option value="FSM">Micronesia</option>
																				<option value="MDA">Moldova</option>
																				<option value="MCO">Monaco</option>
																				<option value="MNG">Mongolia</option>
																				<option value="MNE">Montenegro</option>
																				<option value="MAR">Morocco</option>
																				<option value="MOZ">Mozambique</option>
																				<option value="MMR">Myanmar</option>
																				<option value="NAM">Namibia</option>
																				<option value="NRU">Nauru</option>
																				<option value="NPL">Nepal</option>
																				<option value="NLD">Netherlands</option>
																				<option value="NZL">New Zealand</option>
																				<option value="NIC">Nicaragua</option>
																				<option value="NER">Niger</option>
																				<option value="NGA">Nigeria</option>
																				<option value="MKD">North Macedonia</option>
																				<option value="NOR">Norway</option>
																				<option value="OMN">Oman</option>
																				<option value="PAK">Pakistan</option>
																				<option value="PLW">Palau</option>
																				<option value="PSE">Palestine</option>
																				<option value="PAN">Panama</option>
																				<option value="PNG">Papua New Guinea</option>
																				<option value="PRY">Paraguay</option>
																				<option value="PER">Peru</option>
																				<option value="PHL">Philippines</option>
																				<option value="POL">Poland</option>
																				<option value="PRT">Portugal</option>
																				<option value="QAT">Qatar</option>
																				<option value="ROU">Romania</option>
																				<option value="RUS">Russia</option>
																				<option value="RWA">Rwanda</option>
																				<option value="KNA">Saint Kitts and Nevis</option>
																				<option value="LCA">Saint Lucia</option>
																			<option value="LCA">Saint Lucia</option>
																			<option value="VCT">Saint Vincent and the Grenadines</option>
																			<option value="WSM">Samoa</option>
																			<option value="SMR">San Marino</option>
																			<option value="STP">Sao Tome and Principe</option>
																			<option value="SAU">Saudi Arabia</option>
																			<option value="SEN">Senegal</option>
																			<option value="SRB">Serbia</option>
																			<option value="SYC">Seychelles</option>
																			<option value="SLE">Sierra Leone</option>
																			<option value="SGP">Singapore</option>
																			<option value="SVK">Slovakia</option>
																			<option value="SVN">Slovenia</option>
																			<option value="SLB">Solomon Islands</option>
																			<option value="SOM">Somalia</option>
																			<option value="ZAF">South Africa</option>
																			<option value="KOR">South Korea</option>
																			<option value="SSD">South Sudan</option>
																			<option value="ESP">Spain</option>
																			<option value="LKA">Sri Lanka</option>
																			<option value="SDN">Sudan</option>
																			<option value="SUR">Suriname</option>
																			<option value="SWE">Sweden</option>
																			<option value="CHE">Switzerland</option>
																			<option value="SYR">Syria</option>
																			<option value="TWN">Taiwan</option>
																			<option value="TJK">Tajikistan</option>
																			<option value="TZA">Tanzania</option>
																			<option value="THA">Thailand</option>
																			<option value="TLS">Timor-Leste</option>
																			<option value="TGO">Togo</option>
																			<option value="TON">Tonga</option>
																			<option value="TTO">Trinidad and Tobago</option>
																			<option value="TUN">Tunisia</option>
																			<option value="TUR">Turkey</option>
																			<option value="TKM">Turkmenistan</option>
																			<option value="TUV">Tuvalu</option>
																			<option value="UGA">Uganda</option>
																			<option value="UKR">Ukraine</option>
																			<option value="ARE">United Arab Emirates</option>
																			<option value="GBR">United Kingdom</option>
																			<option value="USA">United States</option>
																			<option value="URY">Uruguay</option>
																			<option value="UZB">Uzbekistan</option>
																			<option value="VUT">Vanuatu</option>
																			<option value="VAT">Vatican City</option>
																			<option value="VEN">Venezuela</option>
																			<option value="VNM">Vietnam</option>
																			<option value="YEM">Yemen</option>
																			<option value="ZMB">Zambia</option>
																			<option value="ZWE">Zimbabwe</option>
																		</select>
																	</div>
																</div>
																<div class="row g-3">
																	<div class="col-md-4 mb-3">
																		<label for="whatsApp" class="form-label">WhatsApp</label>
																		<input type="text" class="form-control" id="whatsApp" name="whatsApp" value="whatsapp" placeholder="Enter WhatsApp">
																	</div>
																	<div class="col-md-4 mb-3">
																		<label for="telegram" class="form-label">Telegram</label>
																		<input type="text" class="form-control" id="telegram" name="telegram" value="" placeholder="Enter Telegram">
																	</div>
																	<div class="col-md-4 mb-3">
																		<label for="FBMessenger" class="form-label">FBMessenger</label>
																		<input type="text" class="form-control" id="FBMessenger" name="FBMessenger" value="" placeholder="Enter FBMessenger">
																	</div>
																</div>
																<div class="form-group mt-4">
																	<div class="col-md-12">
																		<input type="hidden" name="donor_key" id="donor_key" value="1008">
																		<button class="btn btn-success profile-submit me-2" type="submit">Save changes</button>
																		<button class="btn btn-secondary dash_cancel_btn" type="button">Cancel</button>
																	</div>
																</div>
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end::Profile Overview Content-->
								 
								</div> 
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->



						

 
		
<?php require_once('inc/footer.php'); ?>