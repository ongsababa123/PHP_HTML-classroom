<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert auto</title>
</head>

<body>

    Location name : <input type="text" name="location" id="location"><br>
    Sensor name : <input type="text" name="sensor_name" id="sensor_name">
    delay : <input type="text" name="delay" id="delay" required="required">
    <button onclick="run_automatic()">On</button>
    <button onclick="Stopupdate()">Off</button>
    <p id="myP"></p>

    <script>
        var run_auto = null;
 
        function run_automatic() {
            document.getElementById("myP").innerHTML = "Status : ON";
            delay = document.getElementById("delay").value;
            var num_delay = parseInt(delay);
            run_auto = setInterval(function() {
                auto_submit();
            }, num_delay);
        }

        async function auto_submit() {
            
            // const locationName = document.getElementById("location").value;
            // const sensor_name = document.getElementById("sensor_name").value;
            var min = 0.00,
                max = 100.00,
                temp = Math.random() * (max - min) + min,
                humi = Math.random() * (max - min) + min,
                pressure = Math.random() * (1000.00 - 0) + 0;

            const postData = {
                'sensor_name': document.getElementById("location").value,
                'locationName': document.getElementById("sensor_name").value,
                'temp': temp,
                'humi': humi,
                'pressure': pressure
            };
            try {
                const response = await fetch("rest.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(postData)
                });
                if (!response.ok) {
                    const message = "Error with " + response.status;
                    throw new Error(message);
                }
                const data = await response.json();
                console.log(data);
            } catch (error) {
                console.log("Error" + error);
            }
            
            
        }

        function Stopupdate(){
            clearInterval(run_auto);
            document.getElementById("myP").innerHTML = "Status : OFF";
        }
    </script>
</body>

</html>