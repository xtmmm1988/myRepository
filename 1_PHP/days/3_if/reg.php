 <?php
header('Content-Type:text/html;charset=utf-8');
if(isset($_REQUEST['mail'])){
$user=$_REQUEST['user'];
$pwd1=$_REQUEST['pwd1'];
$pwd2=$_REQUEST['pwd2'];
$email=$_REQUEST['email'];
$mail=$_REQUEST['mail'];
$nbsp='&nbsp;';
	if(!strlen($user)){
		die('用户名不能为空');
	}elseif (strpos($user,' ')){
		die('用户名不能为空格');
	}elseif(strlen($user)<4||strlen($user)>12){
		die('用户名在 4-12之间');
	}elseif(!strlen($pwd1)){
		die('密码长度不能为空');
	}elseif(strlen($pwd1)<6||strlen($pwd1)>15){
		die('密码长度在 6-15之间');
	}elseif($pwd1!=$pwd2){
		die('两次密码不一致');
	}elseif(!strlen($email)){
		die('邮箱不能为空');
	}elseif(!strpos($mail,'@')){
		die('@不存在');
	}
}	

?>
<br/>
<a href="reg.html">返回登录页面</a>























