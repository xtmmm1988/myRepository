<?php
$subject=array("2016.05.07","2016/05/08","2016-05-09");
$pattern = "/^(\d{4})([-\/.])\d{2}\\2\d{2}$/";
foreach($subject as $value){
preg_match_all($pattern,$value,$macth);
echo "<pre>";
print_r($macth);
echo "</pre>";
}
?>