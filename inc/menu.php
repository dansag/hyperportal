<?php

/**
 * @author daniel
 * @copyright 2018
 */

class menu_builder
{
    
    function get_menu($persmisos, $seccion)
    {
        $connection=mysqli_connect(server,user,password,database);
        $query=mysqli_query($connection,"SELECT * FROM menu where permisos like ".$persmisos." AND seccion LIKE '".$seccion."'"); 
        return $query;
    }
}

?>