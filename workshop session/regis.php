<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<script>
        var loadFile = function(event) {
        var output = document.getElementById("output");
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src); // free memory
            }
        };
    </script>
    <form action="regis_ex.php" method="post" enctype="multipart/form-data">

        Name <input type="text" name="name" id ="_name"><br>
        Password <input type="password" name="password" id ="_password"><br>
        Confirm Password <input type="password" name="cfpassword" id ="_cfpassword"><br>
        Picture <input type="file" name="fileToUpload" id ="fileToUpload" onchange="loadFile(event)"><br>
        <img id="output" width="200" /><br />
        <br><br>
        <input type="submit" name="ok" id ="_ok" value ="ยืนยัน">

    </form>
    <br>
    <button onclick="document.location='login.html'">ยกเลิก</button>
</body>
</html>