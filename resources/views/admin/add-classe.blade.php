@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Ajout Eleve</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item active">Ajout Eleve</li>
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
                                            <form action="{{route('create_eleve')}}" method="post"  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>nom *</label>
                                                            <input class="form-control" name="nom" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>prenom *</label>
                                                            <input class="form-control" name="prenom" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Date de Naissance *</label>
                                                            <input class="form-control" name="date" type="date" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Lieu de Naissance *</label>
                                                            <input class="form-control" name="lieu" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                $classes = \App\Models\Classe::all();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Classe *</label>
                                                            <select class="form-control" name="classe" type="text" required>
                                                                <option value="">-------- Choisir -------</option>
                                                                @foreach($classes as $classe)
                                                                    <option value="{{$classe->nom}}">{{$classe->nom}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Sexe</label>
                                                                <select class="form-control" name="Sexe" type="text" required>
                                                                    <option value="">-------- Choisir -------</option>
                                                                    <option value="M">Masculin</option>
                                                                    <option value="F">Feminin</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Adresse *</label>
                                                            <input class="form-control" name="adresse" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="email" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nom du Pere</label>
                                                            <input class="form-control" name="pere" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nom de la mere</label>
                                                            <input class="form-control" name="mere" type="text">
                                                        </div>
                                                    </div>
                                                </div>
					                            <div class="form-group">
					                                <label>Images *</label>
					                                <div>
                                                        <input type="file" name="file" class="form-control">
					                                    <small class="form-text text-muted">Max. file size: 5 MB. Allowed images: jpg, gif, png. Maximum 1 images only.</small>
					                                </div>
					                            </div>
					                            <div class="row">
					                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Telephone (principale) *</label>
                                                            <input class="form-control" type="text" name="tel1" required>
                                                        </div>
					                                </div>
					                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Telephone (secondaire)</label>
                                                            <input class="form-control" type="text" name="tel2">
                                                        </div>
					                                </div>
					                            </div>

					                            <div class="form-group">
					                                <label>Description</label>
					                                <textarea cols="30" rows="6" name="description" class="form-control"></textarea>
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
