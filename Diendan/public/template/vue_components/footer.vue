<template>
	<footer class="footer">
		<div class="container">
			<div class="footer-logo">
				<a href="javascript:;" title="">
					<img src="images/img-logo-header.png" alt="" />
				</a>
			</div>

			<div class="footer-sub">
				<ul class="contact">
					<li>
						<a href="javascript:;" title="">
							<span class="icon">
								<svg
									width="18"
									height="18"
									viewBox="0 0 18 18"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M3.62 7.79C5.06 10.62 7.38 12.93 10.21 14.38L12.41 12.18C12.68 11.91 13.08 11.82 13.43 11.94C14.55 12.31 15.76 12.51 17 12.51C17.55 12.51 18 12.96 18 13.51V17C18 17.55 17.55 18 17 18C7.61 18 0 10.39 0 1C0 0.45 0.45 0 1 0H4.5C5.05 0 5.5 0.45 5.5 1C5.5 2.25 5.7 3.45 6.07 4.57C6.18 4.92 6.1 5.31 5.82 5.59L3.62 7.79Z"
										fill="#1D5A99"
									/>
								</svg>
							</span>
							(+84) 24 6259 4879
						</a>
					</li>

					<li>
						<a href="javascript:;" title="">
							<span class="icon">
								<svg
									width="20"
									height="16"
									viewBox="0 0 20 16"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
										fill="#1D5A99"
									/>
								</svg>
							</span>
							info@truongthanhdaiviet.com.vn
						</a>
					</li>
				</ul>

				<ul class="social">
					<li v-for="index in 5" :key="index">
						<a href="javascript:;" title="">
							<img :src="'images/ic-ft-social-' + index + '.svg'" alt="" />
						</a>
					</li>
				</ul>
			</div>

			<div class="footer-infolist">
				<div class="row">
					<div class="col-lg-4 col-12 mb-4 mb-lg-0">
						<div class="title-cate">
							<h3>Khám phá chúng tôi</h3>
						</div>

						<ul class="list-info">
							<li>
								<a href="javascript:;" title=""> Trang chủ </a>
							</li>
							<li>
								<a href="javascript:;" title=""> Về chúng tôi </a>
							</li>
							<li>
								<a href="javascript:;" title=""> Dịch vụ </a>
							</li>
							<li>
								<a href="javascript:;" title=""> Tin tức và sự kiện </a>
							</li>
							<li>
								<a href="javascript:;" title=""> Tuyển dụng </a>
							</li>
							<li>
								<a href="javascript:;" title=""> Liên hệ </a>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0">
						<div class="title-cate">
							<h3>Văn phòng TP. Hà Nội</h3>
						</div>

						<ul class="list-info">
							<li>
								<a href="javascript:;" title="">
									<span> Địa chỉ: </span>
									<span>
										16A5 Lý Nam Đế, Phường Hàng Mã,Q. Hoàn Kiếm, Hà Nội
									</span>
								</a>
							</li>
							<li>
								<a href="javascript:;" title="">
									<span> Điện thoại: </span>
									<span> (+84) 24 6259 4879 </span>
								</a>
							</li>
							<li>
								<a href="javascript:;" title="">
									<span> Liên hệ: </span>
									<span>
										<b>Mr. Ta Phu Thang</b> <br />
										Thành viên hội đồng quản trị
									</span>
								</a>
							</li>
							<li>
								<a href="javascript:;" title="">
									<span> Email: </span>
									<span> taphuthang@truongthanhdaiviet.com.vn </span>
								</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 col-12">
						<div class="title-cate">
							<h3>Văn phòng TP. Hà Nội</h3>
						</div>

						<ul class="list-info">
							<li>
								<a href="javascript:;" title="">
									<span> Địa chỉ: </span>
									<span>
										16A5 Lý Nam Đế, Phường Hàng Mã,Q. Hoàn Kiếm, Hà Nội
									</span>
								</a>
							</li>
							<li>
								<a href="javascript:;" title="">
									<span> Điện thoại: </span>
									<span> (+84) 24 6259 4879 </span>
								</a>
							</li>
							<li>
								<a href="javascript:;" title="">
									<span> Liên hệ: </span>
									<span>
										<b>Mr. Ta Phu Thang</b> <br />
										Thành viên hội đồng quản trị
									</span>
								</a>
							</li>
							<li>
								<a href="javascript:;" title="">
									<span> Email: </span>
									<span> taphuthang@truongthanhdaiviet.com.vn </span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<p>© 2022 Bản quyền thuộc về Truong Thanh Dai Viet</p>
			</div>
		</div>

		<div class="social-fixed">
			<a href="javascript:;" title="" class="d-none d-lg-inline-flex">
				<span> Hotline </span>
				<img src="images/social-fixed-phone.png" alt="" />
			</a>

			<a href="javascript:;" title="" id="scrollToTop">
				<img src="images/scroll-to-top.png" alt="" />
			</a>
		</div>

		<div class="mobile-widget-fixed d-flex d-lg-none">
			<a href="javascript:;" title="">
				<svg
					width="24"
					height="24"
					viewBox="0 0 24 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"
						fill="#84B5E9"
					/>
				</svg>
				Gọi điện
			</a>

			<a href="javascript:;" title="">
				<svg
					width="24"
					height="24"
					viewBox="0 0 24 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M21.99 4C21.99 2.9 21.1 2 20 2H4C2.9 2 2 2.9 2 4V16C2 17.1 2.9 18 4 18H18L22 22L21.99 4Z"
						fill="#84B5E9"
					/>
				</svg>
				Nhắn tin
			</a>

			<a href="javascript:;" title="">
				<svg
					width="24"
					height="24"
					viewBox="0 0 24 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M12 2C7.8 2 4 5.22 4 10.2C4 13.52 6.67 17.45 12 22C17.33 17.45 20 13.52 20 10.2C20 5.22 16.2 2 12 2ZM12 12C10.9 12 10 11.1 10 10C10 8.9 10.9 8 12 8C13.1 8 14 8.9 14 10C14 11.1 13.1 12 12 12Z"
						fill="#84B5E9"
					/>
				</svg>
				Chỉ đường
			</a>
		</div>
	</footer>
</template>
