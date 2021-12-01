<?php


namespace Shelfs;

require_once 'Interfaces\Drink.php';

abstract class Shelf implements \Interfaces\Drink
{
    public $drinkCount = 20;
}