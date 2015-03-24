window.onload = function(){
	setup();
}

function setup(){
	var lang = $.cookie('lang');
	var page = $.cookie('file_name');
	var tab_index = parseInt($.cookie('tab_index'));
	if(! lang){
		var lang = 'ru';
		$.cookie('lang', 'ru');
	}
	if(! page){
		var page = 'portfolio.php';
		$.cookie('page', 'portfolio.php');
	}
	if(! tab_index){
		var tab_index = 0;
		$.cookie('tab_index', '0');
	}
	
	load_page(lang, page);
	toggle_tabs(tab_index);
	
	$('.lang_selector li:nth-child(1)').click(function(){
		$.cookie('lang', 'ru');
		load_page('ru', $.cookie('file_name'));
		
	}); 
	$('.lang_selector li:nth-child(2)').click(function(){
		$.cookie('lang', 'en');
		load_page('en', $.cookie('file_name'));
	}); 
	
	var file_names = [
		"portfolio.php",
		"resume.php",
		"contacts.php",
	];
	
	$("body").on("click", ('.sidebar_menu li'), function(e){
		if (e.target.tagName == "LI"){
			var index = $(e.target).index();
		}else{
			var index = $(e.target).parent().index(); 
		}
		load_page($.cookie('lang'), file_names[index] );
		toggle_tabs(index);
	});
		
	$("body").on("click", ('.navigation li'), function(e){
		if (e.target.tagName == "LI"){
			var index = $(e.target).index();
		}else{
			var index = $(e.target).parent().index(); 
		}
		load_page($.cookie('lang'), file_names[index] );
		toggle_tabs(index);
	});
		
	function toggle_tabs(index){
		$(".sidebar_menu li").each(function(){
			this.style.cssText = "";
		});
		$(".navigation li").each(function(){
			this.style.cssText = "";
		});
		$(".sidebar_menu li:nth-child("+(index+1)+") ").css({ "margin-left": "5px",	"margin-right": "0"});
		$(".navigation li:nth-child("+(index+1)+") ").css({ "margin-bottom": "-10px",	"height": "35px"});
		$.cookie('tab_index', index);
	}	
	
};

function load_page(language, file_name){
	document.body.style.cursor = "wait";
	$.post( file_name, {user_lang: language})  
	.success( function( data ){
		var data = JSON.parse(data);
		$(".content").html(data.main);
		$.cookie('file_name', file_name);
		document.body.style.cursor = "default";
	});

	load_common_parts(language);
	
}
function load_common_parts(language){
	document.body.style.cursor = "wait";
	$.post( "common_page.php", {user_lang: language})  
	.success( function( data ){
		var data = JSON.parse(data);
		var style_li = [];
		$(".navigation li").each(function(index){
			style_li.push(this.style.cssText);
		});		
		
		$(".header").html(data.header);
		
		$(".navigation li").each(function(index){
			this.style.cssText = style_li.shift();
		});
		
		
		var style_li = [];
		$(".sidebar_menu li").each(function(index){
			style_li.push(this.style.cssText);
		});
		$(".sidebar_menu").html(data.sidebar_menu);
		$(".sidebar_menu li").each(function(index){
			this.style.cssText = style_li.shift();
		});
		document.body.style.cursor = "default";
	});
}