<?php
if(isset($_POST['name_tovar'])) $name_tovar=$_POST['name_tovar'];
else $name_tovar="";
if(isset($_POST['kol_tovar'])) $kol_tovar=$_POST['kol_tovar'];
else $kol_tovar="";
if(isset($_POST['price_tovar'])) $price_tovar=$_POST['price_tovar'];
else $price_tovar="";
if (isset($_POST['opis_tovar'])) $opis_tovar=$_POST['opis_tovar'];
else $opis_tovar="";					
if (isset($_POST['s1']) and $_POST['s1']== "В базу") {
//Тут код добавления в базу
} 
else {
?>
<html>
<head>
<meta charset="utf-8">
<title>Форма для заполнения базы данных онлайн-магазина</title>
</head>
<body>
<form method="POST" action="script1.php" name="input_form2">
<table width="800" align="center" cellspacing="0" cellpadding="5">
<caption><h1>Прием товара</caption>
<tr>
<td width="400" align="right">Наименование товара:</td>
<td><input type="text" name="name_tovar" value="<?php echo $name_tovar; ?>"></td>
</tr>
<tr>
<td align="right">Количество товара:</td>
<td><input type="text" name="kol_tovar" value="<?php echo $kol_tovar; ?>"></td>
</tr>
<tr>
<td align="right">Цена товара:</td>
<td><input type="text" name="price_tovar" value="<?php echo $price_tovar; ?>"></td>
</tr>
<tr>
<td align="right">Единица измерения:</td>
<td>
<select name="ed_izm" size="1">
<option value="1" <?php if($ed_izm==1) echo "selected"; ?>>килограммы
<option value="2" <?php if($ed_izm==2) echo "selected"; ?>>граммы
<option value="3" <?php if($ed_izm==3) echo "selected"; ?>>штуки
<option value="4" <?php if($ed_izm==4) echo "selected"; ?>>литры
</select></td>
</tr>
<tr>
<td align="right">Отдел:</td>
<td>
<select name="name_otdel" size="1">
<option value="1" <?php if($name_otdel==1) echo "selected "; ?>>Овощи и фрукты
<option value="2" <?php if($name_otdel==2) echo "selected "; ?>>Рыбный
<option value="3" <?php if($name_otdel==3) echo "selected "; ?>>Мясной
<option value="4" <?php if($name_otdel==4) echo "selected "; ?>>Молочный
<option value="5" <?php if($name_otdel==5) echo "selected "; ?>>Бакалея
</select></td>
</tr>
<tr>
<td valign="top" align="right">Описание товара:</td>
<td><textarea name="opis_tovar" cols="35" rows="5" wrap="virtual"><?php echo $_POST['opis_tovar']; ?></textarea></td>
</tr>
<tr>
<td align="right">Сорт товара:</td>
<td>
<input type="radio" name="sort_tovar" value="1" <?php if($sort_tovar==1) echo "checked "; ?>>высший
<input type="radio" name="sort_tovar" value="2" <?php if($sort_tovar==2) echo "checked "; ?>>первый
<input type="radio" name="sort_tovar" value="3" <?php if($sort_tovar==3) echo "checked "; ?>>второй
</td>
</tr>
<tr>
<td align="right">Товар поступил впервые:</td>
<td><input type="checkbox" name="check_new" value="1" <?php if(isset($_POST['check_new'])) echo "checked "; ?>></td>
</tr>
<tr>
<td align="right"><input type="submit" name="submit" value="Добавить"></td>
<td><input type="reset" name="reset" value="Очистить"></td>
</tr>
</table>
</form>
<?php 
}                           
?> 
</body>
</html>