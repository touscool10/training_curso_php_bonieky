<?php

namespace operacao\matematica;

// total 20

/* $calc = new Calculadora();

$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: " . $calc->total();

$calc->clear();

 */

class Calculadora {

    public $total = 0;

    public function add($n) {
        $this->total = $this->total + $n;
    }
    public function sub($n) {
        $this->total = $this->total - $n;
    }
    public function multiply($n) {
        $this->total = $this->total * $n;
    }
    public function divide($n) {
        $this->total = $this->total / $n;
    }
    public function clear() {
        $this->total = 0;
    }

    public function total() {
        return $this->total ;
    }

}


