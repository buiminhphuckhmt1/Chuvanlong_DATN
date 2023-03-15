<template>
	<section class="section-contact-form">
		<div class="contact-form-wrapper">
			<div class="left-contact">
				<div id="js__margincontact" class="form-contact-wrapper">
					<div class="contact-form">
						<h4>Liên hệ với</h4>
						<h4>trường thành đại việt</h4>
						<form action="" class="test">
							<div class="contact-form-detail">
								<div class="input-wrapper">
									<input class="input-contact-form" type="text" required />
									<label class="label-contact-form required"> Họ và tên </label>
								</div>
								<div class="input-wrapper">
									<input class="input-contact-form" type="text" required />
									<label class="label-contact-form required"> Email </label>
								</div>
								<div class="input-wrapper">
									<input class="input-contact-form" type="text" required />
									<label class="label-contact-form"> Số điện thoại </label>
								</div>
								<div class="input-wrapper">
									<textarea
										class="textarea-contact-form"
										type="text"
										style="overflow: hidden; resize: none"
										required="required"
									></textarea>
									<label class="label-contact-form">Nội dung kèm theo...</label>
								</div>
								<button class="btn-send">
									GỬI THÔNG TIN
									<svg
										width="12"
										height="12"
										viewBox="0 0 12 12"
										fill="none"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M6 0L4.9425 1.0575L9.1275 5.25H0V6.75H9.1275L4.9425 10.9425L6 12L12 6L6 0Z"
											fill="#1D5A99"
										/>
									</svg>
								</button>
							</div>
						</form>
					</div>
				</div>
				<div id="js__marginbottomcontact" class="form-bottom-contact">
					<div class="left-bottom-contact-form">TRUONG THANH DAI VIET</div>
					<div class="right-bottom-contact-form">security viet nam</div>
				</div>
			</div>
			<div class="right-contact">
				<div class="img-box">
					<img src="images/bg-contactform.png" alt="" />
				</div>
				<div class="right-contact-content">TRUONG THANH DAI VIET</div>
			</div>
		</div>
	</section>
</template>

<script>
	module.exports = {
		mounted() {
			$(window).bind('load', function () {
				if ($(window).width() >= 768) {
					let w_window = $(document).innerWidth();
					let w_container = $('.container').innerWidth();
					$('#js__margincontact').css(
						'padding-left',
						(w_window - w_container + 18) / 2
					);
					$('#js__marginbottomcontact').css(
						'padding-left',
						(w_window - w_container + 18) / 2
					);
				}

				if ($(window).width() < 992) {
					let w_window = $(document).innerWidth();
					let w_container = $('.container').innerWidth();
					$('#js__margincontact').css(
						'padding-left',
						(w_window - w_container + 45) / 2
					);
					$('#js__margincontact').css(
						'padding-right',
						(w_window - w_container + 45) / 2
					);
					$('#js__marginbottomcontact').css(
						'padding-left',
						(w_window - w_container + 45) / 2
					);
					$('#js__marginbottomcontact').css(
						'padding-right',
						(w_window - w_container + 45) / 2
					);
				}
			});
		}
	};
</script>
