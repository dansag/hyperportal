<?php session_start(); 
include("../../inc/menu.php");
include("../../inc/conexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Inicio</title>
<link href="/css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table border="0">
<tr>
	<td>
		<p>BIENVENID@</p>
	</td>
</tr>
<?php
		
	if($_GET['seccion'])
	{
		$miseccion = $_GET['seccion']; 
		$permisos = $_SESSION['permisos'];
		
	$class_menu = new menu_builder;
	$resulto = $class_menu->get_menu($permisos ,$miseccion); 
	
		foreach($resulto as $row)
		{
			echo "<tr>";
			echo "<td><a href='".$row['url']."' target='".$row['path']."'><div class='link'>".$row['label']."</div></a></td>";
			echo "</tr>";
		}
	}
?>
<!--<tr>
	<td>
		<a href="/paginas/bienvenid/home.php" target="contenido_principal"><div class="link">Inicio</div></a>
    </td>
</tr>

<tr>
	<td>
		<a href="/paginas/bienvenid/contactar.php" target="contenido_principal"><div class="link">Contactar</div></a>
	<td>
<tr>-->
</table>
</body>
</html>