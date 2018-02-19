<?php

/**
 * @author daniel
 * @copyright 2018
 */


class seccion 
{
    
    function get_seccion($permisos)
    {
        $connection=mysqli_connect(server,user,password,database);
        $query=mysqli_query($connection,"SELECT * FROM seccion where permisos like ".$permisos); 
        return $query; 
        
    }
}

?>