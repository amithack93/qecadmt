@extends('layouts.backendlayout')

@section('title','Profile Management')

@section('page-title','Profile Management')

@section('content')
<div class="page-body">

	<div class="row">
		<div class="col-lg-12">
			<div class="cover-profile">
				<div class="profile-bg-img">
					<img class="profile-bg-img img-fluid" src="{{ asset('assets/images/user-profile/bg-img1.jpg') }}" alt="bg-img">
					<div class="card-block user-info">
						<div class="col-md-12">
							<div class="media-left">
								<a href="#" class="profile-image">
									<img class="user-img img-radius" src="{{ asset('assets/images/user-profile/user-img.jpg') }}" alt="user-img">
								</a>
							</div>
							<div class="media-body row">
								<div class="col-lg-12">
									<div class="user-title">
										<h2>Josephin Villa</h2>
										<span class="text-white">Web designer</span>
									</div>
								</div>
								<div>
									<div class="pull-right cover-btn">
										<button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
										<button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">

			<div class="tab-header card">
				<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">
							Personal Info
						</a>
						<div class="slide"></div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#binfo" role="tab">
							User's Services
						</a>
						<div class="slide"></div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#contacts" role="tab">
							Login Histroy
						</a>
						<div class="slide"></div>
					</li>
				</ul>
			</div>

			<div class="tab-content">

				<div class="tab-pane active" id="personal" role="tabpanel">

					<div class="card">
						<div class="card-header">
							<h5 class="card-header-text">About Me</h5>
							<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
								<i class="icofont icofont-edit"></i>
							</button>
						</div>
						<div class="card-block">
							<div class="view-info">
								<div class="row">
									<div class="col-lg-12">
										<div class="general-info">
											<div class="row">
												<div class="col-lg-12 col-xl-6">
													<div class="table-responsive">
														<table class="table m-0">
															<tbody>
																<tr>
																	<th scope="row">Full Name</th>
																	<td>Josephine Villa</td>
																</tr>
																<tr>
																	<th scope="row">Gender</th>
																	<td>Female</td>
																</tr>
																<tr>
																	<th scope="row">Birth Date</th>
																	<td>October 25th, 1990</td>
																</tr>
																<tr>
																	<th scope="row">Marital Status</th>
																	<td>Single</td>
																</tr>
																<tr>
																	<th scope="row">Location</th>
																	<td>New York, USA</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>

												<div class="col-lg-12 col-xl-6">
													<div class="table-responsive">
														<table class="table">
															<tbody>
																<tr>
																	<th scope="row">Email</th>
																	<td><a href="javascript:void(0);"><span class="__cf_email__" data-cfemail="e3a7868e8ca3869b828e938f86cd808c8e">[email&#160;protected]</span></a></td>
																</tr>
																<tr>
																	<th scope="row">Mobile Number</th>
																	<td>(0123) - 4567891</td>
																</tr>
																<tr>
																	<th scope="row">Twitter</th>
																	<td>@xyz</td>
																</tr>
																<tr>
																	<th scope="row">Skype</th>
																	<td>demo.skype</td>
																</tr>
																<tr>
																	<th scope="row">Website</th>
																	<td><a href="javascript:void(0);">www.demo.com</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

							<div class="edit-info">
								<div class="row">
									<div class="col-lg-12">
										<div class="general-info">
											<div class="row">
												<div class="col-lg-6">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
																		<input type="text" class="form-control" placeholder="Full Name">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-radio">
																		<div class="group-add-on">
																			<div class="radio radiofill radio-inline">
																				<label>
																					<input type="radio" name="radio" checked><i class="helper"></i> Male
																				</label>
																			</div>
																			<div class="radio radiofill radio-inline">
																				<label>
																					<input type="radio" name="radio"><i class="helper"></i> Female
																				</label>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />
																</td>
															</tr>
															<tr>
																<td>
																	<select id="hello-single" class="form-control">
																		<option value="">---- Marital Status ----</option>
																		<option value="married">Married</option>
																		<option value="unmarried">Unmarried</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
																		<input type="text" class="form-control" placeholder="Address">
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="col-lg-6">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
																		<input type="text" class="form-control" placeholder="Mobile Number">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
																		<input type="text" class="form-control" placeholder="Twitter Id">
																	</div>
																</td>
															</tr>

															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
																		<input type="email" class="form-control" placeholder="Skype Id">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
																		<input type="text" class="form-control" placeholder="website">
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>

											</div>

											<div class="text-center">
												<a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
												<a href="javascript:void(0);" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>
				</div>


				<div class="tab-pane" id="binfo" role="tabpanel">

					<div class="card">
						<div class="card-header">
							<h5 class="card-header-text">User Services</h5>
						</div>
						<div class="card-block">
							<div class="row">
								<div class="col-md-6">
									<div class="card b-l-success business-info services m-b-20">
										<div class="card-header">
											<div class="service-header">
												<a href="#">
													<h5 class="card-header-text">Shivani Hero</h5>
												</a>
											</div>
											<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
											</span>
											<div class="dropdown-menu dropdown-menu-right b-none services-list">
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i> View</a>
											</div>
										</div>
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12">
													<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
												</div>

											</div>

										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="card b-l-danger business-info services">
										<div class="card-header">
											<div class="service-header">
												<a href="#">
													<h5 class="card-header-text">Dress and Sarees</h5>
												</a>
											</div>
											<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
											</span>
											<div class="dropdown-menu dropdown-menu-right b-none services-list">
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i> View</a>
											</div>
										</div>
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12">
													<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
												</div>

											</div>

										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="card b-l-info business-info services">
										<div class="card-header">
											<div class="service-header">
												<a href="#">
													<h5 class="card-header-text">Shivani Auto Port</h5>
												</a>
											</div>
											<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
											</span>
											<div class="dropdown-menu dropdown-menu-right b-none services-list">
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i> View</a>
											</div>
										</div>
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12">
													<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
												</div>

											</div>

										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="card b-l-warning business-info services">
										<div class="card-header">
											<div class="service-header">
												<a href="#">
													<h5 class="card-header-text">Hair stylist</h5>
												</a>
											</div>
											<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
											</span>
											<div class="dropdown-menu dropdown-menu-right b-none services-list">
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i> View</a>
											</div>
										</div>
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12">
													<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
												</div>

											</div>

										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="card b-l-danger business-info services">
										<div class="card-header">
											<div class="service-header">
												<a href="#">
													<h5 class="card-header-text">BMW India</h5>
												</a>
											</div>
											<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
											</span>
											<div class="dropdown-menu dropdown-menu-right b-none services-list">
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i> View</a>
											</div>
										</div>
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12">
													<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
												</div>

											</div>

										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="card b-l-success business-info services">
										<div class="card-header">
											<div class="service-header">
												<a href="#">
													<h5 class="card-header-text">Shivani Hero</h5>
												</a>
											</div>
											<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
											</span>
											<div class="dropdown-menu dropdown-menu-right b-none services-list">
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i> View</a>
											</div>
										</div>
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12">
													<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
												</div>

											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-header-text">Profit</h5>
								</div>
								<div class="card-block">
									<div id="main" style="height:300px;width: 100%;"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				
				<div class="tab-pane" id="contacts" role="tabpanel">
					<div class="row">
						<div class="col-xl-12">
							<div class="row">
								<div class="col-sm-12">

									<div class="card">
										<div class="card-header">
											<h5 class="card-header-text">Contacts</h5>
										</div>
										<div class="card-block contact-details">
											<div class="data_table_main table-responsive dt-responsive">
												<table id="simpletable" class="table  table-striped table-bordered nowrap">
													<thead>
														<tr>
															<th>Name</th>
															<th>Email</th>
															<th>Mobileno.</th>
															<th>Favourite</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9dfcfffeacafaeddfaf0fcf4f1b3fef2f0">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a5b58590b08097a5d575b535614595557">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="09686b6a383b3a496e64686065276a6664">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3e3d3c6e6d6c1f38323e3633713c3032">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2b3b0b1e3e0e192b5bfb3bbbefcb1bdbf">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f5949796c4c7c6b59298949c99db969a98">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="55343736646766153238343c397b363a38">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b1a19184a49483b1c161a121755181416">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="08696a6b393a3b486f65696164266b6765">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adcccfce9c9f9eedcac0ccc4c183cec2c0">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7213101143404132151f131b1e5c111d1f">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f4959697c5c6c7b49399959d98da979b99">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8feeedecbebdbccfe8e2eee6e3a1ece0e2">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2647444517141566414b474f4a0845494b">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4627242577747506212b272f2a6825292b">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3150535200030271565c50585d1f525e5c">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1c0c3c2909392e1c6ccc0c8cd8fc2cecc">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d3c3f3e6c6f6e1d3a303c3431733e3230">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86e7e4e5b7b4b5c6e1ebe7efeaa8e5e9eb">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f7969594c6c5c4b7909a969e9bd994989a">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b6b5b4e6e5e497b0bab6bebbf9b4b8ba">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afcecdcc9e9d9cefc8c2cec6c381ccc0c2">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b6b5b4e6e5e497b0bab6bebbf9b4b8ba">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star-o" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3a2a1a0f2f1f083a4aea2aaafeda0acae">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c1d1e1f4d4e4f3c1b111d1510521f1311">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81e0e3e2b0b3b2c1e6ece0e8edafe2eeec">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3150535200030271565c50585d1f525e5c">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a0b08095b58592a0d070b030644090507">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8e8d8cdedddcaf88828e8683c18c8082">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85e4e7e6b4b7b6c5e2e8e4ece9abe6eae8">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e2f2c2d7f7c7d0e29232f2722602d2123">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8cedeeefbdbebfccebe1ede5e0a2efe3e1">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bfdedddc8e8d8cffd8d2ded6d391dcd0d2">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5736353466656417303a363e3b7934383a">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb8a8988dad9d8ab8c868a8287c5888486">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="91f0f3f2a0a3a2d1f6fcf0f8fdbff2fefc">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c2d2e2f7d7e7f0c2b212d2520622f2321">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4120232270737201262c20282d6f222e2c">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d6c6f6e3c3f3e4d6a606c6461236e6260">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="54353637656667143339353d387a373b39">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee8f8c8ddfdcddae89838f8782c08d8183">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f1e1d1c4e4d4c3f18121e1613511c1012">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="48292a2b797a7b082f25292124662b2725">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7d1c1f1e4c4f4e3d1a101c1411531e1210">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5c4c7c6949796e5c2c8c4ccc98bc6cac8">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8eefecedbfbcbdcee9e3efe7e2a0ede1e3">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aecfcccd9f9c9deec9c3cfc7c280cdc1c3">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4627242577747506212b272f2a6825292b">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb8a8988dad9d8ab8c868a8287c5888486">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="35545756040706755258545c591b565a58">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td><a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d5c5f5e0c0f0e7d5a505c5451135e5250">[email&#160;protected]</a></td>
															<td>9989988988</td>
															<td><i class="fa fa-star" aria-hidden="true"></i></td>
															<td class="dropdown">
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-edit"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-delete"></i>Delete</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye-alt"></i>View</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-tasks-alt"></i>Project</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-ui-note"></i>Notes</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-eye"></i>Activity</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="icofont icofont-badge"></i>Schedule</a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('js')

@stop