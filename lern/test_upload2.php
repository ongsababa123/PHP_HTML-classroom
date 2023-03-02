<pre>
<?php
print_r($_FILES);
$target_dir = "uploads/";
$target_file = $target_dir.basename ($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  echo "Success: upload completed<br>";
}
?>
</pre>