@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Ajout classe</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item active">ajout classe</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">

									<!-- Add details -->
									<div class="row">
										<div class="col-12 blog-details">
                                            <form action="{{route('create_classe')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nom de la classe</label>
                                                            <input name="classe" class="form-control" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Enseignant (e)</label>
                                                            <input name="enseignant" class="form-control" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Frais Inscription</label>
                                                            <input name="inscription" class="form-control" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Frais Scolariter</label>
                                                            <input name="scolariter" class="form-control" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nombre d'Eleve</label>
                                                            <input name="nbre_eleve" class="form-control" type="number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-t-20 text-center">
                                                    <button class="btn btn-primary btn-lg">Enregistrer</button>
                                                </div>
                                            </form>

										</div>
									</div>
									<!-- /Add details -->

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->
@endsection
