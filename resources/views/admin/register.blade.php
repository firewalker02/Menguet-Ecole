{{--@extends('layout.mainlayout_admin')--}}
{{--@section('content')--}}

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
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<!-- Form -->
								<form action={{route('register2')}} method="post">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Name" name="name">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Password" name="password">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Confirm Password" name="password_confirmation">
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->

								<div class="text-center dont-have">Already have an account? <a href="{{route('login')}}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

{{--@endsection--}}
