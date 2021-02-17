<?php
class Animal {
  var $mammal = true;
  var $name = 'animal';

  function __construct($name = 'Animal', $mammal = true) {
    $this->name = $name;
  }

  function makeNoise() {
    echo 'angry '.$this->name.' noises';
  }

  function run() {
    echo 'run like an animal';
  }
}

class Dog extends Animal {
  function __construct() {
    parent::__construct('Dog', true);
  }

  function run() {
    echo 'run like a dog';
  }
}

$animal = new Animal();
echo $animal->makeNoise().'<br>';
echo $animal->run().'<br>';

$animal = new Dog();
echo $animal->makeNoise().'<br>';
echo $animal->run().'<br>';
?>
