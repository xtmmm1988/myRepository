<?php
header('content-type:text/html;charset=utf-8');
$var='apple,orange,pear$red,green,blue';
$array=explode('$',$var);
$arr1=explode(',',$array[0]);
$arr2=explode(',',$array[1]);
foreach($arr1 as $k=>$v){
	echo '<p stype="color:'.$arr2[$k].'">'.$arr1[$k].'</p>'.'<br/>';
}





















// （1）输出 4 12 36 108  324
for($i=4;$i<=324;$i*=3){	
		echo $i.'<br/>';	
}
echo '<hr/>';
//   (2) 输出 1-50 能被 3  或 4 或 7  整除的数
for($i=1;$i<=50;$i++){
	if($i%3==0||$i%4==0||$i%7==0){
		echo $i.'<br/>';
	}
}
echo '<hr/>';



/*   (3)
*     求水仙花：
*       两位数: 个位平方 +十位平方=自身
*       三位数：个位立方 +十位立方 +百位立=自身
*       四位数: 个位四次方 +十位四次方 +百四次方 +千四次方=自身
*/
// 只针对 3位数

/*$var1=153;
$var2=371;
$var3=1634;
$var4=9474;
$x = substr($var1,0,1); // 百位
$y = substr($var1,1,1); // 十位
$z = substr($var1,2,1); // 个位

$sum = pow($x,3) + pow($y,3)  +pow($z,3) ;
if($sum == $var1){
	echo $var1.'是水仙花';
}else{
	echo $var1.'不是水仙花';
	
}
echo '<hr/>';*/
// 针对所有 位数水仙花

for($var=10;$var<=10000 ;$var++){
$len = strlen($var);
$sum =0;
for($i=0;$i<$len;$i++){
	$x=substr($var,$i,1);  // 截取每一位
	$sum+=pow($x,$len) ;	
   }
   if($sum == $var){
	echo $var.'是水仙花<br/>';
   }
}
echo '<hr/>';

/* （4）嵌套循环 ：行列图形分析
 * 
 *  *****    *      *
 *  *****    * *    *
 *  *****    *   *  *
 *  *****    *    * *
 *  *****    *      *
 *      
 *      通过 条件控制输出
 *      $j==1    $j==5   $j==$i 
 *      如果 是上面的条件 输出 *
 *      如果 是上面的条件 输出 *
 *      否则 输出 ～
 *     
 */
for($i=1;$i<=5;$i++){//控制层数；
	for($j=1;$j<=5;$j++){//控制*个数；		
			if($j==1||$j==5||$j==$i){
				echo '*';
			}else{
				echo '&nbsp;';
			}				
	}
	echo '<br/>';
}
echo '<hr/>';
for($var=10;$var<=30;$var++){
$flag=true;
$len=floor(strlen($var)/2);
for($i=0;$i<$len;$i++){
	$x=substr($var,$i,1);
	$y=substr($var,-$i-1,1);
	if($x!=$y){
		$flag=false;
		break;
	}	
}
   if($flag){
	echo $var.'是回文<br/>';
    }
}
echo '<hr/>';

for($i=2;$i<=20;$i++){
	$flag=true;
	for($j=2;$j<$i-1;$j++){
		if($i%$j==0){
			$flag=false;
			break;
		}
	}
	if($flag){
		echo $i.'是素数<br/>';
	}else{
		echo $i.'不是素数<br>';
	}
}

