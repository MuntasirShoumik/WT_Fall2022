<?php
include("../control/user_registration_process.php");
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
                    <!-- <td></td> -->

                    <td>
                        <label for="text">Your name</label>

                    </td>
                    <td>
                        <select name="" id="select">
                            <option value="">Mr.</option>
                            <option value=""></option>
                            <option value=""></option>

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
                    <td><label for="text">Mobile number:</label></td>

                    <td><input type="text" name="mobile_number" placeholder="Enter your Mobile number"></td>
                </tr>

                <tr>
                    <td><label for="text">Email:</label></td>

                    <td><input type="text" name="email" placeholder="Enter your Email"></td>
                </tr>


                <tr>
                    <td><label for="text">Division:</label></td>

                    <td><input type="text" name="division" placeholder="Enter your Division"></td>
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
                    <td><label for="password">Set password:</label></td>

                    <td><input type="password" name="password" placeholder="Set your password"></td>
                </tr>

                <tr>
                    <td><label for="password">Confirm password:</label></td>

                    <td><input type="password" name="confirm_password" placeholder="Confirm your password"></td>
                </tr>

                <tr>
                    <td><label for="radio">Gender:</label></td>

                    <td>Male <input type="radio" name="gender" value="male">
                        Fimale<input type="radio" name="gender" value="female"></td>

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
                    <td><input type="file" name="upload_file"></td>
                </tr>

                <tr>



                    <td><input type="submit" name="submit"></td>
                </tr>



            </table>
        </form>
</body>
</body>

</html>