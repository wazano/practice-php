<?php
    //配列から不要な値を取り除く方法
    $a = [1, 2, 3, 4, 5, 10, 11, 12];

    $result = array_filter($a, function($v) {
        return $v % 2 == 1;
    });

    print_r($a);

    print_r($result);
?>