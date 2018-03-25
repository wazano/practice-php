<?php
    //配列から不要な値を取り除く方法
    $a = [1, 2, 3, 4, 5, 10, 11, 12];

    $callback = function($v) {
        $v % 2 == 1;
    };
    
    $result = array_filter($a, $callback);
?>