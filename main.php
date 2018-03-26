<?php
    //名簿リストを初期化
    $persons = [];

    //人を名簿に追加1
    array_push($persons, [
        "name" => "Nami",
        "age" => 18
    ]);
    
    //人を名簿に追加2
    array_push($persons, [
        "name" => "Sanji",
        "age" => 20
    ]);

    //人を名簿に追加3
    array_push($persons, [
        "name" => "Nozawa",
        "age" => 23
    ]);

    print_r($persons);

    $index = mt_rand(0, count($persons) - 1);
    
    echo "name: " . $persons[$index]["name"] . "\n";
    echo "age: " . $persons[$index]["age"] . "\n";
?>