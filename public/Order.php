<?php


class Order
{
    public function payOrder(IPayment $payment, $sum, int $phone) {
        return $payment->payingMethod($sum, $phone);
    }
}