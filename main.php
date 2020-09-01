<!DOCTYPE html>
	<html>
		<head>
			<title>Загрузить файлы</title>
			<link rel="stylesheet" src="style.css" />
			<script type="text/javascript" src="/js/jquery.js"></script>
			<script type="text/javascript" src="/js/form.js"></script>
			<script type="text/javascript" src="/js/podgruzka.js"></script>
			<style>
				div.photo {display: none;}
			</style>
		</head>
		<body>
			<?php

			function getImgPath()
			{
				$host = 'localhost';
				$dbname = 'albom';
				$user = 'root';
				$password = 'root';

				$dsn = "mysql:host=$host; dbname=$dbname";
				$db = new PDO($dsn, $user, $password);

				$PhotoPathList = array();
				$result = $db->query('SELECT tel, img_name FROM information');

				$i = 0;
				while($row = $result->fetch())
				{
					$PhotoPathList[$i]['tel'] = $row['tel'];
					$PhotoPathList[$i]['img_name'] = $row['img_name'];
					$i++;

				}
				return $PhotoPathList;
			} 

			$imgPath = array();
			$imgPath = getImgPath();

			?>
		
			
						  		<?php foreach($imgPath as $imgItem) :?>

						  		<div class='photo'>

										<img whidth='100px' height='100px' src="<?php echo $imgItem['img_name']; ?>">

										<div class='info'><?php echo $imgItem['tel']; ?></div>
										</div>
						  		
							<?php endforeach; ?>


			
			<a href="#" id="loadMore">Загрузить ещё</a>



		</body>
	</html>