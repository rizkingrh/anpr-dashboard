@extends('layouts.default')

@section('title', 'Unlimited Nav Tabs')

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Unlimited Nav Tabs</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Unlimited Nav Tabs <small>header small text goes here...</small></h1>
	<!-- END page-header -->

	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-3 -->
		<div class="col-xl-3">
			<div class="mb-3 text-dark fs-14px">
				<b class="badge bg-gray-800 d-inline-flex align-items-center px-2 py-6px">
					<i class="fa fa-circle fa-fw fs-6px text-teal me-1"></i> 
					<i class="fa fa-circle fa-fw fs-6px text-warning me-1"></i>
					<i class="fa fa-circle fa-fw fs-6px text-danger me-2"></i>
					Main Features
				</b>
			</div>
			<div class="mb-3 fw-bold fs-13px">
				<div class="d-flex align-items-center mb-3">
					<i class="fa fa-laptop fa-lg fa-fw me-10px text-gray-600"></i>
					<div>Responsive in any screen size</div>
				</div>
				<div class="d-flex align-items-center mb-3">
					<i class="fa fa-crosshairs fa-lg fa-fw me-10px text-gray-600"></i>
					<div>Autofocus on Active Tabs</div>
				</div>
				<div class="d-flex align-items-center mb-3">
					<i class="fa fa-expand fa-lg fa-fw me-10px text-gray-600"></i>
					<div>Support Expand Features</div>
				</div>
				<div class="d-flex align-items-center mb-3">
					<i class="fa fa-wrench fa-lg fa-fw me-10px text-gray-600"></i>
					<div>Auto Show / Hide Next & Prev Button</div>
				</div>
				<div class="d-flex align-items-center mb-3">
					<i class="fa fa-toggle-on fa-lg fa-fw me-10px text-gray-600"></i>
					<div>Light / Dark Mode</div>
				</div>
			</div>
			<div class="alert alert-warning border-top-0 border-end-0 border-bottom-0 border-3 rounded-0">
				<i class="fa fa-info-circle fa-fw"></i> 
				Unlimited Navigation Tabs is <b>not compatible</b> with the bootstrap dropdown menu.
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-9 -->
		<div class="col-xl-9">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading p-0">
					<!-- BEGIN nav-tabs -->
					<div class="tab-overflow">
						<ul class="nav nav-tabs nav-tabs-inverse">
							<li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="nav-link text-primary"><i class="fa fa-arrow-left"></i></a></li>
							<li class="nav-item"><a href="#nav-tab-1" data-bs-toggle="tab" class="nav-link active">Nav Tab 1</a></li>
							<li class="nav-item"><a href="#nav-tab-2" data-bs-toggle="tab" class="nav-link">Nav Tab 2</a></li>
							<li class="nav-item"><a href="#nav-tab-3" data-bs-toggle="tab" class="nav-link">Nav Tab 3</a></li>
							<li class="nav-item"><a href="#nav-tab-4" data-bs-toggle="tab" class="nav-link">Nav Tab 4</a></li>
							<li class="nav-item"><a href="#nav-tab-5" data-bs-toggle="tab" class="nav-link">Nav Tab 5</a></li>
							<li class="nav-item"><a href="#nav-tab-6" data-bs-toggle="tab" class="nav-link">Nav Tab 6</a></li>
							<li class="nav-item"><a href="#nav-tab-7" data-bs-toggle="tab" class="nav-link">Nav Tab 7</a></li>
							<li class="nav-item"><a href="#nav-tab-8" data-bs-toggle="tab" class="nav-link">Nav Tab 8</a></li>
							<li class="nav-item"><a href="#nav-tab-9" data-bs-toggle="tab" class="nav-link">Nav Tab 9</a></li>
							<li class="nav-item"><a href="#nav-tab-10" data-bs-toggle="tab" class="nav-link">Nav Tab 10</a></li>
							<li class="nav-item"><a href="#nav-tab-11" data-bs-toggle="tab" class="nav-link">Nav Tab 11</a></li>
							<li class="nav-item"><a href="#nav-tab-12" data-bs-toggle="tab" class="nav-link">Nav Tab 12</a></li>
							<li class="nav-item"><a href="#nav-tab-13" data-bs-toggle="tab" class="nav-link">Nav Tab 13</a></li>
							<li class="nav-item"><a href="#nav-tab-14" data-bs-toggle="tab" class="nav-link">Nav Tab 14</a></li>
							<li class="nav-item"><a href="#nav-tab-15" data-bs-toggle="tab" class="nav-link">Nav Tab 15</a></li>
							<li class="nav-item next-button"><a href="javascript:;" data-click="next-tab" class="nav-link text-primary"><i class="fa fa-arrow-right"></i></a></li>
						</ul>
					</div>
					<!-- END nav-tabs -->
					<div class="panel-heading-btn me-2 ms-2 d-flex">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-secondary" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN tab-content -->
				<div class="panel-body tab-content">
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade active show" id="nav-tab-1">
						<h3 class="mt-10px">Nav Tab 1</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-2">
						<h3 class="mt-10px">Nav Tab 2</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-3">
						<h3 class="mt-10px">Nav Tab 3</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-4">
						<h3 class="mt-10px">Nav Tab 4</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-5">
						<h3 class="mt-10px">Nav Tab 5</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-6">
						<h3 class="mt-10px">Nav Tab 6</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-7">
						<h3 class="mt-10px">Nav Tab 7</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-8">
						<h3 class="mt-10px">Nav Tab 8</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-9">
						<h3 class="mt-10px">Nav Tab 9</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-10">
						<h3 class="mt-10px">Nav Tab 10</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-11">
						<h3 class="mt-10px">Nav Tab 11</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-12">
						<h3 class="mt-10px">Nav Tab 12</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-13">
						<h3 class="mt-10px">Nav Tab 13</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-14">
						<h3 class="mt-10px">Nav Tab 14</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-15">
						<h3 class="mt-10px">Nav Tab 15</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-16">
						<h3 class="mt-10px">Nav Tab 16</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-17">
						<h3 class="mt-10px">Nav Tab 17</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-18">
						<h3 class="mt-10px">Nav Tab 18</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-19">
						<h3 class="mt-10px">Nav Tab 19</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
					<!-- BEGIN tab-pane -->
					<div class="tab-pane fade" id="nav-tab-20">
						<h3 class="mt-10px">Nav Tab 20</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- END tab-pane -->
				</div>
				<!-- END tab-content -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html" data-url="/assets/data/ui-unlimited-tabs/code-1.json"></code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-9 -->
	</div>
	<!-- END row -->
@endsection