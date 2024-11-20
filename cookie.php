<?php

setcookie('user', 'namvt', time() + 100000, '/', '', false, true);
// path = '/' thì set cho toàn bộ localhost


// xóa cookie
setcookie('user', 'namvt', time() - 60, '/', '', false, true);
echo $_COOKIE['user'];
