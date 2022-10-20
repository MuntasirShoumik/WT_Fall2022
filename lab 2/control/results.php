<?php


if (isset($_REQUEST["submit"])) {

    if ($_REQUEST["user_name"] == "") {
        echo "name is requerd";
    } else {
        echo $_REQUEST["user_name"];
    }

    echo "<br>";
    if (isset($_REQUEST["gender"])) {

        echo "gender:" . $_REQUEST["gender"];
    } else {
        echo "gender not chossen";
    }


    echo "<br>";
    if (isset($_REQUEST["password"])) {

        echo "password is set";
    } else {
        echo "password is not set";
    }



    echo "<br>";
    if (isset($_REQUEST["email_notification"])) {

        echo "cheackbox cheacked";
    } else {
        echo "cheackbox empty";
    }
    echo "<br>";


    if (isset($_FILES["upload_file"])) {

        $target_dir = "../uploads";
        $target_file = $target_dir . $_FILES["upload_file"]["name"];



        if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $target_file)) {
            echo $_FILES["upload_file"]["type"];
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }








    $formdata = array(
        'name' => $_REQUEST["user_name"],
        'NID' => $_REQUEST["NID_number"],
        'email' => $_REQUEST["email"],
        'mobile' => $_REQUEST["mobile_number"],
        'password' => $_REQUEST["confirm_password"]
    );
    $existingdata = file_get_contents("../data/data.json");
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $formdata;

    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);


    if (file_put_contents("../data/data.json", $jsondata)) {
        echo "Data successfully saved <br>";
    } else
        echo "no data saved";
}

if (isset($_REQUEST["login"])) {

    $data = file_get_contents("../data/data.json");
    $mydata = json_decode($data);


    foreach ($mydata as $myobject) {
        if ($myobject->NID == $_REQUEST["nid"] && $myobject->password == $_REQUEST["pass"]) {
            echo "login succesful";
        }
    }
}
