<?php
//include("inc/conexion.php");


class visitas
{
    


	function nueva_visita($ip)
	{

        $connection=mysqli_connect(server,user,password,database);
        $ahora=date("d/m/Y");
        $hora=date("h:m");
        $query=mysqli_query($connection,"INSERT INTO visitas(ip)VALUES('$ip')")
        or die(mysqli_error());
	}
	
	function get_num_visitas()
	{
        $connection=mysqli_connect(server,user,password,database);
	    $query=mysqli_query($connection,"SELECT * FROM visitas")or die("get_num_visitas");
	    $total_visitas=mysqli_num_rows($query);
	    return $total_visitas;
    
	}
    
}



?>
