<?php session_start();
$conexion=mysql_connect("localhost","root","") or
 die("Problemas en la conexion");
 mysql_select_db("js",$conexion) or
  die("Problemas en la seleccion de la base de datos");
#"select descripcion,precio,dias from producto where nombre=$_SESSION['producto']"
$registros=mysql_query("select descripcion, precio, dias from producto where nombre ='$_SESSION[producto]'",$conexion) or
  die("Problemas en el select1:".mysql_error());
  
  #
    while($row = mysql_fetch_array($registros))
  {
    
  $row['estado']='Disponible';
  $erer=$row['estado'];
  }
#
mysql_select_db("js",$conexion) or
  die("Problemas en la selección de la base de datos");
mysql_query("update producto set descripcion = '$_REQUEST[Descripcion]', precio=$_REQUEST[precio], dias=$_REQUEST[Dias] where nombre='$_SESSION[producto]'",$conexion) or die("Problemas en el select".mysql_error());


mysql_close($conexion);
header("Location: Editar_productos.php");
?>

