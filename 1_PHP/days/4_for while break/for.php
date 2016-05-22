<?php
header('content-type:text/html;charset=utf-8');
/***********for循环********
 * for(expr1;expr2;expr3){
 *     n多循环语句
 * }
 * expr1:表达式1无条件执行一次，一般赋初值；
 * expr2:表达式2每次循环都执行，循环终止条件；
 * expr3:表达式3每次循环都执行，控制变量步长； * 
 */
//阶乘   求5！=1*2*3*4*5=120；
$mul=1;
for($i=1;$i<=5;$i++){
	$mul*=$i;
}
echo $mul;
echo '<hr/>'; 
//输出1-100的和，累加
$sum=0;
for($i=1;$i<=100;$i++){
	$sum+=$i;
}
echo $sum;
echo '<hr/>';
for($i=7;$i>=1;$i--){//降序输出1-7；
	echo $i.'<br/>';
}
echo '<hr/>';
for($i=4;$i<=30;$i+=5){//输出4，9，14，19，24，29
	echo $i.'<br/>';
}
echo '<hr/>';
for($i=48;$i>=4;$i-=4){//降序输出1-50能被4整除的数
	
		echo $i.'<br/>';
	
}
echo '<hr/>';
for($i=50;$i>=4;$i--){//降序输出1-50能被4整除的数
	if($i%4==0){
		echo $i.'<br/>';
	}
}
echo '<hr/>';
for($i=3;$i<=25;$i+=4){//输出3，4，11，15，19，23；
	echo $i.'<br/>';
}
echo '<hr/>';
for($i=2;$i<=64;$i*=2){//输出2，4，8，16，32，64；
	echo $i.'<br/>';
}
echo '<hr/>';
for($i=1;$i<=100;$i++){
	if($i%21==0){
		echo $i.'<br/>';
	}
}
echo '<hr/>';
for($a=1;$a<=5;$a++){
	for($b=1;$b<=$a;$b++){
		echo '*';
	}
	echo '<br/>';
}
echo '<hr/>';

/*       *                          *        1层       2个空格               1个*    层数用n表示    (n-1)*2+1
 *       **                        ***       2层       1个空格               3个*                (n-1)*2+1
 *       ***                      *****      3层       0个空格               5个*    
 */

$r=3;
/*//控制层数
for($s=1;$s<=$r;$s++){
	//控制空格个数
	for($e=1;$e<=$r-$s;$e++){
		echo "&nbsp";
	}
	//内层控制*个数
	for($t=1;$t<=($s-1)*2+1;$t++){
		if($s==1||$s==$r){
		echo "*";
		}else($t==1||$t==($s-1)*2+1)
		{
			echo "*";
		  }else{
			echo "&nbsp;";
		}
	}
	echo "<br/>";
}
*/

$n=10;
//外层控制层数
for($i=1;$i<=$n;$i++){
	//打印前先打印空格
	for($k=1;$k<=$n-$i;$k++){
		echo "&nbsp;";
	}
	//内层控制*的个数
	for($j=1;$j<=($i-1)*2+1;$j++){
		if($i==1||$i==$n){
			echo '*';
		}else{
			if($j==1||$j==($i-1)*2+1){
				echo '*';
			}else{
				echo "&nbsp;";
			}
		}
		
	}
	echo '<br/>';
}
echo '<hr/>';


















