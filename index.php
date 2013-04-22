<?PHP 
class SayHello{ 
public $x;

function SayHello(){ 
	$x = "Hello World"; 
}

function goodbye(){ 
	$y = "Good Bye!"; 
	return $y;
}


};
?>
<html>
<head></head>

<body>
	<?PHP $t = new SayHello; echo $t->goodbye();  ?> 
</body>

</html> 
