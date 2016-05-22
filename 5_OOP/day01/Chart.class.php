<?php
              //    *
             //   ***
             //  *****
              // 定义一个类
		  class  Chart{
			         //定义方法
			          public  function printchart($n){
			                   //使用for循环
				              for($i=0;$i<=$n;$i++){
					          //打印空格个数
						         for($k=0;$k<=$n-$i;$k++){
						               echo "&nbsp;";
						           }
				                 for($j=0;$j<($i-1)*2+1;$j++){
					                   echo "*";
				                  }
					            echo "<br/>";
			               }		  
			        }
		  }
?>