<?php
function proverka($z){
	if (empty($z)==true) return 0;
	else return 1;
}
$err=1;
echo "Наименование товара: ";
if (proverka($_POST['name_tovar'])==0){echo "<font color=\"red\">не заполнено обязательное поле</font><br>"; $err=0;}
else echo $_POST['name_tovar']."<br>";
echo "Количество товара: ";
if (proverka($_POST['kol_tovar'])==0){echo "<font color=\"red\">не заполнено обязательное поле</font><br>"; $err=0;}
else echo $_POST['kol_tovar']."<br>";
echo "Цена товара: ";
if (proverka($_POST['price_tovar'])==0){echo "<font color=\"red\">не заполнено обязательное поле</font><br>"; $err=0;}
else echo $_POST['price_tovar']."<br>";
echo "Описание товара: ";
if (proverka($_POST['opis_tovar'])==0){echo "<font color=\"red\">не заполнено обязательное поле</font><br>"; $err=0;}
else echo $_POST['opis_tovar']."<br>";
echo "<form method=\"POST\" action=\"index_form2.php\">";
echo "<input type=\"hidden\" name=\"name_tovar\" value=\"".$_POST['name_tovar']."\">";
echo "<input type=\"hidden\" name=\"kol_tovar\" value=\"".$_POST['kol_tovar']."\">";
echo "<input type=\"hidden\" name=\"price_tovar\" value=\"".$_POST['price_tovar']."\">";
echo "<input type=\"hidden\" name=\"opis_tovar\" value=\"".$_POST['opis_tovar']."\">";
echo "<input type=\"hidden\" name=\"ed_izm\" value=\"".$_POST['ed_izm']."\">";
echo "<input type=\"submit\" value=\"Исправить\" name=\"s1\">";
if ($err==1) echo "<input type=\"submit\" value=\"В базу\" name=\"s1\">";
echo "</form>";
?>
