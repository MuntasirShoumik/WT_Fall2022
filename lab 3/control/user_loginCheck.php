<?php

session_start();

if (isset($_REQUEST["login"])) {

    $data = file_get_contents("../data/data.json");
    $mydata = json_decode($data);


    foreach ($mydata as $myobject) {
        if ($myobject->name == $_REQUEST["username"] && $myobject->password == $_REQUEST["pass"]) {

            $_SESSION["username"] = $_REQUEST['username'];
            $_SESSION["password"] = $_REQUEST['pass'];

            echo "login suc";
            header("Location: /SecH/e-gov/view/user_home.php");
        }
    }
}
