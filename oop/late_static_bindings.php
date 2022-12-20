<?php

class Pet {
  protected static $identity = 'Pet class';

  public static function identity_test() {
    echo 'self: ' . self::$identity . "<br />";
    echo 'static: ' . static::$identity . "<br />";

    echo 'get_class: ' . get_class() . "<br />";
    echo 'get_called_class: ' . get_called_class() . "<br />";
  }
}

class Dog extends Pet {
  protected static $identity = 'Dog class';
}

Pet::identity_test();
echo "<hr/>";
Dog::identity_test();

?>