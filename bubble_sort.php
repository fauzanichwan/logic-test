<?php

class BubbleSort {

    public function sort($arr) {
        $size = count($arr)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($arr[$k] < $arr[$j]) {
                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                }
            }
        }
        print_r($arr);
    }

}

$bubble = new BubbleSort;
$sort = $bubble->sort(array(1,3,2,8,5,7,4,0));