@extends('layouts.default')

@section('title', 'Tenant')

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Terjadi kesalahan...',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonText: "Submit Ulang",
                confirmButtonColor: "#3085d6"
            });
        </script>
    @endif
@endpush

@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('tenant') }}">Tenant</a></li>
        <li class="breadcrumb-item active">Tambah Tenant</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header mb-3">Tambah Tenant</h1>
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
            <form action="{{ route('tenant.store') }}" method="POST">
                @csrf
                <fieldset>
                    <div class="row mb-3">
                        <label class="form-label col-form-label col-md-3">Vehicle Plate <span
                                class="text-red-500">*</span>:</label>
                        <div class="col-md-9">
                            <input type="text" name="vehicle_plate" class="form-control"
                            placeholder="Enter vehicle plate" required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-form-label col-md-3">Vehicle Type <span class="text-red-500">*</span>
                            :</label>
                        <div class="col-md-9">
                            <input type="text" name="vehicle_type" class="form-control"
                            placeholder="Enter vehicle type"
                                required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-form-label col-md-3">Brand <span class="text-red-500">*</span>
                            :</label>
                        <div class="col-md-9">
                            <input type="text" name="brand" class="form-control"
                            placeholder="Enter brand"
                                required />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-form-label col-md-3">Color <span class="text-red-500">*</span>
                            :</label>
                        <div class="col-md-9">
                            <input type="text" name="color" class="form-control" placeholder="Enter color"
                                required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 offset-md-3">
                            <button type="submit" class="btn btn-primary w-100px me-5px">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- END panel-body -->
    </div>
@endsection
