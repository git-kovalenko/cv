window.onload = function(){
	content_min_height();
	
	setup();
}
window.onresize = function(){
	content_min_height();
}

function content_min_height(){
	var footer = $(".footer")[0];
	
	footer.style.marginTop = - footer.offsetHeight +'px'; 
	var elem_main = $(".content");
	var content_min_height = window.innerHeight - $(".header").outerHeight(true) - footer.offsetHeight - elem_main.outerHeight(true) + elem_main.outerHeight();
	if (elem_main.outerHeight() < content_min_height){
		elem_main.outerHeight(content_min_height);
		$(".left-sidebar").outerHeight(content_min_height);
	}
}

function setup(){
	$('.lang_selector li:nth-child(2)').click(function(){
		
		
		$.post( "portfolio.php", {portfolio_en: "1"}) 
		.success(function( data ) {
			alert(data);
			
			$(".content *").remove() ;
			/*
			var arr = data.split("***");
			var arrLength = arr.length-1;
			for (var i = 0; i < arrLength; i++) {
				var val = arr[i].trim();
				$('#drop_dep').append("<option class='dropopt' value="+ val +">"+ val +"</option>");
			}*/
		});

	}); 
};