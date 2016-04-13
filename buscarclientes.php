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
	<title>Mostrarclientes</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
<center> <h1>Clientes Registrados</h1></center>
<table width="100%">
<th>
    <tr>
        <td>Id</td>
        <td>RFC</td>
        <td>Nombre</td>
        <td>Direccion</td>
        <td>Localidad</td>
        <td>Codigo postal</td>
        <td>Telefono</td>
        <td>Correo electronico</td>
    </tr>
</td>
    <?php
     $resultado=mysql_query("select * from clientes");
     while($row=mysql_fetch_array($resultado)){
         echo '
           <tr>
             <td>
                <input type="hidden" value"'.$row[0].'">'.$row[0].'
             </td>
             <td><input type="text" class="rfc" value="'.$row[1].'"></td>
             <td><input type="text" class="nombre" value="'.$row[2].'"></td>
             <td><input type="text" class="direccion" value="'.$row[3].'"></td>
             <td><input type="text" class="localidad" value="'.$row[4].'"></td>
             <td><input type="text" class="codigo" value="'.$row[5].'"></td>
             <td><input type="text" class="telefono" value="'.$row[6].'"></td>
             <td><input type="text" class="correo" value="'.$row[7].'"></td>  
            </tr>
          ';
     }
    ?>
    
</table>

</body>
</html>
