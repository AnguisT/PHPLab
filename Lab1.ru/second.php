<?php
	$l=$_POST["l"];
	$n=$_POST["n"];
	$q=$_POST["q"];
	$K[1] = (($l*$l) + ($n*$n));
	if ($l >= $n)
	{
		$K[2] = 1/($n*$q);
	}
	elseif ($l < $n) 
	{
		$K[2] = ($l-$n)*$q;
	}
	$max = max($K);
	$index = array_search($max, $K);
	echo "Max " . $max;
?>
</br>
<?php
	echo "Index " . $index;
?>