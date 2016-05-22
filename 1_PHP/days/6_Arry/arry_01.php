<?php
$arr=['','',''];
$arr2=[];
$arr3=[false,false,false];
$arr4=[null,null,null];
print_r ($arr);
$var='apple,orange,pear$red,green,blue';
$array=explode('$',$var);
$arr1=explode(',',$array[0]);
$arr2=explode(',',$array[1]);
foreach($arr1 as $k=>$v){
	echo '<p style="color:'.$arr2[$k].'">'.$arr1[$k].'</p>'.'<br/>';
}
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
echo '<hr/>';
$arr=array(11,4);
if($arr[0]>$arr[1]){
	$tem=$arr[0];
	$arr[0]=$arr[1];
	$arr[1]=$tem;
	
}
echo '<pre>';
print_r($tem);
print_r($arr);
echo '</pre>';
echo '<hr/>';
$arr=array(11,3,15,6,16,8);
for($i=1;$i<6;$i++){
	for($j=0;$j<count($arr)-$i;$j++){
		if($arr[$j]>$arr[$j+1]){
			$tmp=$arr[$j];
			$arr[$j]=$arr[$j+1];
			$arr[$j+1]=$tmp;
		}
	}
}
echo '<pre>';
print_r($arr);
echo '</pre>';


