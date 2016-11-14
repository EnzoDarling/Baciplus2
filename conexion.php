<?php
$cn=mysql_connect("localhost","root","")or die("Error de Conexion");
$db=mysql_select_db("baciplus")or die("Problemas en la selección de la base de datos");
return($cn);
return($db);
?>