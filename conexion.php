<?php
	$server="sql308.260mb.net";
	$username="n260m_17857180";
	$password="vicasafe";
	$db='n260m_17857180_pruebaferreteria';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>