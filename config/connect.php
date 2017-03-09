<?php

// Make a MySQL Connection
mysql_connect("mysql.santamotion.com", "santapv", "santa18") or die(mysql_error());
mysql_select_db("santapv") or die(mysql_error());

session_start("santapv");
$user_id =  $_SESSION['userid'];

$userid =  $_SESSION['userid'];

// teste

$path = "http://www.santatransmedia.com/santapv/";


    
if($user_id==""){
        $url="http://www.santatransmedia.com/".$_SERVER['REQUEST_URI'];
        header( 'Location:'.$path.'login.php?url='.$url );
        
    }
    


$today = date("d/m/Y");



    


?>