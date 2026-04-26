
<?php 

$name="";
$email="";
$website="";
$comment="";
$gender="";


if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $email= $_POST["email"];
        $website= $_POST["website"];
        $comment= $_POST["comment"];
        $gender= $_POST["gender"];


        $name = $_REQUEST["name"];
        $email= $_REQUEST["email"];
        $website= $_REQUEST["website"];
        $comment= $_REQUEST["comment"];
        $gender= $_REQUEST["gender"];
        
        if(!empty($name) && strlen($name)>=5)
            {
                echo "User Name: ".$name;
            }
            else{
                echo "UserName must be greater than 5 char";
            }

            if(!empty($email) && preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email))
                {
                    echo " Email: ".$email;
                }
                else{
                    echo " Invalid Email";
                }


    }






?>
