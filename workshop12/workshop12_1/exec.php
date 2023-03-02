<pre>
    <?php 
        print_r($_REQUEST);
        $data = $_REQUEST["color"];
        foreach ($data as $key => $val){
            echo "<button style = 'background:[$val];margin-right:10px'>$val</button><br> ";
        }
    ?>
</pre>
