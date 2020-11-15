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

$(document).ready(function () {
	$(window).scroll(function () {
		if ($("#slide-left-animation-1")) {
			triggerSlideIns($(this), [
				$("#slide-left-animation-1"),
				$("#slide-left-animation-2"),
				$("#slide-left-animation-3"),
				$("#slide-left-animation-4"),
			]);
		}
	});

	$("#login-modal-btn").bind("click", function (event) {
		event.preventDefault();
		var activeItem = $("#login-tab");
		var showItem = $("#login");

		$(".auth-form").each(function () {
			$(".auth-form").removeClass("active");
		});
		activeItem.addClass("active");

		$(".tab-pane").each(function () {
			$(".tab-pane").removeClass("show active");
		});
		showItem.addClass("show active");
	});

	$("#register-modal-btn").bind("click", function (event) {
		event.preventDefault();
		var activeItem = $("#register-tab");
		var showItem = $("#register");

		$(".auth-form").each(function () {
			$(".auth-form").removeClass("active");
		});
		activeItem.addClass("active");

		$(".tab-pane").each(function () {
			$(".tab-pane").removeClass("show active");
		});
		showItem.addClass("show active");
	});
});
