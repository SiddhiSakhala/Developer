<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$a = 10;
$b = 5;
$c ;
$ch = 'A';
Switch ($ch)
{
	case "one":
	$c = $a+$b;
	echo"Add = $c <br>";
	break;
	case "two":
	$c = $a-$b;
	echo"Sub = $c<br>";
	break;
	case "three":
	$c = $a*$b;
	echo"Multi = $c<br>";
	break;
	case 'A':
	$c = $a/$b;
	echo"Div = $c<br>";
	break;
	default:
	echo"Invalid";

}
?>
</body>
</html>