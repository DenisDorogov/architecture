<?php
include 'const.php';
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});


function test($sum, $phone)
{
    $order = new Order();
    $order->payOrder(new PaymentStrategyQiwi(),$sum, $phone);
    $order->payOrder(new PaymentStrategyYandex(),$sum, $phone);
    $order->payOrder(new PaymentStrategyWebMoney(),$sum, $phone);
}

test(100, 89042344321);
