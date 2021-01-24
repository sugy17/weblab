<?php 
	$count= (int)(file_get_contents("6-count.txt")) + 1;
	file_put_contents("6-count.txt", $count, LOCK_EX);
	echo "<center style='padding-top:20px;color: green; font-size:20px;'><h2> The visitor count : $count </h2></center>";
?>