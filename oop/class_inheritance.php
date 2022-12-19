<?php

class User {

  public $first_name;
  public $last_name;
  public $username;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends User {

  public $city;
  public $state;
  public $country;

  function location() {
    return $this->city . ", " . $this->state . ", " . $this->country;
  }
}

$u = new User;
$u->first_name = "John";
$u->last_name = "Doe";
$u->username = "JDoe";

$c = new Customer;
$c->first_name = "Jane";
$c->last_name = "Doe";
$c->username = "JaneD";
$c->city = "New York";
$c->state = "New York";
$c->country = "US";

echo $u->full_name() . "<br/>";
echo $c->full_name() . "<br/>";
echo $c->location() . "<br/>";

echo get_parent_class($u) . "<br/>";
echo get_parent_class($c) . "<br/>";

if(is_subclass_of($c, 'User')) {
  echo "Instance is a subclass of User. <br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br/>";
?>
