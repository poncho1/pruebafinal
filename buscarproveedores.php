<?php
	session_start();
	include "./conexion.php";
	if(isset($_SESSION['Usuario'])){
	}else{
		header("Location: ./index.html?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Mostrar proveedores</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
<center> <h1>Proveedores Registrados</h1></center>
<table width="100%">
<th>
    <tr>
        <td>Id</td>
        <td>Proveedor</td>
        <td>Telefono</td>
        <td>Correo Electronico</td>
        <td>Empresa</td>
        <td>Telefono de la empresa</td>
        <td>Material</td>
    </tr>
</td>
    <?php
     $resultado=mysql_query("select * from proveedores");
     while($row=mysql_fetch_array($resultado)){
         echo '
           <tr>
             <td>
                <input type="hidden" value"'.$row[0].'">'.$row[0].'
             </td>
             <td><input type="text" class="proveedor" value="'.$row[1].'"></td>
             <td><input type="text" class="telefono" value="'.$row[2].'"></td>
             <td><input type="text" class="correo" value="'.$row[3].'"></td>
             <td><input type="text" class="empresa" value="'.$row[4].'"></td>
             <td><input type="text" class="telempresa" value="'.$row[5].'"></td>
             <td><input type="text" class="material" value="'.$row[6].'"></td> 
            </tr>
          ';
     }
    ?>
    
</table>

</body>
</html>
