<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logical_004</title>
</head>
<body>
<?php
	$a =5;
	$b =0;

	if($a && $b){
		echo"Test 1: both a and b are true <br/>";
	}else{
		echo"Test 1:either a or b is False <br/>";
	}
	if($a and $b){
		echo"Test 2: both a and b are true <br/>";
	}else{
		echo"Test 2: either a or b is False <br/>";
	}
	if($a || $b){
		echo"Test 3: either a or b is true <br/>";
	}else{
		echo"Test 3: both a and b are False <br/>";
	}
	if($a or $b){
		echo"Test 4: either a or b is true <br/>";
	}else{
		echo"Test 4: both a and b is false <br/>";
	}

	$a =10;
	$b =20;
	if($a){
		echo"Test 5: a is true<br/>";
	}else{
		echo"Test 5: a is false<br/>";
	}
	if($b){
		echo"Test 6: b is true<br/>";
	}else{
		echo"Test 6: b is false<br/>";
	}
	if(!$a){
		echo"Test 7: a is true<br/>";
	}else{
		echo"Test 7: a is False<br/>";
	}
?>
</body>
</html>