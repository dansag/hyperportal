<?php session_start();

include("inc/conexion.php");
include("inc/function.php");
include("inc/seccion.php");
include("inc/sessiones.php");


$visitas= new visitas; 
$class_seccion = new seccion; 	


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}



$visitas->nueva_visita($ip); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HYPER-PORTAL</title>
<link href="css/modelo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<script type="text/javascript" src="scripts/jquery-1.5.1.js"></script>
<script type="text/javascript" src="scripts/window.js"></script>
</head>

<body class="body_general">

<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F0F0F0" bgcolor="#000033" >
  <tr>
    <td width="1241" height="21" align="left" valign="middle" bgcolor="#000033"><img src="index_htm_files/1.png" alt="" width="1053" height="151" align="absmiddle" /></td>
  </tr>
  <tr>
    <td height="353" valign="top"><table width="932" border="0" align="center" bgcolor="#000033">
      <tr>
        <td align="center"  valign="top">
		<div class="div1">
		<p align="center">
		<font size="-5">
		<?php
		
			echo "<strong>Fecha</strong>: ".date("d/m/Y")." <br /><strong>Hora</strong>: ".date("h:m")."<br>Total Visitas: "
			.$visitas->get_num_visitas(); 
			?>
            </p><p class="label_registro">
            <?php
				if(!isset($_SESSION["usuario"]))
				{
					echo "No registrado: ".$ip;
				}
			?>
        	</p>
		
			</div>

		<br />
		<p>&nbsp;</p>
		<div class="menu_encabezado"></div>
		<div class="menu_fondo">
		<div  class="menu_enlaces" align="center">
		
		<span>
        <img src="index_htm_files/menu_logo.png"  width="100" height="25" /></span>
		<iframe name="menu_content" width="100" height="200" frameborder="0" scrolling="no" src="/paginas/menu/menu_inicio.php?seccion=1&permisos=0">
        </iframe>	
		</div>
        <span>
        <img src="index_htm_files/menu_registro.png"  width="100" height="25" />
         <iframe name="registro" width="100" height="200" frameborder="0" scrolling="no" src="/paginas/menu/menu_registro.php">
        </iframe>	
        </span>
		</div>
		<div class="menu_pie"></div>	</td>
        <td width="816" height="0" align="left" valign="top">
        <div class="encabezado">
          <img src="index_htm_files/etiqueta_encabezado.png" width="938" height="31" />
          <?php
		  
		  	
			$resultados = $class_seccion->get_seccion(0); 
			
		  
		  ?> 
          <table width="100%" border="0" >
            <tr>
          <?php
		  
		  	foreach($resultados as $row)
			{
				echo "<td class='td_menu_encabezado'>"; 
				echo "<a href='".$row['url']."?seccion=".$row['id']."&permisos=".$_SESSION['permisos']."' target='".$row['path']."' class='link_title'><div>".$row['label']."</div></a>";
				echo "</td>";
			}
			
		  ?>
              
            </tr>
          </table>
          <img src="index_htm_files/etiqueta_pie.png" width="938" height="31" /></div>
         
		  <img src="index_htm_files/etiqueta_encabezado.png" width="938" height="31" />
          
		 <!-- <div id="contenido_principal" class="contenido" >          </div>-->
          <iframe name="contenido_principal" src="paginas/home.php" width="915"  frameborder="0" scrolling="no" id="iframe" class="contenido"  onload="resizeIframe(this)"> 
			</iframe>
          
		  <img src="index_htm_files/etiqueta_pie.png" width="938" height="31" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<p style="font-size: 10px; color: #4C45A2; text-align: center;">HYPER-PORTAL@2009 - Creado por Daniel Sagols Domínguez</p>

<script> 
function load_home(){
            document.getElementById("contenido_principal").innerHTML='<object type="type/html" data="home.php" ></object>';
  }

//open_url('home.php');	
load_home();

function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollWidth + 'px';
}
</script>

</body>
</html>