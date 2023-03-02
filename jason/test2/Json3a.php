<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST Json</title>
</head>
<body>
    <h2>The XMLHttpRequest object</h2>
    <p id="demo">Let AJAX change this text</p>
    Owner:<input type="text" id='owner' value="">
    Pet1:<input type="text" id='cat' value="">
    Pet2:<input type="text" id='dog' value="">
    <button type="button" onclick="loadDoc()">Change Content</button>
    <script>
        function loadDoc(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                    console.log(this.readyState + " " + this.status);
                    console.log(this.responseText);
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                    // var myObj = JSON.parse(this.responseText);
                    // alert("My name is "+ myObj['name']+'.\n'+
                    //         myObj['pet']['dog'] + ' is My Lovely Dog \n' + 
                    //         myObj['pet']['cat'] + ' is My Lovely Cat too.');
                     
                        alert(this.readyState);
                        data = this.responseText
                }
            };
            xhttp.open("GET", "Json3b.php", true);
            xhttp.send();
        }
    </script>
</body>
</html>