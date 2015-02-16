<html>
<head>
<meta charset="utf-8">
<title>Форма для заполнения базы данных онлайн-магазина</title>
</head>
<body>
<?php
include('connect.php');
$sel="select * from tovar";
$res=mysql_query($sel);
echo "<h1>Каталог товаров</h1>";
echo "<table border=\"1\"><tr><td>Наименование товарa</td>
<td>Цена товара</td>
<td>Количество товара</td>
<td>Един. измернения</td></tr>";

//это такая функция, которая строку результата представляет в виде массива
while($arr=mysql_fetch_array($res)){
echo "<tr><td>".$arr['name_tovar']."</td>
<td>".$arr['price_tovar']."</td>
<td>".$arr['kol_tovar']."</td>
<td>".$arr['ed_izm_tovar']."</td>";
}
echo "</table>";
?>
</body>
</html>
