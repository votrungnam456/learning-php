<?php

$arr = ['php' => 'php child', 'html' => ['js' => 'jxxxxx', 'jsx'], 'css'];

echo 'Mảng mẫu: <br>';
print_r($arr);

echo 'Đếm mảng <br>';
echo count($arr) . '<br>';

print_r(array_values($arr));

echo '<br>array_values lấy tất cả các value của mảng thành 1 mảng mới<br>';
echo '<br>array_keys lấy tất cả các key của mảng thành 1 mảng mới<br>';

echo '<br>array_pop xoá và trả về phần tử cuối cùng<br>';
echo array_pop($arr);

echo '<br>is_array kiểm tra phải dạng mảng hay không <br>';
echo '<br>array_push thêm phân tử vào mảng<br>';

echo "<br>array_shift xoá phần tử đầu tiền của mảng và trả ra<br>";

echo array_shift($arr) . '<br>';
print_r($arr);

echo "<br>array_unshift thêm vào đầu mảng và trả ra length của mảng sau khi đã thêm<br>";

echo array_unshift($arr, 'add', 'add2') . '<br>';
print_r($arr);


echo "<br>in_array kiểm tra xem cái có value nào giống với value cần tìm hay không<br>";

echo in_array('add2', $arr) . '<br>';
// print_r($arr);
