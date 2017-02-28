<?php
	$s1 = $_POST["slovo1"];
	$s2 = $_POST["slovo2"];
	$s3 = $_POST["slovo3"];
	$ls1 = strlen($s1);
	$ls2 = strlen($s2);
	$ls3 = strlen($s3);
	if ($ls1 == 5)
	{
		echo $s1;
	}
?>
</br>
<?php
	if ($ls2 == 5)
	{
		echo $s2;
	}
?>
</br>
<?php
	if ($ls3 == 5)
	{
		echo $s3;
	}
?>