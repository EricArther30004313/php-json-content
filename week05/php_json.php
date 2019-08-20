<?php

  include('Cars.php');

  $json_string = file_get_contents("./cars.json");
  $data = json_decode($json_string, true);

  function displayCars($vehicles)
  {
    $output = "";

    foreach($vehicles as $vehicle)
    {
      $car = new Car($vehicle["make"], $vehicle["model"]);
      $output .= $car->ShowCar();
    }
    
    return $output;
  }

  echo displayCars($data);