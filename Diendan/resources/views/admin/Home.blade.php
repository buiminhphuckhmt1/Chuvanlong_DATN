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
                <div class="col-lg-6 mb-4 order-0">
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
                <div class="col-lg-6 col-md-4 order-0">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path></svg> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
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
                          <span class=" mb-1">Tổng số lượt xem</span>
                          <h3 class="card-title mb-2">{{$count_post_view}}</h3>
                          <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
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
                          <span>Tổng người dùng</span>
                          <h3 class="card-title text-nowrap mb-1">{{$count_user}}</h3>
                          <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                        </div>
                      </div>
                    </div>
					<div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 5.589 2 10c0 2.907 1.897 5.516 5 6.934V22l5.34-4.005C17.697 17.854 22 14.32 22 10c0-4.411-4.486-8-10-8zM9.302 13.986H7.503v-1.798l4.976-4.97 1.798 1.799-4.975 4.969zm5.823-5.816-1.799-1.798 1.372-1.371 1.799 1.798-1.372 1.371z"></path></svg>
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
                          <span class="d-block mb-1">Tổng số lượt phản hồi</span>
                          <h3 class="card-title text-nowrap mb-2">{{$count_cmt}}</h3>
                          <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				<div class="col-lg-12 mb-4 order-0">
					<div class="row">
					<!-- Order Statistics -->
					<div class="col-md-6 col-lg-4 order-0 mb-4">
					<div class="card h-100">
						<div class="card-header d-flex align-items-center justify-content-between pb-0">
						<div class="card-title mb-0">
							<h5 class="m-0 me-2">Thống kê bài viết</h5>
							<small class="text-muted">Tổng số bài viết: {{$count_post}}</small></br>
              <small class="text-muted">Bài đang hiện thị: {{$count_post_type}}</small></br>
              <small class="text-muted">Bài đang ẩn: {{$count_post-$count_post_type}}</small>
						</div>
						<!-- <div class="dropdown">
							<button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="bx bx-dots-vertical-rounded"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
							<a class="dropdown-item" href="javascript:void(0);">Select All</a>
							<a class="dropdown-item" href="{{url('backend/home')}}">Refresh</a>
							</div>
						</div> -->
						</div>
						<div class="card-body">
						<ul class="p-0 m-0 mt-3">
							@foreach($count_tag as $row)
							<li class="d-flex mb-2 pb-1">
							<div class="avatar flex-shrink-0 me-3">
								<span class="avatar-initial rounded bg-label-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(102, 102, 255, 1);transform: ;msFilter:;"><path d="M17.868 4.504A1 1 0 0 0 17 4H3a1 1 0 0 0-.868 1.496L5.849 12l-3.717 6.504A1 1 0 0 0 3 20h14a1 1 0 0 0 .868-.504l4-7a.998.998 0 0 0 0-.992l-4-7zM16.42 18H4.724l3.145-5.504a.998.998 0 0 0 0-.992L4.724 6H16.42l3.429 6-3.429 6z"></path></svg>
								</span>
							</div>
							<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
								<div class="me-2">
								<h6 class="mb-0">{{$row->name}}</h6>
								<!-- <small class="text-muted">Mobile, Earbuds, TV</small> -->
								</div>
								<div class="user-progress">
								<small class="fw-semibold">{{$row->posts->count()}}</small>
								</div>
							</div>
							</li>
							@endforeach
						</ul>
						</div>
					</div>
					</div>
					<!--/ Order Statistics -->

					<!-- Expense Overview -->
					<div class="col-md-6 col-lg-4 order-0 mb-4">
					<div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Thống kê lượt truy cập</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                      </div>
                    </div>
                  </div>
					</div>
					<div class="col-md-6 col-lg-4 order-0 mb-4">
					<div class="card ">
					<h5 class="card-header m-0 me-2 pb-3">Thống kê bài viết theo tuần</h5>
						<div class="card-body px-0">
						
						<div class="tab-content p-0">
							<div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel" style="position: relative;">
							<div class="d-flex p-4 pt-3">
								<div>
								<div class="d-flex align-items-center">
									<h6 class="mb-0 me-1">{{$post_date}}</h6>
									<!-- <small class="text-success fw-semibold">
									<i class="bx bx-chevron-up"></i>
									42.9%
									</small> -->
								</div>
								</div>
							</div>
							<div id="incomeChart" style="min-height: 215px;"><div id="apexchartsq8b1ztwbi" class="apexcharts-canvas apexchartsq8b1ztwbi apexcharts-theme-light" style="width: 300px; height: 215px;"><svg id="SvgjsSvg2648" width="300" height="215" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2650" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)"><defs id="SvgjsDefs2649"><clipPath id="gridRectMaskq8b1ztwbi"><rect id="SvgjsRect2655" width="288.6875" height="176.269332818985" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskq8b1ztwbi"></clipPath><clipPath id="nonForecastMaskq8b1ztwbi"></clipPath><clipPath id="gridRectMarkerMaskq8b1ztwbi"><rect id="SvgjsRect2656" width="310.6875" height="202.269332818985" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2676" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2677" stop-opacity="0.5" stop-color="rgba(105,108,255,0.5)" offset="0"></stop><stop id="SvgjsStop2678" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop><stop id="SvgjsStop2679" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2654" x1="0" y1="0" x2="0" y2="174.269332818985" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="174.269332818985" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2682" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2683" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2685" font-family="Helvetica, Arial, sans-serif" x="0" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2686"></tspan><title></title></text><text id="SvgjsText2688" font-family="Helvetica, Arial, sans-serif" x="40.38392857142857" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2689">Jan</tspan><title>Jan</title></text><text id="SvgjsText2691" font-family="Helvetica, Arial, sans-serif" x="80.76785714285714" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2692">Feb</tspan><title>Feb</title></text><text id="SvgjsText2694" font-family="Helvetica, Arial, sans-serif" x="121.15178571428572" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2695">Mar</tspan><title>Mar</title></text><text id="SvgjsText2697" font-family="Helvetica, Arial, sans-serif" x="161.53571428571428" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2698">Apr</tspan><title>Apr</title></text><text id="SvgjsText2700" font-family="Helvetica, Arial, sans-serif" x="201.91964285714283" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2701">May</tspan><title>May</title></text><text id="SvgjsText2703" font-family="Helvetica, Arial, sans-serif" x="242.3035714285714" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2704">Jun</tspan><title>Jun</title></text><text id="SvgjsText2706" font-family="Helvetica, Arial, sans-serif" x="282.68749999999994" y="203.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2707">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG2710" class="apexcharts-grid"><g id="SvgjsG2711" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2713" x1="0" y1="0" x2="282.6875" y2="0" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2714" x1="0" y1="43.56733320474625" x2="282.6875" y2="43.56733320474625" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2715" x1="0" y1="87.1346664094925" x2="282.6875" y2="87.1346664094925" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2716" x1="0" y1="130.70199961423873" x2="282.6875" y2="130.70199961423873" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2717" x1="0" y1="174.269332818985" x2="282.6875" y2="174.269332818985" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2712" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2719" x1="0" y1="174.269332818985" x2="282.6875" y2="174.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2718" x1="0" y1="1" x2="0" y2="174.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2657" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2658" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2680" d="M 0 174.269332818985L 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714C 282.6875 91.49139972996714 282.6875 91.49139972996714 282.6875 174.269332818985M 282.6875 91.49139972996714z" fill="url(#SvgjsLinearGradient2676)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq8b1ztwbi)" pathTo="M 0 174.269332818985L 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714C 282.6875 91.49139972996714 282.6875 91.49139972996714 282.6875 174.269332818985M 282.6875 91.49139972996714z" pathFrom="M -1 217.83666602373125L -1 217.83666602373125L 40.38392857142858 217.83666602373125L 80.76785714285715 217.83666602373125L 121.15178571428572 217.83666602373125L 161.5357142857143 217.83666602373125L 201.91964285714286 217.83666602373125L 242.30357142857144 217.83666602373125L 282.6875 217.83666602373125"></path><path id="SvgjsPath2681" d="M 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714" fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskq8b1ztwbi)" pathTo="M 0 113.27506633234026C 14.134375 113.27506633234026 26.249553571428578 126.34526629376414 40.38392857142858 126.34526629376414C 54.518303571428575 126.34526629376414 66.63348214285715 87.13466640949252 80.76785714285715 87.13466640949252C 94.90223214285714 87.13466640949252 107.01741071428572 121.98853297328951 121.15178571428572 121.98853297328951C 135.28616071428573 121.98853297328951 147.4013392857143 34.85386656379703 161.5357142857143 34.85386656379703C 175.6700892857143 34.85386656379703 187.78526785714286 104.56159969139101 201.91964285714286 104.56159969139101C 216.05401785714287 104.56159969139101 228.16919642857144 65.3509998071194 242.30357142857144 65.3509998071194C 256.4379464285714 65.3509998071194 268.553125 91.49139972996714 282.6875 91.49139972996714" pathFrom="M -1 217.83666602373125L -1 217.83666602373125L 40.38392857142858 217.83666602373125L 80.76785714285715 217.83666602373125L 121.15178571428572 217.83666602373125L 161.5357142857143 217.83666602373125L 201.91964285714286 217.83666602373125L 242.30357142857144 217.83666602373125L 282.6875 217.83666602373125"></path><g id="SvgjsG2659" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG2661" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2662" r="6" cx="0" cy="113.27506633234026" class="apexcharts-marker no-pointer-events wyvbqisgg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle2663" r="6" cx="40.38392857142858" cy="126.34526629376414" class="apexcharts-marker no-pointer-events wcf7pg6ujg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2664" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2665" r="6" cx="80.76785714285715" cy="87.13466640949252" class="apexcharts-marker no-pointer-events wgil9fzh3" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2666" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2667" r="6" cx="121.15178571428572" cy="121.98853297328951" class="apexcharts-marker no-pointer-events wyzn91ys6" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2668" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2669" r="6" cx="161.5357142857143" cy="34.85386656379703" class="apexcharts-marker no-pointer-events wf9zmbg1h" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2670" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2671" r="6" cx="201.91964285714286" cy="104.56159969139101" class="apexcharts-marker no-pointer-events wxbhm8hmz" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2672" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2673" r="6" cx="242.30357142857144" cy="65.3509998071194" class="apexcharts-marker no-pointer-events wsq7msxwn" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle></g><g id="SvgjsG2674" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskq8b1ztwbi)"><circle id="SvgjsCircle2675" r="6" cx="282.6875" cy="91.49139972996714" class="apexcharts-marker no-pointer-events wfeg5f20jh" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG2660" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2720" x1="0" y1="0" x2="282.6875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2721" x1="0" y1="0" x2="282.6875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2722" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2723" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2724" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2725" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2726" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2653" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2708" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG2709" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG2651" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 107.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
							<div class="resize-triggers"><div class="expand-trigger"><div style="width: 301px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
						</div>
						</div>
					</div>
					</div>
					<!--/ Expense Overview -->
				</div>
				</div>
              </div>
            </div>
            <!-- / Content -->
