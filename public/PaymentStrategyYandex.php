<?php


class PaymentStrategyYandex implements IPayment
{
    private $markup = MARKUP_YANDEX;

    public function payingMethod(float $sum, int $phone)
    {
        $sum = $sum * $this->markup;
        echo "Платёж Yandex на сумму: $sum рублей пользователя с телефоном: $phone выполнен".PHP_EOL;
    }
}