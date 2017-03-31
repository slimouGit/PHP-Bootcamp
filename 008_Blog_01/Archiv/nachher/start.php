<?php

function autoload($className)
{
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}
spl_autoload_register("autoload");


$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');


?>
