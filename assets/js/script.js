$(function () {
	$(document).scroll(function () {
		var $nav = $(".fixed-top");
		var $navbarNav = $(".navbar-nav");

		$nav.toggleClass("scrolled shadow-sm", $(this).scrollTop() > $nav.height());
		$navbarNav.toggleClass(
			"text-default-black-important",
			$(this).scrollTop() > $nav.height()
		);
	});
});
