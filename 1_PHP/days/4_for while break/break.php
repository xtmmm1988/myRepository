<?php
header('content-type:text/html;charset=utf-8');
$i=0;
while(++$i){
	switch ($i){
		case 5:
		       echo '你好';
		       brek;//跳出一层到switch外；
		case 7:
			   echo '走了';
			   break 2;//跳出两层到while外；
	    defaule;
	           break;
	}
}
echo '$i='.$i;
//break语句默认跳出1层；
//break语句后面带的数字表示要跳出循环语句的层数，但是不能超过循环语句现有的层数；否则会报fatal error；
echo '<hr/>';
$i = 5; 
$n = &$i;
unset($i); 
echo '<hr/>';
echo $n; 
echo '<hr/>';
$arr1 = array("id"=>3,"username"=>"Tom",-5=>34,"sex"=>true);
$arr2 = array_reverse($arr1);
print_r($arr2);
$arr1 = array("id"=>3,"username"=>"Tom",-5=>34,"sex"=>true); 
$f=fopen("./txt1.txt","w+"); 
fclose($f);
$str=fread($f,filesize("./txt1.txt"));

echo $str;


?>