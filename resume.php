<?php			
	date_default_timezone_set('Europe/Kiev');

	if (!empty($_POST['user_lang'])){
		switch ($_POST['user_lang']) {
			case ('ru'):
				send_resume_ru();
				break;
			case ('en'):
				send_resume_en();
				break;
			default: // действие по умолчанию
		}
	}
	function send_resume_ru(){
		$main = "
			<div class= 'resume'>
				<h2>Резюме</h2>
				<h4>Навыки и технологии</h4>
				<ul>
					<li><span class = 'termin'>Html5, CSS3</span>
					<li><span class = 'termin'>Javascript, jQuery, Ajax</span>
					<li>базовые навыки <span class = 'termin'>PHP, MySQL, Kohana</span>
					<li><span class = 'termin'>Photoshop</span>(работа с макетами, скрипты на JS), <span class = 'termin'>Fireworks</span>
					<li><span class = 'termin'>Git</span>
					<li>Опыт кроссбраузерной и адаптивной верстки
					<li>Опыт работы с библиотеками, модулями (<span class = 'termin'>jQuery UI, PHPExcel, AmCharts, Google Charts</span>)
				</ul>
				<h4>Образование</h4>
				<p>НТУУ 'КПИ', Приборостроительный факультет, лазерная и опто-електронная техника, специалист, 2008 г.</p>
				<h4>Опыт работы</h4>
				<p>freelance web developer - 1 год.</p>
				<p>2008 - 2015 инженер, научный сотрудник, начальник лаборатории в Украинском центре метрологии.</p>
				<h4>Черты характера</h4>
				<p>Организованный, способен решать сложные задачи, быстро обучаться, без вредных привычек, хобби - программирование.</p>
			</div>
		";	
			
		echo json_encode(array('main' => $main));
		
		
	}	
	function send_resume_en(){
		$main =  "ENENENENENEN
			<div class= 'resume'>
				<h2>Резюме</h2>
				<h4>Навыки и технологии</h4>
				<ul>
					<li><span class = 'termin'>Html5, CSS3</span>
					<li><span class = 'termin'>Javascript, jQuery, Ajax</span>
					<li>базовые навыки <span class = 'termin'>PHP, MySQL, Kohana</span>
					<li><span class = 'termin'>Photoshop</span>(работа с макетами, скрипты на JS), <span class = 'termin'>Fireworks</span>
					<li><span class = 'termin'>Git</span>
					<li>Опыт кроссбраузерной и адаптивной верстки
					<li>Опыт работы с библиотеками, модулями (<span class = 'termin'>jQuery UI, PHPExcel, AmCharts, Google Charts</span>)
				</ul>
				<h4>Образование</h4>
				<p>НТУУ 'КПИ', Приборостроительный факультет, лазерная и опто-електронная техника, специалист, 2008 г.</p>
				<h4>Опыт работы</h4>
				<p>freelance web developer - 1 год.</p>
				<p>2008 - 2015 инженер, научный сотрудник, начальник лаборатории в Украинском центре метрологии.</p>
				<h4>Черты характера</h4>
				<p>Организованный, способен решать сложные задачи, быстро обучаться, без вредных привычек, хобби - программирование.</p>
			</div>
		";
		echo json_encode(array('main' => $main));
	}	
		
?>