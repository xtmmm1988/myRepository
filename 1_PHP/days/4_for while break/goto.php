<?php
for($i=0,$j=5;$j<10;$i++){
	while($j--){
		if($j==4)goto end;
	}
}
echo '$i='.$i;
end:
echo '$j='.$j;