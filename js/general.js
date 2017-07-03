$(document).ready(function(){
	$("a.mobile").click(function(){
		$(".sidebar").slideToggle('fast');
	
	});

	window.onresize = function(event) {
		if($(window).width() > 320) {
			$(".sidebar").show();
		}
	};
	$("a.mobile").on('click touchstart', (function(){
		$(".sidebar").slideToggle('fast');
	});
});
