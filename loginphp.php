<?php $conexion=mysql_connect("localhost","root","") or
 die("Problemas en la conexion");

mysql_select_db("js",$conexion) or
  die("Problemas en la selección de la base de datos");


$clavebuscada=mysql_query("select contra from usuario where nick = '$_REQUEST[nick]'",$conexion) or
  die("Problemas en el select:".mysql_error());

while($row = mysql_fetch_array($clavebuscada))
  {
  $a = $row['contra'];
  }



mysql_close($conexion);


###Proyecto%20Jacky's%20salon/login.php
$pp = "localhost/Proyecto Jacky's salon\menu.php";
$pp2 = "localhost/Proyecto Jacky's salon\login.php";


if ($_REQUEST[contra]!=$a){
	 #echo "Nombre de usuario o Contrasena incorrecta ";
	 header("Location: login.php");                                    }
if ($_REQUEST[contra]==$a){
         # echo "Entrando";
		 session_start();
		 $_SESSION['nickk'] = $_REQUEST[nick];
         $_SESSION['contraa'] = 1;
		 
          header("Location: menu.php"); 
		  exit;
                                            }
								  ?>