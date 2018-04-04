<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="emx_nav_left.css" type="text/css" />
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;
//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = allitems;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}		
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}// -->
</script>
<style type="text/css"><!--
body {
	background-image: url(fonedo.jpg);
	background-color: #FFCCFF;
}
.Estilo2 {color: #333333}-->
</style></head>
<body onmousemove="closesubnav(event);">
<div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="#pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div>
<div id="masthead">           
  <h1 id="siteName"><?php if($_SESSION['nickk'] != ""){echo "".$_SESSION['nickk'];}else{echo " Jacky's Salon ";}?></h1>
  <div id="utility"> <a href="#">Entrar</a> | <a href="salir.php">Salir</a> | <a href="R.php">Registrate</a> </div><div id="globalNav"> <img alt="" src="gblnav_left.gif" height="32" width="4" id="gnl" /> <img alt="" src="glbnav_right.gif" height="32" width="4" id="gnr" />
    <div id="globalLink"> <a href="#" id="gl1" class="glink" onmouseover="ehandler(event,menuitem1);">Siguenos</a><a href="#" id="gl2" class="glink" onmouseover="ehandler(event,menuitem2);"></a><a href="#" id="gl3" class="glink" onmouseover="ehandler(event,menuitem3);"></a><a href="#" id="gl4" class="glink" onmouseover="ehandler(event,menuitem4);"></a><a href="#" id="gl5" class="glink" onmouseover="ehandler(event,menuitem5);"></a><a href="#" id="gl6" class="glink" onmouseover="ehandler(event,menuitem6);"></a><a href="#" id="gl7" class="glink" onmouseover="ehandler(event,menuitem7);"></a> </div><!--end globalLinks-->
  </div><!-- end globalNav -->
  <div id="subglobal1" class="subglobalNav"> <a href="#">Faceook</a> | <a href="#">Twitter</a> | <a href="#">5paces</a></div>
  <div id="subglobal2" class="subglobalNav"></div>
  <div id="subglobal3" class="subglobalNav">  </div>
  <div id="subglobal4" class="subglobalNav">  </div>
  <div id="subglobal5" class="subglobalNav">  </div>
  <div id="subglobal6" class="subglobalNav">  </div>
  <div id="subglobal7" class="subglobalNav">  </div>
  <div id="subglobal8" class="subglobalNav">  </div>
</div><!-- end masthead -->
<div id="pagecell1"><!--pagecell1-->
  <img alt="" src="tl_curve_white.gif" height="6" width="6" id="tl" /> <img alt="" src="tr_curve_white.gif" height="6" width="6" id="tr" />
  <div id="breadCrumb"></div>
  <div id="pageName">
    <h2> Jacky's Salon</h2>
  <img alt="small logo" src="logo2.jpg" height="59" width="66"/> </div>
  <div id="pageNav">
    <div id="sectionLinks"> <a href="menu.php">Menu</a> <a href="servicios.php">Servicios</a> <a href="e.php">Productos</a> <a href="sitar.php">Sitar</a> <a href="#">Chat</a> <a href="#">Contactanos</a> </div>
    <div class="relatedLinks">
      <h3>Anuncios</h3>
      <a href="#">Producto</a><a href="http://www.facebook.com/JackysSalon">Facebook</a> <a href="#">Twitter</a> <a href="#">Related Link</a> </div>
    <div class="relatedLinks">
      <h3><img src="logo.jpg" alt="" width="107" height="66" /> Su frase con logotipo </h3>
    </div>
  </div>
  <div id="content">
    <form action="loginphp.php" method="post" class="registro">
<div><label>Ingrese nombre de usuario:</label>
<input type="text" name="nick"></div>
<div><label>ingrese contrasena:</label>
<input type="password" name="contra"></div>
<div><label>
<div>
<input type="submit" name="enviar" value="Entrar"></div>
</form><div class="story"></div>      
      </table>
	   <form action="R.php" method="post" class="registro">
<div><label>¿No eres usuario?</label>
<input type="submit" name="enviar" value="Registrate!!"></div>
</form>
  </div>
</div>
  <div id="siteInfo"> <img src="" width="44" height="22" /><a href="#">Site Map</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a> | &copy;2013 Jacky's Salon </div>
</div><!--end pagecell1-->
<br />
<script type="text/javascript">
     var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
     </script>
</body> 
</html>