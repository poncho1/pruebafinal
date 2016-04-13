<?php 
	include "./conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from productos where Id=".$_POST['Id']);
		unlink("./productos/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
      
        if($_POST['Caso']=="Modificar"){
                mysql_query("update  productos set Codigo='".$_POST['Codigo']."' where Id=".$_POST['Id']);
                mysql_query("update  productos set Clave='".$_POST['Clave']."' where Id=".$_POST['Id']);
		mysql_query("update  productos set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
                mysql_query("update  productos set Marca='".$_POST['Marca']."' where Id=".$_POST['Id']);
                mysql_query("update  productos set Medida='".$_POST['Medida']."' where Id=".$_POST['Id']);
                mysql_query("update  productos set Pproveedor='".$_POST['Pproveedor']."' where Id=".$_POST['Id']);
                mysql_query("update  productos set Ppublico='".$_POST['Ppublico']."' where Id=".$_POST['Id']);
                mysql_query("update  productos set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		
		echo 'El producto se ha modificado';
	}
	

?>