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




    <h3>Personal info:</h3>

    <form action="" method="POST">
        <table>
            <tr>
                <!-- <td></td> -->

                <td>
                    <label for="text">Your name</label>

                </td>
                <td>
                    <select name="select" id="select">
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>

                    </select>
                    <input type="text" name="user_name" placeholder="Enter your name">
                </td>
            </tr>


            <tr>
                <td><label for="text">Father's name:</label></td>

                <td><input type="text" name="Father_name" placeholder="Enter your Father's name"></td>
            </tr>

            <tr>
                <td><label for="text">Mother's name:</label></td>

                <td><input type="text" name="Mother_name" placeholder="Enter your Mother's name"></td>
            </tr>



            <tr>
                <td><label for="birthday">Date of barth:</label></td>

                <td><input type="date" id="birthday" name="birthday"></td>
            </tr>


            <tr>
                <td><label for="text">NID number:</label></td>

                <td><input type="text" name="NID_number" placeholder="Enter your NID number"></td>
            </tr>
            <tr>
                <td><label for="radio">Gender:</label></td>

                <td>Male <input type="radio" name="gender" value="male">
                    Fimale<input type="radio" name="gender" value="female"></td>

            </tr>






            <tr>



                <td><input type="submit" name="submit_page1"></td>
            </tr>



        </table>
    </form>
</body>
</body>

</html>