@extends('layouts.default', [
	'paceTop' => true,
	'appSidebarHide' => true,
	'appHeaderHide' => true,
	'appContentClass' => 'p-0'
])

@section('title', '404 Error Page')

@section('content')
	<!-- BEGIN error -->
	<div class="error">
		<div class="error-code">403</div>
		<div class="error-content">
			<div class="error-message">Access Denied</div>
			<div class="error-desc mb-4">
				You don't have permission to access this page. <br />
           	 	If you believe this is an error, please contact the administrator.
			</div>
			<div>
				<a href="/" class="btn btn-success px-3">Go Home</a>
			</div>
		</div>
	</div>
	<!-- END error -->
@endsection
        
