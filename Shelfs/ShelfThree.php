<?php


namespace Shelfs;

require_once 'Shelfs\Shelf.php';

class ShelfThree extends \Shelfs\Shelf
{
    public function getDrinkCount()
    {
        return $this->drinkCount;
    }
}