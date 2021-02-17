<?php
class Person {
  var $name;

  function setName($name) {
    $this->name = $name;
  }

  function getName() {
    return $this->name;
  }
}

$person = new Person();
$person->setName('Lakshamana');

echo $person->getName();
?>
