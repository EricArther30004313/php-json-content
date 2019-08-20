<?php

  include('./Cars.php');

  $make = $_POST['make'];
  $model1 = $_POST['model1'];
  $model2 = $_POST['model2'];
  $model3 = $_POST['model3'];
  $model4 = $_POST['model4'];
  $model5 = $_POST['model5'];

  // Load Current Data
  function LoadCurrentData() {
    $json_string = file_get_contents("./cars.json");
    
    return json_decode($json_string, true);
  }

  function AddCarToCollection($_data, $make, $model1, $model2, $model3, $model4, $model5) {

    // Create new object
    $car = new Car($make, [
      "one" => $model1, 
      "two" => $model2,
      "three" => $model3,
      "four" => $model4,
      "five" => $model5]);

      // Add object to array
      array_push($_data, json_decode($car->AddCar(), true));

      return $_data;
  }

  function write2JSON($file, $string) {
    $fp = fopen($file, 'w');
    fwrite($fp, $string);
    fclose($fp);
  }

  function DisplayAllTheCars() {

    $data = LoadCurrentData();

    $output = "";

    foreach($data as $vehicle)
    {
      $car = new Car($vehicle["make"], $vehicle["model"]);
      $output .= $car->ShowCar();
    }
    
    return $output;
  }

  $newData = AddCarToCollection(LoadCurrentData(), $make, $model1, $model2, $model3, $model4, $model5);

  write2JSON('./cars.json', json_encode($newData));

  echo DisplayAllTheCars();


  
