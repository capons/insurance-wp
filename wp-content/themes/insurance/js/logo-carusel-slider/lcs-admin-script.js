jQuery(document).ready(function($) {

	$('.lcs-row .lcs-td.disabled').click(function(){
		$('i.lcs_pro_ver_notice').fadeIn();
	});

	$('input[value="middle"]').click(function(){
	    return false;
	});

	$('input[value="middle"]').click(function(){
		$('i.lcs_pro_ver_notice').fadeIn();
	});

	$( '#lcs_slider_settings input, #lcs_style_settings input' ).prop( "disabled", true );

});

