<?php


interface IPayment
{
    public function payingMethod(float $sum, int $phone);
}