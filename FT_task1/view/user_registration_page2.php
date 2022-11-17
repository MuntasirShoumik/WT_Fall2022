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

    <form action="" method="post">

        <h3>Contect info:</h3>
        <table>

            <tr>
                <td><label for="text">Mobile number:</label></td>

                <td><input type="text" name="mobile_number" placeholder="Enter your Mobile number"></td>
            </tr>

            <tr>
                <td><label for="text">Email:</label></td>

                <td><input type="text" name="email" placeholder="Enter your Email"></td>
            </tr>


            <tr>
                <td><label for="text">Division:</label></td>

                <td><select name="select_division" id="select_division">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>

                    </select></td>
            </tr>


            <tr>
                <td><label for="text">City:</label></td>

                <td><input type="text" name="city" placeholder="Enter your City"></td>
            </tr>

            <tr>
                <td><label for="text">Address:</label></td>

                <td><textarea name="address" cols="30" rows="3" placeholder="Address here"></textarea> </td>
            </tr>

            <tr>



                <td><input type="submit" name="submit_page2"></td>
            </tr>

        </table>
    </form>

</body>

</html>