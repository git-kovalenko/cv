<?php			
	date_default_timezone_set('Europe/Kiev');

	if (!empty($_POST['user_lang'])){
		switch ($_POST['user_lang']) {
			case ('ru'):
			
				send_page_ru();
				break;
			case ('en'):
				send_page_en();
				break;
			default: // действие по умолчанию
		}
	}
	function send_page_ru(){
		$header = "
			<div class='portrait'>
				<img src='images/foto.jpg' alt='foto'>
				<div>
					<h1>Коваленко<br> 
						Анатолий
					</h1>
					<h3>Фронт-енд разработчик</h3>
				</div>
			</div>
			<ul class='navigation'>
				<li><span>Портфолио</span>
				<li><span>Резюме</span>
				<li><span>Контакты</span>
			</ul>
		";
		
		$sidebar_menu = "
			<ul class='sidebar_menu'>
				<li><span>Портфолио</span>
				<li><span>Резюме</span>
				<li><span>Контакты</span>
			</ul>
		";
		
		echo json_encode(array("header" => $header, "sidebar_menu" => $sidebar_menu));
		
		
	}	
	function send_page_en(){
		$header = "
			<div class='portrait'>
				<img src='images/foto.jpg' alt='foto'>
				<div>
					<h1>Kovalenko<br> 
						Anatoliy
					</h1>
					<h3>Front-end developer</h3>
				</div>
			</div>
			<ul class='navigation'>
				<li><span>Portfolio</span>
				<li><span>Resume</span>
				<li><span>Contacts</span>
			</ul>
		";
		
		$sidebar_menu = "
			<ul class='sidebar_menu'>
				<li><span>Portfolio</span>
				<li><span>Resume</span>
				<li><span>Contacts</span>
			</ul>
		";
		
		echo json_encode(array("header" => $header, "sidebar_menu" => $sidebar_menu));
	}	
		
?>