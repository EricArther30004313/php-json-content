<?php
  class Car {

    private $_make;
    private $_models;

    public function __construct($make, $models = []) {
      $this->_make = $make;
      $this->_models = $models;
    }

    public function __get($property) {
      if(property_exists($this, $property)) {
        return $this->$property;
      }
    }

    public function AddCar() {
      $obj1["make"] = $this->_make;
      $obj1["model"] = $this->_models;

      return json_encode($obj1);
    }

    public function ShowCar() {

      $output = "<h2>{$this->_make}</h2>";

      $output .= "<ul>";

      foreach($this->_models as $model) {
        $output .= "<li>$model</li>";
      }

      $output .= "</ul>";

      return $output;
    }
  }