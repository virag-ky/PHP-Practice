<?php

class User {

  public $first_name;
  public $last_name;
  public $username;

  protected $registration_id;
  private $tuition = 0.00;

  public function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

  public function hello_world() {
    return "Hello World!";
  }

  protected function hello_family() {
    return "Hello Family!";
  }

  private function hello_me() {
    return "Hello Me!";
  }

}

class Customer extends User {

  public $city;
  public $state;
  public $country;

  public function location() {
    return $this->city . ", " . $this->state . ", " . $this->country;
  }
}

class PartTimeUser extends User {
  public function hello_parent() {
    return $this->hello_family();
  }
}

$u = new User;
$u->first_name = "John";
$u->last_name = "Doe";
$u->username = "JDoe";
// echo $u->hello_family() . "<br/>";
// echo $u->hello_me() . "<br/>";

// $c = new PartTimeUser;
// echo $c->hello_parent();

?>