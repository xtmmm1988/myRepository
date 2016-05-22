<?php
/*

*/
/*$subject="this is a test";
echo "<pre>";
print_r(explode("t",$subject));
echo "</pre>";*/
$subject="th2is i6s a t8es9t";
$pattern="/[2689]/";
echo "<pre>";
print_r(preg_split($pattern,$subject));
echo "</pre>";
?>