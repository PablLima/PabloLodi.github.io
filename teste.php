<?php
require_once ("classes/Animal.php");
$pet = new Animal;
print $pet->query('select * from animal;');

 ?>
