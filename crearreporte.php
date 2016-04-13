<?php
session_start();
 include "conexion.php";
 if (isset($_SESSION['Usuario'])){
     
 }  else {
     header("Location:./index.html?Error=Acceso denegado");   
}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EJEMPLO REPORTES EN PHP</title>
</head>
<body>
<p><br />
<table border="2" width="500" bgcolor="#FFFFFF">
<tr>
<td width="439"><strong>Exportar Reportes en PDF</strong></td>
<td width="145" align="center"><a href="reporte_pdf.php"><img src="pdf.png" width="30" height="25"/></a></td>
</tr>
</table>
</body>
</html>