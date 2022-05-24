<?php namespace phptests\Task12;

class MyCalculator {
    private $a, $b;
    public function __construct( $a, $b ) {
    $this->a = $a;
    $this->b = $b;
    }
    public function add() {
    return $this->a + $this->b;
    }
    
    
    public function subtract() {
    return $this->a - $this->b;
    }
    
    
    public function multiply() {
    return $this->a * $this->b;
    }
    
    
    public function divide() {
    return $this->a / $this->b;
    }
    }

?>