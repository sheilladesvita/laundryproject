if (window.location.pathname === "/laundryproject/") {
	var js = document.createElement("script");

	js.type = "text/javascript";
	js.src = "./assets/js/home-image-slide-in.js";

	document.body.appendChild(js);
}

$(function () {
	$(document).scroll(function () {
		var $nav = $(".fixed-top");
		var $navbarNav = $(".navbar-nav");
		var $fa = $("#collapse-bar-btn");

		$nav.toggleClass("scrolled shadow-sm", $(this).scrollTop() > $nav.height());
		$navbarNav.toggleClass(
			"text-default-black-important",
			$(this).scrollTop() > $nav.height()
		);
		$fa.toggleClass(
			"text-default-black-important",
			$(this).scrollTop() > $nav.height()
		);
	});
});
