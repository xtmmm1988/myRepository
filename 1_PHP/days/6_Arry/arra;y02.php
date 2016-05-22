<?php
header('content-type:text/html;charset=utf-8');
$arr=array(
        0=>  array('user'=>'tom',
                   'age'=>'18',
                   'sex'=>'男',
                   'salary'=>'10000'
					),
        1=>  array('user'=>'john',
                   'age'=>'20',
                    'sex'=>'男',
					'salary'=>'11000'
					),
        2=>  array('user'=>'lily',
					'age'=>'21',
					'sex'=>'女',
					'salary'=>'12000'
					),
        3=>  array('user'=>'sam',
					'age'=>'20',
					'sex'=>'男',
					'salary'=>'13000'
					)
)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<table>
<tr><th>姓名</th><th>年龄</th><th>性别</th><th>薪资</th></tr>
<?php
foreach($arr as $k=>$v){
?>

<tr>
<td><?php echo $v['user'] ?></td>
<td><?php echo $v['age'] ?></td>
<td><?php echo $v['sex'] ?></td>
<td><?php echo $v['salary'] ?></td>
</tr>
<?php } ?>
</table>

</body>
</html>