<?php

class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name() {
    return "This is a {$this->brand} bicycle, model: {$this->model}, {$this->year}.";
  }

  function weight_lbs() {
    $pound = 2.2046226218;
    return $this->weight_kg * $pound;
  }

  function set_weight_lbs($lbs) {
    $kilogramm = 0.453592;
    $this->weight_kg = $kilogramm * $lbs;
    return $this->weight_kg;
  }
}

$bike1 = new Bicycle;
$bike1->brand = 'Mountain';
$bike1->model = 'X';
$bike1->year = '2022';
echo $bike1->name() . "<br/>";

echo $bike1->set_weight_lbs(45) . "<br/>";
echo $bike1->weight_kg;

?>