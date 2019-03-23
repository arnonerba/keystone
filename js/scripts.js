jQuery(window).scroll(function() {
	if (jQuery(document).scrollTop() > 0) {
		jQuery("#tab-bar").addClass("elevated");
	} else {
		jQuery("#tab-bar").removeClass("elevated");
	}
});
