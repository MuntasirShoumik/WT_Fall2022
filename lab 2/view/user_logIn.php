<?php
include("../control/user_login_process.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="">

        <form action="" method="POST">
            <table>






                <tr>
                    <td><label for="text">NID number:</label></td>

                    <td><input type="text" name="nid" placeholder="Enter your NID number"></td>
                </tr>




                <tr>
                    <td><label for="password">Set password:</label></td>

                    <td><input type="password" name="pass" placeholder="Enter your password"></td>
                </tr>



                <tr>



                    <td><input type="submit" name="login"></td>
                </tr>



            </table>
        </form>
</body>

</html>