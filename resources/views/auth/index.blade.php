@extends('layouts.master')

@section('title', 'Login')

@section('css')
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
@endsection

@section('content')
    <body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<p class="text-capitalize"><b>Managment System</b></p>
			</div>
			<!-- /.login-logo -->
			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Sign in to start your session</p>

					<form action="" method="post" autocomplete="off">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Username" name="nick" />
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<div class="input-group">
							<input type="password" class="form-control" placeholder="Password" name="password" />
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<p class="mt-1 text-right mb-2">
							<a href="{{ route('auth.forgot') }}">I forgot my password</a>
						</p>
						<div class="row">
							<div class="col-8">
								<div class="icheck-primary">
									<input type="checkbox" id="remember" />
									<label for="remember"> Remember Me </label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-4">
								<button type="submit" class="btn btn-primary btn-block">
									Sign In
								</button>
							</div>
							<!-- /.col -->
						</div>
					</form>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->
@endsection

        