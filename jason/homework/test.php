<?php
$jsonOBj = '{ 
    "name":[
        {"Firstname":"nopphagaw",
         "Lastname":"Thongbai"
        }
        ],
        "Major":"ITI" 
    }';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบนะอิอิ</title>
</head>

<body>
    <div id='output'>
        ​<?php
            $data = json_decode($jsonOBj, true);
            echo $data["name"][0]["Firstname"] ." ". $data["name"][0]["Lastname"] ." ". $data["Major"];
            ?>
    </div>
</body>

</html>