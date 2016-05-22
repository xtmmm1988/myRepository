<?php
header('Content-Type:text/html;charset=utf-8');
for($i=0;$i<13;$i++){
	echo '$i='.$i.'<br/>';
	if($i==10){
		break;
	}
}
//if语句
$day=12;
if($day>=1 && $day<=10){
	echo '上旬';
}elseif($day>=11&&$day<=20){
	echo '中旬';
}elseif($day>=21&&$day<=31){
	echo '下旬';
}
echo '<hr/>';
//switch语句
$week=0;
switch ($week){
	case 1:
		echo '星期一';
		break;
	case 2:
		echo '星期二';
		break;
	case 3:
		echo '星期三';
		break;
	case 4:
	    echo '星期四';
		break;
	case 5:
		echo '星期五';
		break;
	case 6:
		echo '星期六';
		break;
	case 0:
		echo '星期天';
		break;
	default:
		break;	
		
}
echo '<hr/>';
$score='dd';
if(is_numeric($score)){
	if($score>=90 && $score<=100){
		echo "优秀";
	}elseif($score>=80 && $score<90){
		echo "良上";
	}elseif($score>=70 && $score<80){
		echo "良下";
	}elseif($score>=60 && $score<70){
		echo "及格";
	}elseif($score>=0 && $score<60){
		echo "不及格";
	}
}
echo "<hr/>";
$score=80;
switch(true){
	case $score>=90 && $score<=100:
		echo "优秀";
		break;
	case $score>=80 && $score<90:
		echo "良上";
		break;
	case $score>=70 && $score<80:
		echo "良下";
		break;
	case $score>=60 && $score<70:
	    echo "及格";
	    break;
	case $score>=0 && $score<60:
		echo "不及格";
		break;
	default:
		break;
	
}
$num1=9;
$num2=5;

echo $num1%$num2;



















