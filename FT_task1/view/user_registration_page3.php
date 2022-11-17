<?php
include("../control/user_registration_process.php");

if (empty($_SESSION["username"]) == false) {
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
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Set password:</h3>

        <table>

            <tr>
                <td><label for="password">Set password:</label></td>

                <td><input type="password" name="password" placeholder="Set your password"></td>
            </tr>

            <tr>
                <td><label for="password">Confirm password:</label></td>

                <td><input type="password" name="confirm_password" placeholder="Confirm your password"></td>
            </tr>



            <tr>

                <td>
                    <label for="checkbox">Get notifi via email:</label>
                </td>
                <td>
                    <input type="checkbox" name="email_notification" value="yes">
                </td>

            </tr>

            <tr>
                <td>
                    <label for="file">upload your image:</label>

                </td>
                <td><input type="file" name="image"></td>
            </tr>

            <tr>
                <td>
                    <label for="file">Scan and upload your land ownership docoment (pdf only):</label>
                </td>
                <td><input type="file" name="pdf"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit_page3"></td>
            </tr>

    </form>

</body>

</html>