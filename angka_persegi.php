<?php

class Number {

    public function print($number) {
        $start = 1;
        $limit = floor($number/3);

        for ($i = 1; $i <= $limit; $i++) {
            $x = $i;
            $val1 = $x;
            $val2 = $x += $limit;
            $val3 = $x += $limit;

            echo $val1 . ' ' . $val2 . ' ' . $val3;
            echo "<br>";
        }
    }

}

$number = new Number;
$print = $number->print(18);