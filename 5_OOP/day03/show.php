<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>图形计算器</title>
</head>
<body>
<center>图形计算器</center>
<hr/>
<a href="show.php?action=Rectangle">矩形</a> | <a href="show.php?action=Delta">三角形</a>  | 圆形
<br/><br/>
<?php
		function __autoload($classname){
				include $classname.".class.php";
        }
		$classname = isset($_GET['action'])?$_GET['action']:"";
				if($classname!=""){
					   $s = new $classname();
					   echo  $s->show();
				}
			   if($_POST){
						$s1 = new $classname($_POST);
						echo $s1->name."的周长为：".$s1->girth();
						echo "<br/>";
						echo $s1->name."的面积为：".$s1->area();	
			  }else{
					echo "<br/>请选择要计算的图形";
			}
?>
</body>
</html>