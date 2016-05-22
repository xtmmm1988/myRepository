<?php
/*元字应用举例
    *   0~多次
+  1~多次
?    0~1次
{n}  指定次数
{n,}  不少于指定次数
{n,m}  指定次数范围
 |
 ^和 \A 指定元字符以什么开始
 $和 \Z  指定元字符以什么结束
 \b和 \B   \b定义原子的边界 \B定义非边界
() 子模式  改变匹配的优先级
*/
$subject="abc hello world abc";
$pattern="/^abc.*abc$/";
preg_match_all($pattern,$subject,$match);
echo "<pre>";
print_r($match);
echo "</pre>";
?>