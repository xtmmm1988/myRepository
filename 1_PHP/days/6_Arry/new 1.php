<?php
$arr=[9,5,14,5,18,0];
function isMopao($arr){
for($i=1;$i<count($arr);$i++){
      for($j=0;$j<count($arr)-$i;$j++){
	     if($arr[$j]>$arr[$j+1]){
		 $a=$arr[$j];
		 $arr[$j]=$arr[$j+1];
		 $arr[$j+1]=$a;
		 }
	  }
	  
    }
	  
	return $arr;  
}

$a=[1,5,2,9,12,8,0];
$w=isMopao($a);
echo '<pre>';	
print_r($w);
echo '</pre>';



?>