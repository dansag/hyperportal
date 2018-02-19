<?php

/**
 * @author hyperportal
 * @copyright 2018
 */

class db_usuarios
{
    
    
    function registrar_usuario($username,$name,$email,$ip,$password,$permisos)
    {
        $connection=mysqli_connect(server,user,password,database);
        $query=mysqli_query($connection,"INSERT INTO usuarios(usuario,nombre,email,ip,password,permisos)VALUE(".$username.",".$name.",".$email.",".$ip.",".$password.",".$permisos.")")or die(mysqli_error());

        return true; 
    }
    
    
}

?>