@extends('layouts.default')

@section('title', 'History')

@push('css')
    {{-- datatables --}}
    <link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-autofill-bs5/css/autoFill.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />

    {{-- Image --}}
    <link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
@endpush

@push('scripts')
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

    <script src="/assets/js/demo/table-manage-default.demo.js"></script>
    <script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
    <script src="/assets/js/demo/render.highlight.js"></script>

    {{-- Image --}}
    <script src="/assets/plugins/lity/dist/lity.min.js"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/history.js"></script>
@endpush

@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">History</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header mb-3">History ANPR</h1>
    <!-- END page-header -->


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
                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                        class="fa fa-minus"></i></a>
            </div>
        </div>
        <!-- END panel-heading -->
        <!-- BEGIN panel-body -->
        <div class="panel-body">
            <table id="data-table-default" class="table table-striped table-bordered align-middle w-100 text-nowrap">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th class="text-nowrap">Number Plate</th>
                        <th class="text-nowrap">Plate Image</th>
                        <th class="text-nowrap">Tenant</th>
                        <th class="text-nowrap">Timestamp</th>
                        <th width="1%" data-orderable="false"></th>
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
                                <a href="data:image/jpeg;base64,{{ $item->image }}" data-lity>
                                    {{-- <img src="{{ asset($item->image) }}" alt="Plate Number" style="height:35px;"> --}}
                                    <img src="data:image/jpeg;base64,{{ $item->image }}" alt="Plate Number" style="height:35px;">
                                </a>
                            </td>
                            <td>
                                @if ($item->tenant == 'yes')
                                    <span class="badge bg-success rounded-pill">Yes</span>
                                @else
                                    <span class="badge bg-danger rounded-pill">No</span>
                                @endif
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td width="1%">
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-primary"
                                        onclick="editNumberPlate({{ $item->id }}, '{{ $item->numberplate }}')">
                                        <i class="fas fa-pen-to-square fa-sm"></i>
                                    </button>
                                    @can('admin')
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('history.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger"
                                                onclick="confirmDelete({{ $item->id }})">
                                                <i class="fas fa-trash-can fa-sm"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END panel-body -->
    </div>
@endsection
