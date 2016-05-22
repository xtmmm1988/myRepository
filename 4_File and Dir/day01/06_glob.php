<?php
//glob函数应用举例
$pathname="../GD/day01/*";
$arr=glob($pathname);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>