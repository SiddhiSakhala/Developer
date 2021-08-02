<!DOCTYPE html>
<html>
<head>
	<title>Relational operator</title>
</head>
<body>
<?php
	$a = 42;
	$b = 20;
	if ($a==$b){
		echo"Test 1: $a is equal to $b<br/>";
	}else {
		echo"Test 1 : $a is not equal to $b<br/>";
	}
	if($a>$b){
		echo"Test 2 : $a is greater than $b<br/>";
	}else{
		echo"Test 2 :$a is less than $b<br/>";
	}	
	if($a<$b){
		echo"Test 3 : $a is greater than $b<br/>";
	}else{
		echo"Test 3
		 :$a is less than $b<br/>";
	}
	if($a >=$b){
		echo"Test 4 :$a is less than and equal to $b<br/>";
	}else{
		echo"Test 4 :$a is greater than Equal to $b<br/>";
	}
	if($a!=$b){
		echo"Test 5 :$a is equal to b $b<br/>";
	}else{
		echo"Test 5 :$a is not equal $b<br/>";
	}
	?>
</body>
</html>