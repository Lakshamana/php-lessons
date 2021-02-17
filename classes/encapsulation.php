<?php
class Vehicle {
  private $board;
  private $color;
  private $type;

  function __construct() {
    $this->board = '';
    $this->color = '';
    $this->type = '';
  }

  function __destruct() {
    $this->board = '';
  }

  function getBoard() {
    return $this->board;
  }

  function setBoard($board) {
    $this->board = $board;
  }

  function getColor() {
    return $this->color;
  }

  function setColor($color) {
    $this->color = $color;
  }

  function getType() {
    return $this->type;
  }

  function setType($type) {
    $this->type = $type;
  }
}

$vehicle = new Vehicle();
$vehicle->setBoard('Fiat 147');
$vehicle->setType('Hatch');
$vehicle->setColor('Blue');

echo $vehicle->getBoard().'<br>';
echo $vehicle->getType().'<br>';
echo $vehicle->getColor().'<br>';
?>
