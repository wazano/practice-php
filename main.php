<?php

    $array = array(3, 100, 43, 66, 21, 43);
    echo $array[1] . "\n";

    $map = [
        "Nami" => 18,
        "Sanji" => 20,
        "Nozawa" => 23
    ];

    echo $map["Nami"] . "\n";

    //foreachで配列とmapを列挙すると面白い現象が見れるらしい
    $a = [0, 1];
    $a[5] = 5;
    $a[4] = 4;
    $a[2] = 2;
    $a[3] = 3;

    for($i = 0; $i < count($a); $i++) {
        echo $a[$i] . "\n";
    }

    //foreach文で配列$aの一覧を表示
    foreach ($a as $e) {
        echo $e . "\n";
    }

?>