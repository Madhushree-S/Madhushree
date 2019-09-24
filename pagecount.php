<?php

$fp=fopen("counterLog.txt","r");
$count=fread($fp,10);
fclose($fp);
$count=$count+1;
echo "<p><center> <h1> Page Views:".$count."</h1></center></p>";
$fp=fopen("counterLog.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
