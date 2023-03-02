<pre>
<?php
  print_r($_COOKIE);
  $data = "123";
  $expire = time()+100;

  $info[] = $data;
  $info[] = $expire;
  print_r($info);

  $text_enc = serialize($info); 
  echo "info $text_enc<br> request = ".strlen($text_enc)." bytes to recodecbr>";
  
  $info2_enc = "$data:#:$expire";
  echo "info2 $info2_enc<br> request ". strlen($info2_enc). "bytes to record<br>" 
?>
</pre>