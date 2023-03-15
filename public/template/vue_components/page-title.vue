<template>
	<div
		class="banner--page-title"
		style="background-image: url(../images/banner-page-title.png)"
	>
		<div class="container">
			<h2 class="title">
				{{ title }}
			</h2>
		</div>
	</div>
</template>

<script>
	module.exports = {
		props: ['title']
	};
</script>
