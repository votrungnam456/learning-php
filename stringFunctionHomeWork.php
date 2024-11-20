<?php

echo "Bài 1: VIết chương trình lấy 5 ký tự cuối chuỗi<br/>";

echo "TH1: Không là tiếng việt<br/>";

$string1 = "Study PHP Alone";
// echo substr($string1, strlen($string1) - 5, 5);
echo substr($string1, -5) . '<br/>';

echo "TH2: là tiếng việt<br/>";
$string2 = "Học PHP Trên Youtube đó";
echo mb_substr($string2, -5, null, 'UTF-8');
echo '<br/>================================<br/>';

echo "Bài 2: Viết chương trình xoá chữ đầu tiên trong chuỗi <br> Input: Phạm Ngọc Hùng <br> output: Ngọc Hùng<br>";


echo "TH1: Không là tiếng việt<br/>";

$string3 = "Pham Ngoc Hung<br/>";

$strPos = strpos($string3, " ");
echo substr($string3, $strPos + 1);

echo "TH2: là tiếng việt<br/>";
$string4 = "Phạm Ngọc Hùng";

$strPos2 = mb_strpos($string3, " ", 0, 'UTF-8');

echo mb_substr($string4, $strPos2 + 1, null, 'UTF-8');
