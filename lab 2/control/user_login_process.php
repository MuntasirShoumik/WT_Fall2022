<?php

if (isset($_REQUEST["login"])) {

    $data = file_get_contents("../data/data.json");
    $mydata = json_decode($data);


    foreach ($mydata as $myobject) {
        if ($myobject->NID == $_REQUEST["nid"] && $myobject->password == $_REQUEST["pass"]) {
            echo "login succesful";
        }
    }
}
