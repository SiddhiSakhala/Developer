<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conditional Operator</title>
</head>
<body>
<?php
$a = 10;
$b = 20;
$result = ($a>$b)? $a:$b;
echo"Test 1 : Value of result is $result<br/>";
$result =($a<$b)? $a:$b;
echo"Test 2: Value of result is $result<br/>";
?>
</body>
</html>	