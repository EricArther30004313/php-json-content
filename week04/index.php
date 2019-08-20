<?php

  class Person {

    private $_name;
    private $_age;
    
    public function __construct($n, $a) {
      $this->_name = $n;
      $this->_age = $a;
    }
    public function ShowValues() {
      return "{$this->_name} is {$this->_age} years old...";
    }

  }

  $person1 = new Person("Jeff", 36);

  //var_dump($person1);

  echo $person1->showValues();
