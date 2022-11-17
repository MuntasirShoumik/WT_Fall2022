<?php

include("../model/user_db.php");


function checkSpacialChar($str)
{

    if (preg_match('/[^a-z0-9 ]+/i', $str)) {
        return true;
    } else
        return false;
}

function checkNum($str)
{
    if (preg_match('#[0-9]#', $str)) {
        return true;
    } else
        return false;
}

function checkLength($str, $size)
{
    if (strlen($str) > $size) {
        return true;
    } else
        return false;
}


function checkAlphabet($str)
{
    if (preg_match("/[a-z]/i", $str)) {
        return true;
    } else
        return false;
}

function checkOperator($str)
{

    $flag = false;
    $opr = array('3', '7', '9', '8', '5', '6');
    foreach ($opr as $val) {

        if ($val == $str[2]) {
            $flag = true;
        }
    }

    return $flag;
}

function validateEmail($email)
{
    return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePassword($str)
{
    if (!preg_match('@[A-Z]@', $str) || !preg_match('@[a-z]@', $str) || !checkNum($str) || !checkSpacialChar($str) || strlen($str) < 8) {
        return true;
    } else {
        return false;
    }
}




if (isset($_POST["submit_page1"])) {
    session_start();

    $userName = $_POST["user_name"];
    $fatherName = $_POST["Father_name"];
    $motherName = $_POST["Mother_name"];
    $nid = $_POST["NID_number"];

    $name_valid = false;
    $dob_valid = false;
    $nid_valid = false;
    $gender_valid = false;

    if (empty($userName)) {
        echo "name is requerd";
    } elseif (checkSpacialChar($userName) || checkNum($userName) || checkLength($userName, 20)) {

        echo "A name can not contain any number or spacial character and have to be less then 20 character";
    } else {
        echo "user name: " . $_POST["select"] .  $userName;
        $_SESSION["userName_"] = $userName;
        $name_valid = true;
    }
    echo "<br>";

    if (empty($fatherName)) {
        echo "Father name not given";
    } elseif (checkNum($fatherName) || checkSpacialChar($fatherName) || checkLength($fatherName, 20)) {

        echo "A name can not contain any number or spacial character and have to be less then 20 character";
    } else {
        echo "Father name: " . $fatherName;
        $_SESSION["fatherName_"] = $fatherName;
    }
    echo "<br>";

    if (empty($motherName)) {
        echo "Mother name not given";
    } elseif (checkNum($motherName) || checkSpacialChar($motherName) || checkLength($motherName, 20)) {

        echo "A name can not contain any number or spacial character and have to be less then 20 character";
    } else {
        echo "Mother name: " .  $motherName;
        $_SESSION["motherName_"] = $motherName;
    }

    echo "<br>";
    if (isset($_POST["birthday"])) {

        echo "Birthday:" . $_POST["birthday"];
        $_SESSION["birthday_"] = $_POST["birthday"];
        $dob_valid = true;
    } else {
        echo "Birth date requerd";
    }

    echo "<br>";
    if (empty($nid)) {
        echo "NID is requerd";
    } elseif (checkAlphabet($nid)  || checkSpacialChar($nid) ||  strlen($nid) != 10) {
        echo "NID can not contain alphabet or spacial character and length must be 10";
    } else {
        echo "NID: " . $nid;
        $nid_valid = true;
        $_SESSION["nid_"] = $nid;
    }



    echo "<br>";
    if (isset($_POST["gender"])) {

        echo "gender:" . $_POST["gender"];
        $_SESSION["gender_"] = $_POST["gender"];
        $gender_valid = true;
    } else {
        echo "gender not chossen";
    }



    if ($name_valid && $nid_valid && $dob_valid && $gender_valid) {
        header("Location: /SecH/e-gov/view/user_registration_page2.php");
    }
}








if (isset($_POST["submit_page2"])) {

    session_start();
    $phoneNumber = $_POST["mobile_number"];
    $email = $_POST["email"];

    $phone_valid = false;
    $email_valid = false;
    $divi_valid = false;
    $city_valid = false;
    $address_valid = false;

    echo "<br>";
    if (empty($phoneNumber)) {
        echo "Mobile number is requerd";
    } elseif (checkAlphabet($phoneNumber) || checkSpacialChar($phoneNumber) || strlen($phoneNumber) != 11) {
        echo "Phone number can not contain alphabet or spacial character and must be 11 digit";
    } elseif (!checkOperator($phoneNumber)) {
        echo "Invalid operator";
    } else {
        echo "Mobile: " . $phoneNumber;
        $phone_valid = true;
        $_SESSION["phoneNumber_"] = $phoneNumber;
    }


    echo "<br>";
    if (empty($email)) {
        echo "email is requerd";
    } elseif (!validateEmail($email)) {
        echo "email is not valid";
    } else {
        echo "Email: " . $email;
        $email_valid = true;
        $_SESSION["email_"] = $email;
    }


    echo "<br>";
    if (isset($_POST["select_division"])) {

        echo "Division:" . $_POST["select_division"];
        $_SESSION["division_"] = $_POST["select_division"];
        $divi_valid = true;
    } else {
        echo "Division requerd";
    }

    echo "<br>";
    if (empty($_POST["city"])) {
        echo "city is requerd";
    } else {
        echo "City: " . $_POST["city"];
        $_SESSION["city_"] = $_POST["city"];
        $city_valid = true;
    }


    echo "<br>";
    if (empty($_POST["address"])) {
        echo "address is requerd";
    } else {
        echo "Address: " . $_POST["address"];
        $_SESSION["address_"] = $_POST["address"];
        $address_valid = true;
    }


    if ($city_valid && $divi_valid && $email_valid && $phone_valid && $address_valid) {
        header("Location: /SecH/e-gov/view/user_registration_page3.php");
    }
}






if (isset($_POST["submit_page3"])) {
    session_start();

    $password = $_POST["password"];
    $pass_valid = false;
    $ownership_valid = false;


    echo "<br>";
    if (empty($password)) {

        echo "password is not set";
    } elseif (validatePassword($password)) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    } else {

        echo "strong password";
    }

    echo "<br>";
    if (empty($_POST["confirm_password"])) {

        echo "retype your password";
    } elseif ($_POST["confirm_password"] != $password) {
        echo "password dose not match";
    } else {
        echo "password is set";
        $pass_valid = true;
        $_SESSION["password_"] = $password;
    }

    echo "<br>";
    if (isset($_POST["email_notification"])) {

        echo "cheackbox cheacked";
        $_SESSION["get_notification_"] = true;
    } else {
        echo "cheackbox empty";
    }
    echo "<br>";


    if (isset($_FILES["image"])) {

        $img_errors = array();
        $img_file_name = $_FILES['image']['name'];
        $img_file_size = $_FILES['image']['size'];
        $img_file_tmp = $_FILES['image']['tmp_name'];
        $img_file_type = $_FILES['image']['type'];
        $img_ext = explode('.', $_FILES['image']['name']);
        $img_file_ext = strtolower(end($img_ext));

        $img_extensions = array("jpeg", "jpg", "png");

        if (in_array($img_file_ext, $img_extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($img_file_size > 3097152) {
            $img_errors[] = 'File size must be less then 3 MB';
        }

        if (empty($img_errors) == true) {
            move_uploaded_file($img_file_tmp, "../uploads/" . $img_file_name);
            $_SESSION["image_loc"] = "../uploads/" . $img_file_name;
            echo "Success image upload";
        }
    }

    if (isset($_FILES["pdf"])) {

        $pdf_errors = array();
        $pdf_file_name = $_FILES['pdf']['name'];
        $pdf_file_size = $_FILES['pdf']['size'];
        $pdf_file_tmp = $_FILES['pdf']['tmp_name'];
        $pdf_file_type = $_FILES['pdf']['type'];
        $pdf_ext = explode('.', $_FILES['pdf']['name']);
        $pdf_file_ext = strtolower(end($pdf_ext));

        $pdf_extensions = array("pdf");

        if (in_array($pdf_file_ext, $pdf_extensions) === false) {
            $pdf_errors[] = "extension not allowed, please choose .pdf";
        }
        if ($pdf_file_size > 5097152) {
            $pdf_errors[] = 'File size must be less then 5 MB';
        }

        if (empty($pdf_errors) == true) {
            move_uploaded_file($pdf_file_tmp, "../uploads/" . $pdf_file_name);
            echo "Success pdf upload";
            $ownership_valid = true;
            $_SESSION["pdf_loc"] = "../uploads/" . $pdf_file_name;
        }
    }


    if ($pass_valid && empty($errors) == true && $ownership_valid) {

        // $formdata = array(
        //     'name' => $_SESSION["userName_"],
        //     'father' =>  $_SESSION["fatherName_"],
        //     'mother' => $_SESSION["motherName_"],
        //     'birthday' => $_SESSION["birthday_"],
        //     'NID' => $_SESSION["nid_"],
        //     'gender' => $_SESSION["gender_"],
        //     'email' =>  $_SESSION["email_"],
        //     'mobile' => $_SESSION["phoneNumber_"],
        //     'division' => $_SESSION["division_"],
        //     'city' => $_SESSION["city_"],
        //     'address' => $_SESSION["address_"],
        //     'password' => $_SESSION["password_"],
        //     'get_notification' => $_SESSION["get_notification_"],
        //     'image' => $_SESSION["image_loc"],
        //     'pdf' => $_SESSION["pdf_loc"]
        // );
        // $existingdata = file_get_contents("../data/data.json");
        // $tempJSONdata = json_decode($existingdata);
        // $tempJSONdata[] = $formdata;

        // $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);


        // if (file_put_contents("../data/data.json", $jsondata)) {
        //     echo "Data successfully saved <br>";
        // } else {
        //     echo "no data saved";
        // }


        $mydb = new User_DB();
        $connobj = $mydb->openConn();
        if ($mydb->insertUser(
            $connobj,
            "land_owner",
            $_SESSION["userName_"],
            $_SESSION["fatherName_"],
            $_SESSION["motherName_"],
            $_SESSION["birthday_"],
            $_SESSION["nid_"],
            $_SESSION["gender_"],
            $_SESSION["email_"],
            $_SESSION["phoneNumber_"],
            $_SESSION["division_"],
            $_SESSION["city_"],
            $_SESSION["address_"],
            $_SESSION["password_"],
            $_SESSION["get_notification_"],
            $_SESSION["image_loc"],
            $_SESSION["pdf_loc"]
        )) {
            $mydb->CloseCon($connobj);
            session_destroy();
            header("Location: /SecH/e-gov/view/user_login.php");
        } else {
            $mydb->CloseCon($connobj);
            session_destroy();
            echo "unable to register";
        }
    }
}