<scrip>
const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
  //   totalRevenueChartOptions = {
  //     series: [
  //       {
  //         name: '2023',
  //         data: [1,3,4,5,6,7,8]
  //       },
  //       {
  //         name: '',
  //       }
  //     ],
  //     chart: {
  //       height: 300,
  //       stacked: true,
  //       type: 'bar',
  //       toolbar: { show: false }
  //     },
  //     plotOptions: {
  //       bar: {
  //         horizontal: false,
  //         columnWidth: '33%',
  //         borderRadius: 12,
  //         startingShape: 'rounded',
  //         endingShape: 'rounded'
  //       }
  //     },
  //     colors: [config.colors.primary, config.colors.info],
  //     dataLabels: {
  //       enabled: false
  //     },
  //     stroke: {
  //       curve: 'smooth',
  //       width: 6,
  //       lineCap: 'round',
  //       colors: [cardColor]
  //     },
  //     legend: {
  //       show: true,
  //       horizontalAlign: 'left',
  //       position: 'top',
  //       markers: {
  //         height: 8,
  //         width: 8,
  //         radius: 12,
  //         offsetX: -3
  //       },
  //       labels: {
  //         colors: axisColor
  //       },
  //       itemMargin: {
  //         horizontal: 10
  //       }
  //     },
  //     grid: {
  //       borderColor: borderColor,
  //       padding: {
  //         top: 0,
  //         bottom: -8,
  //         left: 20,
  //         right: 20
  //       }
  //     },
  //     xaxis: {
  //       categories: ['1', '2', '3', '4', '5', '6', '7'],
  //       labels: {
  //         style: {
  //           fontSize: '13px',
  //           colors: axisColor
  //         }
  //       },
  //       axisTicks: {
  //         show: false
  //       },
  //       axisBorder: {
  //         show: false
  //       }
  //     },
  //     yaxis: {
  //       labels: {
  //         style: {
  //           fontSize: '13px',
  //           colors: axisColor
  //         }
  //       }
  //     },
  //     responsive: [
  //       {
  //         breakpoint: 1700,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '32%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 1580,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '35%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 1440,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '42%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 1300,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '48%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 1200,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '40%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 1040,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 11,
  //               columnWidth: '48%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 991,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '30%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 840,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '35%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 768,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '28%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 640,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '32%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 576,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '37%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 480,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '45%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 420,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '52%'
  //             }
  //           }
  //         }
  //       },
  //       {
  //         breakpoint: 380,
  //         options: {
  //           plotOptions: {
  //             bar: {
  //               borderRadius: 10,
  //               columnWidth: '60%'
  //             }
  //           }
  //         }
  //       }
  //     ],
  //     states: {
  //       hover: {
  //         filter: {
  //           type: 'none'
  //         }
  //       },
  //       active: {
  //         filter: {
  //           type: 'none'
  //         }
  //       }
  //     }
  //   };
  // if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
  //   const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
  //   totalRevenueChart.render();
  // }

  // // Growth Chart - Radial Bar Chart
  // // --------------------------------------------------------------------
  // const growthChartEl = document.querySelector('#growthChart'),
  //   growthChartOptions = {
  //     series: [78],
  //     labels: ['Growth'],
  //     chart: {
  //       height: 240,
  //       type: 'radialBar'
  //     },
  //     plotOptions: {
  //       radialBar: {
  //         size: 150,
  //         offsetY: 10,
  //         startAngle: -150,
  //         endAngle: 150,
  //         hollow: {
  //           size: '55%'
  //         },
  //         track: {
  //           background: cardColor,
  //           strokeWidth: '100%'
  //         },
  //         dataLabels: {
  //           name: {
  //             offsetY: 15,
  //             color: headingColor,
  //             fontSize: '15px',
  //             fontWeight: '600',
  //             fontFamily: 'Public Sans'
  //           },
  //           value: {
  //             offsetY: -25,
  //             color: headingColor,
  //             fontSize: '22px',
  //             fontWeight: '500',
  //             fontFamily: 'Public Sans'
  //           }
  //         }
  //       }
  //     },
  //     colors: [config.colors.primary],
  //     fill: {
  //       type: 'gradient',
  //       gradient: {
  //         shade: 'dark',
  //         shadeIntensity: 0.5,
  //         gradientToColors: [config.colors.primary],
  //         inverseColors: true,
  //         opacityFrom: 1,
  //         opacityTo: 0.6,
  //         stops: [30, 70, 100]
  //       }
  //     },
  //     stroke: {
  //       dashArray: 5
  //     },
  //     grid: {
  //       padding: {
  //         top: -35,
  //         bottom: -10
  //       }
  //     },
  //     states: {
  //       hover: {
  //         filter: {
  //           type: 'none'
  //         }
  //       },
  //       active: {
  //         filter: {
  //           type: 'none'
  //         }
  //       }
  //     }
  //   };
  // if (typeof growthChartEl !== undefined && growthChartEl !== null) {
  //   const growthChart = new ApexCharts(growthChartEl, growthChartOptions);
  //   growthChart.render();
  // }
</scrip>
@endsection