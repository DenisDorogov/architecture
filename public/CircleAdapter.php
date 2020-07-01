<?php


class CircleAdapter
{
    private $circle;
    public function __construct(CircleAreaLib $circle)
    {
        $this->circle = $circle;
    }

    function circleArea(float $perimeter)
    {
        $diagonal = $perimeter/M_PI;
        echo "diam = $diagonal <br>";
        return $this->circle->getCircleArea($diagonal);
    }

}