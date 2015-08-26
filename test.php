<?php
$mysql_host="54.68.135.137";
$mysql_user="user"; 
$mysql_password="pepito.P0";
$link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
    or die('No se pudo conectar');
echo 'Connected successfully';
mysql_select_db('my_database') or die('No se pudo seleccionar la base de datos');

echo 'hola perro';
?>
