<?php
function quick_sort(&$arr,$left,$right) { 
	if($left >= $right) 
   		return;

	$base = $arr[$left];
	$i = $left;
	$j = $right;

	while($i < $j) {
		while($arr[$j] <= $base && $i < $j)
			$j--;

		while($arr[$i] >= $base && $i < $j)
			$i++;

		if($i < $j) {
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
		}
	}

	$arr[$left] = $arr[$j];
	$arr[$j] = $base;

	quick_sort($arr,$left,$j-1);
	quick_sort($arr,$j+1,$right);
}

/*10个随机数*/
$arr = array();
for ($i=0;$i<10;$i++)
	$arr[$i] = mt_rand(1,50);

echo "10个数是:<br/>";
foreach ($arr as $value) {
	echo $value."<br/>";
}

quick_sort($arr,0,count($arr)-1);

echo "排序后是:<br/>";
foreach ($arr as $value) {
	echo $value."<br/>";
}
?>