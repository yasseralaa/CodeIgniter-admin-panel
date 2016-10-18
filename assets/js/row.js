//For popout to right
$('.popout-right').on('show.bs.dropdown', function () {
	$('.window-button>.icon-popout-right').removeClass('glyphicon-menu-hamburger');
	$('.window-button>.icon-popout-right').addClass('animated rotateIn glyphicon-remove');
	$('.dropdown-link-right').addClass('animated bounceIn');
})
$('.popout-right').on('hide.bs.dropdown', function () {
	$('.window-button>.icon-popout-right').removeClass('animated rotateIn glyphicon-remove');
	$('.dropdown-link-right').removeClass('animated bounceIn');
	$('.window-button>.icon-popout-right').addClass('animated bounceIn glyphicon-menu-hamburger');
})

//For popout to center
$('.popout-center').on('show.bs.dropdown', function () {
	$('.window-button>.icon-popout-center').removeClass('glyphicon-menu-hamburger');
	$('.window-button>.icon-popout-center').addClass('animated rotateIn glyphicon-remove');
	$('.dropdown-link-center').addClass('animated bounceIn');
})
$('.popout-center').on('hide.bs.dropdown', function () {
	$('.window-button>.icon-popout-center').removeClass('animated rotateIn glyphicon-remove');
	$('.dropdown-link-center').removeClass('animated bounceIn');
	$('.window-button>.icon-popout-center').addClass('animated bounceIn glyphicon-menu-hamburger');
})

//For popout to left
$('.popout-left').on('show.bs.dropdown', function () {
	$('.window-button>.icon-popout-left').removeClass('glyphicon-menu-hamburger');
	$('.window-button>.icon-popout-left').addClass('animated rotateIn glyphicon-remove');
	$('.dropdown-link-left').addClass('animated bounceIn');
})
$('.popout-left').on('hide.bs.dropdown', function () {
	$('.window-button>.icon-popout-left').removeClass('animated rotateIn glyphicon-remove');
	$('.dropdown-link-left').removeClass('animated bounceIn');
	$('.window-button>.icon-popout-left').addClass('animated bounceIn glyphicon-menu-hamburger');
})