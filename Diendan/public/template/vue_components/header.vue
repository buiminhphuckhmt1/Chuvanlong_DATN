<template>
	<header class="header">
		<div class="header-topbar">
			<div class="container">
				<div class="row">
					<div class="topbar-hotline">
						<a href="tel:0987654321" title="">
							Hotline: <b>(+84)24 6259 4879</b>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="header-main">
			<div class="container">
				<div class="row">
					<div class="col-left">
						<div class="logo">
							<a href="javascript:;" title="">
								<img src="images/img-logo-header.png" alt="" />
							</a>
						</div>
					</div>

					<div class="col-right">
						<div class="menu">
							<div class="menu-hamburger">
								<div class="menu-hamburger-line"></div>
								<div class="menu-hamburger-line"></div>
								<div class="menu-hamburger-line"></div>
							</div>
							<div class="menu-overlay"></div>
							<div class="menu-items">
								<div
									class="menu-parent"
									v-for="(item, index) in menuList"
									:class="{ active: index === 0 }"
									:key="index"
								>
									<a href="javascript:;" title="">
										{{ item }}
									</a>
								</div>
							</div>
						</div>

						<form action="" class="header-searchbox">
							<input type="text" name="" id="" placeholder="Search ..." />
							<button>
								<img src="images/ic-search-header.svg" alt="" />
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
</template>

<script>
	module.exports = {
		data() {
			return {
				menuList: [
					'TRANG CHỦ',
					'GIỚI THIỆU',
					'DỊCH VỤ',
					'TIN TỨC',
					'TUYỂN DỤNG',
					'LIÊN HỆ'
				]
			};
		}
	};
</script>
