<!-- Data : <p>></p> -->
<?//isset($_GET['data'])?var_dump($_GET['data']):"unknown"?>

Data :

<?php 
    $json_string = isset($_GET['data'])?$_GET['data'] : "Unknown";
    var_dump($json_string);
    //convert to obj
    $data = json_decode($json_string);
?>

<pre>
    <?php 
        var_dump($data);
    ?>
</pre>

<?php 
    echo $data->name."<br>";
    echo $data->age."<br>";
    echo $data->Gender;
    //convert to array
    $data2 = json_decode($json_string,true);
?>

<pre>
    <?php 
        var_dump($data2);
    ?>
</pre>

<?php 
    echo $data2['name']."<br>";
    echo $data2['age']."<br>";
    echo $data2['Gender']."<br>";
?>