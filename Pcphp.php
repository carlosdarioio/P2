<?php session_start();
$conexion=mysql_connect("localhost","root","") or
 die("Problemas en la conexion");

mysql_select_db("js",$conexion) or
  die("Problemas en la selección de la base de datos");
#select nombre,apellido,email,telefono from usuario where nick=$_SESSION['nickk']
$clavebuscada=mysql_query("select nombre,apellido,email,telefono from usuario where nick = '$_SESSION[nickk]'",$conexion) or
  die("Problemas en el select:".mysql_error());

while($row = mysql_fetch_array($clavebuscada))
  {  
  $nombre = $row['nombre'];
  $apellido = $row['apellido'];
  $telefono = $row['telefono'];
  $correo = $row['email'];
  }
#$fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
$fecha=date_default_timezone_set("America/Chicago");
$fecha=strftime( "%d-%m-%Y", time() );
$fecha =  explode("-",$fecha);
$dia=$fecha[0];
$mes=$fecha[1];
$anyo = $fecha[2];
$dia=$dia+$_SESSION[diass];

#echo "Dia ".$dia; echo " Mes: ".$mes; echo " ayo: ".$anyo;

if($mes==01 or $mes==05 or $mes==07 or $mes==08 or $mes==10 or $mes==12){$dias=31; 
if($dia>$dias){$dia=$dia-$dias; $mes=$mes+1; if($mes>12){ $mes=$mes-12; $anyo=$anyo+1;
}
}
}
if($mes==02){$dias=28;
if($dia>$dias){$dia=$dia-$dias; $mes=$mes+1; if($mes>12){ $mes=$mes-12; $anyo=$anyo+1;
}
}
} 
if($mes==03 or $mes==04 or $mes==09 or $mes==11){$dias=30; 
if($dia>$dias){$dia=$dia-$dias; $mes=$mes+1; if($mes>12){ $mes=$mes-12; $anyo=$anyo+1;
}
}
}
if($mes==01){$dias=29;
if($dia>$dias){$dia=$dia-$dias; $mes=$mes+1; if($mes>12){ $mes=$mes-12; $anyo=$anyo+1;
}
}
}
#$dia =substr($fecha,0,2);
#$mesanyo=$dia =substr($fecha,2);
#$dia=$dia+$_SESSION['dia'];
#$fecha=$dia.$fecha;
$fecha=$dia."-".$mes."-".$anyo;
mysql_query("insert into compradores(nombre,apellido,correo,telefono,producto,fecha) values 
('$nombre','$apellido','$correo','$telefono','$_SESSION[producto]','$fecha')", 
   $conexion) or die("Problemas en el select".mysql_error());


mysql_close($conexion);
header("Location: Producto_Cliente.php");
?>
