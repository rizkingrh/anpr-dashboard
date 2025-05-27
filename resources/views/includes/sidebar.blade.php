<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar" data-bs-theme=dark>
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
                <div class="menu-profile">
                    <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                            <img src="{{ asset('assets/img/ks-icon.png') }}" alt="" />
                        </div>
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    {{ auth()->user()->name }}
                                </div>
                            </div>
                            <small>{{ ucfirst(auth()->user()->role) }}</small>
                        </div>
                    </a>
                </div>

            <div class="menu-header">Navigation</div>

            <div class="menu-item  {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-home"></i></div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>

            <div class="menu-item  {{ Request::is('user') ? 'active' : '' }}">
                <a href="{{ url('user') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-user-group"></i></div>
                    <div class="menu-text">User</div>
                </a>
            </div>

            <div class="menu-item  {{ Request::is('history') ? 'active' : '' }}">
                <a href="{{ url('history') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-clock-rotate-left"></i></div>
                    <div class="menu-text">History</div>
                </a>
            </div>

            <div class="menu-item  {{ Request::is('tenant') ? 'active' : '' }}">
                <a href="{{ url('tenant') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-user-lock"></i></div>
                    <div class="menu-text">Tenants</div>
                </a>
            </div>
            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg" data-bs-theme=dark></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
</div>
<!-- END #sidebar -->