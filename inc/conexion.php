<?php

/**
 * @author daniel
 * @copyright 2018
 */


$servidor=$_SERVER["SERVER_NAME"];

if($servidor=="localhost")
{
    
    $server="localhost";
    $user="root";
    $password="";
    $database="hyperportal";
    
}
else
{
    $server="mysql508int.srv-hostalia.com";
    $user="u5664790_f217925";
    $password="HyperPortal80";
    $database="db5664790_hyperportal";
}

define("server",$server); 
define("user",$user );
define("password", $password);
define("database",$database); 

?>