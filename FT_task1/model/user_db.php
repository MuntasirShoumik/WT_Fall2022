<?php

class User_DB
{


    function openConn()
    {

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "e_gov";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }



    function insertUser($conn, $tableName, $name, $father, $mother, $birthday, $NID, $gender, $email, $mobile, $division, $city, $address, $password, $get_notification, $image, $pdf)
    {

        $sql_string = "INSERT INTO $tableName (name,father,mother,birthday,NID,gender,email,mobile,division,city,address,password,get_notification,image,pdf) VALUES ('$name','$father','$mother','$birthday','$NID','$gender','$email','$mobile','$division','$city','$address','$password','$get_notification','$image','$pdf')";

        if ($conn->query($sql_string) === true) {

            return true;
        } else {
            return false;
        }
    }






    function CheckUser($conn, $table, $nid, $password)
    {
        $result = $conn->query("SELECT * FROM " . $table . " WHERE NID='" . $nid . "' AND password='" . $password . "'");
        return $result;
    }


    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    // function UpdateUser($conn, $table, $username, $firstname, $email)
    // {
    //     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE username='$username'";

    //     if ($conn->query($sql) === TRUE) {
    //         $result = TRUE;
    //     } else {
    //         $result = FALSE;
    //     }
    //     return  $result;
    // }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
