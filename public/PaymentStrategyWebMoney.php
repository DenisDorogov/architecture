<?php


class PaymentStrategyWebMoney implements IPayment
{
    private $markup = MARKUP_WEBMONEY;

    public function payingMethod(float $sum, int $phone)
    {
        $sum = $sum * $this->markup;
        echo "Платёж WebMoney на сумму: $sum рублей пользователя с телефоном: $phone выполнен".PHP_EOL;
    }
}