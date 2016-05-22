<?php
header('content-type:text/html;charset=utf-8');
require 'function01.php';//引入函数
$num1=90;
$num2=56;
$oper="+";
$sre=jishuan($num1,$num2,$oper);
echo '计算结果是'.$sre;
/*require  ('要引入的文件名');
$filePath="abc.php";
require $filePath;
require '要引入的文件名（路径）';*/