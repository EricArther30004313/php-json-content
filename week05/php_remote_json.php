<?php

  //No Different, but moved the json url into the function

  include('Cars.php');

  function displayCars($url)
  {
    $json_string = file_get_contents($url);
    $data = json_decode($json_string, true);

    $output = "";

    foreach($data as $vehicle)
    {
      $car = new Car($vehicle["make"], $vehicle["model"]);
      $output .= $car->ShowCar();
    }
    
    return $output;
  }

  echo displayCars("https://gist.githubusercontent.com/to-jk11/8065f886e5540f0b861b28f2b4006593/raw/7de49fc59a10b59f96e918dd0f3336e980087ce6/cars.json");