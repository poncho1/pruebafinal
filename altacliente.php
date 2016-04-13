<?php
	include ("./conexion.php");
	if(!isset($_POST['rfc']) &&  !isset($_POST['nombre'])  &&  !isset($_POST['direccion']) &&  !isset($_POST['localidad']) &&  !isset($_POST['codigo']) &&  !isset($_POST['telefono']) && !isset($_POST['correo'])){
		header("Location: nuevosclientes.php");
		      	}else{
		      		$rfc=$_POST['rfc'];
                                $nombre=$_POST['nombre'];
                                $direccion=$_POST['direccion'];
                                $localidad=$_POST['localidad'];
                                $codigo=$_POST['codigo'];
                                $telefono=$_POST['telefono'];
			        $correo=$_POST['correo'];
				$Sql="insert into clientes (rfc,nombre,direccion,localidad,codigo,telefono,correo) values(
							'".$rfc."',
                                                        '".$nombre."',
                                                        '".$direccion."',
                                                        '".$localidad."',
                                                        '".$codigo."',
                                                        '".$telefono."',
							'".$correo."')";
					mysql_query($Sql);
					header ("Location: nuevosclientes.php");
		      
                        }	
?>
