function elevateTabBar() {
	if (jQuery(document).scrollTop() > 0) {
		jQuery("#tab-bar").addClass("elevated");
	} else {
		jQuery("#tab-bar").removeClass("elevated");
	}
}

jQuery(document).ready(function() {
	elevateTabBar();
});

jQuery(window).scroll(function() {
	elevateTabBar();
});
