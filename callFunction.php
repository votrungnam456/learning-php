<?php
// include("function.php"); 

if (!function_exists("sum")) {
    function sum(int $c, int $d): int
    {
        return $c * $d;
    }
}

echo sum(5, 2);

echo sum(3, 4);
