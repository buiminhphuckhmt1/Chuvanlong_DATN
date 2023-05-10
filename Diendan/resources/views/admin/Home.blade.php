<!-- load file layout.badle.php vào đây -->
@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<?php
      $user = Auth::user()
    ?>
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Xin chúc mừng {{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</h5>
                          <p class="mb-4">
                            Bạn đã có  <span class="fw-bold">72%</span> lượt truy cập vào website của mình.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="{{ asset('admin/assets/admin/layout2/assets/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-0">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg>
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Số bài viết</span>
                          <h3 class="card-title mb-2">{{$count_post}}</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path><path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z"></path></svg>                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <span>Người dùng</span>
                          <h3 class="card-title text-nowrap mb-1">{{$count_user}}</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				<div class="col-lg-8 mb-4 order-0">
					<div class="row">
					<!-- Order Statistics -->
					<div class="col-md-6 col-6 col-lg-6 order-0 mb-4">
					<div class="card h-100">
						<div class="card-header d-flex align-items-center justify-content-between pb-0">
						<div class="card-title mb-0">
							<h5 class="m-0 me-2">Order Statistics</h5>
							<small class="text-muted">42.82k Total Sales</small>
						</div>
						<div class="dropdown">
							<button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="bx bx-dots-vertical-rounded"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
							<a class="dropdown-item" href="javascript:void(0);">Select All</a>
							<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
							<a class="dropdown-item" href="javascript:void(0);">Share</a>
							</div>
						</div>
						</div>
						<div class="card-body">
						<div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
							<div class="d-flex flex-column align-items-center gap-1">
							<h2 class="mb-2">8,258</h2>
							<span>Total Orders</span>
							</div>
							<div id="orderStatisticsChart" style="min-height: 137.55px;"><div id="apexchartsz2oksb7f" class="apexcharts-canvas apexchartsz2oksb7f apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2625" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2627" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs2626"><clipPath id="gridRectMaskz2oksb7f"><rect id="SvgjsRect2629" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskz2oksb7f"></clipPath><clipPath id="nonForecastMaskz2oksb7f"></clipPath><clipPath id="gridRectMarkerMaskz2oksb7f"><rect id="SvgjsRect2630" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2631" class="apexcharts-pie"><g id="SvgjsG2632" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2633" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG2634" class="apexcharts-slices"><g id="SvgjsG2635" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath2636" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG2637" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath2638" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG2639" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath2640" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG2641" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath2642" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG2643" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2644" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText2645" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine2646" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2647" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2628" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 253px; height: 139px;"></div></div><div class="contract-trigger"></div></div></div>
						<ul class="p-0 m-0">
							<li class="d-flex mb-4 pb-1">
							<div class="avatar flex-shrink-0 me-3">
								<span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
							</div>
							<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
								<div class="me-2">
								<h6 class="mb-0">PHP</h6>
								<small class="text-muted">Mobile, Earbuds, TV</small>
								</div>
								<div class="user-progress">
								<small class="fw-semibold">{{$count_php}}</small>
								</div>
							</div>
							</li>
							<li class="d-flex mb-4 pb-1">
							<div class="avatar flex-shrink-0 me-3">
								<span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
							</div>
							<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
								<div class="me-2">
								<h6 class="mb-0">Fashion</h6>
								<small class="text-muted">T-shirt, Jeans, Shoes</small>
								</div>
								<div class="user-progress">
								<small class="fw-semibold">23.8k</small>
								</div>
							</div>
							</li>
							<li class="d-flex mb-4 pb-1">
							<div class="avatar flex-shrink-0 me-3">
								<span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
							</div>
							<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
								<div class="me-2">
								<h6 class="mb-0">Decor</h6>
								<small class="text-muted">Fine Art, Dining</small>
								</div>
								<div class="user-progress">
								<small class="fw-semibold">849k</small>
								</div>
							</div>
							</li>
							<li class="d-flex">
							<div class="avatar flex-shrink-0 me-3">
								<span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
							</div>
							<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
								<div class="me-2">
								<h6 class="mb-0">Sports</h6>
								<small class="text-muted">Football, Cricket Kit</small>
								</div>
								<div class="user-progress">
								<small class="fw-semibold">99</small>
								</div>
							</div>
							</li>
						</ul>
						</div>
					</div>
					</div>
					<!--/ Order Statistics -->

					<!-- Expense Overview -->
					<div class="col-md-6 col-6 col-lg-6 order-1 mb-4">
					<div class="card h-100">
						<div class="card-header">
						<ul class="nav nav-pills" role="tablist">
							<li class="nav-item">
							<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">
								Income
							</button>
							</li>
							<li class="nav-item">
							<button type="button" class="nav-link" role="tab">Expenses</button>
							</li>
							<li class="nav-item">
							<button type="button" class="nav-link" role="tab">Profit</button>
							</li>
						</ul>
						</div>
						<div class="card-body px-0">
						<div class="tab-content p-0">
							<div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel" style="position: relative;">
							<div class="d-flex p-4 pt-3">
								<div class="avatar flex-shrink-0 me-3">
								<img src="../assets/img/icons/unicons/wallet.png" alt="User">
								</div>
								<div>
								<small class="text-muted d-block">Total Balance</small>
								<div class="d-flex align-items-center">
									<h6 class="mb-0 me-1">$459.10</h6>
									<small class="text-success fw-semibold">
									<i class="bx bx-chevron-up"></i>
									42.9%
									</small>
								</div>
								</div>
							</div>
							<div id="incomeChart" style="min-height: 215px;"><div id="apexchartsq8b1ztwbi" class="apexcharts-canvas apexchartsq8b1ztwbi apexcharts-theme-light" style="width: 300px; height: 215px;"><svg id="SvgjsSvg2648" width="300" height="215" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2650" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)"><defs id="SvgjsDefs2649"><clipPath id="gridRectMaskq8b1ztwbi"><rect id="SvgjsRect2655" width="288.6875" height="176.269332818985" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskq8b1ztwbi"></clipPath><clipPath id="nonForecastMaskq8b1ztwbi"></clipPath><clipPath id="gridRectMarkerMaskq8b1ztwbi"><rect id="SvgjsRect2656" width="310.6875" height="202.269332818985" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2676" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2677" stop-opacity="0.5" stop-color="rgba(105,108,255,0.5)" offset="0"></stop><stop id="SvgjsStop2678" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop><stop id="SvgjsStop2679" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2654" x1="0" y1="0" x2="0" y2="174.269332818985" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="174.269332818985" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2682" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2683" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2685" font-family="Helvetica, Arial, sans-serif" x="0" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2686"></tspan><title></title></text><text id="SvgjsText2688" font-family="Helvetica, Arial, sans-serif" x="40.38392857142857" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2689">Jan</tspan><title>Jan</title></text><text id="SvgjsText2691" font-family="Helvetica, Arial, sans-serif" x="80.76785714285714" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2692">Feb</tspan><title>Feb</title></text><text id="SvgjsText2694" font-family="Helvetica, Arial, sans-serif" x="121.15178571428572" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2695">Mar</tspan><title>Mar</title></text><text id="SvgjsText2697" font-family="Helvetica, Arial, sans-serif" x="161.53571428571428" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2698">Apr</tspan><title>Apr</title></text><text id="SvgjsText2700" font-family="Helvetica, Arial, sans-serif" x="201.91964285714283" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2701">May</tspan><title>May</title></text><text id="SvgjsText2703" font-family="Helvetica, Arial, sans-serif" x="242.3035714285714" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2704">Jun</tspan><title>Jun</title></text><text id="SvgjsText2706" font-family="Helvetica, Arial, sans-serif" x="282.68749999999994" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2707">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG2710" class="apexcharts-grid"><g id="SvgjsG2711" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2713" x1="0" y1="0" x2="282.6875" y2="0" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2714" x1="0" y1="43.56733320474625" x2="282.6875" y2="43.56733320474625" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2715" x1="0" y1="87.1346664094925" x2="282.6875" y2="87.1346664094925" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2716" x1="0" y1="130.70199961423873" x2="282.6875" y2="130.70199961423873" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2717" x1="0" y1="174.269332818985" x2="282.6875" y2="174.269332818985" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2712" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2719" x1="0" y1="174.269332818985" x2="282.6875" y2="174.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2718" x1="0" y1="1" x2="0" y2="174.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2657" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2658" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2680" d="M 0 174.269332818985L 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714C 282.6875 91.49139972996714 282.6875 91.49139972996714 282.6875 174.269332818985M 282.6875 91.49139972996714z" fill="url(#SvgjsLinearGradient2676)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq8b1ztwbi)" pathTo="M 0 174.269332818985L 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714C 282.6875 91.49139972996714 282.6875 91.49139972996714 282.6875 174.269332818985M 282.6875 91.49139972996714z" pathFrom="M -1 217.83666602373125L -1 217.83666602373125L 40.38392857142858 217.83666602373125L 80.76785714285715 217.83666602373125L 121.15178571428572 217.83666602373125L 161.5357142857143 217.83666602373125L 201.91964285714286 217.83666602373125L 242.30357142857144 217.83666602373125L 282.6875 217.83666602373125"></path><path id="SvgjsPath2681" d="M 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714" fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq8b1ztwbi)" pathTo="M 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714" pathFrom="M -1 217.83666602373125L -1 217.83666602373125L 40.38392857142858 217.83666602373125L 80.76785714285715 217.83666602373125L 121.15178571428572 217.83666602373125L 161.5357142857143 217.83666602373125L 201.91964285714286 217.83666602373125L 242.30357142857144 217.83666602373125L 282.6875 217.83666602373125"></path><g id="SvgjsG2659" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG2661" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2662" r="6" cx="0" cy="113.27506633234026" class="apexcharts-marker no-pointer-events wyvbqisgg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle2663" r="6" cx="40.38392857142858" cy="126.34526629376414" class="apexcharts-marker no-pointer-events wcf7pg6ujg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2664" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2665" r="6" cx="80.76785714285715" cy="87.13466640949252" class="apexcharts-marker no-pointer-events wgil9fzh3" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2666" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2667" r="6" cx="121.15178571428572" cy="121.98853297328951" class="apexcharts-marker no-pointer-events wyzn91ys6" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2668" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2669" r="6" cx="161.5357142857143" cy="34.85386656379703" class="apexcharts-marker no-pointer-events wf9zmbg1h" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2670" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2671" r="6" cx="201.91964285714286" cy="104.56159969139101" class="apexcharts-marker no-pointer-events wxbhm8hmz" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2672" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2673" r="6" cx="242.30357142857144" cy="65.3509998071194" class="apexcharts-marker no-pointer-events wsq7msxwn" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2674" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2675" r="6" cx="282.6875" cy="91.49139972996714" class="apexcharts-marker no-pointer-events wfeg5f20jh" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG2660" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2720" x1="0" y1="0" x2="282.6875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2721" x1="0" y1="0" x2="282.6875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2722" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2723" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2724" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2725" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2726" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2653" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2708" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG2709" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG2651" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 107.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
							<div class="d-flex justify-content-center pt-4 gap-2">
								<div class="flex-shrink-0" style="position: relative;">
								<div id="expensesOfWeek" style="min-height: 57.7px;"><div id="apexchartsdaa4nsm6" class="apexcharts-canvas apexchartsdaa4nsm6 apexcharts-theme-light" style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg2727" width="60" height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2729" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, -10)"><defs id="SvgjsDefs2728"><clipPath id="gridRectMaskdaa4nsm6"><rect id="SvgjsRect2731" width="86" height="87" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdaa4nsm6"></clipPath><clipPath id="nonForecastMaskdaa4nsm6"></clipPath><clipPath id="gridRectMarkerMaskdaa4nsm6"><rect id="SvgjsRect2732" width="84" height="89" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2733" class="apexcharts-radialbar"><g id="SvgjsG2734"><g id="SvgjsG2735" class="apexcharts-tracks"><g id="SvgjsG2736" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247" fill="none" fill-opacity="1" stroke="rgba(236,238,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.0408536585365864" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"></path></g></g><g id="SvgjsG2738"><g id="SvgjsG2742" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2743" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095" fill="none" fill-opacity="0.85" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.081707317073173" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="65" index="0" j="0" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"></path></g><circle id="SvgjsCircle2739" r="18.881402439024395" cx="40" cy="40" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2740" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2741" font-family="Helvetica, Arial, sans-serif" x="40" y="45" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">$65</text></g></g></g></g><line id="SvgjsLine2744" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2745" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2730" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 61px; height: 59px;"></div></div><div class="contract-trigger"></div></div></div>
								<div>
								<p class="mb-n1 mt-1">Expenses This Week</p>
								<small class="text-muted">$39 less than last week</small>
								</div>
							</div>
							<div class="resize-triggers"><div class="expand-trigger"><div style="width: 301px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
						</div>
						</div>
					</div>
					</div>
					<!--/ Expense Overview -->
				</div>
				</div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1">Payments</span>
                          <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Transactions</span>
                          <h3 class="card-title mb-2">$14,857</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                      </div>
                    </div>
                    </div>
    				<div class="row">
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                              </div>
                              <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                <h3 class="mb-0">$84,686k</h3>
                              </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px;"><div id="apexchartss5j8kqy2" class="apexcharts-canvas apexchartss5j8kqy2 apexcharts-theme-light" style="width: 114px; height: 80px;"><svg id="SvgjsSvg2577" width="114" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2579" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2578"><clipPath id="gridRectMasks5j8kqy2"><rect id="SvgjsRect2584" width="115" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasks5j8kqy2"></clipPath><clipPath id="nonForecastMasks5j8kqy2"></clipPath><clipPath id="gridRectMarkerMasks5j8kqy2"><rect id="SvgjsRect2585" width="110" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2591" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2592" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood2592Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2593" in="SvgjsFeFlood2592Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2593Out"></feComposite><feOffset id="SvgjsFeOffset2594" dx="5" dy="10" result="SvgjsFeOffset2594Out" in="SvgjsFeComposite2593Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2595" stdDeviation="3 " result="SvgjsFeGaussianBlur2595Out" in="SvgjsFeOffset2594Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2596" result="SvgjsFeMerge2596Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2597" in="SvgjsFeGaussianBlur2595Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2598" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2599" in="SourceGraphic" in2="SvgjsFeMerge2596Out" mode="normal" result="SvgjsFeBlend2599Out"></feBlend></filter></defs><line id="SvgjsLine2583" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2600" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2601" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2609" class="apexcharts-grid"><g id="SvgjsG2610" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2612" x1="0" y1="0" x2="106" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2613" x1="0" y1="20" x2="106" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2614" x1="0" y1="40" x2="106" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2615" x1="0" y1="60" x2="106" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2616" x1="0" y1="80" x2="106" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2611" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2618" x1="0" y1="80" x2="106" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2617" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2586" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2587" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2590" d="M 0 76C 7.419999999999999 76 13.780000000000001 12 21.2 12C 28.619999999999997 12 34.98 62 42.4 62C 49.81999999999999 62 56.17999999999999 22 63.599999999999994 22C 71.02 22 77.38 38 84.8 38C 92.22 38 98.57999999999998 6 105.99999999999999 6" fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasks5j8kqy2)" filter="url(#SvgjsFilter2591)" pathTo="M 0 76C 7.419999999999999 76 13.780000000000001 12 21.2 12C 28.619999999999997 12 34.98 62 42.4 62C 49.81999999999999 62 56.17999999999999 22 63.599999999999994 22C 71.02 22 77.38 38 84.8 38C 92.22 38 98.57999999999998 6 105.99999999999999 6" pathFrom="M -1 120L -1 120L 21.2 120L 42.4 120L 63.599999999999994 120L 84.8 120L 105.99999999999999 120"></path><g id="SvgjsG2588" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2624" r="0" cx="0" cy="0" class="apexcharts-marker wtlabmpyx no-pointer-events" stroke="#ffffff" fill="#ffab00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2589" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2619" x1="0" y1="0" x2="106" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2620" x1="0" y1="0" x2="106" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2621" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2622" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2623" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2582" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2608" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2580" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 253px; height: 118px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection