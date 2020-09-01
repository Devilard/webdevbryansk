<?php






$errors = false;

if(($_FILES['myfile']['name'][0]) != '')
{	
	
	$name = $_FILES['myfile']['name'];
	$type = $_FILES['myfile']['type'];
	$tmp_name = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	$tel = $_POST['login'];
	$age = $_POST['vozrast'];
	$img_name = $_FILES['myfile']['name'];
	$files = $_FILES['myfile'];

}
else
{
	$errors[] = 'Загрузите Файл';
}

if($_POST['login'])
{


}else
{
	$errors[] = "Введите номер телефона";
}

if(($_POST['vozrast']) and ($_POST['vozrast']) >= 18)
{

}
else
{
	$errors[] = "Вам нет 18 лет";
}
if($errors){
foreach($errors as $key => $value)
{
	echo $value;
	echo "<br>";
}
exit;
}
else{

	$host = 'localhost';
	$dbname = 'albom';
	$user = 'root';
	$password = 'root';

	$dsn = "mysql:host=$host; dbname=$dbname";
	$db = new PDO($dsn, $user, $password);

	foreach($files['name'] as $k => $v)
{
	
	move_uploaded_file($files['tmp_name'][$k], "img/".$files['name'][$k]);

	$sql = "INSERT INTO information VALUES (NULL, :tel, :age, :img_name)";

	$query = $db->prepare($sql);
	$query->execute(['tel' => $tel, 'age' => $age, 'img_name' => "/img/".$files['name'][$k]]);
}
	


header("Location: main.php");
	

}

?>