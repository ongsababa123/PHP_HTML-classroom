<?php 
    $info = array();
    $info['name'] = "Jirapat";
    $info['age'] = "21";
    $info['Gender'] = "Male";
    $info['Birth-date'] = "2022-03-04";
    $info['return-age'] = "function(){return 55}";
?>

<pre>
    <?php 
        var_dump($info);
    ?>
</pre>

<script>
    let data = <?= json_encode($info) ?>;
</script>

<script>
    create();
    function create(){
        input1 = document.createElement("input");
        input1.type = "text";
        input1.id = "input1";
        document.body.append(input1);
        input1.value = data.name + " " +data.Gender;
        data['Birth-date'] = new Date(data['Birth-date']);
        //alert(data['Birth-date']);
        exec = eval("("+ data['return-age']+")")
        alert(exec());
    }
</script>
   
