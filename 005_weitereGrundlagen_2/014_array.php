<?php

$warenkorb = array(
    "Banana",
    "Birne",
    "Banane",
);

echo count($warenkorb);

$warenkorb[] = "Ananans";
echo "<br/>";

array_unshift($warenkorb, "Kiwi");
var_dump($warenkorb);

echo "<br/>";

echo count($warenkorb);

echo "<br/>";

var_dump(array_shift($warenkorb));
echo "<br/>";
var_dump(array_pop($warenkorb));
echo "<br/>";
var_dump($warenkorb);

?>