<?php

echo "Tính số Fibonacci: 0 ,1 ,1,2,3,5,8,13,21,34,55,... <br> biết rằng số sau bằng tổng 2 số trước ví dụ số 8 thì bằng 3 + 5 trong dãy số trên <br> Tính số Fibonacci thứ n <br>";


function Fibonacci($n)
{
    if (in_array($n, [0, 1])) {
        return $n;
    }
    return Fibonacci($n - 1) + Fibonacci($n - 2);
}
