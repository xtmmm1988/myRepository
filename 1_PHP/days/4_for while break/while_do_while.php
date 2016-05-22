<?php
header('content-type:text/html;charset=utf-8');
//while循环控制语句
$i=0;//循环变量
while($i<2){
	echo '你好，中国<br/>';
	$i++;//这里我们对循环变量自增	
}
echo '<br/>';
//******do....while循环控制语句
$i=0;//循环变量
do{
echo '你好，中国<br/>';
//对循环变量的修改
$i++;//这里由程序员自己控制步长
}while($i<2);
echo '<hr/>';
$code='';
for($i=1;$i<=4;$i++){	
		$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';	
}

echo $code;
echo '<hr/>';
$i=0;
$code='';
do{
	$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
	$i++;
}while($i<=3);
echo $code.'<br/>';
$code='';
$str="123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
for($i=1;$i<=4;$i++){
	$rand=substr($str,mt_rand(0,strlen($str)-1),1);
	$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$rand.'</span>';
}
echo $code;












