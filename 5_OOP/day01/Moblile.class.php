<?php
          //定义一个电话类
		  class Mobile{
				  //成员属性
				  public $name;
				  private $voltage;
				  //成员方法
				  function  setVoltage($voltage){
							$voltage_array=array(110,220);
							if(in_array($voltage,$voltage_array)){
									$this->voltage=$voltage;
							}else{
									 $this->voltage=220;
							}
				  }
				  function showVoltage(){
						  echo $this->voltage;
				  }
				  private function message(){
						 echo "I  can message";
				  }
				  function call(){
					  $this->message();
					  	echo "<br/>";
					  echo "I can call";
				  }
			  
		  }
		 
?>