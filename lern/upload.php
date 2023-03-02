<pre>
<?php
  print_r($_FILES);
 
  $target_dir = "uploads/";
  $target_file = $target_dir.basename ($_FILES["fileToUpload"]["name"]);
  echo $target_file."<br>";
  if(move_uploaded_file(
       $_FILES["fileToUpload"]["tmp_name"], //source
       $target_file  //target
  )){
    echo "success dowwnload completed<br>";
  }
  else{
    echo "Sorry, found some error<br>";
  }
?>
</pre>