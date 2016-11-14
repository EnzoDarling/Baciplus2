<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root":
			$pw = "";
			$db = "baciplus";
			$con = mysql_connect($host,$user,$pw) or die ("No se pudo conectar a la BD");
			mysql_select_db($db,$con) or die ("No se encontro la base de datos.");			
		}
}
?>