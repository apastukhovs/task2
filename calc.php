<?php

class Calculator {
    private $a;
    private $b;

    public function getA($a) {
        return $this->a =(int)$a;
    }

    public function setA($a) {
        $this->a =(int)$a;
    }

    public function getB($b) {
        return $this->b =(int)$b;
    }

    public function setB($b) {
        $this->b =(int)$b;
    }

    function getSum($a, $b) {
        return $a + $b;
    }

    function getMin($a, $b) {
        return $a - $b;
    }

    function getSquare($a) {
        return sqrt($a);
    }
}