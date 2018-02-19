<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<link href="/css/registro.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p class="title">Pagina de registro usuario</p>
<?php
if(!isset($_SESSION["usuario"]))
{ 
echo "<p>No se encuentra registrado</p>"; ?>
<form method="post">
<table align="center">
<tr>
<td><span>Usuario: </span></td><td><input type="text" name="usuario"/></td>
</tr>
<tr>
<td><span>Nombre: </span></td><td><input type="text" name="nombre" /></td>
</tr>
<tr>
<td><span>Email: </span></td><td><input type="text" name="email" /></td>
</tr>
<tr>
<td><span>Contraseña: </span></td><td><input type="password" name="password" /></td>
</tr>
<tr><td>¿Necesitas ayuda?</td><td><input type="submit" name="registrar" value="Registrarme"  /></td></tr>
</table>
<p><font color='red'>*Toda la informacion sera encriptada directamente en nuestra base de datos. </font></p>
</form>
<p>
<?php 
} else
{
	echo "Ya se encuenta registrado"; 
}
?>
</p>
</body>
</html>