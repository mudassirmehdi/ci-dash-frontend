 <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Header-->
						<div class="app-sidebar-header d-flex flex-column px-10 pt-8" id="kt_app_sidebar_header">
							<!--begin::Brand-->
							<div class="d-flex flex-stack mb-10">
								<!--begin::User 
								<div class=""> 
									<div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
										<div class="d-flex flex-center cursor-pointer symbol symbol-custom symbol-40px">
											<img src="assets/media/avatars/300-2.jpg" alt="image" />
										</div> 
									</div> 
								 
								</div>
								 end::User--> 

								<!--begin::Sidebar lOgo-->
								<div class="sidebar-logo">
									<!--begin::User info-->
									<div class="d-flex align-items-center" >
										<div class="d-flex flex-center ">
											<img src="assets/images/logo-i.png" alt="image" height="80">
										</div> 
									</div>
									<!--end::User info-->
								 
								</div>
								<!--end::Sidebar lOgo--> 

							</div>

							<!--end::Brand--> 
						</div>
						<!--end::Header-->
						<!--begin::Navs-->
						<div class="app-sidebar-navs flex-column-fluid" id="kt_app_sidebar_navs">
							<div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y mx-3 my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_projects" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
								<!--begin::Sidebar menu-->
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-4">
									<!--begin::Heading-->
									<div class="menu-item">
										<div class="menu-content menu-heading text-uppercase fs-7">Pages</div>
									</div>
									<!--end::Heading-->

									<!--begin:Menu item-->
									<div class="menu-item here show menu-accordion mb-3">
										<!--begin:Menu link-->
										<a class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
											<span class="menu-icon">
												<i class="ki-duotone ki-home-2 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Dashboard</span> 
										</a>
										<!--end:Menu link--> 
									</div> 


									<!--begin:Menu item-->
									<div class="menu-item here show menu-accordion mb-3">
										<!--begin:Menu link-->
										<a class="menu-link {{ request()->routeIs('income') ? 'active' : '' }}" href="{{ route('income') }}"> 
											<span class="menu-icon">
												<i class="ki-duotone ki-dollar fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">CoopINCOME</span> 
                                        </a>
										<!--end:Menu link--> 
									</div> 

										<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-3">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-gift fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">We Prove It Free</span> 
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link--> 
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('wpif-cooperative') ? 'active' : '' }}" href="{{ route('wpif-cooperative') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Cooperative</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('wpif-cui-team') ? 'active' : '' }}" href="{{ route('wpif-cui-team') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">CUI Team</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs(patterns: 'income') ? 'active' : '' }}" href="{{ route('income') }}" >
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dashboard</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										 
										</div>
										<!--end:Menu sub-->
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->


									<!--end:Menu item-->
                                    <!--begin:Menu item-->
									<div class="menu-item  menu-accordion mb-3">
										<!--begin:Menu link-->
										<a class="menu-link {{ request()->routeIs('cooperative') ? 'active' : '' }}" href="{{ route('cooperative') }}">
											<span class="menu-icon">
												<i class="ki-outline ki-microsoft"></i>
											</span>
											<span class="menu-title">Cooperative</span> 
										</a>
										<!--end:Menu link--> 
									</div>
									<!--end:Menu item--> 
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-3">
										<!--begin:Menu link-->
										<a class="menu-link {{ request()->routeIs('cui') ? 'active' : '' }}" href="{{ route('cui') }}">
											<span class="menu-icon">
												<i class="ki-outline ki-profile-user"></i>
											</span>
											<span class="menu-title">CUI Team</span> 
										</a>
										<!--end:Menu link-->
										 
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-3">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-wallet"></i>
											</span>
											<span class="menu-title">CoopWallet</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('balance') ? 'active' : '' }}" href="{{route('balance')}}" >
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Balance</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('funds') ? 'active' : '' }}" href="{{ route('funds') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add Funds</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('withdraw-funds') ? 'active' : '' }}" href="{{ route('withdraw-funds') }}" >
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Withdraw Funds</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('member') ? 'active' : '' }}" href="{{ route('member') }}" >
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Member to Member Transfer</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('invoices') ? 'active' : '' }}" href="{{ route('invoices') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Invoices</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('transactions') ? 'active' : '' }}" href="{{ route('transactions') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Transactions</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										 
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-3">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-bitcoin"></i>
											</span>
											<span class="menu-title">CoopTokens</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link--> 
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('buy-tokens') ? 'active' : '' }}" href="{{ route('buy-tokens') }}">
													<span class="menu-bullet">
														<i class="ki-outline ki-purchase"></i>
													</span>
													<span class="menu-title">Buy Tokens</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('my-tokens') ? 'active' : '' }}" href="{{ route('my-tokens') }}">
													<span class="menu-bullet">
														<i class="ki-outline ki-lts"></i>
													</span>
													<span class="menu-title">My Tokens</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('assign-tokens') ? 'active' : '' }}" href="{{ route('assign-tokens') }}" >
													<span class="menu-bullet">
														<i class="ki-outline ki-theta"></i>
													</span>
													<span class="menu-title">Assign Tokens</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										 
										</div>
										<!--end:Menu sub-->
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-3">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-user-square"></i>
											</span>
											<span class="menu-title">Coop Profile</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('profile-overview') ? 'active' : '' }}" href="{{ route('profile-overview') }}" >
													<span class="menu-bullet">
														<i class="ki-outline ki-profile-circle"></i>
													</span>
													<span class="menu-title">My Profile</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('profile-setting') ? 'active' : '' }}" href="{{route('profile-setting')}}">
													<span class="menu-bullet">
														<i class="ki-outline ki-gear"></i>
													</span>
													<span class="menu-title">Setting</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs('password') ? 'active' : '' }}" href="{{route('password')}}">
													<span class="menu-bullet">
														<i class="ki-outline ki-lock-2"></i>
													</span>
													<span class="menu-title">Change Password</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										 
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->

									  <!--begin:Menu item-->
									<div class="menu-item  menu-accordion mb-3">
										<!--begin:Menu link-->
										<a class="menu-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">
											<span class="menu-icon">
												<i class="ki-outline ki-message-question"></i>
											</span>
											<span class="menu-title">FAQs</span> 
                                        </a>
										<!--end:Menu link--> 
									</div>
									<!--end:Menu item--> 

									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-3">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-question"></i>
											</span>
											<span class="menu-title">Help</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->routeIs(patterns: 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contact Us</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
									 
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Sidebar menu-->
							</div>
						</div>
						<!--end::Navs-->
					</div>