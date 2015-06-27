<?php
session_start();

if(!empty($_POST))
{$_SESSION["user"]=$_POST["user"];
echo $_POST["user"];}


?>

<html> 
<head> <meta charset="UTF-8"></head>
<body>
<h3>е-Мания</h3>
<form action="confirm.php" method="post">
     Продукти:
	<input type="checkbox" name="product[]" value="Samsung I9301 GALAXY S3 Neo_350"> Мобилен телефон 
	Samsung I9301 GALAXY S3 Neo - 350 лв.
	</br>
	<input type="checkbox" name="product[]" value="Samsung SM-G7105 Galaxy Grand 2_450"> Мобилен телефон 
	Samsung SM-G7105 Galaxy Grand 2 - 450 лв.
	</br>
	<input type="checkbox" name="product[]" value="Samsung I9192 Galaxy S4 Mini_400"> Мобилен телефон 
	Samsung I9192 Galaxy S4 Mini - 400 лв.
	</br>
	<input type="checkbox" name="product[]" value="Samsung Galaxy Core 2_300"> Мобилен телефон 
	Samsung Galaxy Core 2 - 300 лв.
	</br>
	<input type="checkbox" name="product[]" value=" Samsung S7390 Galaxy Fresh_180"> Мобилен телефон
	 Samsung S7390 Galaxy Fresh - 180 лв.
	</br>
Номер на карта: <input type="text" name="card" >
Налична сума:<input type="text" name="suma" >
	<input type="submit" name="send" value="send">
</form>
</body>
</html>
<?php
session_unset(); 



?>
