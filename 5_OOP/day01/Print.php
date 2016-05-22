<?php
       //接收myInput数据
	   $layer=$_REQUEST['layer'];
	   //调入类
	   require_once'Chart.class.php';
	   //创建一个类
	   $print1=new Chart();
	   $print1->printchart($layer);
?>