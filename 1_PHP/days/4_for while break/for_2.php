<?php
$n=9;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$i;$j++){
		echo $j.'*'.$i.'='.$i*$j."&nbsp;&nbsp;";
	}
	echo '<br/>';
}