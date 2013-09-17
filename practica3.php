<!DOCTYPE html>
<html>
<title> Practica 3 </title>
<body>
<?php
$dollar = 10;
$casacambio = 15.5;
$contador = 0;
$resultado = 0;
for($dollar=1; $dollar<=10; $dollar ++){
$resultado = $dollar * 15.5;
echo $dollar."Dollar = ".$resultado."Pesos";
}
?>
</body>
</html>