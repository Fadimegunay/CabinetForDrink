<?php

namespace Shelfs;

require_once 'Shelfs\Shelf.php';

class ShelfOne extends \Shelfs\Shelf
{

    public function getDrinkCount()
    {
        return $this->drinkCount;
    }
}