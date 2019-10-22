<?php
 $a1 = array(
             array(1,2),
 			array(4,5),
			);


 $result=array();
 for($i=0;$i<=1;$i++)
 {
 	for($j=0;$j<=1;$j++)
 	{
 		$result[$i][$j]=$a1[$j][$i];
 	}
 }

 echo"<pre/> ";
 print_r($result);
 ?>