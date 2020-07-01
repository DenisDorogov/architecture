<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$text = "Собрание в 9:00";

$notification = new Message($text);
$notification = new MessageEmail($notification);
$notification = new MessageTelegram($notification);
$notification = new MessageWhatsApp($notification);

$notification->sendMessage();
