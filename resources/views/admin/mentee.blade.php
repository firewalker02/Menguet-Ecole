@extends('layout.mainlayout_admin')
@section('content')

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                    @php
                        $classes = \App\Models\Classe::all();
                    @endphp
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Liste des eleves</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Inscription</li>
								</ul>
                                <div class="col-sm-3" style="float: right">
                                    <a class="{{ Request::is('admin/add-eleve') ? 'active' : '' }}" href="{{ url('admin/add-eleve') }}">
                                        <button type="button" style="width: 200px; margin-top: 26px" class="btn btn-block btn-outline-primary active"><i class="fe fe-plus"></i> Ajouter Eleve</button>
                                    </a>

                                </div>
                                <form action="{{route('Sort_BY')}}" method="post">
                                    @csrf
                                <div class="col-sm-3" style="float: left">

                                    <div class="col-sm-5" style="float: left; margin-right: 10px;  margin-top: 26px">

                                        <span class="sortby-fliter">
                                                    <select class="select" name="classe">
                                                        <option>select</option>
                                                       @foreach($classes as $classe)
                                                            <option value="{{$classe->nom}}">{{$classe->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </span>

                                    </div>
                                    <button type="submit" style="width: 80px; margin-top: 26px" class="btn btn-block btn-outline-primary active">Filtrer</button>
                                </div>

                                </form>
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
                                            if (!isset($eleves)){
                                                $eleves = \App\Models\Eleve::all();
                                            }

                                            @endphp
                                            @foreach($eleves as $eleve)
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{url("admin/profile/".$eleve->id)}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset($eleve->image)}}"  alt="User Image"></a>
															<a style="margin-left: 20px" href="{{url("admin/profile/".$eleve->id)}}">{{$eleve->nom}} </a>
														</h2>
													</td>
													<td>{{$eleve->Prenom}}</td>
                                                    <td>{{$eleve->sexe}}</td>
{{--                                                    {{public_path('users/'.$eleve->image)}}--}}
													<td>{{$eleve->date_naissance}}<br></td>
                                                    <td>{{$eleve->lieu_naissance}}<br></td>

													<td>{{$eleve->classe}}</td>
                                                    <td>{{$eleve->telephone1}}</td>

													<td>
														<div class="status-toggle d-flex justify-content-center">
															<input type="checkbox" id="{{$eleve->id}}" class="check" checked>
															<label for="{{$eleve->id}}"  class="checktoggle">checkbox</label>
														</div>
													</td>
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
