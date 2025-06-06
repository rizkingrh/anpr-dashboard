@extends('layouts.default', ['appContentClass' => 'p-0'])

@section('title', 'Profile Page')

@push('css')
	<link href="/assets/plugins/superbox/superbox.min.css" rel="stylesheet" />
	<link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="/assets/plugins/superbox/jquery.superbox.min.js"></script>
	<script src="/assets/plugins/lity/dist/lity.min.js"></script>
	<script src="/assets/js/demo/profile.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN profile -->
	<div class="profile">
		<div class="profile-header">
			<!-- BEGIN profile-header-cover -->
			<div class="profile-header-cover"></div>
			<!-- END profile-header-cover -->
			<!-- BEGIN profile-header-content -->
			<div class="profile-header-content">
				<!-- BEGIN profile-header-img -->
				<div class="profile-header-img">
					<img src="/assets/img/user/user-13.jpg" alt="" />
				</div>
				<!-- END profile-header-img -->
				<!-- BEGIN profile-header-info -->
				<div class="profile-header-info">
					<h4 class="mt-0 mb-1">Sean Ngu</h4>
					<p class="mb-2">UXUI + Frontend Developer</p>
					<a href="#" class="btn btn-xs btn-yellow">Edit Profile</a>
				</div>
				<!-- END profile-header-info -->
			</div>
			<!-- END profile-header-content -->
			<!-- BEGIN profile-header-tab -->
			<ul class="profile-header-tab nav nav-tabs">
				<li class="nav-item"><a href="#profile-post" class="nav-link active" data-bs-toggle="tab">POSTS</a></li>
				<li class="nav-item"><a href="#profile-about" class="nav-link" data-bs-toggle="tab">ABOUT</a></li>
				<li class="nav-item"><a href="#profile-photos" class="nav-link" data-bs-toggle="tab">PHOTOS</a></li>
				<li class="nav-item"><a href="#profile-videos" class="nav-link" data-bs-toggle="tab">VIDEOS</a></li>
				<li class="nav-item"><a href="#profile-friends" class="nav-link" data-bs-toggle="tab">FRIENDS</a></li>
			</ul>
			<!-- END profile-header-tab -->
		</div>
	</div>
	<!-- END profile -->
	<!-- BEGIN profile-content -->
	<div class="profile-content">
		<!-- BEGIN tab-content -->
		<div class="tab-content p-0">
			<!-- BEGIN #profile-post tab -->
			<div class="tab-pane fade show active" id="profile-post">
				<!-- BEGIN timeline -->
				<div class="timeline">
					<!-- BEGIN timeline-item -->
					<div class="timeline-item">
						<!-- BEGIN timeline-time -->
						<div class="timeline-time">
							<span class="date">today</span>
							<span class="time">04:20</span>
						</div>
						<!-- END timeline-time -->
						<!-- BEGIN timeline-icon -->
						<div class="timeline-icon">
							<a href="javascript:;">&nbsp;</a>
						</div>
						<!-- END timeline-icon -->
						<!-- BEGIN timeline-content -->
						<div class="timeline-content">
							<!-- BEGIN timeline-header -->
							<div class="timeline-header">
								<div class="userimage"><img src="/assets/img/user/user-1.jpg" alt="" /></div>
								<div class="username">
									<a href="javascript:;">John Smith <i class="fa fa-check-circle text-blue ms-1"></i></a>
									<div class="text-muted fs-12px">8 mins <i class="fa fa-globe-americas opacity-5 ms-1"></i></div>
								</div>
								<div>
									<a href="#" class="btn btn-lg border-0 rounded-pill w-40px h-40px p-0 d-flex align-items-center justify-content-center" data-bs-toggle="dropdown">
										<i class="fa fa-ellipsis-h text-gray-600"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="#" class="dropdown-item d-flex align-items-center">
											<i class="fa fa-fw fa-bookmark fa-lg"></i> 
											<div class="flex-1 ps-1">
												<div>Save Post</div>
												<div class="mt-n1 text-gray-500"><small>Add this to your saved items</small></div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-user fa-lg me-1"></i> Edit audience</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-calendar-alt fa-lg me-1"></i> Turn date</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
									</div>
								</div>
							</div>
							<!-- END timeline-header -->
			
							<!-- BEGIN timeline-body -->
							<div class="timeline-body">
								<!-- timeline-post -->
								<div class="mb-3">
									<div class="mb-2">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
										Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
									</div>
									<div class="row gx-1">
										<div class="col-6">
											<div class="ratio ratio-4x3">
												<a href="/assets/img/gallery/gallery-14.jpg" data-lity class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-14.jpg)"></a>
											</div>
										</div>
										<div class="col-3">
											<div class="ratio ratio-4x3 mb-3px">
												<a href="/assets/img/gallery/gallery-12.jpg" data-lity class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-12.jpg)"></a>
											</div>
											<div class="ratio ratio-4x3">
												<a href="/assets/img/gallery/gallery-16.jpg" data-lity class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-16.jpg)"></a>
											</div>
										</div>
										<div class="col-3">
											<div class="ratio ratio-4x3 mb-3px">
												<a href="/assets/img/gallery/gallery-15.jpg" data-lity class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-15.jpg)"></a>
											</div>
											<div class="ratio ratio-4x3">
												<a href="/assets/img/gallery/gallery-11.jpg" data-lity class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-11.jpg)"></a>
											</div>
										</div>
									</div>
								</div>
				
								<!-- timeline-stats -->
								<div class="d-flex align-items-center text-dark mb-2">
									<div class="d-flex align-items-center">
										<span class="fa-stack fs-10px">
											<i class="fa fa-circle fa-stack-2x text-danger"></i>
											<i class="fa fa-heart fa-stack-1x fa-inverse fs-11px"></i>
										</span>
										<span class="fa-stack fs-10px">
											<i class="fa fa-circle fa-stack-2x text-blue"></i>
											<i class="fa fa-thumbs-up fa-stack-1x fa-inverse fs-11px bottom-0 mb-1px"></i>
										</span>
										<span class="ms-1">4.3k</span>
									</div>
									<div class="d-flex align-items-center ms-auto">
										<div>259 Shares</div>
										<div class="ms-3">21 Comments</div>
									</div>
								</div>
				
								<!-- timeline-action -->
								<hr class="my-10px" />
								<div class="d-flex align-items-center fw-bold">
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-thumbs-up fa-fw me-3px"></i> Like
									</a>
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-comments fa-fw me-3px"></i> Comment
									</a> 
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-share fa-fw me-3px"></i> Share
									</a>
								</div>
								<hr class="mt-10px mb-3" />
				
								<!-- timeline-input -->
								<form action="" class="d-flex align-items-center">
									<div><img src="/assets/img/user/user-13.jpg" height="35" class="rounded-pill" /></div>
									<div class="ps-2 flex-1">
										<div class="position-relative">
											<input type="text" class="form-control rounded-pill ps-3 py-2 fs-13px bg-light" placeholder="Write a comment..." />
											<div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center px-2">
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-smile fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-camera fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-film fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-sticky-note fa-fw fa-lg d-block"></i></a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- END timeline-body -->
						</div>
						<!-- END timeline-content -->
					</div>
					<!-- END timeline-item -->
					<!-- BEGIN timeline-item -->
					<div class="timeline-item">
						<!-- BEGIN timeline-time -->
						<div class="timeline-time">
							<span class="date">yesterday</span>
							<span class="time">20:17</span>
						</div>
						<!-- END timeline-time -->
						<!-- BEGIN timeline-icon -->
						<div class="timeline-icon">
							<a href="javascript:;">&nbsp;</a>
						</div>
						<!-- END timeline-icon -->
						<!-- BEGIN timeline-content -->
						<div class="timeline-content">
							<!-- BEGIN timeline-header -->
							<div class="timeline-header">
								<div class="userimage"><img src="/assets/img/user/user-2.jpg" alt="" /></div>
								<div class="username">
									<a href="javascript:;">Darren Parrase</a>
									<div class="text-muted fs-12px">24 mins <i class="fa fa-globe-americas opacity-5 ms-1"></i></div>
								</div>
								<div>
									<a href="#" class="btn btn-lg border-0 rounded-pill w-40px h-40px p-0 d-flex align-items-center justify-content-center" data-bs-toggle="dropdown">
										<i class="fa fa-ellipsis-h text-gray-600"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="#" class="dropdown-item d-flex align-items-center">
											<i class="fa fa-fw fa-bookmark fa-lg"></i> 
											<div class="flex-1 ps-1">
												<div>Save Post</div>
												<div class="mt-n1 text-gray-500"><small>Add this to your saved items</small></div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-user fa-lg me-1"></i> Edit audience</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-calendar-alt fa-lg me-1"></i> Turn date</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
									</div>
								</div>
							</div>
							<!-- END timeline-header -->
			
							<!-- BEGIN timeline-body -->
							<div class="timeline-body">
								<!-- timeline-post -->
								<div class="mb-3">
									<div class="mb-2">Location: United States</div>
									<div id="google-map" class="h-250px"></div>
								</div>
				
								<!-- timeline-stats -->
								<div class="d-flex align-items-center text-dark mb-2">
									<div class="d-flex align-items-center">
										<span class="fa-stack fs-10px">
											<i class="fa fa-circle fa-stack-2x text-danger"></i>
											<i class="fa fa-heart fa-stack-1x fa-inverse fs-11px"></i>
										</span>
										<span class="fa-stack fs-10px">
											<i class="fa fa-circle fa-stack-2x text-blue"></i>
											<i class="fa fa-thumbs-up fa-stack-1x fa-inverse fs-11px bottom-0 mb-1px"></i>
										</span>
										<span class="ms-1">269</span>
									</div>
									<div class="d-flex align-items-center ms-auto">
										<div>2 Shares</div>
										<div class="ms-3">9 Comments</div>
									</div>
								</div>
				
								<!-- timeline-action -->
								<hr class="my-10px" />
								<div class="d-flex align-items-center fw-bold">
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-thumbs-up fa-fw me-3px"></i> Like
									</a>
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-comments fa-fw me-3px"></i> Comment</a> 
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-share fa-fw me-3px"></i> Share
									</a>
								</div>
								<hr class="mt-10px mb-3" />
				
								<!-- timeline-input -->
								<form action="" class="d-flex align-items-center">
									<div><img src="/assets/img/user/user-13.jpg" height="35" class="rounded-pill" /></div>
									<div class="ps-2 flex-1">
										<div class="position-relative">
											<input type="text" class="form-control rounded-pill ps-3 py-2 fs-13px bg-light" placeholder="Write a comment..." />
											<div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center px-2">
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-smile fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-camera fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-film fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-sticky-note fa-fw fa-lg d-block"></i></a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- END timeline-body -->
						</div>
						<!-- END timeline-content -->
					</div>
					<!-- END timeline-item -->
					<!-- BEGIN timeline-item -->
					<div class="timeline-item">
						<!-- BEGIN timeline-time -->
						<div class="timeline-time">
							<span class="date">24 February 2023</span>
							<span class="time">08:17</span>
						</div>
						<!-- END timeline-time -->
						<!-- BEGIN timeline-icon -->
						<div class="timeline-icon">
							<a href="javascript:;">&nbsp;</a>
						</div>
						<!-- END timeline-icon -->
						<!-- BEGIN timeline-content -->
						<div class="timeline-content">
							<!-- BEGIN timeline-header -->
							<div class="timeline-header">
								<div class="userimage"><img src="/assets/img/user/user-3.jpg" alt="" /></div>
								<div class="username">
									<a href="javascript:;">Richard Leong <i class="fa fa-check-circle text-blue ms-1"></i></a>
									<div class="text-muted fs-12px">12 hours <i class="fa fa-globe-americas opacity-5 ms-1"></i></div>
								</div>
								<div>
									<a href="#" class="btn btn-lg border-0 rounded-pill w-40px h-40px p-0 d-flex align-items-center justify-content-center" data-bs-toggle="dropdown">
										<i class="fa fa-ellipsis-h text-gray-600"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="#" class="dropdown-item d-flex align-items-center">
											<i class="fa fa-fw fa-bookmark fa-lg"></i> 
											<div class="flex-1 ps-1">
												<div>Save Post</div>
												<div class="mt-n1 text-gray-500"><small>Add this to your saved items</small></div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-user fa-lg me-1"></i> Edit audience</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-calendar-alt fa-lg me-1"></i> Turn date</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
									</div>
								</div>
							</div>
							<!-- END timeline-header -->
							<!-- BEGIN timeline-body -->
							<div class="timeline-body">
								<!-- timeline-post -->
								<div class="lead mb-3">
									<i class="fa fa-quote-left fa-fw float-start opacity-5 me-3 mb-3 mt-3 fa-lg"></i>
									Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
									<i class="fa fa-quote-right fa-fw float-end opacity-5 ms-3 mt-n3 fa-lg"></i>
								</div>
				
								<!-- timeline-stats -->
								<div class="d-flex align-items-center text-dark mb-2">
									<div class="d-flex align-items-center">
										<span class="fa-stack fs-10px">
											<i class="fa fa-circle fa-stack-2x text-danger"></i>
											<i class="fa fa-heart fa-stack-1x fa-inverse fs-11px"></i>
										</span>
										<span class="fa-stack fs-10px">
											<i class="fa fa-circle fa-stack-2x text-blue"></i>
											<i class="fa fa-thumbs-up fa-stack-1x fa-inverse fs-11px bottom-0 mb-1px"></i>
										</span>
										<span class="ms-1">550</span>
									</div>
									<div class="d-flex align-items-center ms-auto">
										<div>121 Shares</div>
										<div class="ms-3">40 Comments</div>
									</div>
								</div>
				
								<!-- timeline-action -->
								<hr class="my-10px" />
								<div class="d-flex align-items-center fw-bold">
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-thumbs-up fa-fw me-3px"></i> Like
									</a>
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-comments fa-fw me-3px"></i> Comment
									</a> 
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-share fa-fw me-3px"></i> Share
									</a>
								</div>
								<hr class="mt-10px mb-3" />
				
								<!-- timeline-input -->
								<form action="" class="d-flex align-items-center">
									<div><img src="/assets/img/user/user-13.jpg" height="35" class="rounded-pill" /></div>
									<div class="ps-2 flex-1">
										<div class="position-relative">
											<input type="text" class="form-control rounded-pill ps-3 py-2 fs-13px bg-light" placeholder="Write a comment..." />
											<div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center px-2">
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-smile fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-camera fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-film fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-sticky-note fa-fw fa-lg d-block"></i></a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- END timeline-body -->
						</div>
						<!-- END timeline-content -->
					</div>
					<!-- END timeline-item -->
					<!-- BEGIN timeline-item -->
					<div class="timeline-item">
						<!-- BEGIN timeline-time -->
						<div class="timeline-time">
							<span class="date">10 January 2023</span>
							<span class="time">20:43</span>
						</div>
						<!-- END timeline-time -->
						<!-- BEGIN timeline-icon -->
						<div class="timeline-icon">
							<a href="javascript:;">&nbsp;</a>
						</div>
						<!-- END timeline-icon -->
						<!-- BEGIN timeline-content -->
						<div class="timeline-content">
							<!-- BEGIN timeline-header -->
							<div class="timeline-header">
								<div class="userimage"><img src="/assets/img/user/user-4.jpg" alt="" /></div>
								<div class="username">
									<a href="javascript:;">Lelouch Wong <i class="fa fa-check-circle text-blue ms-1"></i></a>
									<div class="text-muted fs-12px">1 days ago <i class="fa fa-globe-americas opacity-5 ms-1"></i></div>
								</div>
								<div>
									<a href="#" class="btn btn-lg border-0 rounded-pill w-40px h-40px p-0 d-flex align-items-center justify-content-center" data-bs-toggle="dropdown">
										<i class="fa fa-ellipsis-h text-gray-600"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="#" class="dropdown-item d-flex align-items-center">
											<i class="fa fa-fw fa-bookmark fa-lg"></i> 
											<div class="flex-1 ps-1">
												<div>Save Post</div>
												<div class="mt-n1 text-gray-500"><small>Add this to your saved items</small></div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-edit fa-lg me-1"></i> Edit post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-user fa-lg me-1"></i> Edit audience</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell fa-lg me-1"></i> Turn off notifications for this post</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-language fa-lg me-1"></i> Turn off translations</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-calendar-alt fa-lg me-1"></i> Turn date</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-archive fa-lg me-1"></i> Move to archive</a>
										<a href="#" class="dropdown-item"><i class="fa fa-fw fa-trash-alt fa-lg me-1"></i> Move to Recycle bin</a>
									</div>
								</div>
							</div>
							<!-- END timeline-header -->
							<!-- BEGIN timeline-body -->
							<div class="timeline-body">
								<!-- timeline-post -->
								<div class="mb-3">
									<h4 class="mb-1">
										795 Folsom Ave, Suite 600 San Francisco, CA 94107
									</h4>
									<div class="mb-2">In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</div>
									<div class="row gx-1">
										<div class="col-6">
											<a href="/assets/img/gallery/gallery-4.jpg" data-lity><img src="/assets/img/gallery/gallery-4.jpg" alt="" class="mw-100 d-block" /></a>
										</div>
										<div class="col-6">
											<a href="/assets/img/gallery/gallery-5.jpg" data-lity><img src="/assets/img/gallery/gallery-5.jpg" alt="" class="mw-100 d-block" /></a>
										</div>
									</div>
								</div>
				
								<!-- timeline-action -->
								<hr class="my-10px" />
								<div class="d-flex align-items-center fw-bold">
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-thumbs-up fa-fw me-3px"></i> Like
									</a>
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-comments fa-fw me-3px"></i> Comment</a> 
									<a href="javascript:;" class="flex-fill text-decoration-none text-center text-gray-600">
										<i class="fa fa-share fa-fw me-3px"></i> Share
									</a>
								</div>
								<hr class="mt-10px mb-3" />
				
								<!-- timeline-input -->
								<form action="" class="d-flex align-items-center">
									<div><img src="/assets/img/user/user-13.jpg" height="35" class="rounded-pill" /></div>
									<div class="ps-2 flex-1">
										<div class="position-relative">
											<input type="text" class="form-control rounded-pill ps-3 py-2 fs-13px bg-light" placeholder="Write a comment..." />
											<div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center px-2">
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-smile fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-camera fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="fa fa-film fa-fw fa-lg d-block"></i></a>
												<a href="#" class="btn bg-none text-gray-600 shadow-none px-1"><i class="far fa-sticky-note fa-fw fa-lg d-block"></i></a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- END timeline-body -->
						</div>
						<!-- END timeline-content -->
					</div>
					<!-- END timeline-item -->
					<!-- BEGIN timeline-item -->
					<div class="timeline-item">
						<!-- BEGIN timeline-icon -->
						<div class="timeline-icon">
							<a href="javascript:;">&nbsp;</a>
						</div>
						<!-- END timeline-icon -->
						<!-- BEGIN timeline-content -->
						<div class="timeline-content">
							<!-- BEGIN timeline-body -->
							<div class="timeline-body">
								<div class="d-flex align-items-center">
									<div class="spinner-border spinner-border-sm me-3" role="status">
										<span class="visually-hidden">Loading...</span>
									</div>
									Loading...
								</div>
							</div>
							<!-- END timeline-body -->
						</div>
						<!-- BEGIN timeline-content -->
					</div>
					<!-- END timeline-item -->
				</div>
				<!-- END timeline -->
			</div>
			<!-- END #profile-post tab -->
			<!-- BEGIN #profile-about tab -->
			<div class="tab-pane fade" id="profile-about">
				<!-- BEGIN table -->
				<div class="table-responsive form-inline">
					<table class="table table-profile align-middle">
						<thead>
							<tr>
								<th></th>
								<th>
									<h4>Sean Ngu <small>UXUI + Frontend Developer</small></h4>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="highlight">
								<td class="field">Mood</td>
								<td><a href="javascript:;" class="text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Add Mood Message</a></td>
							</tr>
							<tr class="divider">
								<td colspan="2"></td>
							</tr>
							<tr>
								<td class="field">Mobile</td>
								<td><i class="fa fa-mobile fa-lg me-5px"></i> +1-(847)- 367-8924 <a href="javascript:;" class="ms-5px text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Edit</a></td>
							</tr>
							<tr>
								<td class="field">Home</td>
								<td><a href="javascript:;" class="text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Add Number</a></td>
							</tr>
							<tr>
								<td class="field">Office</td>
								<td><a href="javascript:;" class="text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Add Number</a></td>
							</tr>
							<tr class="divider">
								<td colspan="2"></td>
							</tr>
							<tr class="highlight">
								<td class="field">About Me</td>
								<td><a href="javascript:;" class="text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Add Description</a></td>
							</tr>
							<tr class="divider">
								<td colspan="2"></td>
							</tr>
							<tr>
								<td class="field">Country/Region</td>
								<td>
									<select class="form-select w-200px" name="region">
										<option value="US" selected>United State</option>
										<option value="AF">Afghanistan</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AS">American Samoa</option>
										<option value="AD">Andorra</option>
										<option value="AO">Angola</option>
										<option value="AI">Anguilla</option>
										<option value="AQ">Antarctica</option>
										<option value="AG">Antigua and Barbuda</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="field">City</td>
								<td>Los Angeles</td>
							</tr>
							<tr>
								<td class="field">State</td>
								<td><a href="javascript:;" class="text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Add State</a></td>
							</tr>
							<tr>
								<td class="field">Website</td>
								<td><a href="javascript:;" class="text-decoration-none fw-bold"><i class="fa fa-plus fa-fw"></i> Add Webpage</a></td>
							</tr>
							<tr>
								<td class="field">Gender</td>
								<td>
									<select class="form-select w-200px" name="gender">
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="field">Birthdate</td>
								<td>
									<div class="d-flex align-items-center">
										<select class="form-select w-80px" name="day">
											<option value="04" selected>04</option>
										</select>
										<span class="mx-2">-</span>
										<select class="form-select w-80px" name="month">
											<option value="11" selected>11</option>
										</select>
										<span class="mx-2">-</span>
										<select class="form-select w-100px" name="year">
											<option value="1989" selected>1989</option>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td class="field">Language</td>
								<td class="with-form-control">
									<select class="form-select w-200px" name="language">
										<option value="" selected>English</option>
									</select>
								</td>
							</tr>
							<tr class="divider">
								<td colspan="2"></td>
							</tr>
							<tr class="highlight">
								<td class="field">&nbsp;</td>
								<td class="">
									<button type="submit" class="btn btn-primary w-150px">Update</button>
									<button type="submit" class="btn border-0 w-150px ms-5px">Cancel</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- END table -->
			</div>
			<!-- END #profile-about tab -->
			<!-- BEGIN #profile-photos tab -->
			<div class="tab-pane fade" id="profile-photos">
				<h4 class="mb-3">Photos (70)</h4>
				<!-- BEGIN gallery-v2 -->
				<div class="gallery-v2" id="gallery">
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-1.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-1-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-2.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-2-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-3.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-3-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-4.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-4-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-5.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-5-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-6.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-6-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-7.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-7-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-8.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-8-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-9.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-9-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-10.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-10-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-11.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-11-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-12.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-12-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-13.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-13-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-14.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-14-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-15.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-15-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-16.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-16-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-17.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-17-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-18.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-18-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-19.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-19-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-20.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-20-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-21.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-21-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-22.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-22-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-23.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-23-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-24.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-24-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-25.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-25-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-26.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-26-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-27.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-27-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-28.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-28-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-29.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-29-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-30.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-30-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-31.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-31-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-32.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-32-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-33.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-33-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-34.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-34-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-35.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-35-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-36.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-36-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-37.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-37-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-38.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-38-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-39.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-39-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-40.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-40-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-41.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-41-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-42.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-42-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-43.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-43-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-44.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-44-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-45.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-45-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-46.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-46-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-47.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-47-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-48.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-48-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-49.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-49-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-50.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-50-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-51.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-51-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-52.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-52-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-53.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-53-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-54.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-54-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-55.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-55-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-56.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-56-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-57.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-57-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-58.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-58-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-59.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-59-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-60.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-60-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-61.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-61-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-62.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-62-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-63.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-63-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-64.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-64-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-65.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-65-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-66.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-66-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-67.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-67-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-68.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-68-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-69.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-69-thumb.jpg);"></div>
						</a>
					</div>
					<div class="gallery">
						<a href="javascript:;" class="ratio ratio-4x3" data-pswp-src="/assets/img/gallery/gallery-70.jpg" data-pswp-width="1200" data-pswp-height="800">
							<div class="bg-size-cover bg-position-center" style="background-image: url(/assets/img/gallery/gallery-70-thumb.jpg);"></div>
						</a>
					</div>
				</div>
				<!-- END gallery-v2 -->
			</div>
			<!-- END #profile-photos tab -->
			<!-- BEGIN #profile-videos tab -->
			<div class="tab-pane fade" id="profile-videos">
				<h4 class="mb-3">Videos (16)</h4>
				<!-- BEGIN row -->
				<div class="row gx-1">
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=RQ5ljyGg-ig" data-lity>
							<img src="https://img.youtube.com/vi/RQ5ljyGg-ig/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=5lWkZ-JaEOc" data-lity>
							<img src="https://img.youtube.com/vi/5lWkZ-JaEOc/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=9ZfN87gSjvI" data-lity>
							<img src="https://img.youtube.com/vi/9ZfN87gSjvI/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=w2H07DRv2_M" data-lity>
							<img src="https://img.youtube.com/vi/w2H07DRv2_M/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=PntG8KEVjR8" data-lity>
							<img src="https://img.youtube.com/vi/PntG8KEVjR8/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=q8kxKvSQ7MI" data-lity>
							<img src="https://img.youtube.com/vi/q8kxKvSQ7MI/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=cutu3Bw4ep4" data-lity>
							<img src="https://img.youtube.com/vi/cutu3Bw4ep4/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=gCspUXGrraM" data-lity>
							<img src="https://img.youtube.com/vi/gCspUXGrraM/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=COtpTM1MpAA" data-lity>
							<img src="https://img.youtube.com/vi/COtpTM1MpAA/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=8NVkGHVOazc" data-lity>
							<img src="https://img.youtube.com/vi/8NVkGHVOazc/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=QgQ7MWLsw1w" data-lity>
							<img src="https://img.youtube.com/vi/QgQ7MWLsw1w/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=Dmw0ucCv8aQ" data-lity>
							<img src="https://img.youtube.com/vi/Dmw0ucCv8aQ/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=r1d7ST2TG2U" data-lity>
							<img src="https://img.youtube.com/vi/r1d7ST2TG2U/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=WUR-XWBcHvs" data-lity>
							<img src="https://img.youtube.com/vi/WUR-XWBcHvs/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=A7sQ8RWj0Cw" data-lity>
							<img src="https://img.youtube.com/vi/A7sQ8RWj0Cw/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-md-3 col-sm-4 mb-1">
						<a href="https://www.youtube.com/watch?v=IMN2VfiXls4" data-lity>
							<img src="https://img.youtube.com/vi/IMN2VfiXls4/mqdefault.jpg" class="d-block w-100" />
						</a>
					</div>
					<!-- END col-3 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END #profile-videos tab -->
			<!-- BEGIN #profile-friends tab -->
			<div class="tab-pane fade" id="profile-friends">
				<h4 class="mb-3">Friend List (14)</h4>
				<!-- BEGIN row -->
				<div class="row gx-1">
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-1.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">James Pittman</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-2.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Mitchell Ashcroft</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-3.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Ella Cabena</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-4.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Declan Dyson</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-5.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">George Seyler</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-6.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Patrick Musgrove</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-7.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Taj Connal</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-8.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Laura Pollock</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-9.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Dakota Mannix</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-10.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Timothy Woolley</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-11.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Benjamin Congreve</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-12.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Mariam Maddock</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-13.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Blake Gerrald</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-6 -->
					<div class="col-xl-4 col-lg-6 mb-1">
						<div class="p-2 d-flex align-items-center card flex-row border-0 rounded">
							<a href="javascript:;">
								<img src="/assets/img/user/user-14.jpg" alt="" class="rounded" width="64" />
							</a>
							<div class="flex-1 ps-3">
								<b class="text-dark">Gabrielle Bunton</b>
							</div>
							<div>
								<a href="javascript:;" class="btn border-0 w-40px h-40px text-gray-500 rounded-pill d-flex align-items-center justify-content-center" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fa-lg"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;" class="dropdown-item">Action 1</a>
									<a href="javascript:;" class="dropdown-item">Action 2</a>
									<a href="javascript:;" class="dropdown-item">Action 3</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Action 4</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END col-6 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END #profile-friends tab -->
		</div>
		<!-- END tab-content -->
	</div>
	<!-- END profile-content -->
@endsection
