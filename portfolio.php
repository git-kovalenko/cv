<?php			
	date_default_timezone_set('Europe/Kiev');

	switch (true) {
		case (!empty($_POST['portfolio_ru'])):
			echo $portfolio_ru;
			break;
		case (!empty($_POST['portfolio_en'])):
			echo $portfolio_en;
			break;
		
			
		default: // �������� �� ���������
	}

	$portfolio_ru = "
			<div class='project'>
				<p><img class='screen_shot' src='images/bonfire.jpg' alt='screen shot'>
				<span class='project_name'>Bonfire</span>
					�������� ��������� �� <a href='images/eCommerce-Website-PSD.rar'>.PSD</a> ������. 
					���������� �� ������ �� 600 �� 940 px. �������� ������ ��� ���������.
					<br><br><a href='projects\web-page-bonfire\bonfire.html'>������ �� ��������</a>.
					<br>�����������:<a class='git_link' href='https://github.com/git-kovalenko/web-page-bonfire/'>github.com/git-kovalenko/web-page-bonfire/</a>
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li>
				</ul>
			</div>
			<div class='project'>
				<p><img class='screen_shot' src='images/id_reader_icon.jpg' alt='screen shot'>
				<span class='project_name'>���� ������ ���������� ID Reader</span>
					������ ���������� ��� ����� ������� ���������� ����� ����������� � ����������. ��� ��������� �������� �� 
					�������� �����-�����, ������������� ���������� � ����� ������ MySQL �� �������. ����������� ������������� ���� �������������,
					������ ��� ���������� ��������� �� �������������� ������������� � ����� ������, � ��� ����� ������ � ���� ������ �� .txt �����, 
					� ����� ������� �� ���������� � ���������� ������ � ������� ����� Excel. ���������: <a href='http://koh.3d-foto.in.ua/help'>������� �� ������ � ����� ������ ID Reader</a>					
					<br><br><a href='http://koh.3d-foto.in.ua'>���������������� �������� �������.</a>
					
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li><li>PHP/Kohana</li><li>PHPExcel</li><li>MySQL</li>
				</ul>
			</div>
			<div class='project'>
				<p><img class='screen_shot' src='images/sphere.jpg' alt='screen shot'>
				<span class='project_name'>��� ����� � ������������� �����</span>
					� ������� ����������� 2-������ ������������� ����� ���������� ������ �����, �������� ������� ����������������� ����������. 
					����� ����� �����������, ������ � ��������� ������� ����� �������� �����. ��� ��������� ����� ����������� &lt;canvas&gt;, ������ ������������ ��������� 
					� ������� JS ���������� <a href='http://amcharts.com'>AmCharts</a> ��� <a href='https://developers.google.com/chart/'>Google Charts</a>.
					<br><br>�������� ������� <a href='http://sphere.3d-foto.in.ua'>sphere.3d-foto.in.ua</a>
					
					<br>�����������:<a class='git_link' href='https://github.com/git-kovalenko/sphere/'>github.com/git-kovalenko/sphere/</a>
				</p>
				<ul class='used_technology'>
					<li>Html5/CSS3</li><li>JS/Jquery</li><li>AmCharts</li><li>Google Charts</li>
				</ul>
			</div>
	";	
	$portfolio_en = "ENENENENENENNENENENEN";
?>