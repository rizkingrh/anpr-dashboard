@extends('layouts.default')

@section('title', 'User')

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
    <link href="/assets/plugins/superbox/superbox.min.css" rel="stylesheet" />
    <link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
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

    <script src="/assets/js/demo/table-manage-default.demo.js"></script>
    <script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
    <script src="/assets/js/demo/render.highlight.js"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
@endpush

@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tenant</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header mb-3">Daftar Tenant</h1>
    <!-- END page-header -->


    <div class="panel panel-inverse">
        <!-- BEGIN panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Tenant List
                <span class="ms-2">
                    <i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Tenant List"
                        data-bs-placement="right" data-bs-content="Seluruh data tenant yang teregistrasi pada dashboard"></i>
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
                        <th class="text-nowrap">Plate</th>
                        <th class="text-nowrap">Type</th>
                        <th class="text-nowrap">Brand</th>
                        <th class="text-nowrap">Color</th>
                        @can('admin')
                            <th width="1%" data-orderable="false"></th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="odd">
                            <td width=1% class="fw-bold">
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $item->vehicle_plate }}
                            </td>
                            <td>
                                {{ $item->vehicle_type }}
                            </td>
                            <td>
                                {{ $item->brand }}
                            </td>
                            <td>
                                {{ $item->color }}
                            </td>
                            @can('admin')
                                <td width="1%">
                                    <div class="d-flex gap-2">
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('user.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger"
                                                onclick="confirmDelete({{ $item->id }})">
                                                <i class="fas fa-trash-can fa-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END panel-body -->
    </div>
    {{-- <div class="d-flex justify-content-end">
        <a href="{{ route('user.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Tambah User
        </a>
    </div> --}}
@endsection
