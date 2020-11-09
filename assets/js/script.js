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

$(document).ready(function () {
	$(window).scroll(function () {
		triggerSlideIns($(this), [
			$("#slide-left-animation-1"),
			$("#slide-left-animation-2"),
			$("#slide-left-animation-3"),
			$("#slide-left-animation-4"),
		]);
	});
});

$.getDocHeight = function () {
	return Math.max(
		$(document).height(),
		$(window).height(),
		document.documentElement.clientHeight
	);
};

$.getScrollPercentage = function () {
	return (
		100 *
		Math.min(
			($(window).height() + $(window).scrollTop()) / $.getDocHeight(),
			$(window).scrollTop()
		)
	);
};

var triggerSlideIns = function (t, items) {
	for (var i = 0; i < items.length; i++) {
		if (i % 2 == 0) {
			if (
				$.getDocHeight() -
					$(window).height() -
					($.getDocHeight() - items[i].offset().top) <=
				t.scrollTop()
			) {
				if (!items[i].hasClass("transitionSlideInRight")) {
					items[i].addClass("transitionSlideInRight");
				}
			} else {
				items[i].removeClass("transitionSlideInRight");
			}
		} else {
			if (
				$.getDocHeight() -
					$(window).height() -
					($.getDocHeight() - items[i].offset().top) <=
				t.scrollTop()
			) {
				if (!items[i].hasClass("transitionSlideInLeft")) {
					items[i].addClass("transitionSlideInLeft");
				}
			} else {
				items[i].removeClass("transitionSlideInLeft");
			}
		}
	}
};
