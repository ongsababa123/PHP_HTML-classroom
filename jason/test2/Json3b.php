<?php
    $myObj["name"] = " ";
    $myObj["pet"]['dog'] = " ";
    $myObj["pet"]['cat'] = " ";
    $myJSON = json_encode($myObj);
    $mycode = base64_encode($myJSON);
    echo $myJSON;
?>