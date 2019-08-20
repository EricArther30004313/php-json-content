<?php

  include('Cars.php');

  $car1 = new Car("Toyota", [
    "one" => "Corolla", 
    "two" => "Hilux",
    "three" => "Prius",
    "four" => "Camry",
    "five" => "Yaris"]);

  $car2 = new Car("Ford", [
    "one" => "XR6", 
    "two" => "XR8",
    "three" => "Mustang",
    "four" => "Focus",
    "five" => "Mondeo"]);

  $car3 = new Car("Honda", [
    "one" => "Civic", 
    "two" => "Legend",
    "three" => "Accord",
    "four" => "S2000",
    "five" => "CRV"]);

  $car4 = new Car("Holden", [
    "one" => "Commodore", 
    "two" => "Benina",
    "three" => "sdlakfjsadl",
    "four" => "ldsajfladjslf",
    "five" => "CRdslkflsaflV"]);

  $cars = [$car1, $car2, $car3, $car4];

  function displayCars($vehicles)
  {
    $output = "";

    foreach($vehicles as $vehicle)
    {
      $output .= $vehicle->ShowCar();
    }
    
    return $output;
  }

  echo displayCars($cars);