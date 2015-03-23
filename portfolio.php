<?php			
	date_default_timezone_set('Europe/Kiev');

	if (!empty($_POST['user_lang'])){
		switch ($_POST['user_lang']) {
			case ('ru'):
				send_portfolio_ru();
				break;
			case ('en'):
				send_portfolio_en();
				break;
			default: // действие по умолчанию
		}
	}
	function send_portfolio_ru(){
		$main = "
			<div class='project'>
				<p><img class='screen_shot' src='images/bonfire.jpg' alt='screen shot'>
				<span class='project_name'>Bonfire</span>
					Страница сверстана по <a href='images/eCommerce-Website-PSD.rar'>.PSD</a> макету. 
					Адаптивная по ширине от 600 до 940 px. Добавлен скрипт для слайдеров.
					<br><br><a href='projects\web-page-bonfire\bonfire.html'>Ссылка на страницу</a>.
					<br>Репозиторий:<a class='git_link' href='https://github.com/git-kovalenko/web-page-bonfire/'>github.com/git-kovalenko/web-page-bonfire/</a>
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li>
				</ul>
			</div>
			<div class='project'>
				<p><img class='screen_shot' src='images/id_reader_icon.jpg' alt='screen shot'>
				<span class='project_name'>База данных спецодежды ID Reader</span>
					Проект разработан для учета оборота спецодежды между подрядчиком и заказчиком. Веб интерфейс работает со 
					сканером штрих-кодов, автоматически связываясь с базой данных MySQL на сервере. Реализовано разграничение прав пользователей,
					учтены все требования заказчика по взаимодействию пользователей с базой данных, в том числе импорт в базу данных из .txt файла, 
					а также выборка по параметрам с генерацией отчета в формате файла Excel. Подробнее: <a href='http://koh.3d-foto.in.ua/help'>Справка по работе с базой данных ID Reader</a>					
					<br><br><a href='http://koh.3d-foto.in.ua'>Демонстрационная страница проекта.</a>
					
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li><li>PHP/Kohana</li><li>PHPExcel</li><li>MySQL</li>
				</ul>
			</div>
			<div class='project'>
				<p><img class='screen_shot' src='images/sphere.jpg' alt='screen shot'>
				<span class='project_name'>Ход лучей в интегрирующей сфере</span>
					В проекте реализовано 2-мерное моделирование лучей светодиода внутри сферы, покрытой изнутри светорассеивающим материалом. 
					Сфера имеет перегородку, размер и положение которой можно изменять мышью. Для отрисовки сферы использован &lt;canvas&gt;, график освещенности выводится 
					с помощью JS библиотеки <a href='http://amcharts.com'>AmCharts</a> или <a href='https://developers.google.com/chart/'>Google Charts</a>.
					<br><br>Страница проекта <a href='http://sphere.3d-foto.in.ua'>sphere.3d-foto.in.ua</a>
					
					<br>Репозиторий:<a class='git_link' href='https://github.com/git-kovalenko/sphere/'>github.com/git-kovalenko/sphere/</a>
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li><li>AmCharts</li><li>Google Charts</li>
				</ul>
			</div>
		";	
			
		echo json_encode(array("main" => $main));
		
		
	}	
	function send_portfolio_en(){
		$main =  "ENENENENENEN
			<div class='project'>
				<p><img class='screen_shot' src='images/bonfire.jpg' alt='screen shot'>
				<span class='project_name'>Bonfire</span>
					Страница сверстана по <a href='images/eCommerce-Website-PSD.rar'>.PSD</a> макету. 
					Адаптивная по ширине от 600 до 940 px. Добавлен скрипт для слайдеров.
					<br><br><a href='projects\web-page-bonfire\bonfire.html'>Ссылка на страницу</a>.
					<br>Репозиторий:<a class='git_link' href='https://github.com/git-kovalenko/web-page-bonfire/'>github.com/git-kovalenko/web-page-bonfire/</a>
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li>
				</ul>
			</div>
			<div class='project'>
				<p><img class='screen_shot' src='images/id_reader_icon.jpg' alt='screen shot'>
				<span class='project_name'>База данных спецодежды ID Reader</span>
					Проект разработан для учета оборота спецодежды между подрядчиком и заказчиком. Веб интерфейс работает со 
					сканером штрих-кодов, автоматически связываясь с базой данных MySQL на сервере. Реализовано разграничение прав пользователей,
					учтены все требования заказчика по взаимодействию пользователей с базой данных, в том числе импорт в базу данных из .txt файла, 
					а также выборка по параметрам с генерацией отчета в формате файла Excel. Подробнее: <a href='http://koh.3d-foto.in.ua/help'>Справка по работе с базой данных ID Reader</a>					
					<br><br><a href='http://koh.3d-foto.in.ua'>Демонстрационная страница проекта.</a>
					
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li><li>PHP/Kohana</li><li>PHPExcel</li><li>MySQL</li>
				</ul>
			</div>
			<div class='project'>
				<p><img class='screen_shot' src='images/sphere.jpg' alt='screen shot'>
				<span class='project_name'>Ход лучей в интегрирующей сфере</span>
					В проекте реализовано 2-мерное моделирование лучей светодиода внутри сферы, покрытой изнутри светорассеивающим материалом. 
					Сфера имеет перегородку, размер и положение которой можно изменять мышью. Для отрисовки сферы использован &lt;canvas&gt;, график освещенности выводится 
					с помощью JS библиотеки <a href='http://amcharts.com'>AmCharts</a> или <a href='https://developers.google.com/chart/'>Google Charts</a>.
					<br><br>Страница проекта <a href='http://sphere.3d-foto.in.ua'>sphere.3d-foto.in.ua</a>
					
					<br>Репозиторий:<a class='git_link' href='https://github.com/git-kovalenko/sphere/'>github.com/git-kovalenko/sphere/</a>
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li><li>AmCharts</li><li>Google Charts</li>
				</ul>
			</div>
		";
		echo json_encode(array("main" => $main));
	}	
		
?>