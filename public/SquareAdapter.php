<?php


class SquareAdapter implements ISquare
{
    private $square;
    public function __construct(SquareAreaLib $square)
    {
        $this->square = $square;
    }

    function squareArea(float $sideSquare)
    {
        $diagonal = sqrt($sideSquare**2*2);
        echo "diag = $diagonal <br>";
        return $this->square->getSquareArea($diagonal);
    }

}