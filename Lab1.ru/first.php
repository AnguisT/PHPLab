<?php
	$x=$_POST["x"];
	$y=$_POST["y"];
	$a=$_POST["a"];
	$N=(($x*$x)-($y*$y))/(($x-$a)*$y);
	$L=(sin($N)*sin($N));
	echo "N= " . $N;
?>
	</br>
<?php
	echo "L= " . $L;
?>