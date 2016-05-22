<?php
header("content-type:text/html;charset=utf-8");
		//定义一个类
       class DB{
			//定义成员属性
		   public $localhost;
		   public $username;
		   public $password;
		   public $dbname;
		   public $link;
		   //定义一个构造方法
		   function __construct($localhost,$username,$password,$dbname){
						$this->localhost=$localhost;
						$this->username=$username;
						$this->password=$password;
						$this->dbname=$dbname;	
						$this->connect();
						$this->select();
		   }
		   //链接数据库
		   function connect(){
					$this->link=mysql_connect($this->localhost,$this->username,$this->password);		   
		   }
		   //使用数据库
		   function select(){
						mysql_select_db($this->dbname);
		   }
		   //成员方法 
		   //增
		  function insert($tbname,$fields,$values){
					$sql="insert into $tbname ($fields) values ($values)";
					//echo $sql;exit;
					$result=mysql_query($sql);
					//result 会是true 和 false
					if($result){
						echo "插入执行成功";
					}else{
						echo "插入执行失败";
					}
				}
         //改
		 function update($tbname,$sets,$where=''){
					$sql = "update $tbname set $sets";
					if($where!=""){
					      $sql = $sql." where ".$where;
					}
					        $result = mysql_query($sql);
					if($result){
							echo "更新数据成功";
					}else{
							echo "更新数据失败";
					}
			} 

					//析构函数 关闭资源
					function __destruct(){
					mysql_close($this->link);
					}


	   }
	   //定义一个对象
	   $db1=new DB("localhost","root","","zs");
	   //链接数据库
	  // $db1->connect();
	   //使用数据库
	  // $db1->select();
	   //调用成员方法
	  // $db1->insert("users","name,password,age,sex,email,addr","'xtmm','xtmm123','20','1','xtmmm@qq.com','上海'")
       $db1->update("users","age=18","id=1");
?>