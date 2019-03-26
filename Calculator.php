<?php

class Calculator {
    private $a;
    private $b;
    private $memory;

    public function setFirstNum($a) {
        $this->a = (int)$a;
    }

    public function setSecondNum($b) {
        $this->b = (int)$b;
    }

    public function getFirstNum() {
        return $this->a;
    }

   public function getSecondNum() {
        return $this->b;
    }

    public function setMemory($memory) {
        $this->memory = (int)$memory;
    }

    public function getMemory() {
        return $this->memory;
    }

    public function getSum($a, $b) {
        return $a + $b;
    }

    public function getMin($a, $b) {
        return $a - $b;
    }

    public function getSquare($a) {
        return sqrt($a);
    }

    public function getDiv($a, $b) {
        if ($b != 0) {
            return $a / $b;
        }
        else {
            return ERROR;
        }
    }

    public function getMultiple($a, $b) {
        return $a * $b;
    }

    public function getPercent($a, $b) {
      return ($a / 100) * $b;
  }

}