<?php
echo"<h1>recebe<h1/>";
echo ",type";
print_r($_POST);
echo "</pre>";

$login=$_POST["login"];
$senha=$_POST["senha"];


echo "login: <b>$login</b><br>";
echo "senha: <b>$senha</b><br>";


?>