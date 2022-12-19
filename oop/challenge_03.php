<?php

class Bicycle {
  public $brand;
  public $model;
  public $year;
  public $description;
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name() {
    return "This is a {$this->brand} bicycle, model: {$this->model}, {$this->year}.";
  }

  public function set_weight_kg($weight) {
    $this->weight_kg = $weight;
  }

  public function get_weight_kg() {
    return $this->weight_kg . "kg";
  }

  public function weight_lbs() {
    $pound = 2.2046226218;
    return $this->weight_kg * $pound . "lbs";
  }

  public function set_weight_lbs($lbs) {
    $kilogramm = 0.453592;
    $this->weight_kg = $kilogramm * $lbs;
    return $this->weight_kg;
  }

  public function wheel_details() {
    $wheel_str = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has {$wheel_str}.";
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;

}

$bike1 = new Bicycle;
$bike1->brand = 'Mountain';
$bike1->model = 'X';
$bike1->year = '2022';
echo $bike1->name() . "<br/>";

$bike1->set_weight_kg(23);
echo $bike1->get_weight_kg() . "<br/>";
echo $bike1->wheel_details();

?>