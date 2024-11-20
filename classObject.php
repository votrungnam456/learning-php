<?php

class classExample
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
    public function show()
    {
        echo "ham trong class";
    }
}

$bienExmaple = new classExample;

$bienExmaple->show();

$a = 10;
$b = 5;
echo '<br/>';
echo $bienExmaple->sum(a: $a, b: $b);
