@extends('layouts.default')

@section('title', 'Dropzone')

@push('css')
	<link href="/assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
@endpush

@push('scripts')
  <script src="/assets/plugins/dropzone/dist/min/dropzone.min.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
		<li class="breadcrumb-item active">Dropzone</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Dropzone <small>header small text goes here...</small></h1>
	<!-- END page-header -->

	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-2 -->
		<div class="col-lg-2 mb-3">
			<p class="mb-3 text-dark"><b>DropzoneJS</b> is an open source library that provides drag’n’drop file uploads with image previews.</p>
			<div><b class="text-dark">Browser Support</b></div>
			<p>
				- Chrome 7+<br />
				- Firefox 4+<br />
				- IE 10+<br />
				- Opera 12+<br />
				- Safari 6+
			</p>
			<a href="http://www.dropzonejs.com/" target="_blank" class="btn btn-dark btn-sm">View Official Website</a>
		</div>
		<!-- END col-2 -->
		<!-- BEGIN col-10 -->
		<div class="col-lg-10">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-dropzone-1">
			<div class="panel-heading">
				<h4 class="panel-title">
					Dropzone
					<b class="badge d-inline-flex align-items-center p-0 ms-1">
						<i class="fa fa-circle fa-fw fs-6px text-blue me-1"></i> 
						<i class="fa fa-circle fa-fw fs-6px text-cyan me-1"></i>
						<i class="fa fa-circle fa-fw fs-6px text-teal"></i>
					</b>
				</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
			</div>
			<div class="panel-body text-dark">
				<div id="dropzone">
					<form action="/upload" class="dropzone needsclick" id="demo-upload">
						<div class="dz-message needsclick">
							Drop files <b>here</b> or <b>click</b> to upload.<br />
							<span class="dz-note needsclick">
								(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="hljs-wrapper">
				<pre><code class="html" data-url="/assets/data/form-dropzone/code-1.json"></code></pre>
			</div>
		</div>
		<!-- END panel -->
		</div>
		<!-- END col-10 -->
	</div>
	<!-- END row -->
@endsection
