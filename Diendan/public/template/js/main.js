// menu header
function mobileMenu() {
	const windowWidth = $(window).width();

	$('.menu-hamburger').click(function () {
		$(this).siblings('.menu-overlay').addClass('active');
		$(this).siblings('.menu-items').addClass('active');
	});

	if (windowWidth < 992) {
		$('.menu-parent i').click(function () {
			$(this)
				.toggleClass('active')
				.parent()
				.siblings('.menu-sub')
				.slideToggle();
		});
	}
	$(document).mouseup(function (e) {
		if (
			!$('.menu-items').is(e.target) &&
			$('.menu-items').has(e.target).length === 0
		) {
			$('.menu-items').siblings('.menu-overlay').removeClass('active');
			$('.menu-items').removeClass('active');
		}
	});
}

function scrollTop() {
	$(window).scroll(function () {
		let scrollY = $(window).scrollTop();

		if (scrollY > 500) $('#scrollToTop').addClass('show');
		else $('#scrollToTop').removeClass('show');
	});

	$('#scrollToTop').click(function () {
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
		return false;
	});
}

function scrollSticky() {
	$(window).scroll(function () {
		var scrollTop = $(window).scrollTop();
		var header = $('.header');
		var headerheight = header.innerHeight();
		var main = $('main');

		if (scrollTop > headerheight) {
			header.addClass('sticky');
			main.css('margin-top', 0);
		} else {
			header.removeClass('sticky');
			main.css('margin-top', 0);
		}
	});
}
function dropmenu(){
	$(".nav_toggle").on("click", function () {
		$('.bar_1').toggleClass('active');
		$('.bar_2').toggleClass('active_2');
		$('#menudrop').toggleClass('menu_open')
		$('.search_drop').removeClass('search_open')
	});
	$(".search").on("click", function() {
		$(".search_drop").toggleClass("search_open");
	});
	$(".Dropdown-toggle").on("click", function() {
		$(".Dropdown-menu").toggleClass("dropdown-menu");
	});
	$(".btn-fitter").on("click", function(){
		$(".drop-down-fittel").toggleClass("drop-fittel");
	});
	$(".drop-flow").on("click", function(){
		$(".Dropdown-menu-flow").toggleClass("drop-down-flow");
	});
}
function clickSiblingsToggle(paramItem) {
	let $item = $(paramItem);

	$item.each(function (index, el) {
		$(el).click(function () {
			let $this = $(this);

			$this.siblings().slideToggle();
		});
	});
}

function textarea__autoHeight() {
	$('textarea')
		.each(function () {
			this.setAttribute(
				'style',
				'height:' + this.scrollHeight + 'px;overflow-y:hidden;'
			);
		})
		.on('input', function () {
			this.style.height = 'auto';
			this.style.height = this.scrollHeight + 'px';
		});
}

$(document).ready(function () {
	mobileMenu();
	scrollTop();
	//scrollSticky();
	dropmenu();
	if ($(window).width() < 992) {
		clickSiblingsToggle('.nav_link');
	}
});

