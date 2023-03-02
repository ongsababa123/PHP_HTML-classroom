<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecordData</title>
</head>

<body>
    <pre>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "preass";
    ?>

<?php
$conn = new mysqli($servername, $username, $password, $db);
$sql1 = "SELECT  `name` FROM `equipment` WHERE 1";
$sql2 = "SELECT  `name` FROM `sensor` WHERE 1";

$equipment_ = mysqli_query($conn, $sql1);
$sensor = mysqli_query($conn, $sql2);

?>
    <center>
        <h2>RecordData</h2>
        <!-- <form method="post" action="RecordData.php"> -->
            name equipment <select name="select_equipment" id="select_equipment">
                <option value="">-- Please Select Item --</option>
                <?php

                while ($test1 = mysqli_fetch_array($equipment_, MYSQLI_ASSOC)) :;
                ?>
                <option value="<?php echo $test1['name']; ?>">
                    <?php echo $test1['name']; ?>
                </option>
        <?php
                endwhile;
        ?>
        </select>
        <br>
        name sensor   <select name="select_sensor" id="select_sensor">
                <option value="">-- Please Select Item --</option>
                <?php

                while ($test2 = mysqli_fetch_array($sensor, MYSQLI_ASSOC)) :;
                ?>
                <option value="<?php echo $test2['name']; ?>">
                    <?php echo $test2['name']; ?>
                </option>
        <?php
                endwhile;
        ?>
        </select>
        <br>
        Select location  <select name="location" id="location">
            <option value="saraburi">saraburi</option>
            <option value="prachiburi">prachiburi</option>
            <option value="bangkok">bangkok</option>
        </select>
        <br>
        Select Time delay  <input type="number" id="quantity"  min="0" max="" >
        <br>
        <button onclick="runsend()">Start</button>

        <!-- </form> -->
</body>
</html>

<script>
    run = null;
    function runsend(){
        // alert('hellooooooooooooooooo');
        number = document.getElementById("quantity").value;
        var num = number * 1000;
        run = setInterval(function() {add_item()}, num);

    }
    async function add_item() {
        const name_equipment = document.getElementById("select_equipment");
        const name_sensor = document.getElementById("select_sensor");
        const name_location = document.getElementById("location");
        var min = 0.00,
            max = 100.0,
            temp = Math.random() * (max - min) + min;
            humidity = Math.random() * (max - min) + min,
            pressure = Math.random() * (100.00 - 0) + 0;
            // alert('sdsdsdsds');

    const post_Data =  {
            'name_equipemnt': name_equipment.options[name_equipment.selectedIndex].value,
            'name_sensor': name_sensor.options[name_sensor.selectedIndex].value,
            'name_location': name_location.options[name_location.selectedIndex].text,
            'temp': temp,
            'humidity': humidity,
            'pressure': pressure
        };
        // alert(postData);
        
    try{
      const response = await fetch("rest.php",
        { method : "POST",
          headers: {"Content-Type":"application/json"},
          body   : JSON.stringify(post_Data)
        });
        if(!response.ok){
          const message = "Error with "+response.status;
          throw new Error(message);
        }
        const data = await response.json();
        // console.log(data);
        alert(data);
    }catch(error){
      console.log("Error"+error);
    }
};

</script>