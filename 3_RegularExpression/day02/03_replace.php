<?php
header("Content-type:text/html;charset=utf-8");
//字符串的替换
  $subject="今天晚上吃白菜，豆腐，米饭";
  $search=array("白菜","豆腐","米饭");
  $replace=array("面条","凉皮","米线");
  echo str_replace($search,$replace,$subject);


?>