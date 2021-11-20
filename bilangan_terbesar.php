<?php

class Number {

    public function biggest($array) {
        sort($array);
        $length = count($array);

        echo $array[$length-1];
    }

}

$number = new Number;
$sort = $number->biggest(array(4,3,7,46,2,10,5));