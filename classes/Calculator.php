<?php
class Calculator {
  private $n1;
  private $n2;
  private $operators;

  function __construct() {
    $this->n1 = 0;
    $this->n2 = 0;
    $this->operators = array(
      '+' => function ($n1, $n2) { return $n1 + $n2; },
      '-' => function ($n1, $n2) { return $n1 - $n2; },
      '*' => function ($n1, $n2) { return $n1 * $n2; },
      '/' => function ($n1, $n2) { return $n1 / $n2; }
    );
  }

  public function setN1($n1) {
    $this->n1 = $n1;
  }

  public function setN2($n2) {
    $this->n2 = $n2;
  }

  public function calculate($operator) {
    return $this->operators[$operator]($this->n1, $this->n2);
  }
}
?>
