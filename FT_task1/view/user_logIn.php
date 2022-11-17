<?php
include("../control/user_loginCheck.php");

if (isset($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_home.php"); // Redirecting To login page
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
    <h3>Please log in</h3>
    <hr>


    <form action="" method="POST">
        <table>






            <tr>
                <td><label for="text">user NID:</label></td>

                <td><input type="text" name="log_nid" placeholder="Enter your NID"></td>
            </tr>




            <tr>
                <td><label for="password">password:</label></td>

                <td><input type="password" name="pass" placeholder="Enter your password"></td>
            </tr>



            <tr>
                <td><input type="submit" name="login"></td>
                <td><a href="/SecH/e-gov/view/user_registration_page1.php"> don't have an account?</a></td>
            </tr>




        </table>
        <hr>
    </form>
</body>

</html>