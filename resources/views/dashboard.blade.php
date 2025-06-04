@extends('layouts.default')

@section('title', 'Dashboard')

@push('css')
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>

    <script>
        // Pass server data to global variables
        window.dashboardData = {
            trendLabels: @json($trendLabels),
            trendData: @json($trendData),
            notifications: {
                success: "{{ session('success') }}".trim() || null
            }
        };
    </script>
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
                    <p data-animation="number" data-value="{{ $totalData }}">0</p>
                </div>
                <div class="stats-link">
                    <a href="{{ url('history') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                    <h4>TOTAL TENANT</h4>
                    <p data-animation="number" data-value="{{ $totalTenant }}">0</p>
                </div>
                <div class="stats-link">
                    <a href="{{ url('tenant') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>TENANT DETECT</h4>
                    <p data-animation="number" data-value="{{ $tenantDetect }}">0</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                    <h4>NON TENANT DETECT</h4>
                    <p data-animation="number" data-value="{{ $nonTenantDetect }}">0</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- END col-3 -->
    </div>
    <!-- END row -->

    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN daterange-filter -->
        <div class="d-sm-flex align-items-center mb-3">
            <div class="btn btn-dark me-2 text-truncate" id="daterange-filter">
                <i class="fa fa-calendar fa-fw text-white text-opacity-50 ms-n1"></i>
                <span>Value</span>
                <b class="caret ms-1 opacity-5"></b>
            </div>
        </div>
        <!-- END daterange-filter -->
        <!-- BEGIN col-6 -->
        <div class="col-xl">
            <!-- BEGIN card -->
            <div class="card border-0 mb-3 overflow-hidden">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN title -->
                        <div class="mb-3">
                            <b>CHART KENDARAAN</b>
                            <span class="ms-2">
                                <i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover"
                                    data-bs-title="Total sales" data-bs-placement="top"
                                    data-bs-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
                            </span>
                        </div>
                        <!-- END title -->
                        <div id="activityTrendChart"></div>
                    </div>
                    <!-- END row -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->

    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Live Camera</h4>
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
                    <h1>RTSP GATE 1</h1>
                </div>
                <!-- END panel-body -->
            </div>
        </div>
        <!-- END col-6 -->
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Live Camera</h4>
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
                    <h1>RTSP GATE 2</h1>
                </div>
                <!-- END panel-body -->
            </div>
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->

    {{-- <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-8 -->
        <div class="col-xl-12 col-lg-6">
            <!-- BEGIN card -->
            <div class="card border-0 mb-3 bg-gray-800 text-white">
                <div class="card-body">
                    <div class="mb-3 text-gray-500 "><b>VISITORS ANALYTICS</b></div>
                    <div class="row">
                        <div class="col-xl-3 col-4">
                            <h3 class="mb-1"><span data-animation="number" data-value="127.1">0</span>K</h3>
                            <div>New Visitors</div>
                            <div class="text-gray-500 small text-truncate"><i class="fa fa-caret-up"></i> <span
                                    data-animation="number" data-value="25.5">0.00</span>% from previous 7 days</div>
                        </div>
                        <div class="col-xl-3 col-4">
                            <h3 class="mb-1"><span data-animation="number" data-value="179.9">0</span>K</h3>
                            <div>Returning Visitors</div>
                            <div class="text-gray-500 small text-truncate"><i class="fa fa-caret-up"></i> <span
                                    data-animation="number" data-value="4">0.00</span>% from previous 7 days</div>
                        </div>
                        <div class="col-xl-3 col-4">
                            <h3 class="mb-1"><span data-animation="number" data-value="766.8">0</span>K</h3>
                            <div>Total Page Views</div>
                            <div class="text-gray-500 small text-truncate"><i class="fa fa-caret-up"></i> <span
                                    data-animation="number" data-value="0.323">0.00</span>% from previous 7 days</div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div style="height: 269px">
                        <div id="visitors-line-chart" class="widget-chart-full-width" data-bs-theme="dark"
                            style="height: 254px"></div>
                    </div>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END col-8 -->
    </div>
    <!-- END row -->
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- BEGIN card -->
            <div class="card border-0 mb-3 bg-gray-900 text-white">
                <!-- BEGIN card-body -->
                <div class="card-body"
                    style="background: no-repeat bottom right; background-image: url(../assets/img/svg/img-4.svg); background-size: auto 60%;">
                    <!-- BEGIN title -->
                    <div class="mb-3 text-gray-500 ">
                        <b>SALES BY SOCIAL SOURCE</b>
                        <span class="text-gray-500 ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-title="Sales by social source" data-bs-placement="top"
                                data-bs-content="Total online store sales that came from a social referrer source."></i></span>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN sales -->
                    <h3 class="mb-10px">$<span data-animation="number" data-value="55547.89">0.00</span></h3>
                    <!-- END sales -->
                    <!-- BEGIN percentage -->
                    <div class="text-gray-500 mb-1px"><i class="fa fa-caret-up"></i> <span data-animation="number"
                            data-value="45.76">0.00</span>% increased</div>
                    <!-- END percentage -->
                </div>
                <!-- END card-body -->
                <!-- BEGIN widget-list -->
                <div class="widget-list rounded-bottom" data-bs-theme="dark">
                    <!-- BEGIN widget-list-item -->
                    <a href="#" class="widget-list-item rounded-0 pt-3px">
                        <div class="widget-list-media icon">
                            <i class="fab fa-apple bg-indigo text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Apple Store</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-gray-500">
                            $<span data-animation="number" data-value="34840.17">0.00</span>
                        </div>
                    </a>
                    <!-- END widget-list-item -->
                    <!-- BEGIN widget-list-item -->
                    <a href="#" class="widget-list-item">
                        <div class="widget-list-media icon">
                            <i class="fab fa-facebook-f bg-blue text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Facebook</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-gray-500">
                            $<span data-animation="number" data-value="12502.67">0.00</span>
                        </div>
                    </a>
                    <!-- END widget-list-item -->
                    <!-- BEGIN widget-list-item -->
                    <a href="#" class="widget-list-item">
                        <div class="widget-list-media icon">
                            <i class="fab fa-twitter bg-info text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Twitter</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-gray-500">
                            $<span data-animation="number" data-value="4799.20">0.00</span>
                        </div>
                    </a>
                    <!-- END widget-list-item -->
                    <!-- BEGIN widget-list-item -->
                    <a href="#" class="widget-list-item">
                        <div class="widget-list-media icon">
                            <i class="fab fa-google bg-red text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Google Adwords</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-gray-500">
                            $<span data-animation="number" data-value="3405.85">0.00</span>
                        </div>
                    </a>
                    <!-- END widget-list-item -->
                    <!-- BEGIN widget-list-item -->
                    <a href="#" class="widget-list-item pb-3px rounded-bottom">
                        <div class="widget-list-media icon">
                            <i class="fab fa-instagram bg-pink text-white"></i>
                        </div>
                        <div class="widget-list-content">
                            <div class="widget-list-title">Instagram</div>
                        </div>
                        <div class="widget-list-action text-nowrap text-gray-500">
                            $<span data-animation="number" data-value="0.00">0.00</span>
                        </div>
                    </a>
                    <!-- END widget-list-item -->
                </div>
                <!-- END widget-list -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->
        <!-- END col-4 -->
        <!-- BEGIN col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- BEGIN card -->
            <div class="card border-0 mb-3 bg-gray-800 text-white">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="mb-3 text-gray-500">
                        <b>TOP PRODUCTS BY UNITS SOLD</b>
                        <span class="ms-2 "><i class="fa fa-info-circle" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-title="Top products with units sold"
                                data-bs-placement="top"
                                data-bs-content="Products with the most individual units sold. Includes orders from all sales channels."></i></span>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN product -->
                    <div class="d-flex align-items-center mb-15px">
                        <div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
                            <div class="h-100 w-100"
                                style="background: url(../assets/img/product/product-8.jpg) center no-repeat; background-size: auto 100%;">
                            </div>
                        </div>
                        <div class="text-truncate">
                            <div>Apple iPhone XR (2023)</div>
                            <div class="text-gray-500">$799.00</div>
                        </div>
                        <div class="ms-auto text-center">
                            <div class="fs-13px"><span data-animation="number" data-value="195">0</span></div>
                            <div class="text-gray-500 fs-10px">sold</div>
                        </div>
                    </div>
                    <!-- END product -->
                    <!-- BEGIN product -->
                    <div class="d-flex align-items-center mb-15px">
                        <div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
                            <div class="h-100 w-100"
                                style="background: url(../assets/img/product/product-9.jpg) center no-repeat; background-size: auto 100%;">
                            </div>
                        </div>
                        <div class="text-truncate">
                            <div>Apple iPhone XS (2023)</div>
                            <div class="text-gray-500">$1,199.00</div>
                        </div>
                        <div class="ms-auto text-center">
                            <div class="fs-13px"><span data-animation="number" data-value="185">0</span></div>
                            <div class="text-gray-500 fs-10px">sold</div>
                        </div>
                    </div>
                    <!-- END product -->
                    <!-- BEGIN product -->
                    <div class="d-flex align-items-center mb-15px">
                        <div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
                            <div class="h-100 w-100"
                                style="background: url(../assets/img/product/product-10.jpg) center no-repeat; background-size: auto 100%;">
                            </div>
                        </div>
                        <div class="text-truncate">
                            <div>Apple iPhone XS Max (2023)</div>
                            <div class="text-gray-500">$3,399</div>
                        </div>
                        <div class="ms-auto text-center">
                            <div class="fs-13px"><span data-animation="number" data-value="129">0</span></div>
                            <div class="text-gray-500 fs-10px">sold</div>
                        </div>
                    </div>
                    <!-- END product -->
                    <!-- BEGIN product -->
                    <div class="d-flex align-items-center mb-15px">
                        <div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
                            <div class="h-100 w-100"
                                style="background: url(../assets/img/product/product-11.jpg) center no-repeat; background-size: auto 100%;">
                            </div>
                        </div>
                        <div class="text-truncate">
                            <div>Huawei Y5 (2023)</div>
                            <div class="text-gray-500">$99.00</div>
                        </div>
                        <div class="ms-auto text-center">
                            <div class="fs-13px"><span data-animation="number" data-value="96">0</span></div>
                            <div class="text-gray-500 fs-10px">sold</div>
                        </div>
                    </div>
                    <!-- END product -->
                    <!-- BEGIN product -->
                    <div class="d-flex align-items-center">
                        <div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
                            <div class="h-100 w-100"
                                style="background: url(../assets/img/product/product-12.jpg) center no-repeat; background-size: auto 100%;">
                            </div>
                        </div>
                        <div class="text-truncate">
                            <div>Huawei Nova 4 (2023)</div>
                            <div class="text-gray-500">$499.00</div>
                        </div>
                        <div class="ms-auto text-center">
                            <div class="fs-13px"><span data-animation="number" data-value="55">0</span></div>
                            <div class="text-gray-500 fs-10px">sold</div>
                        </div>
                    </div>
                    <!-- END product -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->
        <!-- BEGIN col-4 -->
        <div class="col-xl-4 col-lg-6">
            <!-- BEGIN card -->
            <div class="card border-0 mb-3 bg-gray-800 text-white">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="mb-3 text-gray-500 ">
                        <b>MARKETING CAMPAIGN</b>
                        <span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-title="Marketing Campaign" data-bs-placement="top"
                                data-bs-content="Campaign that run for getting more returning customers."></i></span>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN row -->
                    <div class="row align-items-center pb-1px">
                        <!-- BEGIN col-4 -->
                        <div class="col-4">
                            <div class="h-100px d-flex align-items-center justify-content-center">
                                <img src="../assets/img/svg/img-2.svg" class="mw-100 mh-100" />
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-8 -->
                        <div class="col-8">
                            <div class="mb-2px text-truncate">Email Marketing Campaign</div>
                            <div class="mb-2px  text-gray-500  small">Mon 12/6 - Sun 18/6</div>
                            <div class="d-flex align-items-center mb-2px">
                                <div class="flex-grow-1">
                                    <div class="progress h-5px rounded-pill bg-white bg-opacity-10">
                                        <div class="progress-bar progress-bar-striped bg-indigo" data-animation="width"
                                            data-value="80%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="ms-2 small w-30px text-center"><span data-animation="number"
                                        data-value="80">0</span>%</div>
                            </div>
                            <div class="text-gray-500 small mb-15px text-truncate">
                                57.5% people click the email
                            </div>
                            <a href="#" class="btn btn-xs btn-indigo fs-10px ps-2 pe-2">View campaign</a>
                        </div>
                        <!-- END col-8 -->
                    </div>
                    <!-- END row -->
                    <hr class=" bg-white bg-opacity-20 mt-20px mb-20px" />
                    <!-- BEGIN row -->
                    <div class="row align-items-center">
                        <!-- BEGIN col-4 -->
                        <div class="col-4">
                            <div class="h-100px d-flex align-items-center justify-content-center">
                                <img src="../assets/img/svg/img-3.svg" class="mw-100 mh-100" />
                            </div>
                        </div>
                        <!-- END col-4 -->
                        <!-- BEGIN col-8 -->
                        <div class="col-8">
                            <div class="mb-2px text-truncate">Facebook Marketing Campaign</div>
                            <div class="mb-2px  text-gray-500  small">Sat 10/6 - Sun 18/6</div>
                            <div class="d-flex align-items-center mb-2px">
                                <div class="flex-grow-1">
                                    <div class="progress h-5px rounded-pill bg-white bg-opacity-10">
                                        <div class="progress-bar progress-bar-striped bg-warning" data-animation="width"
                                            data-value="60%" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="ms-2 small w-30px text-center"><span data-animation="number"
                                        data-value="60">0</span>%</div>
                            </div>
                            <div class="text-gray-500 small mb-15px text-truncate">
                                +124k visitors from facebook
                            </div>
                            <a href="#" class="btn btn-xs btn-warning fs-10px ps-2 pe-2">View campaign</a>
                        </div>
                        <!-- END col-8 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-4 -->
    </div>
    <!-- END row --> --}}
@endsection
