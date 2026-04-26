<?php
include "../controller/validation.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW DATA</title>
</head>
<body>

         <form method ="post" action="">

            <h1>PHP Form Validation</h1>
            <table>
                <tr>
                    <td> <label for ="UserName"> User Name: </label><?php echo $name ?></td>
                </tr>

                <tr>
                    <td> <label for ="email">Email: </label><?php echo $email ?></td>
                </tr>

                <tr>
                    <td> <label for ="website">Website</label><?php echo $website ?></td>
                </tr>

                <tr>
                    <td> <label for ="comment">Comment</label><?php echo $comment ?></td>
                </tr>

                <tr>
                    <td><label for="gender">Gender:</label><?php echo $gender ?></td>
                </tr>

            </table>

    
</body>
</html>