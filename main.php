<?php
    $a = [1, 10, 100, 1000, 10000];

    $callback = function($v) {
        return $v * 2;
    };

    $result = array_map($callback, $a);

    print_r($result);
?>