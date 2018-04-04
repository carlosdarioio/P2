<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}


ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 
	padding-right: 15px;
	padding-left: 15px; 
}
a img { 
	border: none;
}


a:link {
	color: #42413C;
	text-decoration: underline; 
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
}


.container {
	width: 960px;
	background: #FCF;
	margin: 0 auto; 
}


.header {
	background: #6FF;
}


.sidebar1 {
	float: left;
	width: 180px;
	background: #6FF;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 780px;
	float: left;
}


.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}


ul.nav {
	list-style: none; 
	border-top: 1px solid #666; 
	margin-bottom: 15px; 
}
ul.nav li {
	border-bottom: 1px solid #666; 
}
ul.nav a, ul.nav a:visited { 
	padding: 5px 5px 5px 15px;
	display: block; 
	width: 160px;  
	text-decoration: none;
	background: #6FF;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { 
	background: #ADB96E;
	color: #FFF;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background: #6FF;
	position: relative;
	clear: both; 
}


.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat { 
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style></head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="file:///C|/Users/Carlos/Documents/cosas de la u/j1.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="180" height="100" id="Insert_logo" style="background: #6FF; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="menu.php">Menu</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="sitar.php">Sitar</a></li>
      <li><a href="chat.php">Chat</a></li>
      <li><a href="contactanos.php">Contactanos</a></li>
    </ul>
    <p> Los vínculos anteriores muestran una estructura de navegación básica que emplea una lista no ordenada con estilo de CSS. Utilícela como punto de partida y modifique las propiedades para lograr el aspecto deseado. Si necesita menús desplegables, créelos empleando un menú de Spry, un widget de menú de Adobe Exchange u otras soluciones de javascript o CSS.</p>
    <p>Si desea que la navegación se sitúe a lo largo de la parte superior, simplemente mueva ul.nav a la parte superior de la página y vuelva a crear el estilo.</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>Instrucciones</h1>
    <p>Tenga en cuenta que la CSS para estos diseños cuenta con numerosos comentarios. Si realiza la mayor parte de su trabajo en la vista Diseño, eche un vistazo al código para obtener sugerencias sobre cómo trabajar con la CSS para diseños fijos. Puede quitar estos comentarios antes de lanzar el sitio. Para obtener más información sobre las técnicas usadas en estos diseños CSS, lea este artículo en el Centro de desarrolladores de Adobe: <a href="http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>.</p>
    <h2>Método de borrado</h2>
    <p>Dado que todas las columnas son flotantes, este diseño usa una declaración clear:both en la regla .footer. Esta técnica de borrado fuerza a .container a conocer dónde terminan las columnas con el fin de mostrar cualquier borde o color de fondo que coloque en .container. Si su diseño exige la eliminación de .footer de .container, deberá usar un método de borrado diferente. El más fiable consiste en añadir una &lt;br class=&quot;clearfloat&quot; /&gt; o &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; tras la última columna flotante (pero antes de que se cierre .container). Esto proporcionará el mismo efecto de borrado.</p>
    <h3>Sustitución de logotipo</h3>
    <p>Se ha utilizado un marcador de posición de imagen en el .header de este diseño, en el que lo más probable es que desee colocar un logotipo. Se recomienda quitar el marcador de posición y reemplazarlo por su propio logotipo vinculado. </p>
    <p> Tenga en cuenta que si utiliza el inspector de propiedades para navegar hasta la imagen de su logotipo empleando el campo Origen (en lugar de quitar y reemplazar el marcador de posición), deberá quitar el fondo en línea y mostrar las propiedades. Estos estilos en línea sólo se utilizan para hacer que el marcador de posición del logotipo aparezca en los navegadores para fines de demostración. </p>
    <p>Para quitar los estilos en línea, asegúrese de que el panel Estilos CSS está configurado como Actual. Seleccione la imagen y, en la sección Propiedades del panel Estilos CSS, haga clic con el botón derecho del ratón y elimine las propiedades de visualización y de fondo. (Por supuesto que siempre podrá ir directamente al código y eliminar allí los estilos en línea de la imagen o el marcador de posición.)</p>
    <h4>Fondos</h4>
    <p>Por naturaleza, el color de fondo de cualquier div sólo se muestra a lo largo del contenido. Esto significa que si está usando un color de fondo o un borde para crear el aspecto de una columna lateral, éste no se extenderá hasta el pie de página, sino que se detendrá donde termine el contenido. Si la div de .content siempre va a incluir más contenido, puede colocar un borde en la div de .content para separarla de la columna.</p>
    <!-- end .content --></div>
  <div class="footer">
    <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>