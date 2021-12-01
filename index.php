<?php
require_once 'Cabinet\Cabinet.php';

$cabinet = new Cabinet\Cabinet();

$cabinet->putDrink();
$cabinet->putDrink();
$cabinet->putDrink();

echo $cabinet->drinkCount;

echo $cabinet->fullStatus();

$cabinet->getDrink();

echo $cabinet->drinkCount;
