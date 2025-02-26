@extends('layouts.default')

@section('title', 'Form Slider + Switcher')

@push('css')
	<link href="/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
	<link href="/assets/plugins/abpetkov-powerange/dist/powerange.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/switchery/dist/switchery.min.js"></script>
	<script src="/assets/plugins/abpetkov-powerange/dist/powerange.min.js"></script>
	<script src="/assets/js/demo/form-slider-switcher.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
		<li class="breadcrumb-item active">Form Slider + Switcher</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Form Slider + Switcher <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-4 -->
		<div class="col-xl-8">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="form-slider-switcher-1">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Switchery</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div>
						<p>
							You can use the predefined javascript variable in <code>/src/js/app.js</code> to create different color theme switchery.
						</p>
						<label class="form-label mb-2">Switchery Color Theme</label>
						<div class="d-flex">
							<div class="me-2"><input type="checkbox" data-render="switchery" data-theme="blue" checked /></div>
							<div class="me-2"><input type="checkbox" data-render="switchery" data-theme="default" checked /></div>
							<div class="me-2"><input type="checkbox" data-render="switchery" data-theme="orange" checked /></div>
							<div class="me-2"><input type="checkbox" data-render="switchery" data-theme="red" checked /></div>
							<div class="me-2"><input type="checkbox" data-render="switchery" data-theme="purple" checked /></div>
							<div><input type="checkbox" data-render="switchery" data-theme="black" checked /></div>
						</div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html" data-url="/assets/data/form-slider-switcher/code-1.json"></code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-4 -->
		<!-- BEGIN col-4 -->
		<div class="col-xl-4">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="form-slider-switcher-3">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Switchery State</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<label class="form-label mb-2">Checked & Unchecked Switchery</label>
					<div class="d-flex mb-3">
						<div class="d-flex align-items-center me-3">
							<input type="checkbox" data-render="switchery" data-theme="default" checked />
							<span class="text-muted ms-2">checked</span>
						</div>
						<div class="d-flex align-items-center">
							<input type="checkbox" data-render="switchery" data-theme="default" />
							<span class="text-muted ms-2">unchecked</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 mb-3 mb-lg-0">
							<label class="form-label mb-2">Disabled</label>
							<div class="mb-3">
								<input type="checkbox" data-render="switchery" data-theme="blue" disabled checked />
								<span class="text-muted ms-2">checked</span>
							</div>
							<div>
								<input type="checkbox" data-render="switchery" data-theme="blue" disabled />
								<span class="text-muted ms-2">unchecked</span>
							</div>
						</div>
						<div class="col-lg-6">
							<label class="form-label mb-2">State</label>
							<div class="mb-3">
								<input type="checkbox" data-render="switchery" data-theme="black" data-id="switchery-state" checked /> 
								<a href="javascript:;" class="btn btn-xs btn-outline-black ms-2" data-click="check-switchery-state">check state</a>
							</div>
							<div>
								<input type="checkbox" data-render="switchery" data-theme="blue" data-change="check-switchery-state-text" checked />
								<a href="javascript:;" class="btn btn-xs btn-primary disabled ms-2" data-id="switchery-state-text">true</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html" data-url="/assets/data/form-slider-switcher/code-2.json"></code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-4 -->
	</div>
	<!-- END row -->
	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<!-- BEGIN panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Powerange Slider</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
			<p>
				You can use the predefined javascript variable in <code>/src/js/app.js</code> to create different color theme switchery. You may add the <code>hideRange</code> option and set the value as <code>true</code>
				during the slider init in order to remove the range number from the slider.
			</p>
			<div class="row gx-5">
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-10">
							<label class="form-label">Default Slider</label>
							<div class="powerange-wrapper mb-4">
								<input type="text" data-render="powerange-slider" data-start="70" />
							</div>
							<label class="form-label pt-10px">Slider State (Disabled)</label>
							<div class="powerange-wrapper mb-4">
								<input type="text" data-render="powerange-slider" data-start="50" data-disable="true" />
							</div>
							<div class="d-flex align-items-center pt-10px mb-1">
								<label class="form-label flex-1 mb-0">Get Value via Javascript </label>
								<a href="#" data-toggle="get-value-powerange" data-target="#sliderGetValue" class="btn btn-xs btn-outline-primary">Check Value</a>
							</div>
							<div class="powerange-wrapper mb-0">
								<input type="text" data-render="powerange-slider" data-start="30" id="sliderGetValue" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-10">
							<label class="form-label mb-1">Slider Colors</label>
							<div class="powerange-wrapper powerange-without-range mb-2">
								<input type="text" data-render="powerange-slider" data-hide-range="true" data-start="90" />
							</div>
							<div class="powerange-wrapper powerange-without-range mb-2 red">
								<input type="text" data-render="powerange-slider" data-hide-range="true" data-start="75" />
							</div>
							<div class="powerange-wrapper powerange-without-range mb-2 teal">
								<input type="text" data-render="powerange-slider" data-hide-range="true" data-start="60" />
							</div>
							<div class="powerange-wrapper powerange-without-range mb-2 purple">
								<input type="text" data-render="powerange-slider" data-hide-range="true" data-start="45" />
							</div>
							<div class="powerange-wrapper powerange-without-range mb-2 orange">
								<input type="text" data-render="powerange-slider" data-hide-range="true" data-start="30" />
							</div>
							<div class="powerange-wrapper powerange-without-range mb-0 black">
								<input type="text" data-render="powerange-slider" data-hide-range="true" data-start="15" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<label class="form-label mb-1">Horizontal Slider</label>
					<div class="d-flex mt-n1">
						<div class="powerange-wrapper powerange-without-range powerange-vertical mb-0 me-1">
							<input type="text" data-render="powerange-slider" data-hide-range="true" data-vertical="true" data-start="90" data-height="180px" />
						</div>
						<div class="powerange-wrapper powerange-without-range powerange-vertical mb-0 me-1 teal">
							<input type="text" data-render="powerange-slider" data-hide-range="true" data-vertical="true" data-start="75" data-height="180px" />
						</div>
						<div class="powerange-wrapper powerange-without-range powerange-vertical mb-0 me-1 purple">
							<input type="text" data-render="powerange-slider" data-hide-range="true" data-vertical="true" data-start="60" data-height="180px" />
						</div>
						<div class="powerange-wrapper powerange-without-range powerange-vertical mb-0 me-1 red">
							<input type="text" data-render="powerange-slider" data-hide-range="true" data-vertical="true" data-start="45" data-height="180px" />
						</div>
						<div class="powerange-wrapper powerange-without-range powerange-vertical mb-0 me-1 orange">
							<input type="text" data-render="powerange-slider" data-hide-range="true" data-vertical="true" data-start="30" data-height="180px" />
						</div>
						<div class="powerange-wrapper powerange-without-range powerange-vertical mb-0 black">
							<input type="text" data-render="powerange-slider" data-hide-range="true" data-vertical="true" data-start="15" data-height="180px" />
						</div>
					</div>
				</div>
			</div>
			<!-- END row -->
		</div>
		<!-- END panel-body -->
		<!-- BEGIN hljs-wrapper -->
		<div class="hljs-wrapper">
			<pre><code class="html" data-url="/assets/data/form-slider-switcher/code-3.json"></code></pre>
		</div>
		<!-- END hljs-wrapper -->
	</div>
	<!-- END panel -->
@endsection