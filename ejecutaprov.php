<?php 
	include "./conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from proveedores where Id=".$_POST['Id']);
		echo 'El proveedor se ha eliminado';
	}
      
        if($_POST['Caso']=="Modificar"){
                mysql_query("update  proveedores set Proveedor='".$_POST['Proveedor']."' where Id=".$_POST['Id']);
		mysql_query("update  proveedores set Telefono='".$_POST['Telefono']."' where Id=".$_POST['Id']);
                mysql_query("update  proveedores set Correo='".$_POST['Correo']."' where Id=".$_POST['Id']);
                mysql_query("update  proveedores set Empresa='".$_POST['Empresa']."' where Id=".$_POST['Id']);
                mysql_query("update  proveedores set Telempresa='".$_POST['Telempresa']."' where Id=".$_POST['Id']);
                mysql_query("update  proveedores set Material='".$_POST['Material']."' where Id=".$_POST['Id']);

		echo 'El cliente se ha modificado';
	}
	

?>