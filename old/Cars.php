<?php
  class Car {

    private $_make;
    private $_models;

    public function __construct($make, $models = []) {
      $this->_make = $make;
      $this->_models = $models;
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