<?php

class User {
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

$user1 = new User("Maisy", "maisy@gmail.com", "12345");

echo $user1->get_name(); //Maisy
echo $user1->email; // maisy@gmail.com

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$employee1 = new Employee("Jane", "jane@gmail.com", "6789", "Manager");

echo $employee1->get_title();
