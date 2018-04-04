<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" /><title>Untitled Document</title><link rel="stylesheet" href="emx_nav_left.css" type="text/css" /><script type="text/javascript">var time = 3000;var numofitems = 7;function menu(allitems,thisitem,startstate){callname= "gl"+thisitem;divname="subglobal"+thisitem;this.numberofmenuitems = allitems;this.caller = document.getElementById(callname);this.thediv = document.getElementById(divname);this.thediv.style.visibility = startstate;}function ehandler(event,theobj){for(var i=1; i<= theobj.numberofmenuitems; i++){var shutdiv =eval( "menuitem"+i+".thediv");shutdiv.style.visibility="hidden";}theobj.thediv.style.visibility="visible";}function closesubnav(event){if ((event.clientY <48)||(event.clientY > 107)){for (var i=1; i<= numofitems; i++){var shutdiv =eval('menuitem'+i+'.thediv');shutdiv.style.visibility='hidden';}}}</script><style type="text/css">body {background-image: url(fonedo.jpg);background-color: #FFCCFF;}.Estilo2 {color: #333333}</style></head>
<body onmousemove="closesubnav(event);"><div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="#pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div><div id="masthead"><h1 id="siteName"><?php if($_SESSION['nickk'] != ""){echo "".$_SESSION['nickk'];}else{echo " Jacky's Salon ";}?></h1><div id="utility"> <a href="login.php">Entrar</a> | <a href="salir.php">Salir</a> | <a href="R.php">Registrate</a> </div><div id="globalNav"> <img alt="" src="gblnav_left.gif" height="32" width="4" id="gnl" /> <img alt="" src="glbnav_right.gif" height="32" width="4" id="gnr" /><div id="globalLink"><a href="#"id="gl1"class="glink"onmouseover="ehandler(event,menuitem1);">Siguenos</a><a href="#" id="gl2"class="glink" onmouseover="ehandler(event,menuitem2);"></a><a href="#" id="gl3" class="glink"onmouseover="ehandler(event,menuitem3);"></a><a href="#" id="gl4" class="glink" onmouseover="ehandler(event,menuitem4);"></a><a href="#" id="gl5" class="glink" onmouseover="ehandler(event,menuitem5);"></a><a href="#" id="gl6" class="glink" onmouseover="ehandler(event,menuitem6);"></a><a href="#" id="gl7" class="glink" onmouseover="ehandler(event,menuitem7);"></a> </div></div><div id="subglobal1" class="subglobalNav"> <a href="http://www.facebook.com/JackysSalon">Faceook</a> | <a href="#">Twitter</a> | <a href="#">5paces</a></div><div id="subglobal2" class="subglobalNav"></div><div id="subglobal3" class="subglobalNav"></div><div id="subglobal4" class="subglobalNav"></div><div id="subglobal5" class="subglobalNav"></div><div id="subglobal6" class="subglobalNav"></div><div id="subglobal7" class="subglobalNav"></div><div id="subglobal8" class="subglobalNav"></div></div><div id="pagecell1"><img alt="" src="tl_curve_white.gif" height="6" width="6" id="tl" /><img alt="" src="tr_curve_white.gif" height="6" width="6" id="tr" /><div id="breadCrumb"></div><div id="pageName"><h2> Jacky's Salon</h2><img alt="small logo" src="logo2.jpg" height="59" width="66"/> </div><div id="pageNav"><div id="sectionLinks"><a href="menu.php">Menu</a><a href="servicios.php">Servicios</a><a href="e.php">Productos</a><a href="sitar.php">Sitar</a><a href="chat.php">Chat</a><a href="contactanos.php">Contactanos</a></div><div class="relatedLinks"><h3>Anuncios</h3><a href="#">Producto</a><a href="http://www.facebook.com/JackysSalon">Facebook</a><a href="#">Twitter</a><a href="#">Related Link</a></div><div class="relatedLinks"><h3><img src="logo.jpg" alt="" width="107" height="66" /> Su frase con logotipo </h3></div></div><div id="content"><div class="feature">
  <h3>Contactanos </h3>
<p> Si deseas asernos saber algo puedes llamarnos al celular 98 17 48 15.</p>
<p>O mandanos un mensaje por este medio:  </p>

  <form action="contactanos.php" method="post" class="registro">
    <label id = "1">Nombre:</label>
    <label><input type="text" name="nombre" />
    </label>
    <p>
  <label id = "2">Asunto:</label><input type="text" name="asunto" />
</p>
<p>
  <label id = "1">Correo:</label><input type="text" name="correo" />
</p>
<p>
  <label id = "1">Cuerpo del correo :</label>
  <label>
  <textarea name="cuerpo"></textarea>
  </label>
</p>
<p><figure>
    <img src="bg_nav.jpg" />
    <figurecaption></figurecaption>
  </figure>
  <div>
 <?php
/*INICIAMOS EL CODIGO PHP*/
$header="From: Prueba<$_REQUEST[correo]>\n";
/*CREAMOS UN HEADER DONDE DEFINIMOS EL REMITENTE DEL CORREO,
ESTO LO ASIGNAMOS A LA VARIABLE $header*/
$header.="MIME-Version: 1.0\n";
$header.="Content-type: text/html; charset=iso-8859-1";
/*CONTINUAMOS EL HEADER (NOTESE EL ".=" EN VEZ DE SOLO "="),
DEFINIDIENDO AHORA, QUE EL CORREO SE ENVIARA EN FORMATO HTML.
ESTO TAMBIEN LO ASIGNAMOS A LA VARIABLE $header*/
$msj="$_REQUEST[cuerpo]";
//$msj.="<br><a href='www.comolohago.cl'>Click</a>";
/*CREAMOS EL MENSAJE (NOTESE NUEVAMENTE EL ".=") QUE IRA EN EL CORREO
Y LO ASIGNAMOS A LA VARIABLE $msj*/
$dest="cdfn3@hotmail.com";
/*ASIGNAMOS A LA VARIABLE $dest EL CORREO AL QUE ENVIAREMOS EL CORREO
LAS PRUEBAS DEBEN HACERSE CON UN CORREO REAL*/
$asunto="$_REQUEST[asunto]";
/* EN LA VARIABLE $asunto GUARDAMOS EL ASUNTO DEL MENSAJE*/
mail($dest,$asunto,$msj,$header);
/*EJECUTAMOS LA FUNCION COMO TAL, EL ORDEN ES IMPORTANTE ASI QUE SE DEBE MANTENER,
USAMOS LAS VARIABLES QUE ASIGNAMOS ANTERIORMENTE*/
echo "Mensake enviado";
?>

  
  <div>
  <label>
  <div>
   <input type="submit" name="enviar" value="Enviar"> 
</p>
<p>&nbsp;</p>
  </form>

</div><div class="story"><h3>&nbsp;</h3>
</div><div class="story"><table width="100%" cellpadding="0" cellspacing="0" summary=""><tr valign="top">
 
</tr></table>
</div></div><div id="siteInfo"> <img src="" width="44" height="22" /><a href="#">Site Map</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a> | &copy;2013 Jacky's Salon </div></div><br /><script type="text/javascript">var menuitem1 = new menu(7,1,"hidden");var menuitem2 = new menu(7,2,"hidden");var menuitem3 = new menu(7,3,"hidden");var menuitem4 = new menu(7,4,"hidden");var menuitem5 = new menu(7,5,"hidden");var menuitem6 = new menu(7,6,"hidden");var menuitem7 = new menu(7,7,"hidden");</script></body></html>
