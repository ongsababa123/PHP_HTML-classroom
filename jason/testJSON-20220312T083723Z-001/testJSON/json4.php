<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ss{
            display: block;
            border: 1px dashed blue;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <p id="my-name" class = 'ss'></p>
    <p id="age" class = 'ss'></p>
    <p id="GenDer" class = 'ss'></p>
    <input type="text" name="name" value="Jirapat">
    <input type="text" name="Age" value="function(){return  21}">
    <input type="text" name="gender" value="Male">
    <button type = "button" onclick="clickme()">Click Me!!</button>

    <script>
        function clickme(){

            data = [];
            data['name'] = document.getElementsByName("name")[0].value;
            data['age'] = document.getElementsByName("Age")[0].value;
            data['gender'] = document.getElementsByName("gender")[0].value;


            age = eval("("+data['age']+")");

            // data_name = document.createTextNode(data['name']);
            // data_age = document.createTextNode(age());
            // data_gender = document.createTextNode(data['gender']);

            document.getElementById("my-name").innerHTML = data['name'];
            document.getElementById("age").innerHTML = age();
            document.getElementById("GenDer").innerHTML = data['gender'];
            
            // myname.appendChild(data['name']);
            // age_out.appendChild(data_age);
            // GenDer.appendChild(data_gender);
        }
    </script>
</body>
</html>