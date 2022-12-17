<?php

$file = "extras/users.txt";

if (file_exists($file)) {
  $handle_file = fopen($file, 'r');
  $contents = fread($handle_file, filesize($file));
  fclose($handle_file);
  echo $contents;
} else {
  $handle_file = fopen($file, 'w');
  $contents = "Jane" . PHP_EOL . "John" . PHP_EOL . "Bob";
  fwrite($handle_file, $contents);
  fclose($handle_file);
}

