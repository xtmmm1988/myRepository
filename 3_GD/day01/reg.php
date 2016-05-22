<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> 注册界面</title>
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta  http-equiv="content-type" content="text/html;charset=utf-8"/>
 </head>

 <body>
  <form action="regAction.php" method="post">
			<table border="1px" cellspadding="0" cellspacing="0" style="text-align:center" align="center">
				<tr>
					<td>用户名</td>
					<td>
						<input type="text" name="user"/>
					</td>
				</tr>
				<tr>
					<td>密码</td>
					<td>
						<input type="password" name="pwd"/>
					</td>
				</tr>
				<tr>
					<td>验证码</td>
					<td>
						<input type="text" name="vcode"/><img src="vcode.php" />
					</td>
				</tr>
				<tr>
					<td>性别</td>
					<td>
						<input type="radio" name="sex" value="man"/>男
                        <input type="radio" name="sex" value="man"/>女
					</td>
				</tr>
				<tr>
					<td>年龄</td>
					<td>
						<input type="text" name="age" />
                     </td>
				</tr>
				<tr>
					<td>邮箱</td>
					<td>
						<input type="text" name="email" />
                     </td>
				</tr>
				<tr>
					<td>地址</td>
					<td>
						<input type="text" name="addr" />
                     </td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="注册"/>
					</td>
				</tr>

			</table>
		</form>
 </body>
</html>
