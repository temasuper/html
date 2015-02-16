<html>
<head>
<meta charset="utf-8">
<title>Форма для заполнения базы данных онлайн-магазина</title>
</head>
<body>
<?php
$host="localhost";
$user="shop";
$pass="shop";
$db="shop";
mysql_connect($host,$user,$pass) or die("соединение не удалось");
mysql_select_db($db);
if(@mysql_connect($host,$user,$pass)) echo "соединились с базой";
else "база не присоединилась";

mysql_connect($host,$user,$pass) or die("текст оповещения");
mysql_connect($host,$user,$pass) or exit("текст оповещения");
?>
</body>
</html>
