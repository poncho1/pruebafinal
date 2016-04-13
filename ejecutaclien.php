<?php 
	include "./conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from clientes where Id=".$_POST['Id']);
		echo 'El cliente se ha eliminado';
	}
      
        if($_POST['Caso']=="Modificar"){
                mysql_query("update  clientes set Rfc='".$_POST['Rfc']."' where Id=".$_POST['Id']);
		mysql_query("update  clientes set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
                mysql_query("update  clientes set Direccion='".$_POST['Direccion']."' where Id=".$_POST['Id']);
                mysql_query("update  clientes set Localidad='".$_POST['Localidad']."' where Id=".$_POST['Id']);
                mysql_query("update  clientes set Codigo='".$_POST['Codigo']."' where Id=".$_POST['Id']);
                mysql_query("update  clientes set Telefono='".$_POST['Telefono']."' where Id=".$_POST['Id']);
                mysql_query("update  clientes set Correo='".$_POST['Correo']."' where Id=".$_POST['Id']);
		
		echo 'El cliente se ha modificado';
	}
	

?>