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
    Hii, <h3> <?php echo $_SESSION["username"]; ?></h3>
    <br />
    <h5>Welcome to home page.</h5>



    <br />
    <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>

</html>