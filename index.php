<!DOCTYPE html>
	<html>
		<head>
			<title>Загрузить файлы</title>
			<link rel="stylesheet" src="style.css" />
			<script type="text/javascript" src="/js/jquery.js"></script>
			<script type="text/javascript" src="/js/form.js"></script>
			<style>
				div.info {display: none;}
			</style>
		</head>
		<body>
			<h1>Форма 1</h1>

			
			<form id="myform"  method="POST" enctype="multipart/form-data" >
				<p>Номер телефона</p>
				<input type="text" name="login">
				<p>Возраст</p>
				<input type="text" name="vozrast"><br><br>
				
				<input type="file" name="myfile[]" id="#myfile" multiple="multiple">
				<input type="submit" value="Отправить">
				<div id="myform_status"></div>
			</form>

			
			
		</body>
	</html>
