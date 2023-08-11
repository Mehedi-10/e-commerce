<?php

$s_name="localhost";
$user_name="root";
$pass="";
$db_name="online_shop";

$conn=new mysqli($s_name,$user_name,$pass,$db_name);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo 'hello';

    
}

?>
