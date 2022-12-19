<?php

use Bicycle as GlobalBicycle;
use Unicycle as GlobalUnicycle;

class Bicycle {
  public static $instance_count = 0;

  public static function create() {
    $class_name = get_called_class();
    $obj = new $class_name();

    self::$instance_count++;
    return $obj;
  }

  public $brand;
  public $model;
  public $year;
  public $category;
  public $description;
  private $weight_kg = 0.0;
  protected $wheels = 2;
  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

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

  public static function wheel_details() {
    $wheel_str = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
    return "It has {$wheel_str}.";
  }
}

class Unicycle extends Bicycle {
  protected static $wheels = 1;

}

$bike1 = new Bicycle;
$bike1->brand = 'Mountain';
$bike1->model = 'X';
$bike1->year = '2022';

$bike1 = new Unicycle;
$bike1->brand = 'Road';
$bike1->model = 'Y';
$bike1->year = '2018';

echo 'Bicycle count: ' . GlobalBicycle::$instance_count . "<br/>";
echo 'Unicycle count: ' . GlobalUnicycle::$instance_count . "<br/>";

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: ' . GlobalBicycle::$instance_count . "<br/>";
echo 'Unicycle count: ' . GlobalUnicycle::$instance_count . "<br/>";

$bike1->category = Bicycle::CATEGORIES[0];
echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . "<br/>";
echo $bike1->category;


?>