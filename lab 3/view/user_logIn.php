<?php
include("../control/user_loginCheck.php");

if (isset($_SESSION['username'])) {
    header("Location: /SecH/e-gov/view/user_home.php");
}
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
                    <td><label for="text">user name:</label></td>

                    <td><input type="text" name="username" placeholder="Enter your name"></td>
                </tr>




                <tr>
                    <td><label for="password">password:</label></td>

                    <td><input type="password" name="pass" placeholder="Enter your password"></td>
                </tr>



                <tr>



                    <td><input type="submit" name="login"></td>
                </tr>



            </table>
        </form>
</body>

</html>