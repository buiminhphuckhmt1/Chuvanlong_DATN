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
	$(".ic-nav").on("click", function() {
		$(".language-drop").toggleClass("d-none");
	});
	// $(".nav_link").on("click", function() {
	// 	$(".product_drop").toggleClass("menusub_open");
	// });
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
	scrollSticky();
	dropmenu();
	if ($(window).width() < 992) {
		clickSiblingsToggle('.nav_link');
	}
});
let questions_img=[
    'https://cdn.sstatic.net/Img/home/illo-feats-ask.svg?v=b6cd07f0765a',
    'https://cdn.sstatic.net/Img/home/illo-feats-vote.svg?v=9d2eb0efdc17',
    'https://cdn.sstatic.net/Img/home/illo-feats-answer.svg?v=b637b99bc32a',
    'https://cdn.sstatic.net/Img/home/illo-feats-tags.svg?v=0655cbe6bffa',
    'https://cdn.sstatic.net/Img/home/illo-feats-accept.svg?v=f2be4b8dfdac',
    'https://cdn.sstatic.net/Img/home/illo-feats-recognize.svg?v=4f011d7173e8'
]

var questionsBody=document.querySelector('.questions-body');
var question_items=questionsBody.querySelectorAll('.questions-body-item')
var question_content_img=questionsBody.querySelector('.question-item-content-img')
var question_item_isSelected=false;

function resetActive(){
    question_items.forEach(item=>{
        item.classList.remove("active");
    })
}
function getDataId(item){
    return item.getAttribute('data-id');
}
function changeImage(id){
    question_content_img.src=questions_img[id];
}

question_items.forEach(item=>{
    item.addEventListener('click',function (event){
        question_item_isSelected=true;
        resetActive();
        this.classList.add('active')
        changeImage(getDataId(item))
    })
})

/*Questions Animation*/
var index=0;
firstSlider();
durationSlider();

function firstSlider(){
    changeImage(index)
    question_items[index].classList.add('active');
    index++;
}

function durationSlider(){
    setInterval(()=>{
        if (!question_item_isSelected){
            changeImage(index)
            resetActive();
            question_items[index].classList.add('active');
            index<questions_img.length-1 ? index++ : index=0;
        }
    },3000);
}

/* Nav Search Hints */
