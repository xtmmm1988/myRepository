<?php
		//验证用户是否存在
		include_once"mysql.php";
        isLogin();
		echo $_SESSION['username']."您好";
		//从数据库中读取当前用户的邮件
		$sql="select id,title from email where user_id=:id";
		$statm = $pdo->prepare($sql);
		//PDOStatment绑定参数
		$statm->bindParam("id",$id);
		$id = $_SESSION['id'];
		//PDOStatment通知mysql执行sql语句
		$statm->execute();
		//通过PDOStatment获取记录数
		$emailCount = $statm->rowCount(); 
		echo "您有".$emailCount."封邮件";
		echo "<table border='1' width='500'>";
		echo "<tr><th>邮件ID</th><th>邮件标题</th></tr>";
		while($row = $statm->fetch(PDO::FETCH_ASSOC)){
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['title']."</td>";
				echo "</tr>";	
		}


echo "</table>";

echo "<a href='logout.php'>退出</a>"
		

 
?>