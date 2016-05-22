<?php
	$json_test=array("username"=>"tom","password"=>"123","phone"=>"15900582203");
	//将数组转为字符串
	$json=json_encode($json_test);
	//将字符串转为数组
	$i=json_decode($json);
	foreach($i as $key=>$value){
		echo $key.":".$value;
		echo "<br/>";		
	}
?>