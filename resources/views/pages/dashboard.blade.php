@extends('layouts.default')

@section('title', 'Dashboard')

@push('css')
    <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

	{{-- datatables --}}
	<link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-autofill-bs5/css/autoFill.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="/assets/plugins/d3/d3.min.js"></script>
    <script src="/assets/plugins/nvd3/build/nv.d3.js"></script>
    <script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="/assets/plugins/jvectormap-content/world-mill.js"></script>
    <script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/js/demo/dashboard-v3.js"></script>

	{{-- datatables --}}
	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-autofill/js/dataTables.autoFill.min.js"></script>
	<script src="/assets/plugins/datatables.net-autofill-bs5/js/autoFill.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
	<script src="/assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="/assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js"></script>
	<script src="/assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
	<script src="/assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="/assets/plugins/pdfmake/build/pdfmake.min.js"></script>
	<script src="/assets/plugins/pdfmake/build/vfs_fonts.js"></script>
	<script src="/assets/plugins/jszip/dist/jszip.min.js"></script>
	<script src="/assets/js/demo/table-manage-combine.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
    <!-- BEGIN page-header -->
    <h1 class="page-header mb-3">Dashboard ANPR</h1>
    <!-- END page-header -->

    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL VISITORS</h4>
                    <p>{{ $totalData }}</p>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                    <h4>BOUNCE RATE</h4>
                    <p>20%</p>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>UNIQUE VISITORS</h4>
                    <p>1,291,922</p>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                    <h4>AVG TIME ON SITE</h4>
                    <p>00:12:23</p>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
    </div>
    <!-- END row -->


	<div class="panel panel-inverse">
		<!-- BEGIN panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Plates History
				<span class="ms-2">
                    <i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover"
                        data-bs-title="Plates history" data-bs-placement="right"
                        data-bs-content="Seluruh data history hasil pembacaan plat nomor oleh CCTV"></i>
                </span>
			</h4>
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
			<table id="data-table-combine" class="table table-striped table-bordered align-middle w-100 text-nowrap">
				<thead>
					<tr>
						<th width="1%">No</th>
						<th class="text-nowrap">Number Plates</th>
						<th class="text-nowrap">Time</th>
						<th class="text-nowrap">Date</th>

					</tr>
				</thead>
				
				<tbody>
					@foreach ($data as $item)
						<tr class="odd">
							<td width=1% class="fw-bold">
								{{ $loop->iteration }}
							</td>
							<td>
								{{ $item->numberplate }}
                            </td>
							<td>
								{{ $item->time }}
							</td>
							<td>
								{{ $item->date }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- END panel-body -->
	</div>

@endsection
