<?php

class db{
function connection()
{
$db_host = "localhost";
$db_user= "root";
$db_password="";
$db_name="database_r"; 

$connection=  new mysqli($db_host, $db_user,$db_password,$db_name);
if($connection->connect_error)
    {
        die ("Could not Connect Database".$connection->connect_error);
    }
return $connection;
}

function signup($connection, $tablename, $username, $email, $website, $comment, $gender, $filepath)
{
    $sql= "INSERT INTO " .$tablename. "(username, email, website, comment, gender, filepath) VALUES ('".$username."', '".$email."', '".$website."', '".$comment."', '".$gender."', '".$filepath."')";
    $result = $connection->query($sql);
    return $result;
}
function signin($connection, $tablename, $username, $email)
{
    $sql = "SELECT * FROM ".$tablename." WHERE username='".$username."' AND email='".$email."'";
    $result = $connection->query($sql);
    return $result;
}
	




}


?>