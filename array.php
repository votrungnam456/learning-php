<?php
$arr = array('HTML', 'CSS', 'JS');
echo '<br>';
print_r($arr);
echo '<br>';


$arr2 = ['address1' => 'a', 'address3' => 'b', 'address5' => 'c'];

echo '<br>';
print_r($arr2);
echo '<br>';

$arr2['address4'] = 'PHP';
echo '<br>';
print_r($arr2);
echo '<br>';

$arr2[] = 'c';
echo '<br>';
print_r($arr2);
echo '<br>';

$arr2['address6'] = 'PHP';
$arr2[] = 'b';
echo '<br>';
print_r($arr2);
echo '<br>';

array_push($arr, $arr2);
echo '<br>';
print_r($arr);
echo '<br>';

foreach ($arr2 as $key => $value) {
    echo '' . $key . '' . $value . '<br>';
}

unset($arr2['address1']);

print_r($arr2);
