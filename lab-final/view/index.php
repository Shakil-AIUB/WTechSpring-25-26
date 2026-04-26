<?php
include "../controller/indexValid.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Registration Log In Form</title>
    </head>
    <body>
        <form method ="post" action="">

            <h1>PHP Form Validation</h1>
            <table>
                <tr>
                    <td><p style = 'color: red '>*Required Field </p></td><br>
                </tr>
                <tr>
                    <td> <label for ="UserName"> User Name: </label></td>
                    <td> <input type ="text" id = "name" name = "name"><?php echo $name; ?></td>
                    <td> <p style = 'color: red'>*</p> </td>
                </tr>

                <tr>
                    <td> <label for ="email">Email: </label></td>
                    <td> <input type = "email" id="email" name ="email"><?php echo $email; ?></td>
                </tr>

                <tr>
                    <td> <label for ="website">Website</label></td>
                    <td> <input type = "text" id="website" name ="website"><?php echo $website; ?></td>
                </tr>

                <tr>
                    <td> <label for ="comment">Comment</label></td>
                    <td> <textarea id="comment" name ="comment"></textarea><?php echo $comment; ?></td>
                </tr>

                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other ">
                        <label for="other">Other</label>
                    </td>
                </tr>




                <tr>
                    <td><input type = "submit" id = "submit" name = "submit" value="Submit"> </td>
                </tr>

            </table>
        </form>
    </body>
</html>
