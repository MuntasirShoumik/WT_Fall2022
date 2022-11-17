<?php
session_start();
if (empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_login.php"); // Redirecting To login page
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

    <h2>Home</h2>
    <ul>
        <li>home</li>
        <li>profile</li>
        <li>other services</li>
        <li><a href="../control/logout.php">logout</a></li>
    </ul>
    <hr>
    <br>
    <h3>Hii, <?php echo $_SESSION["username"]; ?></h3>
    <br />
    <h5>Welcome to home page.</h5>



    <br />
    <hr>
    <h5>contact</h5>

</body>

</html>