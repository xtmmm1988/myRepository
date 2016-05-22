<?php
$email=array("tom.service@yahoo.com",
                   "@139.cn",
				   "fashf@139.te",
				   "15900582203@139.com");
$pattern="/\w+([-.]?)(\w*)@\w+\.(com|cn|org|net)/";
 foreach($email as $value){
	preg_match_all( $pattern,$value,$match);
	echo "<pre>";
	print_r($match);
	echo "</pre>";
	echo "<hr/>";
}
?>