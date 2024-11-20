<?php

$string = 'Study | PHP | alone';

$array = explode('|', $string);
// explode giống split bên js



var_dump($array);

echo '<br/>';
print_r($array);

$string2 = implode('|', $array);
// implode giống join bên js
echo '<br/>';
echo $string2;
echo '<br/>================================<br/>';

$stringLen = strlen($string);
echo '<br/>';
echo "số ký tự của string1 là $stringLen";

echo '<br/>================================<br/>';
$stringCountNumber = str_word_count($string);

echo '<br/>';
echo $stringCountNumber;

echo '<br/>================================<br/>';
echo 'Hàm str_repeat <br/>';

echo str_repeat($string . '<br/>', 3);
echo '<br/>================================<br/>';

echo 'Hàm str_replace <br/>';

$stringBeingReplace = 'Study PHP ALone<br/>';
echo 'String chuẩn: Study PHP ALone<br/>';
echo 'String sau khi thay:' . str_replace('PHP', 'Python', $stringBeingReplace);
echo '<br/>================================<br/>';

echo 'Hàm mã hoá md5 <br/>';
echo md5($string);

echo '<br/>================================<br/>';

echo 'Hàm mã hoá sha1 <br/>';
echo sha1($string);
echo '<br/>================================<br/>';
echo 'Hàm htmlentities <br/>';
echo htmlentities('<p>Đây không phải là thẻ p</p>');
echo '<br/>================================<br/>';
echo 'Hàm htmlentities <br/>';
echo html_entity_decode(htmlentities('<p>Đây không phải là thẻ p</p>'));
echo '<br/>================================<br/>';
echo 'Hàm strip_tags: bỏ các thẻ html <br/>';
$stringHtml = "<p>Đây không phải là thẻ p</p><b>Đây la thẻ b</b>";
echo strip_tags($stringHtml, '<b>');

echo '<br/>================================<br/>';
echo 'Hàm substr: cắt chuỗi từ vị trí cho trước đến số lượng ký tự nhất định <br/>';

$stringBeingCut = 'Study PHP Alone';

echo 'String mẫu: ' . $stringBeingCut . '<br/>';
echo 'String mới: ' . substr($stringBeingCut, 0, 3);

echo '<br/>================================<br/>';
echo 'Hàm strstr: cắt chuỗi từ ký tự đã cho trước <br/>';

$stringBeingCut = 'Study PHP Alone';

echo 'String mẫu: ' . $stringBeingCut . '<br/>';
echo 'String mới: ' . strstr($stringBeingCut, 'PHP');


echo '<br/>================================<br/>';
echo 'Hàm strpos: lấy vị trí của ký tự <br/>';

$stringBeingCut = 'Study PHP Alone';

echo 'String mẫu: ' . $stringBeingCut . '<br/>';
echo 'strpos: ' . strpos($stringBeingCut, 'PHP') . '<br/>';
echo 'strpos không tìm thấy sẽ trả ra false';

echo '<br/>================================<br/>';
echo 'Hàm substr_replace: Cắt bỏ 1 đoạn chuỗi và thay thế bằng 1 đoạn khác <br/>';

$stringBeingCut = 'Study PHP Alone';

echo 'String mẫu: ' . $stringBeingCut . '<br/>';
echo 'substr_replace: ' . substr_replace($stringBeingCut, 'With Friend', 10, 5) . '<br/>';

echo '<br/>================================<br/>';
echo 'Hàm strtolower: chuyển tất cả sang viết thường <br/>';

$stringBeingCut = 'Study PHP Alone';

echo 'String mẫu: ' . $stringBeingCut . '<br/>';
echo 'strtolower: ' . strtolower($stringBeingCut) . '<br/>';

echo '<br/>================================<br/>';
echo 'Hàm strtoupper: chuyển tất cả sang viết hoa <br/>';

$stringBeingCut = 'Study PHP Alone';

echo 'String mẫu: ' . $stringBeingCut . '<br/>';
echo 'strtoupper: ' . strtoupper($stringBeingCut) . '<br/>';

echo '<br/>================================<br/>';
echo 'Hàm ucfirst: Viết hoa chữ cái đầu <br/>';

$stringBeingCut3 = 'study php alone';

echo 'String mẫu: ' . $stringBeingCut3 . '<br/>';
echo 'ucfirst: ' . ucfirst($stringBeingCut3) . '<br/>';

echo '<br/>================================<br/>';
echo 'Hàm lcfirst: Viết thường chữ cái đầu <br/>';

$stringBeingCut4 = 'STUDY PHP ALONE';

echo 'String mẫu: ' . $stringBeingCut4 . '<br/>';
echo 'lcfirst: ' . lcfirst($stringBeingCut4) . '<br/>';

$stringBeingCut5 = 'study php alone';
echo '<br/>================================<br/>';
echo 'Hàm ucwords: Viết hoa chữ cái đầu của tất cả các từ <br/>';
echo 'String mẫu: ' . $stringBeingCut5 . '<br/>';
echo 'ucwords: ' . ucwords($stringBeingCut5) . '<br/>';

echo '<br/>================================<br/>';
$stringBeingCut6 = 'lk   study php alone   kl';
echo 'Hàm trim: Xoá ký tự đầu và cuối (khoảng trắng)<br/>';
echo 'String mẫu: ' . $stringBeingCut6 . '<br/>';
echo 'trim: ' . trim($stringBeingCut6, "l") . '<br/>';


echo '<br/>================================<br/>';
echo "json_endcode = Json.parse";
echo "json_deconde = Json.Stringify";
