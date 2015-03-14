window.onload = function(){
	content_min_height();
}
window.onresize = function(){
	content_min_height();
}

function content_min_height(){
	if ($(".content").outerHeight() < $(".wrapper").outerHeight()){
		var content_min_height = $(".wrapper").outerHeight() - $(".header").outerHeight();
		$(".content").css({height: content_min_height+'px'});
		$(".left-sidebar").css({height: content_min_height+'px'});
	}
}