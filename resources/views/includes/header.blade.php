@php
	$appHeaderAttr = (!empty($appHeaderInverse)) ? ' data-bs-theme=dark' : '';
	$appHeaderMenu = (!empty($appHeaderMenu)) ? $appHeaderMenu : '';
	$appHeaderMegaMenu = (!empty($appHeaderMegaMenu)) ? $appHeaderMegaMenu : ''; 
	$appHeaderTopMenu = (!empty($appHeaderTopMenu)) ? $appHeaderTopMenu : '';
@endphp

<!-- BEGIN #header -->
<div id="header" class="app-header" {{ $appHeaderAttr }}>
	<!-- BEGIN navbar-header -->
	<div class="navbar-header">
		@if ($appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-end-mobile">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
		<a href="/" class="navbar-brand">
			<img src="{{ asset('assets/img/logo_ksp.png') }}" alt="Logo" style="height:45px;">
		</a>
		@if ($appHeaderMegaMenu && !$appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-bs-toggle="collapse" data-bs-target="#top-navbar">
			<span class="fa-stack fa-lg">
				<i class="far fa-square fa-stack-2x"></i>
				<i class="fa fa-cog fa-stack-1x mt-1px"></i>
			</span>
		</button>
		@endif
		@if($appTopMenu && !$appSidebarHide && !$appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-top-menu-mobile">
			<span class="fa-stack fa-lg">
				<i class="far fa-square fa-stack-2x"></i>
				<i class="fa fa-cog fa-stack-1x mt-1px"></i>
			</span>
		</button>
		@endif
		@if($appTopMenu && $appSidebarHide && !$appSidebarTwo)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-top-menu-mobile">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
		@if (!$appSidebarHide)
		<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
	</div>
	
	@includeWhen($appHeaderMegaMenu, 'includes.component.header-mega-menu')
	
	<!-- BEGIN header-nav -->
	<div class="navbar-nav">		
		@isset($appHeaderLanguageBar)
			@include('includes.component.header-language-bar')
		@endisset
		
		<div class="navbar-item navbar-user dropdown">
			<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
				<img src="{{ asset('assets/img/ks-icon.png') }}" alt="" /> 
				<span>
					<span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
					<b class="caret"></b>
				</span>
			</a>
			@include('includes.component.header-dropdown-profile')
		</div>
		
		@if($appSidebarTwo)
		<div class="navbar-divider d-none d-md-block"></div>
		<div class="navbar-item d-none d-md-block">
			<a href="javascript:;" data-toggle="app-sidebar-end" class="navbar-link icon">
				<i class="fa fa-th"></i>
			</a>
		</div>
		@endif
	</div>
	<!-- END header-nav -->
</div>
<!-- END #header -->