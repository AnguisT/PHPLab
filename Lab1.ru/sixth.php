<?php
	for ($i = 1; $i <= 10; $i++) 
	{
		$Y[$i] = rand(-10, 10);
	}
	print_r($Y)
?>
</br>
<?php
	$min = min($Y);
	$index = array_search($max, $Y);
	if ($index < 5)
	{
		for ($i = 1; $i <= 10; $i++)
		{
			if ($Y[$i] < 0)
			{
				$Y[$i] = $min;
			}
		}
	}
	print_r($Y);
?>