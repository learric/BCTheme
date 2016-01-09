
jQuery(document).foundation();
	
/*********
accordions
*********/
jQuery(function accordions() {

	jQuery('.accordionContent').hide();
	jQuery('.accordionTitle').on('click', function () {
		jQuery('.accordionTitle').removeClass('open');
		
		if (jQuery(this).next('.accordionContent').is(':hidden')) {
			jQuery(this).toggleClass('open');
			jQuery('.accordionContent').slideUp();
		    jQuery(this).next('.accordionContent').slideToggle();
		} else {
		   jQuery(this).next('.accordionContent').slideToggle();
		}
	});
});

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function() {

	/*********
	mobile nav
	*********/
	
	jQuery('#mobileNav').on('click', function (e) {
		if (jQuery(document).width() <= 640) {
			e.preventDefault();
			e.stopPropagation();
			jQuery('#mobileNav').children('span').fadeToggle('fast');
			jQuery('.main_nav').slideToggle('fast');
		}
	});
	
	jQuery(document).on('click', function () {
		if (jQuery(document).width() <= 640) {
			jQuery('#mobileNav').children('span').removeAttr('style');
			jQuery('.main_nav').slideUp('fast');
		}
	});

}); /* end of as page load scripts */