<?php
	for ($i = 1; $i <= 6; $i++) 
	{
		$arr[$i] = rand(-10, 10);
	}
	print_r($arr);
?>
</br>
<?php
	for ($i = 1; $i <= 6; $i++)
	{
		$arr[$i] = $arr[$i] * $arr[$i];
	}
	print_r($arr)
?>
</br>
<?php
	$summ = array_sum($arr);
	for ($i =1; $i <=6; $i++)
	{
		$K[$i] = (sqrt(abs($arr[$i])))/($summ);
	}
	print_r($K);
?>