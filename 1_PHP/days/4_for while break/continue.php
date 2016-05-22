<?php
//******continue*******
//continue 只用在循环中，跳出当前循环，不执行后面的代码；然后进行下一次循环。

for($i=0;$i<4;$i++){
	if($i==3){
		continue;
	}
	echo '<br/>$i='.$i;
}
echo '<br/>hello,<br/>$i='.$i;
//输出结果：$i=0;$i=1;$i=2;hello,$i=4;
echo '<hr/>';
for($i=0;$i<2;$i++){
	for($j=1;$j<4;$j++){
		if($j==2){
			continue;//跳出if层
		}
		echo '$i='.$i,'$j='.$j."<br/>";
	}
}
echo '<hr/>';
for($i=0;$i<2;$i++){
	for($j=1;$j<4;$j++){
		if($j==2){
			continue 2;//跳出for循环内层
		}
		echo '$i='.$i,'$j='.$j."<br/>";
	}
}
echo '<hr/>';
for($i=1;$i<=10;$i++){
	if($i%2!==0){
		continue;
	}
	echo $i.'<br/>';
}























