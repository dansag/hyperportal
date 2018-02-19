<?php

/**
 * @author hyperportal
 * @copyright 2018
 */
include("conexion.php");
class db_usuarios
{
    
    
    function registrar_usuario($username,$name,$email,$ip,$password,$permisos)
    {

        $connection=mysqli_connect(server,user,password,database);
        
        $query=mysqli_query($connection,"INSERT INTO usuarios(usuario,nombre,password,email,ip,permisos)
        VALUES('$username','$name','$password','$email','$ip','$permisos')");
        
        if(!$query)
        {
            return false; 
        }
        else
        {
            return true; 
        }
        
        
    }
    
    function enviar_confirmacion_registro($email)
    {
        
        
        echo "Se ha registrado correctamente, en breve recibira un correo"; 
        
    }
    
    
}

?>