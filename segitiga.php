<?php

class Segitiga {

    public function print($number) {
        for ($i = 1; $i <= $number; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "<br>";
        }
    }

}

$segitiga = new Segitiga;
$print = $segitiga->print(8);