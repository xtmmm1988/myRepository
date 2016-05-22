<?php
//$subject="th3is is a i_s5lan7dABCD";
//$pattern="/[0-9_a-zA-Z]/";
$subjoct="th,i?s is a te#s!t";
$pattern="/[,?!#]/";
preg_match_all($pattern,$subject,$match);
echo "<pre>";
print_r($match);
echo "</pre>";
?>