@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Liste des classes</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Classe</li>
								</ul>
                                <div class="col-sm-2" style="float: right">
                                    <a class="{{ Request::is('admin/add-blog') ? 'active' : '' }}" href="{{ url('admin/add-blog') }}">
                                        <button type="button" class="btn btn-block btn-outline-primary active"><i class="fe fe-plus"></i> Ajouter Classe</button>
                                    </a>
                                </div>
                            </div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Classe</th>
													<th>Enseignante</th>
													<th>Frais inscription</th>
													<th>Frais Scolariter</th>
                                                    <th>Nombre Eleve</th>
                                                    <th>Remplissage</th>
                                                    <th>Action</th>
												</tr>
											</thead>
											<tbody>
                                            @php
                                                $classes = \App\Models\Classe::all();
                                            @endphp
                                            @foreach($classes as $classe)
												<tr>

													<td>
														<h2 class="table-avatar">
															<a>{{$classe->nom}}</a>
														</h2>
													</td>
													<td>{{$classe->enseignant}}</td>

													<td>{{$classe->frais_inscription}}</td>

													<td>{{$classe->frais_scolariter}}</td>
                                                    <td>{{$classe->nbre_eleve}}</td>
                                                    <td>
                                                        @php
                                                                $eleve = count(\App\Models\Eleve::where('classe', 'like', $classe->nom)->get());
                                                                $pourcentage = ($eleve * 100) / (int)$classe->nbre_eleve;
                                                                $pourcentage = (int)$pourcentage;
                                                         @endphp
                                                        @switch($pourcentage)
                                                            @case($pourcentage < 20 )
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-danger w-20"></div>
                                                            </div>
                                                            @break

                                                            @case($pourcentage > 40 && $pourcentage < 60)
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success w-50"></div>
                                                            </div>
                                                            @break
                                                             @case($pourcentage > 60 && $pourcentage < 80)
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success w-80"></div>
                                                            </div>
                                                            @break
                                                            @case($porcentage > 80 )
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success w-100"></div>
                                                            </div>
                                                            @break
                                                        @endswitch

                                                            {{$pourcentage}} %</td>
                                                    <td><a class="edit-link" href="{{route('delete_classe', ['classe_id' => $classe->id])}}"><i class="fa fa-trash mr-1"></i> Delete</a></td>
												</tr>
                                            @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->
@endsection
