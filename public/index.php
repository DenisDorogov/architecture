<?php
require ('library/library.php');
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

// 1 задание.
//$text = "Собрание в 9:00";
//$notification = new Message($text);
//$notification = new MessageEmail($notification);
//$notification = new MessageTelegram($notification);
//$notification = new MessageWhatsApp($notification);
//$notification->sendMessage();


// 2 задание.
echo "Квадрат ------<br>";
$sideSquare = 1;
$squareAdapter = new SquareAdapter(new SquareAreaLib());
echo "a = $sideSquare <br>";
echo "S = {$squareAdapter->squareArea($sideSquare)} <br>";
echo "Круг ----------<br>";
$perimeter = 3.14;
$circleAdapter = new CircleAdapter(new CircleAreaLib());
echo "P = $perimeter <br>";
echo "S circle = {$circleAdapter->circleArea($perimeter)} <br>";


