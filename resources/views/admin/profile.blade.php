@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile eleve</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile eleve</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="{{asset($eleve->image)}}">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0">{{$eleve->nom}}</h4>
										<h6 class="text-muted">{{$eleve->Prenom}}</h6>
                                        <h4 class="user-name mb-0">{{$eleve->classe}}</h4>
                                        <br>
										<div class="pb-3"><i class="fa fa-map-marker"></i> {{$eleve->adresse}}</div>
										<div class="about-text">{{$eleve->description}}</div>
									</div>
									<div class="col-auto profile-btn">
									</div>
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
									</li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/admin/eleve/'.$eleve->id.'/delete')}}">Delete Eleve</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                                    </li>-->
                                </ul>
                            </div>
                            <div class="tab-content profile-tab-cont">

                                <!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">

									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span>
														<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Nom du Pere</p>
														<p class="col-sm-10">{{$eleve->nom_pere}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Nom de la mere</p>
														<p class="col-sm-10">{{$eleve->nom_mere}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Telephone principale</p>
														<p class="col-sm-10">{{$eleve->telephone1}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Telephone Secondaire</p>
														<p class="col-sm-10">{{$eleve->telephone2}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted mb-0">email</p>
														<p class="col-sm-10 mb-0">{{$eleve->email}}<br>
													</div>
                                                    <div class="row">
                                                        <p class="col-sm-2 text-muted mb-0">Lieu de Naissance</p>
                                                        <p class="col-sm-10 mb-0">{{$eleve->lieu_naissance}}<br>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-2 text-muted mb-0">Sexe</p>
                                                        <p class="col-sm-10 mb-0">{{$eleve->sexe}}<br>
                                                    </div>
												</div>
											</div>


										</div>


									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->

								<!-- Change Password Tab -
								<div id="password_tab" class="tab-pane fade">

									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								 /Change Password Tab -->

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->
            <!-- Edit Details Modal -->
		<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Details Personnel</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
                        <form action="{{route('update_eleve' , ['eleve_id' => $eleve->id])}}" method="post">
                            @csrf
							<div class="row form-row">
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Nom</label>
										<input type="text" class="form-control" name="nom" value="{{$eleve->nom}}">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Prenom</label>
										<input type="text"  class="form-control" name="prenom" value="{{$eleve->Prenom}}">
									</div>
								</div>
								<div class="col-12  col-sm-6">
									<div class="form-group">
										<label>Date de Naissance</label>
											<input type="date" class="form-control" name="date" value="{{$eleve->date_naissance}}">
									</div>
								</div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Sexe</label>
                                        <input type="string" class="form-control"  name="sexe" value="{{$eleve->sexe}}">
                                    </div>
                                </div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Lieu de Naissance</label>
										<input type="string" class="form-control"  name="lieu" value="{{$eleve->lieu_naissance}}">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Classe</label>
										<input type="text" value="{{$eleve->classe}}" name="classe" class="form-control">
									</div>
								</div>
								<div class="col-12">
									<h5 class="form-title"><span>Address</span></h5>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
									<label>Adresse</label>
										<input type="text" class="form-control" name="adresse" value="{{$eleve->adresse}}">
									</div>
								</div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" type="email" value="{{$eleve->email}}">
                                    </div>
                                </div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Nom du Pere</label>
										<input type="text" class="form-control" name="pere" value="{{$eleve->nom_pere}}">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Nom de la mere</label>
										<input type="text" class="form-control" name="mere" value="{{$eleve->nom_mere}}">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>image</label>
										<input type="text" class="form-control"  name="image" value="{{$eleve->image}}">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Telephone (principale)</label>
										<input type="text" class="form-control" name="tel1" value="{{$eleve->telephone1}}">
									</div>
								</div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Telephone (secondaire)</label>
                                        <input type="text" class="form-control" name="tel2" value="{{$eleve->telephone2}}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control" name="description" >{{$eleve->description}}</textarea>
                                    </div>
                                </div>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Details Modal -->
@endsection
