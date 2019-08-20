<?php
$cars = [
  [ "make" => "Toyota", 
    "model" => [
      "one" => "Corolla", 
      "two" => "Hilux",
      "three" => "Prius",
      "four" => "Camry",
      "five" => "Yaris"
    ]
  ],
  [ "make" => "Ford", 
    "model" => [
      "one" => "XR6", 
      "two" => "XR8",
      "three" => "Mustang",
      "four" => "Focus",
      "five" => "Mondeo"
    ]
  ],
  ["make" => "Honda", "model" => [
  "one" => "Civic", 
  "two" => "Legend",
  "three" => "Accord",
  "four" => "S2000",
  "five" => "CRV"
    ]
  ],
];
function makes($vehicles)
{
  $output = "";
  foreach($vehicles as $vehicle)
  {
    $output .= "<h2>".$vehicle["make"]."</h2>";
    $output .= cars($vehicle["model"]);
  }
  
  return $output;
}
function cars($models)
{
  $output = "<ul>";
  foreach($models as $model)
  {
    $output .= "<li>".$model."</li>";
  }
  $output .= "</ul>";
  
  return $output;
}
echo makes($cars);