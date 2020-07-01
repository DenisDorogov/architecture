<?php
class CircleAreaLib
{
    public function getCircleArea(float $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;

   return $area;
}
}

class SquareAreaLib
{
    public function getSquareArea(float $diagonal)
    {
        $area = ($diagonal**2)/2;
        echo "area = $area <br>";
        return $area;
    }
}
