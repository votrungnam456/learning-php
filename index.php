<?php

define('BIEN_CONSTANTS', 'day la bien constants');

const BIEN_CONSTANTS_2 = 'day la bien constants thu 2';
$bienSo1 = "string";
$bienSo2 = 12.5;
// echo "Hello World <br/>" . $bienSo1 . "" . $bienSo2 . " <br/>";

$bienSo5EpKieuString = (string)$bienSo2;

$bienSo3 = $bienSo1 . $bienSo2;

$bienSo4 = "Day bien so 4 bao gom bien so 1: $bienSo1 , bien so 2: $bienSo2 va bien so 3: $bienSo3 <br/>";

echo $bienSo4;

echo "Day la bien da duoc ep kieu";

var_dump($bienSo5EpKieuString);


$bienBooleanString = 'true';
$bienBoolean = (bool)$bienBooleanString;

var_dump($bienBoolean);

echo 'co phai bien boolean khong' . is_bool($bienBoolean) . '<br/>';
// $bienCheckExit = 2;

// if ($bienCheckExit > 1) {
//     exit('dung chuong trinh');
// }

$bienArrayChuaBienDoi = '1,2,3,4';

$bienArray = (array)$bienArrayChuaBienDoi;

echo $bienArray;

print_r($bienArray);
// echo "" . $bienSo3 . "";

// var_dump($bienSo2);

// $array = ['a', 'b', 'c'];
// print_r($array);


echo '<br/> 
    <ul>
        <li>' . $bienSo1 . '</li>
        <li>' . $bienSo2 . '</li>
        <li>' . $bienSo3 . '</li>
        <li>' . $bienSo4 . '</li>
        <li>' . BIEN_CONSTANTS_2 . '</li>
    <ul/>
';


$bienToanTu3Ngoi = 10;

echo $bienToanTu3Ngoi > 1 ? 'bien toan tu 3 ngoi lon hon 1' : 'bien toan tu 3 ngoi nho hon 1';

if ($bienToanTu3Ngoi > 1):
?>
    <ul>
        <li>Day la khi bien toan tu 3 ngoi lon hon 1</li>
    </ul>
<?php
else:
    echo 'day la khi bien toan tu ba ngoi nho hon 1';
endif;


echo 'cu phap thay the cho For';
for ($i = 0; $i < 10; $i++):
?>
    <ul>
        <li><?php echo $i; ?></li>
    </ul>
<?php
endfor;


echo 'cu phap thay the cho While';

$bienWhileCuPhapThayThe = 1;
while ($bienWhileCuPhapThayThe < 10):
?>
    <?php
    echo $bienWhileCuPhapThayThe;
    $bienWhileCuPhapThayThe++;
    ?>

<?php
endwhile;
