<?php
	include ("./conexion.php");
	if(!isset($_POST['proveedor']) &&  !isset($_POST['telefono'])  &&  !isset($_POST['correo']) &&  !isset($_POST['empresa']) &&  !isset($_POST['telempresa']) &&  !isset($_POST['material'])){
		header("Location: nuevoproveedor.php");
		      	}else{
		      		$proveedor=$_POST['proveedor'];
                                $telefono=$_POST['telefono'];
                                $correo=$_POST['correo'];
                                $empresa=$_POST['empresa'];
                                $telempresa=$_POST['telempresa'];
                                $material=$_POST['material'];
				$Sql="insert into proveedores (proveedor,telefono,correo,empresa,telempresa,material) values(
							'".$proveedor."',
                                                        '".$telefono."',
                                                        '".$correo."',
                                                        '".$empresa."',
                                                        '".$telempresa."',
                                                        '".$material."')";
					mysql_query($Sql);
					header ("Location: nuevoproveedor.php");
		      
                        }	
?>
