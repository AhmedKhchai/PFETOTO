@extends('layouts.layout')
@section('contentmain')
	<!--BreadCrumb-->
	<div class="bg-white border-bottom">
		<div class="container">
			<div class="page-header">
				<h4 class="page-title">Mazagan Beach Resort</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item"><a href="#">Categories</a></li>
					<li class="breadcrumb-item active" aria-current="page">Mazagan</li>
				</ol>
			</div>
		</div>
	</div>
	<!--/BreadCrumb-->

	<!--Add listing-->
	<section class="sptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12">
					<div class="">
						<div class="card overflow-hidden">
							<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Ouvert</span></div>
							<div class="item-card item-card-square overflow-hidden br-0">
								<div class="item-card-desc">
									<a href="business-list.html"></a>
									<div class="card text-center overflow-hidden mb-md-0 br-0">
										<div class="card-img">
											<img src="{{ $article->image }}" alt="img"
												class="cover-image br-0">
										</div>
									</div>
									<div class="restaurant-absolute-links">
										<a data-toggle="modal" data-target="#gallery" class="badge badge-secondary"
											href="#">Voir plus</a>
									</div>
									<div class="item-card-text text-left">
										<div class="rating-stars">
											<div class="rating-stars-container text-left">
												<div class="rating-star sm is--active fs-12">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm is--active fs-12">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm is--active fs-12">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm is--active fs-12">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm is--active fs-12">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
										<h3 class="mb-2">{{ $article->titre }}</h3>
										<small class="text-white"><i class="icon icon-briefcase mr-1"></i> Hotel <i
												class="icon icon-calendar ml-3 mr-1"></i> 5 hours ago <i
												class="icon icon-eye ml-3 mr-1"></i> 765</small>
									</div>
								</div>
							</div>
							<div class="card-body py-4">
								<div class="d-sm-flex item-user">
									<div><a href="#" class="d-inline-block mr-4 "><span><i
													class="icon icon-location-pin mr-2 d-inline-block"></i></span>Km 10,
											Route de Casablanca، El Jadida 24000</a></div>
									<div class="ml-auto"><a href="#"
											class="d-inline-block mt-2 mt-sm-0 fs-18 font-weight-semibold"><span><i
													class="icon icon-phone mr-2 fs-14 d-inline-block"></i></span>05233-88000</a>
									</div>
								</div>
							</div>
							<div class="card-body py-4">
								<a class="btn btn-light mb-1 mt-1" href="#"><i class="fa fa-star"></i> Donner un
									avis</a>
								<a href="#" class="btn btn-light icons mb-1 mt-1" data-toggle="modal"
									data-target="#report"><i class="icon icon-exclamation mr-1"></i>Signaler un abus</a>
							</div>
						</div>
						<div class="card overflow-hidden border-0">
							<div class="card-body p-0">
								<div class="panel panel-secondary border-0">
									<div class="tab-menu-heading">
										<div class="tabs-menu ">
											<!-- Tabs -->
											<ul class="nav panel-tabs">
												<li class=""><a href="#tab1" class="active" data-toggle="tab">Aperçu</a>
												</li>
												{{-- <li><a href="#tab2" data-toggle="tab">Video</a></li> --}}
											</ul>
										</div>
									</div>
									<div class="panel-body tabs-menu-body p-5">
										<div class="tab-content">
											<div class="tab-pane active" id="tab1">
												<h3 class="card-title mb-3 mt-0 font-weight-semibold">Overview</h3>
												<div class="mb-0">
													<p>{{ $article->description }}</p>
												</div>
												<h4 class="card-title mt-5 mb-3">Contact Info</h4>
												<div class="item-user mt-3">
													<div class="row">
														<div class="col-md-6">
															<h6 class="font-weight-normal"><span><i
																		class="fa fa-map mr-3 mb-2"></i></span><a
																	href="#" class="text-body">{{$article->adresse}}</a></h6>
															<h6 class="font-weight-normal"><span><i
																		class="fa fa-envelope mr-3 mb-2"></i></span><a
																	href="#" class="text-body">
																	reservations@mazaganbeachresort.com</a>
															</h6>
														</div>
														<div class="col-md-6">
															<h6 class="font-weight-normal"><span><i
																		class="fa fa-phone mr-3  mb-2"></i></span><a
																	href="#" class="text-secondary"> +212 5233 88080</a>
															</h6>
															<h6 class="font-weight-normal"><span><i
																		class="fa fa-link mr-3 "></i></span><a href="#"
																	class="text-secondary">https://www.mazaganbeachresort.com/</a>
															</h6>
														</div>
													</div>
												</div>
												<h4 class="card-title mt-5 mb-4">Info supplementaire</h4>
												<div class="table-responsive">
													<table class="table mb-0 table-bordered-0">
														<tbody>
															<tr>
																<td class="font-weight-semibold px-0">Fondé en
																</td>
																<td class="px-0">2009</td>
															</tr>
															<tr>
																<td class="font-weight-semibold px-0">Services</td>
																<td class="px-0">Hotel, Restaurant</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											{{-- <div class="tab-pane" id="tab2">
												<ul class="list-unstyled video-list-thumbs">
													<li class=" youtube-video mb-0">
														<iframe height="400"
															src="https://www.youtube.com/embed/IzgpOzyYpy8?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen></iframe>
													</li>
												</ul>
											</div> --}}
											
										</div>
									</div>
									<div class="pt-4 pb-4 pl-5 pr-5 bg-white border-left border-right">
										<div class="list-id">
											<div class="row">
												<div class="col">
													<a class="mb-0">Business ID : #8256358</a>
												</div>
												<div class="col col-auto">
													Posted By <a class="mb-0 font-weight-bold">Individual</a> / 28st Mai
													2021
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer bg-white border-left border-right border-bottom">
										<div class="icons">
											<a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i>
												Partager</a>
											<a href="#" class="btn btn-pink icons"><i class="icon icon-heart  mr-1"></i>
												678</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/Business Overview-->

					<h3 class="mt-5 mb-4 fs-20">Articles Similaires</h3>
					<!--Related Posts-->
					<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
						<!-- Wrapper for carousel items -->

						<div class="item">
							<div class="card">
								<!--
								<div class="ribbon ribbon-top-left text-danger"><span
										class="bg-danger">Negotiable</span></div>
								-->
								<div class="item-card7-imgs">
									<a href="business-4.html"></a>
									<img src="{{ asset('images/products/hotel/mazagan/zephyr.jpg')}}" alt="img"
										class="cover-image">
								</div>
								<div class="item-card7-overlaytext">
									<a href="business-4.html" class="text-white">Hotel</a>
								</div>
								<div class="item-card7-icons">
									<a href="#" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
									<a href="#" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
								</div>
								<div class="card-body">
									<div class="rating-stars mb-1 mt-0 d-flex">
										<input type="number" readonly="readonly" class="rating-value star"
											name="rating-stars-value" value="3">
										<div class="rating-stars-container mr-2">
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
										</div> <a class="text-white" href="#">4 reviews</a>
									</div>
									<div class="item-card7-desc">
										<a href="business-4.html" class="text-dark">
											<h4 class="font-weight-semibold">Zephyr Mazagan</h4>
										</a>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0 mt-2">
											<li><a href="#" class="icons"><i
														class="icon icon-location-pin text-muted mr-1"></i> El
													Jadida</a></li>
											<li><a href="#" class="icons"><i
														class="icon icon-event text-muted mr-1"></i> 2 hours ago</a>
											</li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="icon icon-user text-muted mr-1"></i>Admin 1</a>
											</li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="icon icon-phone text-muted mr-1"></i> 785 485 965</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card">
								<!--
								<div class="ribbon ribbon-top-left text-secondary"><span
										class="bg-secondary">featured</span></div>
								-->
								<div class="item-card7-imgs">
									<a href="business-4.html"></a>
									<img src="{{ asset('images/products/amwaj.jpg')}}" alt="img" class="cover-image">
								</div>
								<div class="item-card7-overlaytext">
									<a href="business-4.html" class="text-white">Hotel / Restaurant</a>
								</div>
								<div class="item-card7-icons">
									<a href="#" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
									<a href="#" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
								</div>
								<div class="card-body">
									<div class="rating-stars mb-1 mt-0 d-flex">
										<input type="number" readonly="readonly" class="rating-value star"
											name="rating-stars-value" value="4">
										<div class="rating-stars-container mr-2">
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
										</div> <a class="text-white" href="#">4 reviews</a>
									</div>
									<div class="item-card7-desc">
										<a href="business-4.html" class="text-dark">
											<h4 class="font-weight-semibold">Restaurant & Hotel <i
													class="ion-checkmark-circled text-success ml-1"></i></h4>
										</a>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0 mt-2">
											<li><a href="#" class="icons"><i
														class="icon icon-location-pin text-muted mr-1"></i> El
													Jadida</a>
											</li>
											<li><a href="#" class="icons"><i
														class="icon icon-event text-muted mr-1"></i> 5 hours ago</a>
											</li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="icon icon-user text-muted mr-1"></i> Admin 1</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="icon icon-phone text-muted mr-1"></i> 567 987 608</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/Related Posts-->

					<!--Comments-->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Rating And Reviews</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-4">
										<div class="badge badge-default mb-2">5 <i class="fa fa-star"></i></div>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-success w-100">9,232</div>
										</div>
									</div>
									<div class="mb-4">
										<div class="badge badge-default mb-2">4 <i class="fa fa-star"></i></div>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-info w-80">8,125</div>
										</div>
									</div>
									<div class="mb-4">
										<div class="badge badge-default mb-2">3 <i class="fa fa-star"></i></div>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-secondary w-60">6,263</div>
										</div>
									</div>
									<div class="mb-4">
										<div class="badge badge-default mb-2">2 <i class="fa fa-star"></i></div>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-primary w-30">3,463</div>
										</div>
									</div>
									<div class="mb-5">
										<div class="badge badge-default mb-2">1 <i class="fa fa-star"></i></div>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-orange w-20">1,456</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<h4>3 Reviews</h4>
							<div class="d-sm-flex mt-3 p-5 sub-review-section border border-bottom-0 br-bl-0 br-br-0">
								<div class="d-flex mr-3">
									<a href="#"><img class="media-object brround avatar-md" alt="64x64"
											src="{{ asset('images/faces/a1.png')}}"> </a>
								</div>
								<div class="media-body">
									<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
										<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top"
											title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
									</h5>
									<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
											class=" ml-3 fa fa-clock-o"></i> 13.00 <i
											class=" ml-3 fa fa-map-marker"></i> Brezil</small>
									<p class="font-13  mb-2 mt-2">
										Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation
										ullamco laboris commodo consequat.
									</p>
									<a href="#" class="mr-2 mt-1"><span class="badge badge-secondary">Helpful</span></a>
									<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span
											class="badge badge-light">Comment</span></a>
									<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span
											class="badge badge-light">Report</span></a>
									<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
										<button class="btn btn-light" type="button"><i
												class="fa fa-thumbs-up"></i></button>
										<button class="btn btn-light" type="button"><i
												class="fa fa-thumbs-down"></i></button>
									</div>
								</div>
							</div>
							<div class="d-sm-flex p-5 sub-review-section border subsection-color br-tl-0 br-tr-0">
								<div class="d-flex mr-3">
									<a href="#"><img class="media-object brround avatar-md" alt="64x64"
											src="{{ asset('images/faces/3.jpg')}}"> </a>
								</div>
								<div class="media-body">
									<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0"
											data-toggle="tooltip" data-placement="top" title="verified"><i
												class="fa fa-check-circle-o text-success"></i></span></h5>
									<p class="font-13  mb-2 mt-2">
										Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris commodo
										consequat.
									</p>
									<a href="" data-toggle="modal" data-target="#Comment" class="mt-1"><span
											class="badge badge-default">Comment</span></a>
									<div class="btn-group btn-group-sm mb-1 ml-auto float-right mt-1">
										<button class="btn btn-light" type="button"><i
												class="fa fa-thumbs-up"></i></button>
										<button class="btn btn-light" type="button"><i
												class="fa fa-thumbs-down"></i></button>
									</div>
								</div>
							</div>
							<div class="d-sm-flex p-5 mt-4 border sub-review-section">
								<div class="d-flex mr-3">
									<a href="#"><img class="media-object brround avatar-md" alt="64x64"
											src="{{ asset('images/faces/21.jpg')}}"> </a>
								</div>
								<div class="media-body">
									<h5 class="mt-0 mb-1 font-weight-semibold">Edward
										<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top"
											title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
									</h5>
									<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
											class=" ml-3 fa fa-clock-o"></i> 16.35 <i
											class=" ml-3 fa fa-map-marker"></i> UK</small>
									<p class="font-13  mb-2 mt-2">
										Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation
										ullamco laboris commodo consequat.
									</p>
									<a href="#" class="mr-2 mt-1"><span class="badge badge-secondary">Helpful</span></a>
									<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span
											class="badge badge-light">Comment</span></a>
									<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span
											class="badge badge-light">Report</span></a>
									<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
										<button class="btn btn-light" type="button"><i
												class="fa fa-thumbs-up"></i></button>
										<button class="btn btn-light" type="button"><i
												class="fa fa-thumbs-down"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/Comments-->

					<div class="card mb-lg-0">
						<div class="card-header">
							<h3 class="card-title">Ajouter votre avis</h3>
						</div>
                        @guest

                             <a class="btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5" href="/loginregister">S'identifier <span class="wsarrow"></span>
                            </a>
                        @endguest
						
					</div>
				</div>

				<!--Right Side Content-->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Company User</h3>
						</div>
						<div class="card-body item-user">
							<div class="profile-details">
								<div class="profile-pic mb-0 mx-5">
									<img src="{{ asset('images/products/hotel/mazagan/MazaganLOGO.jpg')}}"
										class="brround w-125 h-125" alt="user">
								</div>
							</div>
							<div class="text-center mt-2">
								<a href="userprofile.html" class="text-dark text-center">
									<h4 class="mt-0 mb-0 font-weight-semibold">Mazagan Beach Resort</h4>
								</a>
								<!-- Mebmer Since-->
								<!--
								<span class="text-muted">Member Since November 2008</span>
								
								<div><small class="text-muted">Listing Id <b>365241</b></small></div>
								-->
								<div class="item-user-icons mt-2">
									<a href="#" class="bg-light mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="bg-light"><i class="fa fa-twitter"></i></a>
									<a href="#" class="bg-light"><i class="fa fa-google"></i></a>
									<a href="#" class="bg-light"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="profile-user-tabs">
							<div class="tab-menu-heading border-0 p-0">
								<div class="tabs-menu1">
									<ul class="nav">
										<li class=""><a href="#tab-contact" class="active" data-toggle="tab">Contat</a>
										</li>
										<li><a href="#tab-timings" data-toggle="tab">Horaire</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-content border-0 bg-white">
							<div class="tab-pane active" id="tab-contact">
								<div class="card-body item-user">
									<h4 class="mb-4">Contact Info</h4>
									<div>
										<h6><span class="font-weight-semibold"><i
													class="fa fa-map mr-3 mb-2"></i></span><a href="#"
												class="text-body">Km 10, Route de Casablanca، El Jadida 24000
											</a></h6>
										<h6><span class="font-weight-semibold"><i
													class="fa fa-envelope mr-3 mb-2"></i></span><a href="#"
												class="text-body"> reservations@mazaganbeachresort.com</a></h6>
										<h6><span class="font-weight-semibold"><i
													class="fa fa-phone mr-3 mb-2"></i></span><a href="#"
												class="text-secondary">+212 5233 88080</a></h6>
										<h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 "></i></span><a
												href="#" class="text-secondary">https://www.mazaganbeachresort.com</a>
										</h6>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-timings">
								<div class="table-responsive card-body">
									<table class="table table-bordered table-striped border-top mb-0">
										<tbody>
											<tr>
												<td>Lundi</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
											<tr>
												<td>Mardi</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
											<tr>
												<td>Mercredis</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
											<tr>
												<td>Jeudi</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
											<tr>
												<td>Vendredi</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
											<tr>
												<td>Samedi</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
											<tr>
												<td>Dimanche</td>
												<td class="font-weight-semibold">9.00am-9.00pm</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--Card Box Footer-->
							<!--
							<div class="card-footer">
								<div class="">
									<a href="#" class="btn btn-info mt-1 mb-1"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-secondary mt-1 mb-1" data-toggle="modal"
										data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
									<a href="#" class="btn btn-light mt-1 mb-1"><i class="fa fa-eye"></i> See All
										Ads</a>
								</div>
							</div>
							-->
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Emplacement</h3>
						</div>
						<div class="card-body">
							<div class="map-header">
								<div class="map-header-layer" id="map2"></div>
							</div>
							<div class="item-user mt-5">
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-map mr-3 mb-0"></i></span><a
											href="#" class="text-body">Km 10, Route de Casablanca، El Jadida 24000</a>
									</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Keywords</h3>
						</div>
						<div class="card-body product-filter-desc">
							<div class="product-tags clearfix">
								<ul class="list-unstyled mb-0">
									<li><a href="#">Restaurant</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Hotel</a></li>
									<li><a href="#">Dinner</a></li>
									<li><a href="#">Casino</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Details Shares Thorugh</h3>
						</div>
						<div class="card-body product-filter-desc">
							<div class="product-filter-icons text-center">
								<a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
								<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
								<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
								<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								<a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Recherche</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<input type="text" class="form-control keywords-input" id="search-text"
									placeholder="Recherche">
							</div>
							<div class="form-group">
								<select name="country" id="select-countries"
									class="form-control custom-select select2-show-search">
									<option value="1" selected>Categories</option>
									<option value="2">Hotels</option>
									<option value="3">Restaurant</option>
									<option value="4">Salon & Spa</option>
									<option value="5">Education</option>
									<option value="5">Café</option>
									<option value="6">Boulangerie</option>

								</select>
							</div>
							<div>
								<a href="#" class="btn  btn-block btn-secondary">Recherchez</a>
							</div>
						</div>
					</div>
					<div class="card mb-0">
						<div class="card-header">
							<h3 class="card-title">Dernier Ajout</h3>
						</div>
						<div class="card-body">
							<div id="myCarousel4" class="owl-carousel testimonial-owl-carousel2">
								<!-- Wrapper for carousel items -->
								<div class="item">
									<div class="card mb-0">
										<div class="item-card7-imgs">
											<a href="business-4.html"></a>
											<img src="{{ asset('images/products/grilad.jpg')}}" alt="img"
												class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="business-4.html" class="text-white">Food</a>
										</div>
										<div class="item-card7-icons">
											<a href="#" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
											<a href="#" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
										</div>
										<div class="card-body">
											<div class="rating-stars mb-1 mt-0 d-flex">
												<input type="number" readonly="readonly" class="rating-value star"
													name="rating-stars-value" value="3">
												<div class="rating-stars-container mr-2">
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> <a class="text-white" href="#">4 reviews</a>
											</div>
											<div class="item-card7-desc">
												<a href="business-4.html" class="text-dark">
													<h4 class="font-weight-semibold">La Grilladiare</h4>
												</a>
											</div>
											<div class="item-card7-text">
												<ul class="icon-card mb-0 mt-2">
													<li><a href="#" class="icons"><i
																class="icon icon-location-pin text-muted mr-1"></i>
															El Jadida</a></li>
													<li><a href="#" class="icons"><i
																class="icon icon-event text-muted mr-1"></i> 2 hours
															ago</a></li>
													<li class="mb-0"><a href="#" class="icons"><i
																class="icon icon-user text-muted mr-1"></i> Admin 1 </a>
													</li>
													<li class="mb-0"><a href="#" class="icons"><i
																class="icon icon-phone text-muted mr-1"></i> 785 485
															965</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/Right Side Content-->
			</div>
		</div>
	</section>

	<!-- Newsletter-->
	<section class="sptb border-top">
		<div class="container">
			<div class="section-title center-block text-center">
				<h2>S'inscrire a notre Newsletter</h2>
				<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
			</div>
			<div class="row">
				<div class="col-lg-10 col-xl-8 col-md-12 mx-auto d-block text-center">
					<div class="input-group sub-input mt-0">
						<input type="text" class="form-control input-lg " placeholder="Enter your Email">
						<div class="input-group-append ">
							<button type="button" class="btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5">
								Subscribe
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Newsletter-->

@endsection