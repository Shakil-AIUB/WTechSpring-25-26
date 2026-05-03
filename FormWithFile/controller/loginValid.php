<?php
include "../model/db.php";
session_start();

$name = "";
$email="";
$datafile ="../data.json";


if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $email = $_POST["email"];

        if(!empty($name) && strlen($name)>=5 && strlen($email)>=5)
            {
                echo "Log In Successfull";
                setcookie("UserName",$name,time()+3600, "/");

                $formdata=array("name"=>$name, "email"=>$email);

                if(file_exists($datafile))
                    {
                        $existdata = file_get_contents($datafile);
                        $tempdata = json_decode($existdata, true);
                    }
                    else{
                        $tempdata = array();
                    }
                if(!is_array($tempdata))
                    {
                        $tempdata = array();
                    }
                $tempdata [] = $formdata;
                $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

                if(file_put_contents($datafile,$jsondata)!==false)
                    {
                        echo "Data Saved Successfully <br>";
                    }
                    else{
                        echo "No Data Saved";
                    }
            $database = new db();
            $connection = $database->connection();
            $result = $database->signin($connection,"users", $name, $email);
            
            if($result)
                {
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["UserName"] = $name;
                    $row = $result->fetch_assoc();
                    if($row && isset($row["filepath"])){
                        $_SESSION["filepath"] = $row["filepath"];
                    }
                    Header("Location:../view/dashboard.php ");
                }
            else{
                echo "Please Use the appropiate validation";
            }
        }

    if(!isset($_SESSION["UserName"]) || isset($_COOKIE["UserName"]))
        {
            echo "Welcome Back";
        }
        else{
            echo "Please log In";
        }
    }
?>