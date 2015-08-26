<?php
echo "negro";
$mysql_host=$_SERVER['host'];
$mysql_user=$_SERVER['user']; 
$mysql_password=$_SERVER['pass'];
$link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
    or die('No se pudo conectar');
echo 'Connected successfully';
mysql_select_db('my_database') or die('No se pudo seleccionar la base de datos');

echo 'hola precioso';
?>
