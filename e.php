<?php
$pp2 = "login.php";
session_start();
//
$conexion=mysql_connect("localhost","root","") or
 die("Problemas en la conexion");

mysql_select_db("js",$conexion) or die("Problemas en la selección de la base de datos");
$clavebuscada=mysql_query("select tipo from usuario where nick = '$_SESSION[nickk]'",$conexion) or
  die("Problemas en el select:".mysql_error());

while($row = mysql_fetch_array($clavebuscada))
  {  
    $tip = $row['tipo'];
  }
//
if(!isset($_SESSION['nickk'])){
 header("Location: Producto_Visitante.php");
} else{

if($tip=='Cliente'){
header("Location: Producto_Cliente.php");}
if($tip=='Administrador'){
header("Location: Producto_Administrador.php");}

}
 echo "entro";
?>