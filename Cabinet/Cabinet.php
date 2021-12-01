<?php

namespace Cabinet;

require_once 'Cabinet\CabinetVariables.php';

require_once 'Shelfs\ShelfOne.php';
require_once 'Shelfs\ShelfTwo.php';
require_once 'Shelfs\ShelfThree.php';
require_once 'Cabinet\FullVariable.php';


class Cabinet extends CabinetVariables
{
    public function __construct()
    {
        $this->shelfOne = new \Shelfs\ShelfOne();
        $this->shelfTwo = new \Shelfs\ShelfTwo();
        $this->shelfThree = new \Shelfs\ShelfThree();
    }

    private function sumDrinkCount()
    {
        return $this->shelfOne->getDrinkCount()+ $this->shelfTwo->getDrinkCount()+ $this->shelfThree->getDrinkCount();
    }

    public function isFull()
    {
        $sumDrinkCount = $this->sumDrinkCount();
        if($this->drinkCount == $sumDrinkCount) {
            return true;
        }

        return false;
    }

    public function isDoorOpen()
    {
        return $this->doorOpen;
    }

    public function fullStatus()
    {
        $sumDrinkCount = $this->sumDrinkCount();

        if($this->drinkCount == 0) {
            return \Cabinet\FullVariable::EMPTY;
        }else if($this->drinkCount == $sumDrinkCount) {
            return \Cabinet\FullVariable::FULL;
        }

        return \Cabinet\FullVariable::HALF_FULL;
    }

    public function getDrink()
    {
        $drinkCount = $this->drinkCount;
        if($drinkCount > 0) {
            $this->drinkCount = $drinkCount - 1;
        }

    }

    public function putDrink()
    {
        if(!$this->isFull()) {
            $drinkCount = $this->drinkCount;
            $this->drinkCount = $drinkCount + 1;
        }
    }

}