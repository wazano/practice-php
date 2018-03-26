<?php

class Queue {

    private $list = [];

    public function enqueue($v) {
        array_push($this->list, $v);
    }

    public function dequeue() {
        return array_shift($this->list);
    }

    public function length() {
        return count($this->list);
    }
}

?>