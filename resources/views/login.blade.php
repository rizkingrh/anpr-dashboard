@extends('layouts.default', [
	'paceTop' => true,
	'appSidebarHide' => true,
	'appHeaderHide' => true,
	'appContentClass' => 'p-0'
])

@section('title', 'Login Page')

@push('css')
	<link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>

	<script>
		(() => {
			"use strict";
			const handleGritterNotification = (message) => {
				if (message) {
					$.gritter.add({
						title: 'Login gagal!',
						text: message,
						image: '../assets/img/error_icon.png',
						sticky: false
					});
				}
			};
		
			document.addEventListener('DOMContentLoaded', () => {
				// Ambil pesan error
				const errorMessage = "{{ session('error') }}".trim();
				
				if (errorMessage) {
					handleGritterNotification(errorMessage);
				}
			});
		})();
	</script>
@endpush

@section('content')
	<!-- BEGIN login -->
	<div class="login login-v1">
		<!-- BEGIN login-container -->
		<div class="login-container">
			<!-- BEGIN login-header -->
			<div class="login-header">
				<div class="brand">
					<div class="d-flex align-items-center">
						<img src="{{ asset('assets/img/logo_ksp.png') }}" alt="Logo" style="height:45px;">
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- END login-header -->
			
			<!-- BEGIN login-body -->
			<div class="login-body">
				<!-- BEGIN login-content -->
				<div class="login-content fs-13px">
					<form action="{{ url('login') }}" method="POST">
						@csrf
						<div class="form-floating mb-20px">
							<input type="text" class="form-control fs-13px h-45px" id="username" name="username" placeholder="Username" required />
							<label for="username" class="d-flex align-items-center py-0">Username</label>
						</div>
						<div class="form-floating mb-20px">
							<input type="password" id="password" name="password" class="form-control fs-13px h-45px" placeholder="Password" required />
							<label for="password" class="d-flex align-items-center py-0">Password</label>
						</div>
						<div class="form-check mb-20px">
							<input class="form-check-input" type="checkbox" value="" id="rememberMe" name="rememberMe" />
							<label class="form-check-label" for="rememberMe">
								Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn h-45px btn-theme d-block w-100 btn-lg">Log in</button>
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-body -->
		</div>
		<!-- END login-container -->
	</div>
	<!-- END login -->
@endsection