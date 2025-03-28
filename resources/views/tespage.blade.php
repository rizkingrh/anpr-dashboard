@extends('layouts.default')

@section('title', 'Blank Page')

@push('css')
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>

	<script>
		(function () {
			"use strict";

			const handleGritterNotification = () => {
				document.getElementById('add-regular')?.addEventListener('click', (event) => {
					event.preventDefault(); // Mencegah default action
					$.gritter.add({
						title: 'This is a regular notice!',
						text: 'This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat.',
						image: '../assets/img/user/user-3.jpg',
						sticky: false
					});
				});
			};

			document.addEventListener('DOMContentLoaded', handleGritterNotification);
		})();
	</script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
		<li class="breadcrumb-item active">Blank Page</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Blank Page <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Panel Title here</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<a href="javascript:;" id="add-regular" class="btn btn-sm btn-dark w-100px">Demo</a>
		</div>
	</div>
	<!-- END panel -->
@endsection