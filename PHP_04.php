<?php 
$array = array(790,483,281,224,198,60,698,400,709,168);
$count = count($array);
$jumlah = 0;
echo "<pre>";
print_r($array);
for ($i = 0; $i < $count; $i++) {
	$jumlah+=$array[$i];

	for ($j = $i + 1; $j < $count; $j++) {
		if ($array[$i] > $array[$j]) {
			$temp = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $temp;
		}
	}
}
echo "Hasil urut Array:" . "<br/>";
print_r($array);
echo "<br/>Angka terkecil:" . "<br/>";
print_r($array[0]);
echo "<br/>Rata - rata:" . "<br/>";
print_r($jumlah/$count);
?>