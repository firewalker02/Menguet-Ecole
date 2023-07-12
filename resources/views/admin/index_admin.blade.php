
@extends('layout.mainlayout_admin')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">

                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                                
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-user"></i>
										</span>
										<div class="dash-count">
											<h3>{{count(\App\Models\Eleve::where('sexe', '=', 'M')->get())}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Totals Garcons</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-user"></i>
										</span>
										<div class="dash-count">
											<h3>{{count(\App\Models\Eleve::where('sexe', '=', 'F')->get())}}</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Totals Filles</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-star-o"></i>
										</span>
										<div class="dash-count">
											<h3>485</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Mentoring Points</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<h3>$62523</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Revenue</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>-->
                        <!--<div class="row">
                            <div class="col-md-12 col-lg-6">

                                 Sales Chart -->
                        <!--<div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">Revenue</h4>
                            </div>
                            <div class="caody">
                                <div id="morrisArea"></div>
                            </div>
                        </div>
                         /Sales Chart

                    </div>-->
                        <!--<div class="col-md-12 col-lg-6">

                             Invoice Chart -->
                        <!--<div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">Status</h4>
                            </div>
                            <div class="card-body">
                                <div id="morrisLine"></div>
                            </div>
                        </div>
                         /Invoice Chart

						</div>
					</div>-->
                        <!--<div class="row">
                            <div class="col-md-6 d-flex">

                                 Recent Orders
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Mentor List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Mentor Name</th>
													<th>Course</th>
													<th>Earned</th>
													<th>Reviews</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/profiles/avatar-08.jpg" alt="User Image"></a>
															<a href="profile">James Amen</a>
														</h2>
													</td>
													<td>Maths</td>
													<td>$3200.00</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/profiles/avatar-07.jpg" alt="User Image"></a>
															<a href="profile">Jessica Fogarty</a>
														</h2>
													</td>
													<td>Business Maths</td>
													<td>$3100.00</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/profiles/avatar-17.jpg" alt="User Image"></a>
															<a href="profile">Jose Anderson</a>
														</h2>
													</td>
													<td>Algebra</td>
													<td>$4000.00</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image"></a>
															<a href="profile">Sofia Brient</a>
														</h2>
													</td>
													<td>Integrated Sum</td>
													<td>$3200.00</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/profiles/avatar-14.jpg" alt="User Image"></a>
															<a href="profile">Marvin Campbell</a>
														</h2>
													</td>
													<td>Flow chart</td>
													<td>$3500.00</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							 /Recent Orders

						</div>-->
                        <!--<div class="col-md-6 d-flex">

                             Feed Activity
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Mentee List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Mentee Name</th>
													<th>Phone</th>
													<th>Last Visit</th>
													<th>Paid</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/user/user.jpg" alt="User Image"></a>
															<a href="profile">Jonathan Doe </a>
														</h2>
													</td>
													<td>8286329170</td>
													<td>20 Oct 2019</td>
													<td class="text-end">$100.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/user/user1.jpg" alt="User Image"></a>
															<a href="profile">Julie Pennington </a>
														</h2>
													</td>
													<td>2077299974</td>
													<td>22 Oct 2019</td>
													<td class="text-end">$200.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/user/user2.jpg" alt="User Image"></a>
															<a href="profile">Tyrone Roberts</a>
														</h2>
													</td>
													<td>2607247769</td>
													<td>21 Oct 2019</td>
													<td class="text-end">$250.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/user/user3.jpg" alt="User Image"></a>
															<a href="profile">Allen Davis </a>
														</h2>
													</td>
													<td>5043686874</td>
													<td>21 Sep 2019</td>
													<td class="text-end">$150.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="../assets_admin/img/user/user4.jpg" alt="User Image"></a>
															<a href="profile">Patricia Manzi </a>
														</h2>
													</td>
													<td>9548207887</td>
													<td>18 Sep 2019</td>
													<td class="text-end">$350.00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							 /Feed Activity

						</div>
					</div>-->
					<div class="row">
						<div class="col-md-12">

							<!-- Recent Orders -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Inscriptions recentes</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
                                        <table class="datatable table table-hover table-center mb-0">
                                            <thead>
                                            <tr>
                                                <th>nom</th>
                                                <th>Prenom</th>
                                                <th>Sexe</th>
                                                <th>Date de Naissance</th>
                                                <th>Lieu de Naissance</th>
                                                <th>Classe</th>
                                                <th>Telephone (principale)</th>
                                                <th class="text-center">Status</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $eleves = \App\Models\Eleve::all();
                                            @endphp
                                            @foreach($eleves as $eleve)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="{{url("admin/profile/".$eleve->id)}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset($eleve->image)}}" alt="User Image"></a>
                                                            <a  style="margin-left: 20px"  href="{{url("admin/profile/".$eleve->id)}}">{{$eleve->nom}} </a>
                                                        </h2>
                                                    </td>
                                                    <td>{{$eleve->Prenom}}</td>
                                                    <td>{{$eleve->sexe}}</td>

                                                    <td>{{$eleve->date_naissance}}<br></td>
                                                    <td>{{$eleve->lieu_naissance}}<br></td>

                                                    <td>{{$eleve->classe}}</td>
                                                    <td>{{$eleve->telephone1}}</td>

                                                    <td>
                                                        <div class="status-toggle d-flex justify-content-center">
                                                            <input type="checkbox" id="{{$eleve->id}}"  class="check" checked>
                                                            <label for="{{$eleve->id}}" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
									</div>
								</div>
							</div>

							<!-- /Recent Orders -->

						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
	   @endsection
