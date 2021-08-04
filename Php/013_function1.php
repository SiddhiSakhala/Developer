//Function of Arithmetic opertaion

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

//call by value.

function Add($a,$b){
	$c=$a+$b;
	echo("Addition = $c<br>");
}
function sub($a,$b){
	$c=$a-$b;
	echo("Sub = $c<br>");
}

//Call by reference.

$a = 4;
$b = 2;
function multi(&$a,&$b){
	$c=$a*$b;
	echo("multi = $c<br>");
}
function div(&$a,&$b){
	$c=$a/$b;
	echo("div = $c<br>");
}
sub(4,5);
Add(3,5);
div($b,$a);
multi($a,$b);

?>
</body>
</html>