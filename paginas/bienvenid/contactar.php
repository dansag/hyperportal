
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contactar</title>
<link href="modelo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post">
<p> contactar conmigo </p>
<table width="150" border="0" align="center">
  <tr>
    <td><span class="span_form">Asunto:</span></td>
    <td>
    <select name="asunto">
    	<option>Sobre la Web</option>
        <option>Hyperportal</option>
        <option>Evo-Riders</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Texto</td>
    <td><textarea rows="20" cols="100" name="mitexto">Aqui su Texto</textarea> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Enviar"  name="submit" /></td>
  </tr>
</table>

</form>
<?php 

if(isset($_POST['submit']))
{
	echo "<p>Previsualizar Email enviado</p>"; 
	echo "<p>Asunto: ".$_POST['asunto']."</p>";
	echo "<p>Texto: ".$_POST['mitexto']."</p>";
	
	$headers = 'From: hyperportal@webmaster.es' . "\r\n" .
    'Reply-To: hyperportal@webmaster.es' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	mail("dansag@hotmail.com", $_POST['asunto'], $_POST['mitexto'], $headers);
}

?>
</body>
</html>