<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>

<body>
    <script>
        var total = 0;

        function calculate(item) {
            if (item.checked) {
                total += parseInt(item.value);
            } else {
                total -= parseInt(item.value);
            }
            document.getElementById('sum').innerHTML = total;
        }

        function myFunction(text) {
            // Get the checkbox
            var checkBox = document.getElementById("myCheck");
            // Get the output text
            // If the checkbox is checked, display the output text
            if (checkBox.checked == true) {
                document.getElementById("text").disabled = false;
            } else {
                document.getElementById("text").disabled = true;
            }
        }
    </script>

    <form action="" method="post">
        รหัสนักศึกษา : <input class="" type="text" id="id">
        ชื่อ - นามสกุล: <input class="" type="text" id="id"><br>

        <div id="container">
            มาเรียน
            <input type="checkbox" name="price-input[]" value="0" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="1" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="2" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="3" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="4" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="5" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="6" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="7" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="8" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="9" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="10" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="11" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="12" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="13" onClick="calculate(this);" />
            <input type="checkbox" name="price-input[]" value="14" onClick="calculate(this);" />
            รวม <span id="sum">0</span> ครั้ง
        </div>
        
        Assignment 
        <input type="checkbox" id="myCheck" onclick="myFunction()" /> 
        ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน

        <input type="checkbox" id="myCheck" onclick="myFunction()" /> 
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>

        <input type="checkbox" id="myCheck" onclick="myFunction()" /> 
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label><br />

        <input type="checkbox" id="myCheck" onclick="myFunction()" /> 
        Midterm
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>
        <br>

        <input type="checkbox" id="myCheck" onclick="myFunction()" /> 
        Final
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>
        <label>ได้<input type="text" class="" id="text" style="width: 25px;">คะแนน</label>
        <br>
        รวม<span id="sum">0</span> คะแนน <span id="sum">0</span>  ได้เกรด

    </form>
</body>

</html>