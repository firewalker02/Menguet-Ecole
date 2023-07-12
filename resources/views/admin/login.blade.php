@extends('layout.mainlayout_admin')
@section('content')
<!-- Main Wrapper -->
<div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="../assets_admin/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<!-- Form -->
								<form action="{{route('login')}}" method="post">
                                    @csrf
									<div class="form-group">
										<input class="form-control" type="text" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

{{--                                                        <h2 class="table-avatar">--}}
{{--                                                            <a href="{{url("admin/profile/".$eleve->id)}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="" alt="User Image"></a>--}}
{{--                                                            <a  style="margin-left: 20px"  href="{{url("admin/profile/".$eleve->id)}}">{{$eleve->nom}} </a>--}}
{{--                                                        </h2>--}}


@endsection
