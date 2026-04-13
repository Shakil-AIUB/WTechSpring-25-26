
<?php 

$name="";
$password ="";
$validpassword = "";
$email = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $password= $_POST["password"];
        $email= $_POST["email"];

        $name = $_REQUEST["name"];
        $password= $_REQUEST["password"];
        $email= $_REQUEST["email"];


        if(!empty($name) && strlen($name)>=5)
            {
                echo "User Name: ".$name;
            }
            else{
                echo "UserName must be greater than 5 char";
            }


            if(strlen($password)>4)
                {
                   $validpassword = $password;
                   echo " Password: ".$validpassword;
                }
                else{
                    
                    $validpassword = " Password Must be 4 Digit minimum";
                    
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