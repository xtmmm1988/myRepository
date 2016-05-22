<?php
header('content-type:text/html;charset=utf-8');
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
for($i=2;$i<=200;$i++){
	$flag=ture;
	for($j=2;$i<$i-1;$j++){
		if($i%$j!=0){
			$flag=false;
			break;
		}
	}
	if($flag){
		echo  $i.'是素数';
	}else{
		echo $i.	'不是素数';
	}
}