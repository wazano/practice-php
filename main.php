<?php

require_once 'Stack.php';

$stack = new Stack();

$stack->push("panda");
$stack->push("kirin");
$stack->push("tora");

while ($stack->length() > 0) {
    $s = $stack->pop();
    echo "[$s]\n";
}

?>