<?php

  include('Cars.php');

  $json_string = file_get_contents("./cars.json");
  $data = json_decode($json_string, true);

  $car1 = new Car("Tesla", [
    "one" => "Model S", 
    "two" => "Model Y",
    "three" => "Model 3",
    "four" => "Model X",
    "five" => "Semi"]);

  array_push($data, json_decode($car1->AddCar()));

  write2JSON('./cars.json', json_encode($data));

  echo "Added Car";
  
  function write2JSON($file, $string) {
    $fp = fopen($file, 'w');
    fwrite($fp, $string);
    fclose($fp);
  }