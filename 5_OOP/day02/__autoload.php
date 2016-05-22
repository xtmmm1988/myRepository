<?php
header("content-type:text/html;charset=utf-8");
 function __autoload($classname){
     include_once $classname.".class.php";
 }
 $t=new Teacher("学生","28","夏伟","男");
 $t->say();
 ?>