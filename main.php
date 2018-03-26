<?php
require_once 'Queue.php';

//キューにデータを追加
$q = new Queue();
$q->enqueue("Panda");
$q->enqueue("Tiger");
$q->enqueue("Bird");

print_r($q);

//キューのデータを全て表示
while ($q->length() > 0) {
    $e = $q->dequeue();
    echo "[$e]\n";
}

?>