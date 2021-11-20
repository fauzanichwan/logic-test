<?php

class Prima {

    public function check($number) {
        $count = (int) 0;

        for ($i = 1; $i <= $number; $i++) {
            if ($number%$i == 0) {
                $count += 1;
            }
        }

        if ($count == 2) {
            echo $number . " adalah bilangan prima";
        } else {
            echo $number . " bukan bilangan prima";
        }
    }

}

$prima = new Prima;
$check = $prima->check(3);