<?php
date_default_timezone_set('PRC');
/* 获得文件扩展名
 * @param string $n
* @return string
*/
function exTension($n){
	return substr($n,strrpos($n,'.')+1);
}
/* 获得唯一标识名称
 * @param
* @return string
*/
function uuid(){
	return date('YmdHis').mt_rand(1000,9999);
}
