<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
	$a = 10;
	do{
		if($a ==15){
			$a = $a+1;
			continue;
		}
		echo("Value of a is $a<br>");
		$a = $a +1;
	}while($a<20);
	?>
</body>
</html>