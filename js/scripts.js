function elevateTabBar() {
	if (jQuery(document).scrollTop() > 0) {
		jQuery("#tab-bar").addClass("elevated");
	} else {
		jQuery("#tab-bar").removeClass("elevated");
	}
}

function showNav() {
	jQuery("#nav-drawer").toggleClass("toggled");
	jQuery("#scrim").toggleClass("visible");
	jQuery(document.body).toggleClass("no-scroll");
	event.stopPropagation();
}

function hideNav() {
	jQuery("#nav-drawer").removeClass("toggled");
	jQuery("#scrim").removeClass("visible");
	jQuery(document.body).removeClass("no-scroll");
}

jQuery(document).ready(function() {
	elevateTabBar();
	jQuery(".toggle-nav").click(function(event) {
		showNav();
	});
	jQuery("#scrim").click(function(event) {
		hideNav()
	});
});

jQuery(window).scroll(function() {
	elevateTabBar();
});
