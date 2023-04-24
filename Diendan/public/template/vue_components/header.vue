<template>
	<header class="header">
        <nav class="navbar">
            <div class="top_nav">
				<div id="header-secondary" class="Header-secondary">
				<ul class="Header-controls">
					<li class="item-session">
						<div class="ButtonGroup Dropdown ">
							<button class="Dropdown-toggle Button Button--user Button--flat">
								<span class="Avatar " loading="lazy">L</span> 
								<span class="Button-label">
									<span class="username">longcv</span>
								</span>
							</button>
							<ul class="Dropdown-menu">
								<li class="item-profile">
									<a class="hasIcon" href="/u/47" active="false">
										<i class="icon fas fa-user Button-icon"></i>
										<span class="Button-label">Profile</span>
									</a>
								</li>
								<li class="item-logOut">
									<button class="hasIcon" type="button">
										<i  class="icon fas fa-sign-out-alt Button-icon"></i>
										<span class="Button-label">Log Out</span>
									</button>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				</div>
                <div class="logo">
					<a href="index.html" class="nav_logo">
						<img src="images/logo.svg" alt="">
					</a>
				</div>
				<div class="icon">
                    <button class="nav_toggle">
                        <span class="icon_bar bar_1"></span>
                        <span class="icon_bar bar_2"></span>
                    </button>
                </div>
            </div>
        </nav>
		<div id="menudrop" class="nav_menu_drop">
			<div class="main_nav_drop">
				<div class="product">
					<div class="title">
						<a href="javascrip:;">Hỏi đáp</a>
					</div>
					<ul class="product_item">
						<li class="list_item" v-for="item in productList"><a href="javascrip:;" class="product_link">{{item.productitem}}</a></li>
					</ul>
				</div>
				<div class="nav">
					<ul class="nav_item">
						<li class="list_item" v-for="item in menuList">
							<a :href="item.link" class="nav_link">{{item.navitem}}</a>
							<ul class="product_drop">
								<li class="list_item" v-for="item in productList"><a href="javascrip:;" class="product_link">{{item.productitem}}</a></li>
							</ul>
						</li>
					</ul>
					<div class="search">
						<a href="javascrip:;">
							<img src="images/search.svg" alt="">
						</a>
					</div>
				</div>
			</div>
			<div class="search_drop">
				<form action="">
					<div class="search_wrapper">
						<div class="title">
							Bạn đang cần tìm kiếm thông tin?
						</div>
						<div class="input_box">
							<input class="input-search" type="text" name="" id="" placeholder="Nhập từ khóa tìm kiếm...">
							<button class="btn-search">
								<img src="images/search.svg" alt="">
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
    </header>
</template>

<script>

	module.exports = {
		data() {
			return {
				menuList: [
					{
						link:'index.html',
						navitem:'TRANG CHỦ',
					},
					{
						link:'gioithieu.html',
						navitem:'GIỚI THIỆU',
					},
					{
						link:'javascrip:;',
						navitem:'HỎI ĐÁP',
					},
				],
				productList: [
					{
						productitem:'Câu hỏi mới nhất',
					},
					{
						productitem:'Danh sách người dùng',
					},
					{
						productitem:'Top đóng góp',
					},
				]
			};
		}
	};
</script>
