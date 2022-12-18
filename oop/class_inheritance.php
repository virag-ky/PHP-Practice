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
}

$u = new User;
$u->first_name = "John";
$u->last_name = "Doe";
$u->username = "JDoe";

$c = new Customer;
$c->first_name = "Jane";
$c->last_name = "Doe";
$c->username = "JaneD";

echo $u->full_name() . "<br/>";
echo $c->full_name() . "<br/>";

echo get_parent_class($u) . "<br/>";
echo get_parent_class($c) . "<br/>";

if(is_subclass_of($c, 'User')) {
  echo "Instance is a subclass of User. <br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br/>";
?>
