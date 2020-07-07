<?php


class PaymentStrategyQiwi implements IPayment
{
    private $markup = MARKUP_QIWI;

    public function payingMethod(float $sum, int $phone)
    {
        $sum = $sum * $this->markup;
        echo "Платёж Qiwi на сумму: $sum рублей пользователя с телефоном: $phone выполнен".PHP_EOL;
    }
}