<h2>Задание 1</h2>
<?php
	echo "<h3>Подзадание 1</h3>";
	$arr = array("Яйцо", "Хлеб", "Молоко", "Колбаса", "Сыр");
	print_r($arr);
	echo "</br>";
	echo "<h3>Подзадание 2</h3>";
	$arr[] = "Рыба";
	$arr[] = "Мясо";
	print_r($arr);
	echo "<h3>Подзадание 3</h3>";
	$count = count($arr);
	echo "Количество элементов в массиве: " . $count;
	echo "</br>Товар: ";
	for ($i = 0; $i < $count; $i++)
	{
		echo $arr[$i] . " ";
	}
	echo "</br>";
	echo "<h3>Подзадание 4</h3>";
	$arr1 = array("Яйцо", "Хлеб", "Молоко", "Колбаса", "Сыр");
	print_r($arr1);
	echo "</br>";
	sort($arr1);
	print_r($arr1);
?>
</br>
<h2>Задание 2</h2>
<?php
	$str = "ABCDE";
	$a = $str{0};
	echo $str . "</br>";
	$str = substr($str, 1, strlen($str)-1); /*BCDE*/
	for ($i = 1; $i <= strlen($str); $i++)
	{
		$end = strrev(substr($str, strlen($str)-$i));
		echo $end . $a . substr($str, $i) . "</br>";
	} 
?>